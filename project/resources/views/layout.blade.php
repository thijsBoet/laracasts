<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/app.css">
  <style>
    .is-complete {
      text-decoration: line-through;
    }
    li {
      list-style-type: circle;
    }
  </style>
  <title>@yield('title')</title>
</head>
<body>
  
  <div class="container">
    @yield('content')
  </div>

</body>
</html>