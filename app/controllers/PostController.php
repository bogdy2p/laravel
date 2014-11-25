<?php


class PostController extends BaseController {
    

    public function index() {
        $posts = Post::orderBy('id', 'desc');
        return View::make('post.index');
    }

    public function show(Post $post) {
     
     
    }

    public function create() {
     
    }

    public function edit(Post $post) {
        
    }

    
    public function update(Post $post){
        
    }
    
    public function delete(Post $post) {
        $post->delete();
    }
}