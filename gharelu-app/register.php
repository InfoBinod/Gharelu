<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>User Registration</title>
  <link rel= "stylesheet" type="text/css" href="style.css">
  <script type="text/javascript">


    function checker(_id,_message){
          document.getElementById(_id).innerHTML=_message;

    }

    function validation()
    {
    var _check = true;
      var user=document.getElementById('username');
      var Adrs=document.getElementById('Address');

           if(user.value=="")
          {
            checker('usernameError','Username should not be empty');
            _check = false;

          }
          if((user.value.length<=2) || (user.value.length>20))
          {
            console.log("Username Err");
      checker('usernameError','please enter your username between 2 and  20 alphabets')
      _check = false;
          }
          if(!isNan(user)){
      checker('usernameError','Please dont enter only number');
      _check = false;
          }
          if(Adrs.value=="")
          {
            console.log("Empty Eerr");
      checker('addressError','Please enter Address');
      _check = false;
          }
           if((Adrs.value.length<5) || (Adrs.value.length>30))
          {
            console.log('err');
      checker('addressError','please enter your Address between 5 and  30 alphabets');
      _check = false;
          }
        var phnNo=document.getElementById('phone-number').value;
          if(phnNo=="")
          {
      checker('phone-number-Error','please enter phone number');
      _check = false;
          }
           if(phnNo.length!=10)
          {
      checker('phone-number-Error','phone number must be of 10 digits');
      _check = false;
          }
             if(isNan(phnNo)) {
      checker('phone-number-Error','phone number should contain only digits');
      _check = false;
             }
            var pswrd=document.getElementById('password').value;
            if(pswrd=="")
              {
        checker('passwordError','please enter password');
        _check = false;
              }

           if((pswrd.length<5) || (pswrd.length>20))
          {
      checker('passwordError','please enter your password between 5 and 20 alphabets or numbers');
      _check = false;
        }
              var confrmpswrd=document.getElementById('confirmpassword').value;
         if(pswrd=="")
          {
      checker('confirmpasswordError','please enter confirmation password');
      _check = false;
          }
          if(password!=confirmpassword)

          {
      checker('confirmpasswordError','Your password and confirmation passsword donot match');
      _check = false;
          }
          var Email=document.getElementById('email').value;
         if(Email=="")
          {
      checker('emailerror','please enter your email');
      _check = false;
          }
          if(email.indexof('@')<=0){
      checker('emailerror','Invalid @ position');
            _check = false;
          }
             if((email.chartAt(email.length-4)!='.') && (email.chartAt(email.length-3)!='.') ){
      checker('emailerror','Invalid . position');
      _check = false;

          }

          if(_check == false){
            return false;
          } else{
            return true
            ;
          }


               }
</script>

</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>

  <form method="post" action="" onsubmit="return validation()">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>username</label>
      <input type="text" id="username" name="username" value="<?php echo $username; ?>">
      <span id="usernameError"></span>
  	</div>
    <div class="input-group">
  	  <label>Address</label>
      <input type="text" id="Address" name="address" value="<?php echo $Address; ?>">
      <span id="addressError"></span>
  	</div>
    <div class="input-group">
  	  <label>Phone No</label>
      <input type="number" id="phone-number" name="Phoneno" value="<?php echo $Phoneno; ?>">
      <span id="phone-number-Error"></span>
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" id="email" name="email" value="<?php echo $email; ?>">

         <span id="emailerror"></span>
  	</div>
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" id="password" name="password_1">
  	  <span id="passwordError"></span>
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" id="confirmpassword" name="password_2">
  	  <span id="confirmpasswordError"></span>
  	</div>
  	<div class="input-group">
  	  <input type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  </span>
</div>
</form>
</body>
</html>

