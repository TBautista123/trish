<?php  
include("header.php");
include("navbar.php");
?>
<div class="background-image">
<div class="container pt-5">
 <div class="row">
    <div class="col"><!-- 1st column Login form -->
    <div class="card">
     <div class="card-header"></h4>Login</h4></div>
     <div class="card-body">
         <form action="navsample.php" method="POST">
         <div class="form-floating mb-3 mt-3">
          <input type="text" class="form-control" id="email" placeholder=" Email" name="email">
         <label for="email">Email</label>
         </div>
         <div class="form-floating mb-3 mt-3">
          <input type="password" class="form-control" id="pwd" placeholder="Enter Password" name="pwd">
         <label for="email">Password</label>
         </div>
            <button name="login_now" type="submit" class="btn btn-primary">Login</button>
            </form>
         </div>
     
</div>
    </div>
    <div class="col"><!-- 2nd column Image Infor -->
            

    </div>
</div>
</div>
</div>
<?php  
include("footer.php");
?>
