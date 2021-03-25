<?php

namespace App\Http\Controllers;
use App\Helper as AppHelper;
use Illuminate\Http\Request;
// use App\Helper;
use App\Models\Comment;
class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $helper = new AppHelper();
        $comment = Comment::all();
        return $helper->foundResponse($comment);
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
        $comment = Comment::create($request->all());
        return $helper->foundResponse($comment);
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
        $comment = Comment::find($id);
        if (!$comment) {
            return $helper->notFoundResponse("Comment Not found");
        }
        return $helper->foundResponse($comment);
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
        $comment = Comment::find($id);
        $helper = new AppHelper();
        if (!$comment) {
            return $helper->notFoundResponse("Comment Not found");
        }
        $comment->update($request->all());
        return $helper->foundResponse($comment);
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
        $comment = Comment::destroy($id);
        if (!$comment) {
            return $helper->notFoundResponse("Comment Not found");
        }
        return $comment;
    }
}
