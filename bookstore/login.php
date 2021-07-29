<?php require_once('header.php'); ?>


<div class="tm-main-content">
   <section class="row tm-margin-b-l">
      <div class="col-12">
         <h2 class="tm-blue-text tm-margin-b-p">Login</h2>
      </div>
      <div class="col-md-6 col-sm-12 mb-md-0 mb-5 tm-overflow-auto">
         <div class="mr-lg-5">
            <!-- contact form -->
            <form class="tm-contact-form">
               <div class="form-group">
                  <input type="email" id="loginEmail" class="form-control" placeholder="Email" required></input>
               </div>
               <div class="form-group">
                  <input type="password" id="loginPassword" class="form-control" placeholder="Password" required></input>
               </div>
               <button class="tm-btn tm-btn-blue float-right" id="loginButton">Login</button>
               <button class="tm-btn tm-btn-blue float-left" id="newbutton">bb</button>
            </form>
         </div>
      </div>
      <div class="col-12">
         <h2 class="tm-blue-text tm-margin-b-p">Register</h2>
      </div>
      <div class="col-md-6 col-sm-12 mb-md-0 mb-5 tm-overflow-auto">
         <div class="mr-lg-5">
            <!-- <form class="tm-contact-form">
               <div class="form-group">
                  <input type="text" id="email" name="email" class="form-control" placeholder="Name" required />
               </div>
               <div class="form-group">
                  <input type="email" id="contact_email" name="contact_email" class="form-control" placeholder="Email" required />
               </div>
               <button class="tm-btn tm-btn-blue float-right">Register</button>
            </form> -->
         </div>
      </div>
      <div class="col-md-6 col-sm-12">
         <p class="tm-margin-b-p">Jakov Filip Saboliček</p>
         <address>
            <div class="tm-blue-text">
               Email: <a class="tm-blue-text" href="mailto:ja.lip132@gmail.com">ja.lip132@gmail.com</a><br>
               Tel: <a class="tm-blue-text" href="tel:+385992445447">00385-99-244-5447</a><br>
               Github: <a class="tm-blue-text" href="https://github.com/jfkeci">jfkeci</a><br>
            </div>
         </address>
      </div>
   </section>


   <?php require_once('footer.php'); ?>

   <script src="js/login.js"></script>