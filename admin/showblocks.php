<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
                <script src="js/bootstrap.min.js" type="text/javascript"></script>
                <link href="stylelogin.css" rel="stylesheet" type="text/css"/>
		
		<link href="css/styles.css" rel="stylesheet">
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
<?php
include 'connect.php';
$query="SELECT * FROM blocks";
$result=  mysqli_query($link, $query);
?>
<div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
          <th>Block I.D</th>
        <th>Block Title</th>
        <th>Block Number</th>
        <th>Delete</th>
      </tr>
    </thead>

<?php
foreach($result as $value){
    echo"<tbody>";
    echo"<tr>";
    echo"<td>".$value['b_id']."</td><td>".$value['b_title']."</td><td>".$value['b_no']."</td><td><a href='delblocks.php?id=".$value['b_id']."'>Delete</a></td>";
    echo"</tr>";
    echo"</tbody>";
}
?>
  </table>
</div>