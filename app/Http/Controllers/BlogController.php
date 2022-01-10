<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function create(Request $request)
    {
        dump('create');

        return new JsonResponse([],200);
    }
}
