<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view ('Userinterface.posts.index', compact('posts')) ;
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
            
            'description' => 'required',
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

  
      $postData = [
          
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
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect(route('post.index'))->with('success', 'post deleted Succesffully');
    }
}
