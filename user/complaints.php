
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
                <style>
    .panel-footer{
         position:fixed;
    bottom:0px;
    left:0px;
    right:0px;
    margin-bottom:0px;
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
          <li><a href="event.php">Events</a></li>
        <li><a href="ownerdetail.php">Owner Detail</a></li>
        <li><a href="complaints.php">Complaints</a></li>
        <li><a href="contact.php">Contact Us</a></li>
        <li><a href="feed.php">Feedbacks</a></li>
    </div>
  </div>
</nav>
            <a href="searchreply.php" ><button style="background-color: #cccccc;border: none;width: 500px;position: absolute;left: 400px;top: 143px;" class="btn btn-lg btn-primary btn-block" type="submit">Search registered Complaint's Remarks</button></a>
    <div class="container">
                <h2 style="margin-left:30px;">Enter complete information about complaint and click 'Add Complaint' button.</h2>
                <form role="form" id="complaint" action="addcomplaints.php" method="POST">
      <div class="form-group">
      <label for="comp">Complaint Title:</label>
      <input type="text" name="ctitle" class="form-control" id="comp" placeholder="Enter complaint title" required autofocus>
    </div>
      <div class="form-group">
  <label for="comment">Complaint:</label>
  <textarea class="form-control" name="comp" rows="5" id="comment"placeholder="Enter your complaint..."></textarea>
</div>
    <div class="form-group">
      <label for="date1">Date:</label>
      <input type="date" name="date1" class="form-control" id="date1" required autofocus>
    </div>
    <div class="form-group">
      <label for="date2">Proceeding date:</label>
      <input type="date" name="date2" class="form-control" id="date2" required autofocus>
    </div>
    <div class="form-group">
  <label for="fb">Feedback:</label>
  <textarea class="form-control" name="feed" rows="5" id="fb"placeholder="Enter your feedback..."></textarea>
</div>
      <button style="background-color: #cccccc;border: none;width: 300px;margin-left: 300px;" class="btn btn-lg btn-primary btn-block" type="submit">Add Complaint</button>
  </form>
    </div>


<div class="panel-footer">
 
        <p>&copy; Company | Privacy | Terms</p>
 
      </div>


<script type="text/javascript">
                    var frmvalidator = new Validator("complaint");
 frmvalidator.addValidation("comp","req","Please enter your complaint title");
 frmvalidator.addValidation("comp","maxlen=20","Max length for complaint title is 20");
        frmvalidator.addValidation("comp","alnum_s","complaint title must consist of alphanumeric characters only");
        
        

    </script>
