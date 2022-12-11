
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
                <h2 style="margin-left:50px;">Enter complete information of your event and click 'Send Request' button.</h2>
                <form role="form"action="#" method="POST" >
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
      <input type="number" name="con1" class="form-control" id="con1" placeholder="Enter Contact 1" required autofocus>
    </div>
    <div class="form-group">
      <label for="con2">Contact 2:</label>
      <input type="number" name="con2"  class="form-control" id="con2" placeholder="Enter Contact 2" required autofocus>
    </div>
    
      <button style="background-color: #cccccc;border: none;width: 300px;margin-left: 300px;" class="btn btn-lg btn-primary btn-block" type="submit">Send Request</button>
  </form>
    </div>

<?php
include'connect.php';
$query="SELECT * FROM event WHERE e_id=".$_GET['id'];
if(mysqli_query($link, $query)){
   $sql="UPDATE event SET title='".$_REQUEST['etitle']."',type='".$_REQUEST['etype']."',location='".$_REQUEST['elocation']."',time1='".$_REQUEST['edate1']."',time2='".$_REQUEST['edate2']."',name='".$_REQUEST['name']."',email='".$_REQUEST['email']."',contact1='".$_REQUEST['con1']."',contact2='".$_REQUEST['con2']."'WHERE e_id=".$_GET['id'];
   mysqli_query($link, $sql);
       header("location:showevent.php");

}
?>
    





