<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    public function __construct(){
    
        $this->middleware('auth')->except('index', 'show');
    }

    public function index()
    {
        $posts = Post::all(); 
        return view('post.index', ['posts'=>$posts]);
    }

    public function create()
    {
        return view('post.create');
    }

    public function store(PostRequest $request)
    {

        $post = new Post;
        $post->title = $request->post('title');
        $post->content = $request->post('content');
        $post->save();
        return redirect()->to(route('post.index'));
        
    }

    public function show($id)
    {
        $post = Post::find($id);
        return view('post.show', ['post'=>$post]);    
    }

    public function edit($id)
    {
        $post = Post::find($id);
        return view('post.edit', ['post'=>$post]);
    }

    public function update(PostRequest $request, $id)
    {
        $post = Post::find($id);
        $post->title = $request->post('title');
        $post->content = $request->post('content');
        
        $post->save(); //salva no banco 

        return redirect()->to(route('post.index'));
    }


    public function destroy($id)
    {
        //
    }
}
