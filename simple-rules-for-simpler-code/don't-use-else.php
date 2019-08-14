<?php

public function store()
{
  $input = Request::all();
  $validation = Validator::make($input, ['username' => 'required']);

  if (date('l') !== 'Friday') // Could use == Friday to eliminate else
  {
    if($validation->passes()) // use fail statements first
    {
      Post::create($input);

      return Redirect::home();
    }
    
    else  // else statement is redundant due to return statement if conditional
    {
      return Redirect::back()->withInput()->withErrors($validation);
    }
  }
  else
  {
    throw new Exception('We dont work on Fridays!');
  }
}

// Refactored without else statements, defencive programming and return statements
public function storeBetter()
{
  $input = Request::all();
  $validation = Validator::make($input, ['username' => 'required']);

  if (date('l') == 'Friday') {
      throw new Exception('We dont work on Fridays!');
  }

  if($validation->passes())
  {
    return Redirect::back()->withInput()->withErrors($validation);
  }

  Post::create($input);

  return Redirect::home();
}


function signUp($subscription)      // Could be an interface
{
  if($subscription == 'monthly')    // Could be its own subscription class
  {
    $this->createMonthlySubscription; 
  }
  elseif($subscription == 'yearly') // Could be its own subscription class
  {
    $this->createYearlySubscription;
  }
}


function getSubscriptionType(Subscription $subscription)
{
  $subscription->create();
}

function factoryMethod($type)
{
  if($type == 'forever')
  {
    return new MonthlySubscription;
  }

  return new YearlySubscription;
}

$subscription = getSubscriptionType($type);

signUp($subscription);