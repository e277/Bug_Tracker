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
         <th colspan="4">
            <h1>Developer Details</h1>
         </th>
      </tr>
      <tr>
         <th>Developer Name</th>
         <th>Developer Email</th>
         <th>Status</th>
         <th>
            Action / 
            <a href="create-dev" class="create">Create</a>
         </th>
      </tr>
      @foreach ($dev_table as $dev)
         <tr>
            <td>{{ $dev->name }}</td>
            <td>{{ $dev->email }}</td>
            <td>
               @if ($dev->is_admin == 0)
                  @if ($dev->status == 1)
                     <a href="/view-dev/status/{{ $dev->id }}/{{ 0 }}">{{ "Active" }}</a>
                  @else
                     <a href="/view-dev/status/{{ $dev->id }}/{{ 1 }}">{{ "Inactive" }}</a>
                  @endif
               @endif
            </td>
            <td>
               @if ($dev->is_admin == 0)
                  <form action="/view-dev/{{ $dev->id }}" method="post">
                     @csrf
                     {{-- @method("PUT") --}}
                     <button>Add</button>
                  </form>
               @endif
            </td>
         </tr>
      @endforeach
      <tr>
         <td colspan="4">
            {{-- <span>
               {{ $dev_table->links() }}
            </span> --}}
         </td>
      </tr>
   </table>
</body>
</html>