
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
            <a href="searcheventreply.php" ><button style="background-color: #cccccc;border: none;width: 500px;position: absolute;left: 420px;top: 143px;" class="btn btn-lg btn-primary btn-block" type="submit">Search registered events confirmations</button></a>
            <div class="container" style="position:relative;top: 20px;">

                <form role="form" id="event" action="addevent.php" method="POST" >
      <div class="form-group">
      <label for="etitle">Event Title:</label>
      <input type="text" name="etitle" class="form-control" id="etitle" placeholder="Enter event title" required autofocus>
    </div>
      <div class="form-group">
  <label for="sel1">Event Type:</label>
  <select class="form-control" name="etype" id="sel1">
    <option>--Select event type--</option>
                        <option>Private</option>
                        <option>Public</option>
                        <option>Other</option>
  </select>
</div>
      <div class="form-group">
  <label for="sel2">Location:</label>
  <select class="form-control" name="elocation" id="sel2">
    <option>--Select location--</option>
                        <option>Park</option>
                        <option>Ground</option>
                        <option>Hall</option>
  </select>
</div>
      <div class="form-group">
      <label for="time1">Start Time:</label>
      <input type="date" name="edate1" class="form-control" id="time1" required autofocus>
    </div>
      <div class="form-group">
      <label for="time2">Ending Time:</label>
      <input type="date" name="edate2" class="form-control" id="time2" required autofocus>
    </div>
      <div class="form-group">
      <label for="name">Your Name:</label>
      <input type="text" name="name" class="form-control" id="name" placeholder="Enter your name" required autofocus>
    </div>
      <div class="form-group">
      <label for="Email">Email Address:</label>
      <input type="email" name="email" class="form-control" id="Email" placeholder="Enter Email Address" required autofocus>
    </div>
      <div class="form-group">
      <label for="con1">Contact 1:</label>
      <input type="text" name="con1" class="form-control" id="con1" placeholder="Enter Contact 1" required autofocus>
    </div>
    <div class="form-group">
      <label for="con2">Contact 2:</label>
      <input type="text" name="con2"  class="form-control" id="con2" placeholder="Enter Contact 2" required autofocus>
    </div>

      <button style="background-color: #cccccc;border: none;width: 300px;margin-left: 300px;" class="btn btn-lg btn-primary btn-block" type="submit">Send Request</button>
  </form>
    </div>

<div class="panel-footer">

        <p>&copy; Company | Privacy | Terms</p>

      </div>

<script type="text/javascript">
                    var frmvalidator = new Validator("event");
 frmvalidator.addValidation("etitle","req","Please enter your event title");
 frmvalidator.addValidation("etitle","maxlen=20","Max length for event title is 20");
        frmvalidator.addValidation("etitle","alnum_s","event title must consist of alphanumric characters only");

        frmvalidator.addValidation("Email","req","Please enter your email");
 frmvalidator.addValidation("Email","maxlen=50","Max length for email is 50");
    frmvalidator.addValidation("Email","email","invalid format  e.g(someone@example.com)");

 
    </script>
