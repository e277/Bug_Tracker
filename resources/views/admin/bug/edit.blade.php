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
       <a href="edit-bug/{{ $bug_table->id }}" class="create">Back</a>
        <h2>Edit Bug Details</h2>
        <form action="edit-bug" method="post">
           @csrf
           <p>
               <input type="hidden" name="id" value="{{ $bug_table['id'] }}">
            </p>
            <p class="form-group">
                <input type="text" name="bug_name" value="{{ $bug_table['bug_name'] }}">
                <span style="color:red">@error('bug_name'){{ $message }}@enderror</span>
            </p>
            <p class="form-group">
                <textarea name="proj_issue">{{ $bug_table['proj_issue'] }}</textarea>
                <span style="color:red">@error('proj_issue'){{ $message }}@enderror</span>
            </p>
            <p class="form-group btn">
                <button type="submit">Update</button>
            </p>
        </form>
    </div>
</body>
</html>