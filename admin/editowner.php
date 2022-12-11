<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Bootstrap 3 Fixed Width Example</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
                <script src="js/bootstrap.min.js" type="text/javascript"></script>
                <link href="stylelogin.css" rel="stylesheet" type="text/css"/>
		
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
        <li><a href="blocks.php">Blocks</a></li>
      <li><a href="owner.php">Owners</a></li>
      
      <li><a href="complaints.php">Complaints</a></li>
      <li><a href="showevent.php">Show Event Requests</a></li>
      <li><a href="showfeedback.php">Feedbacks</a></li>
    </div>
   
        
  </div>
</nav>
    <div class="container">
                <h2 style="margin-left:50px;">Enter complete information of owner and click 'Add Owner' button.</h2>
                <form role="form" action="#" method="POST">
      <div class="form-group">
      <label for="oname">Owner Name:</label>
      <input type="text" name="oname" class="form-control" id="oname" placeholder="Enter Owner Name">
    </div>
      <div class="form-group">
      <label for="con1">Contact 1:</label>
      <input type="text" name="con1" class="form-control" id="con1" placeholder="Enter Contact 1">
    </div>
    <div class="form-group">
      <label for="con2">Contact 2:</label>
      <input type="text" name="con2" class="form-control" id="con2" placeholder="Enter Contact 2">
    </div>
    <div class="form-group">
      <label for="Email">Email Address:</label>
      <input type="email" name="email" class="form-control" id="Email" placeholder="Enter Email Address">
    </div>
       <div class="form-group">
  <label for="add">Address:</label>
  <textarea class="form-control" rows="5" id="add"  name="oadd" placeholder="Enter address..."></textarea>
</div>
       <div class="form-group">
      <label for="cnic">CNIC:</label>
      <input type="text" name="cnic" class="form-control" id="cnic" placeholder="Enter CNIC">
    </div>
       <div class="form-group">
      <label for="img">Image:</label>
      <input type="file" name="img"  id="img" placeholder="Enter Email Address">
    </div>
      <button style="background-color: #cccccc;border: none;width: 300px;margin-left: 300px;" class="btn btn-lg btn-primary btn-block" type="submit">Add Owner</button>
  </form>
    </div>
    
 <?php
 include 'connect.php';
 $query="SELECT * FROM owner WHERE o_id=".$_GET['id'];
 if(mysqli_query($link, $query)){
     $sql="UPDATE owner SET o_name='".$_REQUEST['oname']."',o_contact1='".$_REQUEST['con1']."',o_contact2='".$_REQUEST['con2']."',o_email='".$_REQUEST['email']."',o_address='".$_REQUEST['oadd']."',o_cnic='".$_REQUEST['cnic']."' WHERE o_id=".$_GET['id'];
 if(mysqli_query($link, $sql)){
     header("location:showowner.php");
 }
     
 }
 ?>




