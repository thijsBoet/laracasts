<?php
	
class AuthController implements RespondsToUserRegistration{
	
	protected $registration;
	
	// constructor injection RegisterUser for multiple instances
	public function __contruct(RegisterUser $registration)
	{
		$this->$registration = $registration;	
	}
	
	// method injection RegisterUser for single instance
	// public function register(RegisterUser $registration)
	// {
	// 	$registration->execute();
	// }
	public function register()
	{
		$this->registration->execute([], $this);
	}
	
	public function userRegisteredSuccessfully()
	{
		var_dump('registered successully , redirect succes page');
	}
	
	public function userRegisteredFailed()
	{
		var_dump('registration failed , prompt error msg, redirect registration page');
	}
}