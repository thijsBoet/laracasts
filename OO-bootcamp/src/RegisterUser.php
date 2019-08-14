<?php namespace Acne;
	
class RegisterUser {
	
	public function execute(array $data, RespondsToUserRegistration $listener)
	{
		var_dump('Register the user');
		
		$listener->userRegisteredSuccessfully();
	}
}