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
 
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Home</a>
    </div>
    <div>
      <ul class="nav navbar-nav">
          <li><a href="event.php">Events</a></li>
        <li><a href="ownerdetail.php">Owner Detail</a></li>
        <li><a href="billstatus.php">Billing status</a></li>
        <li><a href="complaints.php">Complaints</a></li>
    </div>
  </div>
</nav>
             <div class="container">
                <h2 style="margin-left:300px;">Sign Up</h2>
                <form role="form" id="signup" action="adduser.php" method="POST">
      <div class="form-group">
      <label for="fname">First Name:</label>
      <input type="text" name="firstname" class="form-control" id="fname" placeholder="Enter First Name" required autofocus>
    </div>
      <div class="form-group">
      <label for="lname">Last Name:</label>
      <input type="text" name="lastname" class="form-control" id="lname" placeholder="Enter Last Name" required autofocus>
    </div>
                    <div class="form-group">
      <label for="mail">E-mail:</label>
      <input type="email" name="emailid" class="form-control" id="mail" placeholder="Enter Last Name" required autofocus>
    </div>
    <div class="form-group">
      <label for="email">Username:</label>
      <input type="text" name="uname" class="form-control" id="email" placeholder="Enter Username" required autofocus>
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" name="pass" class="form-control" id="pwd" placeholder="Enter password" required autofocus>
    </div>
      <div class="form-group">
  <label for="sel1">Select security Question:</label>
  <select class="form-control" name="question" id="sel1">
    <option>Select Question</option>
                        <option>what is your favorite teacher name?</option>
                        <option>what is your pet name?</option>
                        <option>what is your nick name?</option>
                        <option>who is your best friend?</option>
  </select>
</div>
      <div class="form-group">
      <label for="ans">Answer:</label>
      <input type="text" name="answer" class="form-control" id="ans" placeholder="Enter Your Answer" required autofocus>
    </div>
      <div class="form-group">
      <label for="cnic">CNIC:</label>
      <input type="text" name="cnicno" class="form-control" id="cnic" placeholder="Enter CNIC Number" required autofocus>
    </div>
      <div class="form-group">
  <label for="sel2">Select Your Gender:</label>
  <select class="form-control" name="genders" id="sel2" required autofocus>
    <option>---Select---</option>
                                <option>Male</option>
                                <option>Female</option>
                                <option>Other</option>
  </select>
</div>
      <button style="background-color: #cccccc;border: none;width: 300px;margin-left: 300px;" class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>
  </form>
            </div>
<script type="text/javascript">
                    var frmvalidator = new Validator("signup");
 frmvalidator.addValidation("fname","req","Please enter your First Name");
 frmvalidator.addValidation("fname","maxlen=20","Max length for FirstName is 20");
        frmvalidator.addValidation("fname","alpha","First name must consist of alphabetic characters only");
        
        frmvalidator.addValidation("lname","req","Please enter your Last Name");
 frmvalidator.addValidation("lname","maxlen=20","Max length for LasttName is 20");
        frmvalidator.addValidation("fname","alpha","Last name must consist of alphabetic characters only");
        
        frmvalidator.addValidation("mail","req","Please enter your email id");
 frmvalidator.addValidation("mail","maxlen=50","Max length for email is 50");
        frmvalidator.addValidation("mail","email","Please enter valid Email e.g(someone@example.com)");
        
        frmvalidator.addValidation("email","req","Please enter your User Name");
 frmvalidator.addValidation("email","maxlen=10","Max length for User Name is 10");
        frmvalidator.addValidation("email","alnum","User name must consist of alphanumeric characters only e.g(example123)");
        
        frmvalidator.addValidation("pwd","req","Please enter your Password");
        frmvalidator.addValidation("pwd","minlen=5","Min length for Password is 5");
 frmvalidator.addValidation("pwd","maxlen=20","Max length for password is 20");
        frmvalidator.addValidation("pwd","alnum","Password must consist of alphanumeric characters only e.g(example123)");

        
        frmvalidator.addValidation("cnic","req","Please enter your CNIC");
 frmvalidator.addValidation("cnic","maxlen=15","Max length for CNIC is 15");
        frmvalidator.addValidation("cnic","regexp=^[0-9+]{5}-[0-9+]{7}-[0-9]{1}$","CNIC must consist of 15 digits only e.g(12345-1234567-1)");

                    </script>