<?php

error_reporting(0);

?>



<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>Sign Up</title>
  <lunink <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="css/login.css" v=<?php echo time(); ?>>
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/bootstrap-theme.min.css">
    <script src="bootstrap/jquery.min.js"></script>
    <script src="bootstrap/bootstrap.min.js"></script>
    <script language="javascript" type="text/javascript" src="jquery/jquery-1.10.2.js"></script>
    <script language="javascript" type="text/javascript" src="jquery/jquery-ui.js"></script>
    <link href="jquery/jquery-ui.css" rel="stylesheet" type="text/css" />
    <link type="text/css" rel="stylesheet" href="css/sign.css">
    </link>




    <script type="text/javascript">
    function validate() {
      $('#signup input[type="text"]').each(function() {
        if (this.required) {
          if (this.value == "")
            $(this).addClass("inpterr");
          else
            $(this).addClass("inpterrc");
        }

        if ($(this).attr("VT") == "NM") {
          if ((!isAlpha(this.value)) && this.value != "") {
            alert("Only Aplhabets Are Allowed . . .");
            $(this).focus();
          }
        }

        if ($(this).attr("VT") == "PH") {
          if ((!isPhone(this.value)) && this.value != "") {
            alert("Check the format . . .");
            $(this).focus();
          }
        }

        if ($(this).attr("VT") == "EML") {
          if (!IsEmail($(this).val()) && this.value != "") {
            alert("Invalid Email . . . .");
            $(this).focus();
          }
        }

        if ($(this).attr("VT") == "PIN") {
          if ((!IsPin(this.value)) && this.value != "") {
            alert("Invalid Pin Code . . . .");
            $(this).focus();
          }
        }

      });
    }

    function isAlpha(x) {
      var re = new RegExp(/^[a-zA-Z\s]+$/);
      return re.test(x);
    }

    function isPhone(x) {

      var ph = new RegExp(/\(?([0-9]{3})\)?([ .-]?)([0-9]{3})\2([0-9]{4})/);
      //if(!ph.length<10)
      return ph.test(x);
    }

    function IsEmail(x) {
      var em = new RegExp(/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/);
      return em.test(x);
    }

    function IsPin(x) {
      var pin = new RegExp(/^\d{6}$/);

      return pin.test(x);
    }
    </script>




</head>


<body style="background-image:url('./images/bg2.jpg');">
  <form id="signup" action="signupconfirm.php" method="post">
    <center>
      <div id="signupmain">
        <div class="main-input">
          <i class="gesco-logo-padding">
            <img src="images/gesco.png" class="gesco-logo-signup" />
          </i>

          <h1 class="title">Sign Up</h1>

          <input type="text" id="in_name" name="in_name" VT="NM" required="true" class="form-control text-input"
            placeholder="Username">

          <input type="email" id="in_eml" name="in_eml" VT="EML" required="true" class="form-control text-input"
            placeholder="Email">

          <input type="number" id="in_mob" name="in_mob" VT="PH" required="true" maxlength="10"
            class="form-control text-input" placeholder="Phone Number">

          <input type="password" id="u_ps" name="u_ps" class="form-control text-input" placeholder="Password"
            required="true">

          <input type="text" id="in_dob" name="in_dob" required="true" class="form-control text-input"
            placeholder="Date of Birth">
          <script type="text/javascript">
          $(function() {
            $("#in_dob").datepicker({
              dateFormat: 'yy-mm-dd',
              yearRange: '-25:+0',
              changeYear: true,
              changeMonth: true
            });
          });
          </script>

          <img src="captcha.php" style="height: 1.8em;height: 1.8em;" class="captcha" />
          <input type='text' id='txt_captcha' name='txt_captcha' class="form-control text-input"
            placeholder="Enter the code" required="true">

          <input type="submit" id="in_sub" name="in_sub" onclick="validate();" value="SIGN UP" class="toggle btn">

        </div>
        <p>Already have an account? <a href="index.php">Login </a></p>
      </div>
    </center>
  </form>
</body>

</html>