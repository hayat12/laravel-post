<?php

namespace App\Http\Controllers;

use App\Helper as AppHelper;
use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(request $req)
    {
        $pageLimit = 3;
        $helper = new AppHelper();
        $post = Post::paginate(2);
        return $helper->foundResponse($post);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $helper = new AppHelper();
        $post = Post::create($request->all());
        return $helper->foundResponse($post);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $helper = new AppHelper();
        $post=Post::find($id);
        if (!$post) {
            return $helper->notFoundResponse("No fount");
        }
        return $helper->foundResponse($post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $helper = new AppHelper();
        $post = Post::find($id);
        $post->update($request->all());
        return $helper->foundResponse($post);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $helper = new AppHelper();
        $post = Post::destroy($id);
        return $helper->foundResponse($post);
    }
}
