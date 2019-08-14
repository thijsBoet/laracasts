<?php

# One level of Indentation per Method

class BankAccounts {

  protected $accounts;

  function __construct($accounts) {
    $this->accounts = $accounts;
  }

  public function filterBy($accountType)
  {
    // TO MANY INDENTATIONS
    $filtered = [];

    // 0
    // foreach ($this->accounts as $account)
    // {
      // 1
      // if($account->type() == $accountType)
      // {
        // 2
        // if($account->isActive())
        // {
          // 3
    //       $filtered[] = $account;
    //     }
    //   }
    // }
    // 1) Zone in on nested foreach statements and conditions

    // 2) Work form inside out

    foreach ($this->accounts as $account)
    {
      // If the account of the type that was
      if($account->type() == $accountType && $account->isActive())
      {
        $filtered[] = $account;
      }
    }

    return $filtered;
  }
}

class Account {

  protected $type;

  private function __construct($type) {
    $this->type = $type;
  }

  public static function open($type)
  {
    return new static($type);
  }

  public function type()
  {
    return $this->type;
  }

  public function isActive()
  {
    return true;
  }

}

$accounts = [
  Account::open('checking'),
  Account::open('savings'),
  Account::open('checking'),
  Account::open('savings'),
  Account::open('checking'),
];

$accounts = new BankAccounts($accounts);

$savings = $accounts->filterBy('savings');

var_dump($savings);