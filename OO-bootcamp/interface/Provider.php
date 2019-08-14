<?php
	
interface Provider{
	public function authorize();
}
	
function login(Provider $provider)
{
	$provider->autorize();
}