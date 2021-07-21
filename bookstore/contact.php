<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Bookstore</title>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">
      Sans" -->
      <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/tooplate-style.css">
   </head>
   <body>
      <div class="container">
         <header class="tm-site-header">
            <h1 class="tm-site-name">Bookstore</h1>
            <p class="tm-site-description">Online Library</p>
            <nav class="navbar navbar-expand-md tm-main-nav-container">
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#tmMainNav" aria-controls="tmMainNav" aria-expanded="false" aria-label="Toggle navigation">
               <i class="fa fa-bars"></i>
               </button>
               <div class="collapse navbar-collapse tm-main-nav" id="tmMainNav">
                  <ul class="nav nav-fill tm-main-nav-ul">
                     <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                     <li class="nav-item"><a class="nav-link" href="authors.php">Authors</a></li>
                     <li class="nav-item"><a class="nav-link" href="genres.php">Genres</a></li>
                     <li class="nav-item"><a class="nav-link" href="contact.php">Contact Me</a></li>
                     <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                  </ul>
               </div>
            </nav>
         </header>
         
         <div class="tm-main-content">
            <section class="row tm-margin-b-l">
               <div class="col-12">
                  <h2 class="tm-blue-text tm-margin-b-p">Contact Me</h2>
               </div>
               <div class="col-md-6 col-sm-12 mb-md-0 mb-5 tm-overflow-auto">
                  <div class="mr-lg-5">
                     <!-- contact form -->
                     <form action="#" method="post" class="tm-contact-form">
                        <div class="form-group">
                           <input type="text" id="contact_name" name="contact_name" class="form-control" placeholder="Name"  required/>
                        </div>
                        <div class="form-group">                                                        
                           <input type="email" id="contact_email" name="contact_email" class="form-control" placeholder="Email"  required/>
                        </div>
                        <div class="form-group">
                           <textarea id="contact_message" name="contact_message" class="form-control" rows="8" placeholder="Message" required></textarea>
                        </div>
                        <button type="submit" class="tm-btn tm-btn-blue float-right">Submit</button>
                     </form>
                  </div>
               </div>
               <div class="col-md-6 col-sm-12">
                  <p class="tm-margin-b-p">Morbi auctor euismod dictum. Morbi eu nibh in nulla interdum placerat. Donec pellentesque est at sem aliquam hendrerit.</p>
                  <address>
                     <span class="tm-blue-text">Mailing Address</span><br>
                     1126 Aenean ac mauris at ex,<br>
                     venenatis lobortis id in 11600 <br><br>
                     <div class="tm-blue-text">          
                        Email: <a class="tm-blue-text" href="mailto:ja.lip132@gmail.com">ja.lip132@gmail.com</a
                           ><br>
                        Tel: <a class="tm-blue-text" href="tel:+385992445447">00385-99-244-5447</a><br>
                        Github: <a class="tm-blue-text" href="https://github.com/jfkeci">jfkeci</a><br>    
                     </div>
                  </address>
               </div>
            </section>
            <section class="row tm-margin-b-l">
               <div class="col-12">
                  <header>
                     <h4 class="tm-blue-text tm-margin-b">My Location</h4>
                  </header>
                  <div id="google-map"></div>
               </div>
            </section>
            <section class="media tm-highlight tm-highlight-w-icon">
               <div class="tm-highlight-icon">
                  <i class="fa tm-fa-6x fa-meetup"></i>    
               </div>
               <div class="media-body">
                  <header>
                     <h2>Need Help?</h2>
                  </header>
                  <p class="tm-margin-b">Curabitur magna tellus, condimentum vitae consectetur id, elementum sit amet erat. Phasellus arcu leo, sagittis fringilla nisi et, pulvinar vestibulum mi. Maecenas mollis ullamcorper est at dignissim.</p>
                  <a href="" class="tm-white-bordered-btn">Live Chat</a>
               </div>
            </section>
         </div>
         <footer>
            Jfkeci
         </footer>
      </div>
      <!-- load JS files -->
      <script src="jsincjs/includes/jquery-1.11.3.min.js"></script> 
      <script src="jsincjs/includes/popper.min.js"></script>        
      <script src="jsincjs/includes/bootstrap.min.js"></script>     
      <script src="js/contact.js"></script>  
      <script src="js/global.js"></script>               
   </body>
</html>