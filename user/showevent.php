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
        <li><a href="feed.php">Feedbacks</a></li>
    </div>
  </div>
</nav>
            <div class="panel-footer">
 
        <p>&copy; Company | Privacy | Terms</p>
 
      </div>
            <?php
            include 'connect.php';
            $query="SELECT * FROM event";
            $result=  mysqli_query($link, $query);
            foreach ($result as $value);
            ?>
<div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
          <th>Event I.D</th>
        <th>Event Title</th>
        <th>Event Type</th>
        <th>Location</th>
        <th>Start Date</th>
        <th>End Date</th>
        <th>Your Name</th>
        <th>Email</th>
        <th>Contact 1</th>
        <th>Contact 2</th>
        <th>Update</th>
        <th>Delete</th>
      </tr>
    </thead>

<?php

    echo"<tbody>";
    echo"<tr>";
    echo"<td>".$value['e_id']."</td><td>".$value['title']."</td><td>".$value['type']."</td><td>".$value['location']."</td><td>".$value['time1']."</td><td>".$value['time2']."</td><td>".$value['name']."</td><td>".$value['email']."</td><td>".$value['contact1']."</td><td>".$value['contact2']."</td><td><a href='editevent.php?id=".$value['e_id']."'>Edit</a></td><td><a href='delevent.php?id=".$value['e_id']."'>Delete</a></td>";
    echo"</tr>";
    echo"</tbody>";

?>
  </table>
</div>

