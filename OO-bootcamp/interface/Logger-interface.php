<?php
	
interface Logger {
	public function execute($message);
}

class LogToFile implements Logger{
	public function execute($message)
	{
		var_dump('Log MSG to File: ' . $message);
	}
}

class LogToDatabase implements Logger{
	public function execute($message)
	{
		var_dump('Log MSG to database: ' . $message);
	}
}

// ...


class UserController {
	
	protected $logger;
	
	public function __construct(Logger $logger)
	{
		$this->logger = $logger;
	}
	
	public function show()
	{
		$user = 'John Doe';
		
		$this->logger->execute($user);
	}
}

$controller = new UserController(new LogToDatabase);

$controller->show();