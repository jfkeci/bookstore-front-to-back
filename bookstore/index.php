<?php require_once('header.php'); ?>


<div class="tm-main-content">

   <section class="row tm-margin-b-l">
      <div class="col-12">
         <h2 class="tm-blue-text tm-margin-b-p">Add new book</h2>
      </div>
      <div class="col-md-6 col-sm-12 mb-md-0 mb-5 tm-overflow-auto">
         <div class="mr-lg-5">
            <!-- contact form -->
            <form action="#" method="post" class="tm-contact-form">
               <div class="form-group">
                  <input type="text" id="bookTitle" name="bookTitle" class="form-control" placeholder="New book" required />
               </div>
               <div class="form-group">
                  <select class="form-select" aria-label="Default select example" id="myCountries">
                  </select>
               </div>
               <div class="form-group">
                  <select class="form-select" aria-label="Default select example" id="myAuthors">
                  </select>
               </div>
               <div class="form-group">
                  <select class="form-select" aria-label="Default select example" id="myGenres">
                  </select>
               </div>
               <button type="submit" class="tm-btn tm-btn-blue float-right">Add</button>
            </form>
         </div>
      </div>
   </section>
   <section class="tm-margin-b-l ">
      <div class="tm-gallery">
         <div class="row" id="myBooks">
            <!-- <figure class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                  <a href="preview.html">
                     <div class="tm-gallery-item-overlay">
                        <img src="img/image-02.jpg" alt="Image" class="img-fluid tm-img-center">
                     </div>
                     <p class="tm-figcaption">Integer ornare</p>
                  </a>
               </figure>-->
         </div>
      </div>
      <!-- <nav class="tm-gallery-nav">
         <ul class="nav justify-content-center">
            <li class="nav-item"><a class="nav-link active" href="#">1</a></li>
            <li class="nav-item"><a class="nav-link" href="#">2</a></li>
            <li class="nav-item"><a class="nav-link" href="#">3</a></li>
            <li class="nav-item"><a class="nav-link" href="#">4</a></li>
         </ul>
      </nav> -->
   </section>
   <section class="media tm-highlight tm-highlight-w-icon">
      <div class="tm-highlight-icon">
         <i class="fa tm-fa-6x fa-meetup"></i>
      </div>
      <div class="media-body">
         <header>
            <h2>Who am i?</h2>
         </header>
         <p class="tm-margin-b">Jakov Filip Sabolicek</p>
         <a href="contact.php" class="tm-white-bordered-btn">Contact Me</a>
      </div>
   </section>
</div>
<footer>
   - Jfkeci
</footer>
</div>
<script src="js/includes/jquery-1.11.3.min.js"></script>
<script src="js/includes/popper.min.js"></script>
<script src="js/includes/bootstrap.min.js"></script>
<script src="js/index.js"></script>
</body>

</html>