<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="../user/css/bootstrap.min.css" rel="stylesheet">
                <script src="../user/js/bootstrap.min.js" type="text/javascript"></script>
                <link href="../user/stylelogin.css" rel="stylesheet" type="text/css"/>
                <link href="../user/style.css" rel="stylesheet" type="text/css"/>
		<link href="../user/css/styles.css" rel="stylesheet">
                <script src="../user/gen_validatorv4.js" type="text/javascript"></script>
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

        <li><a href="contact.php">Contact Us</a></li>
        <li><a href="feed.php">Feedbacks</a></li>
    </div>
  </div>
</nav>
    <div class="container">
                <h2 style="margin-left:50px;">Enter contact information  and click 'Send' button.</h2>
                <form role="form" id="complaint" action="../user/addcontact.php" method="POST">
      <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" name="conname" class="form-control" id="name" placeholder="Enter your name" required autofocus>
    </div>
       <div class="form-group">
      <label for="mail">Email:</label>
      <input type="email" name="conemail" class="form-control" id="mail" placeholder="Enter your email" required autofocus>
    </div>
    <div class="form-group">
  <label for="comment">Comment:</label>
  <textarea class="form-control" name="comment" rows="5" id="comment"placeholder="Enter your comment..."></textarea>
</div>
      <button style="background-color: #cccccc;border: none;width: 300px;margin-left: 300px;" class="btn btn-lg btn-primary btn-block" type="submit">Send</button>
  </form>
    </div>


<div class="panel-footer">

        <p>&copy; Company | Privacy | Terms</p>

      </div>
