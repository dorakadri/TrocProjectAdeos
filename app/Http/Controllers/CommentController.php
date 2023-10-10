<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Post;


class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     $posts = Post::with('comments')->get();
    $comments = Comment::with('post')->get();

    return view('Userinterface.posts.index', compact('comments', 'posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
public function create($post_id)
{
    // Find the post by ID
    $post = Post::find($post_id);

    if (!$post) {
        return redirect()->route('posts.index')->with('error', 'post not found');
    }

    return view('Userinterface.posts.create', ['post' => $post]);
}



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
  public function store(Request $request)
{
    $data = $request->validate([
        'description' => 'required',
        'post_id' => 'required|exists:post,id', // Ensure that post_id exists in theposts table
    ]);

    // Create a new Comment record
    $comment= Comment::create($data);

    return redirect(route('Userinterface.posts.index'));
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
 public function edit(Commment $comment)
{
    return view('Userinterface.posts.edit', ['comment' => $comment]);
}
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
 public function update(Commment $comment,Request $request, )
{
    $data = $request->validate([
        'description' => 'required'
      
    ]);

    $comment->update($data);

    return redirect()->route('posts.index')->with('success', 'Comment Updated Successfully');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
 public function destroy($id)
{
    // Find the Comment model by its ID
    $comment = Comment::find($id);

    if (!$comment) {
        return redirect()->route('comment.index')->with('error', 'comment not found');
    }

    // Delete the comment
    $comment->delete();

    return redirect()->route('comment.index')->with('success', 'comment deleted successfully');
}

}