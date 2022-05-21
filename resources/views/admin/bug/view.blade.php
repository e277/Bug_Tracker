<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Document</title>
   <link rel="stylesheet" href="/css/table.css">
</head>
<body>
   @extends('layouts.app')
   @include('layouts.admin-sidebar')
   <table>
      <tr>
         <th colspan="5">
            <h1>Bug Details</h1>
         </th>
      </tr>
      <tr>
         <th>Bug Id</th>
         <th>Project Issue</th>
         <th>Developer</th>
         <th>Project Id</th>
         <th>
            Modify /
            <a href="create-bug" class="create">Create Bug</a>
         </th>
      </tr>
      @foreach ($bug_table as $bug)
          <tr>
             <td>{{ $bug->id }}</td>
             <td>{{ $bug->proj_issue }}</td>
             <td>{{ $bug->developer }}</td>
             <td>{{ $bug->proj_id }}</td>
             <td>
                <a href="/edit-bug/{{ $bug->id }}">Edit</a> | 
                <a href="/delete-bug/{{ $bug->id }}">Delete</a>
             </td>
          </tr>
      @endforeach
      <tr>
         <td colspan="5">
            <span>
               {{ $bug_table->links() }}
            </span>
         </td>
      </tr>
   </table>
</body>
</html>