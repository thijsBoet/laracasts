<?php

class ChargeRejected extends Exception{
  
}

class NotEnoughFunds extends Exception{
  
}

class User {
  public function subscribe()
  {
    var_dump('subscribing');
  }
}

function flash($message) { var_dump($message); }
{
  
}

try{
  (new User)->subscribe();
  // Use | operator to ommit seconds catch
} catch (ChargeRejected | NotEnoughFunds $e){
  flash('Failed');
} 
// catch (NotEnoughFunds $e){
//   flash('Failed');
// }