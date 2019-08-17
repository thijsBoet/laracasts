<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
    <div class="flex-container">
        <h1>Create a new Project</h1>
        <form method="post" action="/projects">
            {{ csrf_field() }}
            <div>
                <input type="text" name="title" placeholder="Project title">
            </div>
            <div>
                <textarea name="description" placeholder="Project description"></textarea>
            </div>
            <div>
                <button type="submit">Create Project</button>
            </div>
        </form>
    </div>
</body>
</html>
