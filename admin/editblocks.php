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
    <div class="container">
                <h2 style="margin-left:50px;">Enter blocks information and click 'Add Block' button.</h2>
                <form role="form" action="#" method="POST">
      <div class="form-group">
      <label for="btitle">Block Title:</label>
      <input type="text" name="blocktitle" class="form-control" id="btitle" placeholder="Enter block title">
    </div>

<div class="form-group">
      <label for="bno">Block Number:</label>
      <input type="text" name="bnumber" class="form-control" id="bno" placeholder="Enter block number">
    </div>
                    <button style="background-color: #cccccc;border: none;width: 300px;margin-left: 300px;" class="btn btn-lg btn-primary btn-block" type="submit" value="ADD">Add Block</button>
    
    </form>
    </div>
<?php
include 'connect.php';
$query="SELECT * FROM blocks WHERE b_id=".$_GET['id'];
if(mysqli_query($link, $query)){
    $sql="UPDATE blocks SET b_title='".$_REQUEST['blocktitle']."' , b_no='".$_REQUEST['bnumber']."' WHERE b_id=".$_GET['id'] ;
    mysqli_query($link, $sql);
    header("location:showblocks.php");
}
?>

