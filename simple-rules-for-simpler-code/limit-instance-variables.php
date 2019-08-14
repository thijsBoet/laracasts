<?php

// BLOATED USERCONTROLLER WITH TOO MANY INSTANCE VARIABLES OVER TIME

class UserController {

  // INSTANCE VARIABLES ARE INSTANCES OF OBJECTS ON OTHER OBJECTS
  // Try to limit them to a maximum of 4/5
  // Use single responsibility priciple
  // Name them after that single responcibility they serve
  protected $userService;

  // protected $registrationService;    => should be within its own AuthController
  
  // protected $userRepository;         => should be included in Userservice OBJECT

  // protected $stripe;                 => should be included in RegistrationService Object

  // protected $mailer;                 => could be triggered as an eventlisner on the registrationService

  // protected $userEventRepository;    => should be included in Userservice OBJECT

  // protected $logger;                 => could be triggered as an eventlisner on the registrationService
  
  public function __construct(
    UserService $userService,
    Mailer $mailer,
    Logger $logger
  ) {
    
  }
}

class AuthController {

  protected $registrationService;

  public function register(RegistrationService $registrationService)
  {
    $this->registrationservice = $registrationService;
  }
}

class UserService {
  protected $userRepository;
  protected $userEventRepository;

  public function __construct(UserRepository $userRepository, UserEventRepository $userEventRepository)
  {
    $this->userRepository = $userRepository;
    $this->userEventRepository = $userEventRepository;
  }
}