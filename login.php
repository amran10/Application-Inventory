<?php 
include "include/connection.php";

mysql_connect($host, $user, $password);
mysql_select_db($dbname);
if (isset($_POST['submit_login'])) {

  $user =$_POST['username'];
  $pass =$_POST['password'];
  $log_type = "login";
  $date_log = date('Y-m-d H:i:m');

  // var_dump($user,$pass,$log_type,$date_log);exit;

  $q = mysql_query("SELECT * FROM tb_user WHERE user_name='$user' AND user_password='$pass'");

  if (mysql_num_rows($q) == 1) {
    session_start();
    $_SESSION['username']=$user;
    $query = mysql_query("insert into tb_log values(' ','$user','$log_type','$date_log',' ')");
    if ($query) {
      header("Location: ./index.php");
    } else {
      echo "<h4>". "log error"."</h4>";
    }           
  } else {
    echo "<div class='login-wrap'>
            <div align='center'>Username or Password Failed!</div>
          </div>";
    header("Location: ./index.php");
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'include/head.php';?>
<body onload="getTime()">
 <div id="login-page">
  <div class="container">

    <form class="form-login" action=" " method="post">
      <h2 class="form-login-heading">inventory IT</h2>
      <div class="login-wrap">
        <input type="text" name="username" class="form-control" placeholder="Username" autofocus>
        <br>
        <input type="password" name="password" class="form-control" placeholder="Password">
		            <!-- <label class="checkbox">
		                <span class="pull-right">
		                    <a data-toggle="modal" href="login.html#myModal"> Forgot Password?</a>
		                </span>
                  </label> --><br>
                  <button class="btn btn-theme btn-block" type="submit" name="submit_login"><i class="fa fa-lock"></i> SIGN IN</button>
                  <hr>
		            <!-- <div class="login-social-link centered">
		            <p>or you can sign in via your social network</p>
		                <button class="btn btn-facebook" type="submit"><i class="fa fa-facebook"></i> Facebook</button>
		                <button class="btn btn-twitter" type="submit"><i class="fa fa-twitter"></i> Twitter</button>
                  </div> -->
                  <div class="registration">
                    Version 1.0<br/>
                    <a class="" href="#">
                     IT Department
                   </a>
                 </div>

               </div>
             </form>	
             <!-- Modal -->
             <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Forgot Password ?</h4>
                  </div>
                  <div class="modal-body">
                    <p>Enter your e-mail address below to reset your password.</p>
                    <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">

                  </div>
                  <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                    <button class="btn btn-theme" type="button">Submit</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- modal -->

          </form>	  	

        </div>
      </div>

      <!-- js placed at the end of the document so the pages load faster -->
      <script src="assets/js/jquery.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>

      <!--BACKSTRETCH-->
      <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
      <script type="text/javascript" src="assets/js/jquery.backstretch.min.js"></script>
      <script>
        $.backstretch("assets/images/sea2.jpg", {speed: 500});
      </script>
      <script>
       $(function () {
         $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
		increaseArea: '20%' // optional
	});
       });
     </script>

   </body>
   </html>
