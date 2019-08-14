<?php

namespace App\Controllers;

class PagesController
{
  public function home()
  {
    return view('index', compact('users'));
  }

  public function about()
  {
    return view('about');
  }

  public function addName()
  { 
    header('Location: /');
  }

  public function contact()
  {

  }

  public function aboutCulture()
  {
    return view('about-culture');
  }
}