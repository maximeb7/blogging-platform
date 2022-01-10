<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create(Request $request)
    {
        dump('create post controller');
        dump($request->all());

        return new JsonResponse([],200);
    }
}
