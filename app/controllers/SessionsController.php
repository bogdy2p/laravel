<?php

class SessionsController extends BaseController {

    public function create() {

        if (Auth::check())
            return Redirect::to('/admin');

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

        return Redirect::to('login');
    }

    public function destroy() {
        Auth::logout();

        return Redirect::route('sessions.create');
    }

}
