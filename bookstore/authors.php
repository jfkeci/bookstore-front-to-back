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
               <form class="tm-contact-form">
                  <div class="form-group">
                     <input type="text" id="authorName" class="form-control" placeholder="New author" required />
                  </div>
                  <button id="saveAuthorButton" class="tm-btn tm-btn-blue float-left">Add</button>
               </form>
            </div>
         </div>
      </section>
      <div class="tm-gallery">
         <div class="row">
            <table class="table">
               <thead>
                  <tr>
                     <th scope="col">#</th>
                     <th scope="col">Id</th>
                     <th scope="col">Name</th>
                     <th scope="col">Created</th>
                     <th scope="col"></th>
                     <th scope="col"></th>
                  </tr>
               </thead>
               <tbody id="myAuthors">

               </tbody>
            </table>
         </div>
      </div>

      <button id="modalBtn">modal</button>
   </section>

   <div>
      <div class="modal fade" id="modalDelete" role="dialog">
         <div class="modal-dialog modal-sm vertical-align-center">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Are you sure?</h4>
               </div>
               <div class="modal-footer">
                  <button type="button" id="deleteAuthorButton" data-dismiss="modal" class="btn btn-default">Delete</button>
                  <button type="button" data-dismiss="modal" class="btn btn-default">Close</button>
               </div>
            </div>
         </div>
      </div>

      <div class="modal fade" id="modalUpdate" role="dialog">
         <div class="modal-dialog modal-lg vertical-align-center">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Update</h4>
               </div>
               <form style="margin:3%;" action="#" method="post" class="tm-contact-form">
                  <div class="form-group">
                     <input type="text" id="authorNameUpdate" name="authorNameUpdate" class="form-control" required></input>
                  </div>
               </form>
               <div class="modal-footer">
                  <button type="button" id="updateAuthorButton" data-dismiss="modal" class="btn btn-default">Update</button>
                  <button type="button" data-dismiss="modal" class="btn btn-default">Close</button>
               </div>
            </div>
         </div>
      </div>
   </div>

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
<script src="js/global.js"></script>
<script src="js/authors.js"></script>

</body>

</html>