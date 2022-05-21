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
       {{-- <a href="edit-project/{{ $table_data['id'] }}" class="create">Back</a> --}}
        <h2>Edit Project</h2>
        <form action="edit-project" method="post">
           @csrf
           <p>
               <input type="hidden" name="id" value="{{ $table_data['id'] }}">
            </p>
            <p class="form-group">
                <input type="text" name="proj_name" value="{{ $table_data['proj_name'] }}">
                <span style="color:red">@error('proj_name'){{ $message }}@enderror</span>
            </p>
            <p class="form-group">
                <textarea name="proj_des" name="proj_des">{{ $table_data['proj_des'] }}</textarea>
                <span style="color:red">@error('proj_des'){{ $message }}@enderror</span>
            </p>
            <p class="form-group btn">
                <button type="submit">Update</button>
            </p>
        </form>
    </div>
</body>
</html>