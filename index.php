<?php
session_start();

$con=mysqli_connect("localhost","root","","oas");
if(!isset($con))
{
    die("Database Not Found");
}


if(isset($_REQUEST["u_sub"]))
{
    
 $id=$_POST['u_id'];
 $pwd=$_POST['u_ps'];
 if($id!=''&&$pwd!='')
 {
   $query=mysqli_query($con ,"select * from t_user_data where s_id='".$id."' and s_pwd='".$pwd."'");
   $res=mysqli_fetch_row($query);
   $query1=mysqli_query($con ,"select * from t_user where s_id='".$id."'");
   $res1=mysqli_fetch_row($query1);

   if($res)
   {
    $_SESSION['user']=$id;
    header('location:admsnform.php');
   }
   else
   {
    
    echo '<script>';
    echo 'alert("Invalid username or password")';
    echo '</script>';
   }
   
   if($res1)
   {
    $_SESSION['user']=$id;
    header('location:homepageuser.php');
   }
   else
   {
    
    echo '<script>';
    echo 'alert("Invalid username or password")';
    echo '</script>';
   }
  }
 else
 {
     echo '<script>';
    echo 'alert("Enter both username and password")';
    echo '</script>';
 
 }
}
?>

<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <link type="text/css" rel="stylesheet" href="css/login.css" v=<?php echo time(); ?>>
  <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="bootstrap/bootstrap-theme.min.css">
  <script src="bootstrap/jquery.min.js"></script>
  <script src="bootstrap/bootstrap.min.js"></script>

  <title>Login Admin</title>
</head>

<body style="background-image: url('images/bg2.jpg');">
  <form id="index" action="index.php" method="post">

    <center>

      <div id="dmain">
        <div class="main-input">
          <i>
            <img src="images/gesco.png" class="gesco-logo" />
          </i>

          <h1 class="title">Login</h1>

          <input type="text" id="u_id" name="u_id" class="form-control text-input" placeholder="Username">
          <input type="password" id="u_ps" name="u_ps" class="form-control text-input" placeholder="Password">
          <input type="submit" id="u_sub" name="u_sub" value="Login" class="toggle btn">


        </div>

        <p id="signup">Don't have an account? <a href="signup.php">Sign up now </a></p>
      </div>

    </center>
  </form>
</body>

</html>