<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Document</title>
   <link rel="stylesheet" href="/css/sidebar.css">
</head>
<body>
   
   @extends('layouts.app')
   
   @section('content')
      <div class="wrapper">
         <!--Top menu -->
         <div class="sidebar">
            <!--profile image & text-->
            <div class="profile">
               <br><br><br>
               <p>Solve Project Bug</p>
               <br><br>
            </div>
            <!--menu item-->
            <ul>
               <li>
                  <a href="/user-home" class="active">
                     <span class="icon"><i class="fas fa-desktop"></i></span>
                     <span class="item">User Dashboard</span>
                  </a>
               </li>
               <li>
                  <a href="/user-project">
                     <span class="icon"><i class="fas fa-project-diagram"></i></span>
                     <span class="item">Project</span>
                  </a> 
               </li>
               <li>
                  <a href="/user-bug">
                     <span class="icon"><i class="fas fa-bug"></i></span>
                     <span class="item">Bug</span>
                  </a>
               </li>
            </ul>
         </div>
      </div>
      <div class="section">
            <div class="top-navbar">
               @if (session('status'))
                  <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                        {{ session('status') }}
                  </div>
               @endif
            </div>
      </div>
      <main class="sm:container sm:mx-auto sm:mt-10">
         <div class="w-full sm:px-6">
            
         </div>
      </main>
   @endsection
</body>
</html>