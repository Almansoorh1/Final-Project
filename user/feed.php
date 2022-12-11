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
                
                <!-- Start WOWSlider.com HEAD section -->
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
<script type="text/javascript" src="engine1/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->
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
            
    <div class="container">
                <h2 style="margin-left:50px;">Enter Feedback  and click 'Send' button.</h2>
                <form role="form" id="complaint" action="addfeed.php" method="POST">
      <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" name="fname" class="form-control" id="name" placeholder="Enter your name" required autofocus>
    </div>
       <div class="form-group">
      <label for="mail">Email:</label>
      <input type="email" name="femail" class="form-control" id="mail" placeholder="Enter your email" required autofocus>
    </div>
    <div class="form-group">
  <label for="feed">Feedback:</label>
  <textarea class="form-control" name="feed" rows="5" id="feed"placeholder="Enter your comment..."></textarea>
</div>
      <button style="background-color: #cccccc;border: none;width: 300px;margin-left: 300px;" class="btn btn-lg btn-primary btn-block" type="submit">Send</button>
  </form>
    </div>


<div class="panel-footer">
 
        <p>&copy; Company | Privacy | Terms</p>
 
      </div>
