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
public function create(Request $request, Post $post)
{
    $request->validate([
        'descriptioon' => 'required|max:255',
    ]);

    $comment = new Comment();
    $comment->description = $request->input('description');
    $comment->post_id = $post->id; // Associate the comment with the post
    $comment->save();

    return redirect()->route('post.index', ['post' => $post->id])->with('success', 'Comment added successfully!');
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
        'post_id' => 'required', // Ensure that post_id exists in theposts table
    ]);
    // Add the authenticated user's ID to the data array
    $data['user_id'] = auth()->user()->id;

    // Create a new Comment record
    $comment= Comment::create($data);

    return redirect(route('post.index'));
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
 public function edit(String $comment)
{
    $comment2= Comment::find($comment);
    return view('Userinterface.posts.editComment', ['comment' => $comment2]);
}
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
 public function update(Request $request, String $comment )
{
   // dd($comment);
   $comment2= Comment::find($comment);
    $data = $request->validate([
        'description' => 'required'
      
    ]);

    $comment2->update($data);

    return redirect(route('post.index'))->with('success', 'post Updated Succesffully');
}
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy(string $id)
    {
        
        $comment = Comment::find($id) ;
        if($comment){
            $comment->delete() ;
        }
      
        return redirect()->back()
            ->with('message','comment deleted successfully') ;
        
    }    

}