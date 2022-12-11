
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
                <script src="js/bootstrap.min.js" type="text/javascript"></script>
                <link href="stylelogin.css" rel="stylesheet" type="text/css"/>
		
		<link href="css/styles.css" rel="stylesheet">
                <script src="gen_validatorv4.js" type="text/javascript"></script>
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
                <h2 style="margin-left:50px;">Enter blocks information and click 'Add Block' button.</h2>
                <form role="form" id="block" action="addblocks.php" method="POST">
      <div class="form-group">
      <label for="btitle">Block Title:</label>
      <input type="text" name="block" class="form-control" id="btitle" placeholder="Enter block title" required autofocus>
    </div>

<div class="form-group">
      <label for="bno">Block Number:</label>
      <input type="text" name="bno" class="form-control" id="bno" placeholder="Enter block number" required autofocus>
    </div>
                    <button style="background-color: #cccccc;border: none;width: 300px;margin-left: 300px;" class="btn btn-lg btn-primary btn-block" type="submit" value="block">Add Block</button>
    
    </form>
    </div>
<script type="text/javascript">
                    var frmvalidator = new Validator("block");
 frmvalidator.addValidation("btitle","req","Please enter your Block title");
 frmvalidator.addValidation("btitle","maxlen=20","Max length for Block title is 20");
 frmvalidator.addValidation("btitle","alpha_s","Block title must consist of alphabetic characters only");
      
      frmvalidator.addValidation("bno","req","Please enter your Block title");
      frmvalidator.addValidation("bno","alnum_s","Block title must consist of alphanumeric characters only");
      
  </script>