<?php 

class AdminController extends \BaseController {

    protected $admin;
    
    public function __construct(Admin $user) {
        
        $this->admin = $user;
    }
    
   
 public function showAdminMenu(){
        return View::make('admin.index');
    }
    
}