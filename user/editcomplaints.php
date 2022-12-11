
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
    </div>
  </div>
</nav>
    <div class="container">
                <h2 style="margin-left:50px;">Enter complete information about complaint and click 'Add Complaint' button.</h2>
                <form role="form" action="#" method="POST">
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

<?php
include 'connect.php';
$sql="SELECT * FROM complaints WHERE comp_id=".$_GET['id'];
if(mysqli_query($link, $sql)){
    $query="UPDATE SET title='".$_REQUEST['ctitle']."',complaint='".$_REQUEST['comp']."',date='".$_REQUEST['date1']."',proceeding_date='".$_REQUEST['date2']."',feedback='".$_REQUEST['feed']."' WHERE comp_id=".$_GET['id'];
    mysqli_query($link, $query);
    header("location:showcomp.php");
}

?>



