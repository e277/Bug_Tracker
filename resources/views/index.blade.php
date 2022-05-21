<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
   <title>Welcome Page</title>
   <link rel="stylesheet" href="/css/main.css">
   <link rel="stylesheet" href="/css/contact.css">
</head>
<body>
   <header>
      <div class="navbar">
         <div class="links">
            <a href="" id="home">Home</a>
            <a href="#about">About</a>
            <a href="#contact">Contact</a>
         </div>
         <div class="links">
            <a href="/login">Login</a>
            <a href="/register">Sign Up</a>
         </div>
      </div>
      <div class="intro">
         <h1><span>Bug</span> Tracker</h1>
         <p>Report your bug and our developers will take care of it !!!</p>
         <a href="">Learn More</a>
      </div>
   </header>
   {{-- About --}}
   <section class="about">
       <h3 id="about">About <span>Us</span></h3>
       <p>
         The bug tracking system is a Content Mangement System where you can collaborate
         on projects by helping to solve issues from bugs that arise, during software 
         development.
       </p>
       <br>
       <br>
       <br>
       <br>
       <br>
       <br>
       <br>
       <br>
       <br>
       <br>
       <br>
       <br>
       <br>
       <br>
       <br>
       <br>
       <br>
       <br>
       <br>
       <br>
       <br>
       <br>
       <br>
       <br>
       <br>
   </section>
   
   
   <section>
      {{-- Contact --}}
       <h3 id="contact">Contact <span>Us</span></h3>
       <div class="container">
      <div class="row">
         <h1>contact us</h1>
      </div>
      <div class="row">
         <h4 style="text-align:center">We'd love to hear from you!</h4>
      </div>
      <div class="row input-container">
         <div class="col-xs-12">
            <div class="styled-input wide">
               <input type="text" required />
               <label>Name</label>
            </div>
         </div>
         <div class="col-md-6 col-sm-12">
            <div class="styled-input">
               <input type="text" required />
               <label>Email</label>
            </div>
         </div>
         <div class="col-md-6 col-sm-12">
            <div class="styled-input" style="float:right;">
               <input type="text" required />
               <label>Phone Number</label>
            </div>
         </div>
         <div class="col-xs-12">
            <div class="styled-input wide">
               <textarea required></textarea>
               <label>Message</label>
            </div>
         </div>
         <div class="col-xs-12">
            <div class="btn-lrg submit-btn">Send Message</div>
         </div>
      </div>
   </div>
   </section>

   <div class="arrow">
      <a href="#home"><img src="/images/arrow.png" alt="up_arrow"></a>
   </div>
  
   <footer>
      <p class="footer">Creator : Ezra Muir &copy;	2021</p>
   </footer>
</body>
</html>