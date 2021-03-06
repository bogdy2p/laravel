<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

    use UserTrait,
        RemindableTrait;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';
    protected $fillable = ['username', 'email', 'password','first_name','last_name','creation_ip'];
    public static $rules = ['email' => 'required', 'username' => 'required', 'password' => 'required'];

    public $error_messages;
    /**
     * The attributes excluded from the model's JSON form.
     * an
     * @var array
     */
    protected $hidden = array('password', 'remember_token');

    
    public function isValid() {
        
        $validation = Validator::make($this->attributes, static::$rules);
        
        if ($validation->passes()) return true;
        
        $this->errors = $validation->messages();
        
        return false;
    }
    
    
}
