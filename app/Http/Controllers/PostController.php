<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Like;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user(); // Get the logged-in user
        

        $posts = Post::all();
        $likes = [];
 
 
        foreach ($posts as $post) {
            $likes[] = Like::where('post_id',$post->id)->where('type', 'like')->count();
         }

       
        return view ('Userinterface.posts.index', compact('posts','likes')) ;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Userinterface.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     public function store(Request $request)
     {
         $request->validate([
             'description' => 'required|max:255',
             'title' => 'required|max:255',
             'image' => 'required|image|mimes:jpeg,png,jpg,gif'
         ]);
     
         $postData = [
             'user_id' => auth()->user()->id, // Set the user_id to the authenticated user's ID
             'description' => $request->input('description'),
             'title' => $request->input('title'),
         ];
     
         if ($request->hasFile('image')) {
             $image = $request->file('image');
             $imageName = time().'.'.$image->getClientOriginalExtension();
             $image->storeAs('logos', $imageName, 'public');
             $postData['image'] = $imageName;
         }
     
         Post::create($postData);
     
         return redirect()->route('post.index')->with('success', 'Post created successfully.');
     }
  
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   
        public function show($postId)
{
    $post = Post::find($postId);
    $likesCount = $post->likes->count();
    $dislikesCount = $post->dislikes->count();
    return view('posts.show', compact('post', 'likesCount', 'dislikesCount'));
}
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('Userinterface.posts.edit', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Post $post ,Request $request)
    {  $data = $request->validate([
        'title' => 'required',
        'description' => 'required',
       
 
    ]);

    $post->update($data);

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
        
        $post = Post::find($id) ;
        if($post){
            $post->delete() ;
        }
      
        return redirect()->back()
            ->with('message','Post deleted successfully') ;
        
       
    }

    public function likePost($postId)
{
    Like::create([
        'user_id' => auth()->user()->id,
        'post_id' => $postId,
        'type' => 'like',
    ]);

    return redirect()->back();
}




}
