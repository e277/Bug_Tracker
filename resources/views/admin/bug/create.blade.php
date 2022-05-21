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
      <a href="view-bug" class="create">Back</a>
      <h2>Create Bug</h2>
      <form action="create-bug" method="post">
         @csrf
         @if (Session::has('bug-added'))
             <span>{{ Session::get('bug-added') }}</span>
         @endif
         <p class="form-group">
            <select name="id">
               <option value=0>--Select Project ID--</option>
               @foreach ($bug_table as $key => $value)
                  <option value="{{ $key }}">
                     {{ $value }}  
                  </option>
               @endforeach
            </select>
         </p>
         <p class="form-group">
            <input type="text" name="bug_name" placeholder="Enter Bug Name">
            <span style="color: red">@error('bug_name'){{ $message }}@enderror</span>
         </p>
         <p>
            <textarea name="proj_issue" placeholder="Enter Bug Details"></textarea>
            <span style="color: red">@error('proj_issue'){{ $message }}@enderror</span>
         </p>
         <p class="form-group">
            <input type="text" name="developer" placeholder="Enter Developer Name">
            <span style="color: red">@error('developer'){{ $message }}@enderror</span>
         </p>
         <p class="form-group btn">
            <button type="submit">Submit</button>
         </p>
      </form>
   </div>
</body>
</html>