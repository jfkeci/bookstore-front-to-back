<?php require_once('header.php'); ?>


<div class="tm-main-content">

   <section class="row tm-margin-b-l">
      <div class="col-12">
         <h2 class="tm-blue-text tm-margin-b-p">Add new book</h2>
      </div>
      <div class="col-md-6 col-sm-12 mb-md-0 mb-5 tm-overflow-auto">
         <div class="mr-lg-5">
            <form class="tm-contact-form">
               <div class="form-group">
                  <input type="text" id="bookTitle" class="form-control" placeholder="New book" required />
               </div>
               <div class="form-group">
                  <select class="form-select" id="myCountriesDropdown">
                  </select>
               </div>
               <div class="form-group">
                  <select class="form-select" id="myAuthorsDropdown">
                  </select>
               </div>
               <div class="form-group">
                  <select class="form-select" id="myGenresDropdown">
                  </select>
               </div>
               <button id="saveBookButton" class="tm-btn tm-btn-blue float-left">Add</button>
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

   
   <?php require_once('footer.php'); ?>

   <script src="js/index.js"></script>