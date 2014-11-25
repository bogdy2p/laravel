<?php

class SessionsController extends BaseController {

    public function index(){
        return Redirect::route('users.index');
    }
    
    public function create() {

        if (Auth::check()) 
            return Redirect::to('/');
        
        
       return View::make('sessions.create');
    }

    public function store() {

        $username = Input::get('user_mail');
        $email = Input::get('user_mail');
        $password = Input::get('password');

        if (Auth::attempt(['username' => $username, 'password' => $password])) {
            Auth::user();
            return Redirect::to('/');
            
        }
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            Auth::user();
            return Redirect::to('/');
        }

        return Redirect::to('login');
    }

    public function destroy() {
        Auth::logout();
        return View::make('site.index');
    }

}
