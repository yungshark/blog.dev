<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	public static $rules = [
		'first_name' => 'required',
		'last_name'  => 'required',
		'email'      => 'required',
		'password'   => 'required',
		];

	public static $loginRules = [
		'email'    => 'required',
		'password' => 'required',
		];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	public function setPasswordAttribute($value)
	{
		$this->attributes['password'] = Hash::make($value);
	}

}
