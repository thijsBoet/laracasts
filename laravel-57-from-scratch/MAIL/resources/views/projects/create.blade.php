<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Create a projects</title>
</head>
<body>
  <form method="POST" action="/projects">
    @csrf

    <div><input type="text" placeholder="Project title" name="title"></div>
    <textarea name="description" placeholder="Desctibe your project" cols="30" rows="1"></textarea></div>
    <div><button type="submit">Create Project</button></div>
  </form>
</body>
</html>