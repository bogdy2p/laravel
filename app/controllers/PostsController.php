<?php


class PostsController extends BaseController {
    

    public function index() {
        
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