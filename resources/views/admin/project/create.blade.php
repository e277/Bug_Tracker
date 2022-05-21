<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Document</title>
   <link rel="stylesheet" href="/css/form.css">
   <link rel="stylesheet" href="/css/table.css">
</head>
<body>
   @extends('layouts.app')
   @include('layouts.admin-sidebar')

    <div class="form-box">
        @if (Session::has('project-added'))
        <span style="background-color: blue; color: white;">{{ Session::get('project-added') }}</span>
        @endif
        <a href="view-project" class="create">Back</a>
        <h2>Create Project</h2>
        <form action="create-project" method="post">
            @csrf
            <p class="form-group">
                <input type="text" name="proj_name" placeholder="Project Name">
                <span style="color:red">@error('proj_name'){{ $message }}@enderror</span>
            </p>
            <p class="form-group">
                <textarea name="proj_des" placeholder="Project Description"></textarea>
                <span style="color:red">@error('proj_des'){{ $message }}@enderror</span>
            </p>
            <p class="form-group btn">
                <button type="submit">Submit</button>
            </p>
        </form>
    </div>
</body>
</html>