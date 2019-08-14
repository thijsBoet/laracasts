<?php

// abtract -> cannot be instanciated in itself
abstract class Provider {
	// abstract function/method must be implemented in subclass instanciation
	abstract protected function getAuthorizationUrl();
}

// needs a subclass for access to abstract class
class FacebookProvider extends Provider {
	protected function getAuthorizationUrl()
	{
		return '';
	}
}


// interface method inforces rules, but doesn't inherit behaviors like abstract class
interface ProviderInterface {
	public function getAuthorizationUrl();
}

class TwitterProvider implements ProviderInterface {
	protected function getAuthorizationUrl()
	{
		return '';
	}
}