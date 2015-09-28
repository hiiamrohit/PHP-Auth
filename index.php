<?php include_once('header.php'); 
session_start();
if(!empty($_SESSION['result']['id'])) {
header('location:profile.php');
}
?>
<div class="panel panel-primary" style="width:35%;margin:0 auto; margin-top:2%">
<div class="panel-heading"><h3>User Login</h3></div>
<div class="panel-body" style="height:40%; text-align:center;" >
<p class="bg-info" id="msg"><?php echo (isset($_SESSION['msg'])) ? $_SESSION['msg'] : ''; ?></p>
 <form class="form-horizontal" role="form" id="loginForm" method="post" action="function.php?type=login">
  <div class="form-group">
    <label class="control-label col-sm-3" for="username">Username:</label>
    <div class="col-sm-9">
      <input type="email" class="form-control" name="username" placeholder="Enter username/emailid" required="required">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-3" for="password">Password:</label>
    <div class="col-sm-9">
      <input type="password" class="form-control" name="password" placeholder="Enter password" required="required">
    </div>
  </div>
  
  <div class="form-group">
   
      <button style="width:90%" id="send" class="btn btn-primary btn-lg" type="submit">
         <span class="glyphicon glyphicon-send" ></span> Login
      </button>

      <a href="register.php" class="btn btn-primary btn-lg" style="width:90%; margin-top:5px;">
         <span class="glyphicon glyphicon-user" ></span> Register Now
      </a>
    
  </div>
</form>
</div>
</div>
 <?php include_once('footer.php'); ?>

