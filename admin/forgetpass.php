<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
                <script src="js/bootstrap.min.js" type="text/javascript"></script>
                <link href="stylelogin.css" rel="stylesheet" type="text/css"/>
		
		<link href="css/styles.css" rel="stylesheet">
                <style>
                    .form-group{
                        width: 300px;
                        margin-left: 300px;
                    }
                </style>
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
        <li><a href="blocks.php">Blocks</a></li>
      <li><a href="houses.php">Houses</a></li>
      <li><a href="owner.php">Owners</a></li>
      <li><a href="charges.php">Charges</a></li>
      <li><a href="utilitybill.php">Utility Bills</a></li>
      <li><a href="status.php">Billing status</a></li>
      <li><a href="billing.php">Billing</a></li>
      <li><a href="generatebill.php">Generate Bill</a></li>
      <li><a href="complaints.php">Complaints</a></li>
    </div>
  </div>
</nav>
    <div class="container">
                <h2 style="margin-left:50px;">Enter complete information and click 'change password' button.</h2>
                <form role="form" action="newpass.php" method="POST">
      <div class="form-group">
      <label for="uname">Username:</label>
      <input type="text" name="name" class="form-control" id="uname" placeholder="Enter username" required autofocus>
    </div>
      <div class="form-group">
  <label for="sel1">Select security Question:</label>
  <select class="form-control" name="ques" id="sel1">
    <option>Select Question</option>
                        <option>what is your favorite teacher name?</option>
                        <option>what is your pet name?</option>
                        <option>what is your nick name?</option>
                        <option>who is your best friend?</option>
  </select>
</div>
      <div class="form-group">
      <label for="ans">Answer:</label>
      <input type="text" name="ans" class="form-control" id="ans" placeholder="Enter Your Answer" required autofocus>
    </div>
<div class="form-group">
      <label for="pwd">New Password:</label>
      <input type="password" name="newpass" class="form-control" id="pwd" placeholder="Enter new password" required autofocus>
    </div>
        <button style="background-color: #cccccc;border: none;width: 300px;margin-left: 300px;" class="btn btn-lg btn-primary btn-block" type="submit">Change Password</button>
    
    </form>
    </div>