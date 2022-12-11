<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
                <script src="js/bootstrap.min.js" type="text/javascript"></script>
                <link href="stylelogin.css" rel="stylesheet" type="text/css"/>
		
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
        <a class="navbar-brand" href="home.php">Home</a>
    </div>
    <div>
      <ul class="nav navbar-nav">
        <li><a href="blocks.php">Blocks</a></li>
      <li><a href="owner.php">Owners</a></li>
     
      <li><a href="complaints.php">Complaints</a></li>
      <li><a href="showevent.php">Show Event Requests</a></li>
      <li><a href="showfeedback.php">Feedbacks</a></li>
    </div>
   
        
  </div>
</nav>
    <div class="container">
                <h2 style="margin-left:50px;">Enter complete information of owner and click 'Add Owner' button.</h2>
                <form role="form" id="owner" action="../admin/addowner.php" method="POST">
      <div class="form-group">
      <label for="oname">Owner Name:</label>
      <input type="text" name="oname" class="form-control" id="oname" placeholder="Enter Owner Name" required autofocus>
    </div>
      <div class="form-group">
      <label for="con1">Contact 1:</label>
      <input type="text" name="con1" class="form-control" id="con1" placeholder="Enter Contact 1" required autofocus>
    </div>
    <div class="form-group">
      <label for="con2">Contact 2:</label>
      <input type="text" name="con2" class="form-control" id="con2" placeholder="Enter Contact 2" required autofocus>
    </div>
    <div class="form-group">
      <label for="Email">Email Address:</label>
      <input type="email" name="email" class="form-control" id="Email" placeholder="Enter Email Address" required autofocus>
    </div>
       <div class="form-group">
  <label for="add">Address:</label>
  <textarea class="form-control" rows="5" id="add"  name="oadd" placeholder="Enter address..."></textarea>
</div>
       
      <button style="background-color: #cccccc;border: none;width: 300px;margin-left: 300px;" class="btn btn-lg btn-primary btn-block" type="submit">Add Owner</button>
  </form>
    </div>
    <script type="text/javascript">
var frmvalidator = new Validator("owner");

frmvalidator.addValidation("oname","req","Please enter your owner Name");
 frmvalidator.addValidation("oname","maxlen=20","Max length for OwnerName is 20");
        frmvalidator.addValidation("oname","alpha","Owner name must consist of alphabetic characters only");
        
        
        frmvalidator.addValidation("Email","req","Please enter your email id");
 frmvalidator.addValidation("Email","maxlen=50","Max length for email is 50");
        frmvalidator.addValidation("Email","email","Please enter valid Email e.g(someone@example.com)");
        

        
        
    </script>