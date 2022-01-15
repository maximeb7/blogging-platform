<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\User;
use Spatie\QueryBuilder\QueryBuilder;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{

    /**
     * index display all users posts
     *
     * @return void
     */
    public function index()
    {
        $all_posts = Post::orderBy('created_at', 'DESC')->paginate(6);

        return view('home', ['array_posts' => $all_posts]);
    }


    /**
     * show a post
     *
     * @param  mixed $request
     * @return void
     */
    public function show(Request $request)
    {
        $url_slugs = explode('/',$request->getPathInfo());
        $user_name = $url_slugs[1];
        $slug_title = $url_slugs[2];

        $post = Post::where([
            ['user_name','=',$user_name],
            ['slug_title','=',$slug_title]
        ])->first();

        return view('view-post', ['post' => $post] );
    }
    /**
     * Create a new post
     *
     * @param  mixed $request
     * @return void
     */
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:50',
            'post_content' => 'required',
            'author' => 'required',
        ]);

        if ($validator->fails()) {
            return new JsonResponse(['a required field is missing'],400);
        }

        $author = User::findOrFail($request->get('author'));

        Post::create([
            'title' => $request->get('title'),
            'user_id' => $author->id,
            'user_name' => $author->slug_name,
            'post_content' => $request->get('post_content')
        ]);

        return view('dashboard', array('success' => 'The post "'.$request->get('title').'" has been created !'));
    }



    /**
     * Get All user's posts
     *
     * @param  mixed $username
     * @return void
     */
    public function getUserPost($username)
    {

        $user_posts = Post::where('user_name','=',$username)->orderBy('created_at','DESC')->paginate(3);

        if($user_posts->isNotEmpty())
        {
            return view('user-posts', ['array_posts' => $user_posts, 'user_name' => ucfirst($username)]);
        }

    }


    /**
     * Delete a posy
     *
     * @param  mixed $id
     * @return void
     */
    public function delete($id)
    {
        $post = Post::find($id);
        $post->delete();

        return redirect('/');
    }

    /**
     * editView
     *
     * @param  mixed $username
     * @param  mixed $slug_post
     * @return void
     */
    public function editView($username, $slug_post)
    {
        $post = Post::where([
            ['user_name','=', $username],
            ['slug_title','=', $slug_post]
        ])->first();

        return view('edit-post', ['post' => $post]);
    }

    public function update(Request $request, $id)
    {
        // dump(explode('/',$request->getPathInfo()));

        // dd($request->getPathInfo());

        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:50',
            'post_content' => 'required',
            'author' => 'required',
        ]);

        $post = Post::find($id);
        $post->title = $request->get('title');
        $post->post_content = $request->get('post_content');
        $post->save();

        return redirect()->route('post.see',['username'=> $post->user_name, 'slug_post' => $post->slug_title]);
        dd('update method');

    }
}
