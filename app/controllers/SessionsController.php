<?php

class SessionsController extends BaseController {

    public function index(){
        return Redirect::route('users.index');
    }
    
    
    public function create() {

        if (Auth::check()) {
            return Redirect::route('sessions.store');
        }
        
       return View::make('sessions.create');
    }

    public function store() {

        $username = Input::get('user_mail');
        $email = Input::get('user_mail');
        $password = Input::get('password');

        if (Auth::attempt(['username' => $username, 'password' => $password])) {
            return Auth::user();
        }
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            return Auth::user();
        }

        return Redirect::to('sessions.create');
    }

    public function destroy() {
        Auth::logout();
        return Redirect::route('sessions.create');
    }

}
