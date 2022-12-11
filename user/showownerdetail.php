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
         <li><a href="contact.php">Contact Us</a></li>
         <li><a href="feed.php">Feedbacks</a></li>
    </div>
  </div>
</nav>
<?php
            include 'connect.php';
$sql="SELECT * from owner WHERE o_id='".$_REQUEST['search']."'";
$result=  mysqli_query($link, $sql);
?>
<div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
          <th>Owner I.D</th>
        <th>Owner Name</th>
        <th>Contact 1</th>
        <th>Contact 2</th>
        <th>Email</th>
        <th>Address</th>
      </tr>
    </thead>

<?php
foreach($result as $value){
    echo"<tbody>";
    echo"<tr>";
    echo"<td>".$value['o_id']."</td><td>".$value['o_name']."</td><td>".$value['o_contact1']."</td><td>".$value['o_contact2']."</td><td>".$value['o_email']."</td><td>".$value['o_address']."</td>";
    echo"</tr>";
    echo"</tbody>";
}
?>
  </table>
</div>

