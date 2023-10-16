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
/*public function create(Request $request, $postId)
{
    $request->validate([
        'content' => 'required|string|max:255',
    ]);

    // Create a new comment
    Comment::create([
        'content' => $request->input('content'),
        'post_id' => $postId,
        // Assuming you have a 'user_id' column in your comments table,  authenticated user.
      //  'user_id' => auth()->user()->id,
    ]);

    
    return redirect()->back()->with('success', 'Comment created successfully!');
 // Find the post by ID
    $post = Post::find($post_id);

    if (!$post) {
        return redirect()->route('posts.index')->with('error', 'post not found');
    }

    return view('Userinterface.posts.index', ['post' => $post]);
}*/
public function create(Request $request)
{
    // Validate the request
    $request->validate([
        'description' => 'required|max:255',
        'post_id' => 'required|exists:posts,id',
    ]);

    // Create a new comment
    $comment = new Comment();
    $comment->description = $request->input('description');
    $post = Post::find($request->get('post_id'));    // Assuming you have authentication, set user ID here
   // $comment->user_id = auth()->user()->id;
   $post->comments()->save($comment);

    // Return the created comment (or just a success message if you prefer)
    return back();}




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
    return view('Userinterface.posts.editComment', ['comment' => $comment]);
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

    return view('Userinterface.posts.editComment', ['comment' => $comment]);
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

    return redirect()->route('post.index')->with('success', 'comment deleted successfully');
}

}