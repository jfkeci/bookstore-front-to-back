<?php

require_once('header.php');

?>

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
                  <input type="text" id="contact_name" name="contact_name" class="form-control" placeholder="Name" required />
               </div>
               <div class="form-group">
                  <input type="email" id="contact_email" name="contact_email" class="form-control" placeholder="Email" required />
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
               Email: <a class="tm-blue-text" href="mailto:ja.lip132@gmail.com">ja.lip132@gmail.com</a><br>
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

   
   <?php require_once('footer.php'); ?>

   <script src="js/contact.js"></script>