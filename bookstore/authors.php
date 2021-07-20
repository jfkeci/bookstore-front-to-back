<?php require_once('header.php'); ?>


<div class="tm-main-content">
   <section class="tm-margin-b-l ">
      <section class="row tm-margin-b-l">
         <div class="col-12">
            <h2 class="tm-blue-text tm-margin-b-p">Add new author</h2>
         </div>
         <div class="col-md-6 col-sm-12 mb-md-0 mb-5 tm-overflow-auto">
            <div class="mr-lg-5">
               <!-- contact form -->
               <form action="#" method="post" class="tm-contact-form">
                  <div class="form-group">
                     <input type="text" id="bookTitle" name="bookTitle" class="form-control" placeholder="New author name" required />
                  </div>
                  <button type="submit" class="tm-btn tm-btn-blue float-right">Add</button>
               </form>
            </div>
         </div>
      </section>
      <div class="tm-gallery">
         <div class="row" id="myBooks">
            <table class="table">
               <thead>
                  <tr>
                     <th scope="col">#</th>
                     <th scope="col">First</th>
                     <th scope="col">Last</th>
                     <th scope="col">Handle</th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <th scope="row">1</th>
                     <td>Mark</td>
                     <td>Otto</td>
                     <td>@mdo</td>
                  </tr>
               </tbody>
            </table>
         </div>
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
<script src="js/authors.js"></script>
</body>

</html>