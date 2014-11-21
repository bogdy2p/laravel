<?php

class UsersController extends \BaseController {

    protected $user;
    
    public function __construct(User $user) {
        
        $this->user = $user;
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {

        $users = $this->user->all();
        return View::make('users.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        return View::make('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store() {

        $input = Input::all();
        
        $this->user->fill($input);
        
        if (!$this->user->isValid()){
            return Redirect::back()->withInput()->withErrors($this->user->errors);
        }
        
        $test = $this->user->save();
        dd($test);
        die();

        return Redirect::route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($username) {
        
        $user = $this->user->whereUsername($username)->first();
        return View::make('users.show', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($username) {
        
        $user = $this->user->whereUsername($username)->first();
        return View::make('users.edit',['user' => $user]);
        

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        //
    }

}