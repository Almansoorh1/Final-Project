<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
                <script src="js/bootstrap.min.js" type="text/javascript"></script>
                <link href="stylelogin.css" rel="stylesheet" type="text/css"/>
                <link href="style.css" rel="stylesheet" type="text/css"/>
		<link href="css/styles.css" rel="stylesheet">
                <script src="gen_validatorv4.js" type="text/javascript"></script>
	</head>
	<body>
            <div class="header">
                <img style="height:90px;width: 300px;" src="logo.jpg">
                <span><h3 class="head" >Housing Authority Automation System</h3></span>
            </div>
 
     <div class="container">

         <form class="form-signin" id="login" action="checklogin.php" method="POST">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="text" name="uname" id="inputEmail" class="form-control" placeholder="User Name" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="pwd" id="inputPassword" class="form-control" placeholder="Password" required autofocus>
        <a href="forgetpass.php"style="position: relative;bottom: 15px;" > Forget password...? </a>
        <button style="background-color: #cccccc;border: none;" class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        <h3>New User? </h3>
        
      </form>

    </div>
            
                <a href="signup.php"><input type="submit"  value="Sign Up" style="position: absolute; font-size: 18px; background: #cccccc;  border-radius: 5px; width: 300px; color: white; height: 45px;left: 570px"></a>
                

<script type="text/javascript">
                    var frmvalidator = new Validator("login");
 frmvalidator.addValidation("inputEmail","req","Please enter your User Name");
 frmvalidator.addValidation("inputEmail","maxlen=20","Max length for UserName is 20");
        frmvalidator.addValidation("inputEmail","alpha","User name must consist of alphabetic characters only");
        
        frmvalidator.addValidation("inputPassword","req","Please enter your Password");
        frmvalidator.addValidation("inputPassword","minlen=5","Min length for Password is 5");
 frmvalidator.addValidation("inputPassword","maxlen=20","Max length for password is 20");
    frmvalidator.addValidation("inputPassword","alnum","Password must consist of alphanumeric characters only e.g(example123)");

    </script>