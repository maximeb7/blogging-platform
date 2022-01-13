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
     * Retrieve all the posts available
     */
    public function index()
    {
        $all_posts = Post::orderBy('created_at', 'DESC')->paginate(6);
        // dd($all_posts);

        // dd($all_posts->toArray());

        //return view("home")->with('array_posts' , $all_posts->toArray());

        return view('home', ['array_posts' => $all_posts]);
        // return view('home', array('all_posts' => (array)$all_posts));

    }

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

        //create new post

        Post::create([
            'title' => $request->get('title'),
            'user_id' => $author->id,
            'user_name' => $author->slug_name,
            'post_content' => $request->get('post_content')
        ]);

        //return Redirect::to('/dashboard')->with('success','The post "'.$request->get('title').'" has been created !');
        return view('dashboard', array('success' => 'The post "'.$request->get('title').'" has been created !'));
       //return new JsonResponse([],200);
    }
}
