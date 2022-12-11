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
                <h2 style="margin-left:50px;">Enter complete information of house and click 'Add House' button.</h2>
                <form role="form" action="#" method="POST">
      <div class="form-group">
      <label for="hno">House Number:</label>
      <input type="number" name="hnumber" class="form-control" id="hno" placeholder="Enter House Number">
    </div>
      <div class="form-group">
      <label for="area">Area:</label>
      <input type="text" name="ar" class="form-control" id="area" placeholder="Enter Area">
    </div>
    <div class="form-group">
      <label for="length">Length:</label>
      <input type="number" name="len" class="form-control" id="length" placeholder="Enter Length">
    </div>
    <div class="form-group">
      <label for="width">Width:</label>
      <input type="number" name="wid" class="form-control" id="width" placeholder="Enter Width">
    </div>
      <div class="form-group">
  <label for="sel1">Select Stories:</label>
  <select class="form-control" name="stories" id="sel1">
    <option>Select Story</option>
                        <option>Single</option>
                                <option>Double</option>
                                <option>Triple</option>
  </select>
</div>
      <div class="form-group">
      <label for="room">Bedrooms:</label>
      <input type="number" name="bedroom" class="form-control" id="room" placeholder="Enter Bedrooms">
    </div>
      <div class="form-group">
      <label for="bath">Baths:</label>
      <input type="number" name="bath" class="form-control" id="bath" placeholder="Enter Baths">
    </div>
      <div class="form-group">
      <label for="kit">Kitchens:</label>
      <input type="number" name="kitchen" class="form-control" id="kit" placeholder="Enter Kitchens">
    </div>
    <div class="form-group">
      <label for="store">Stores:</label>
      <input type="number" name="store" class="form-control" id="store" placeholder="Enter Stores">
    </div>
      <div class="form-group">
      <label for="gar">Garages:</label>
      <input type="number" name="garage" class="form-control" id="gar" placeholder="Enter Garages" >
    </div>
      <div class="form-group">
      <label for="img">Image:</label>
      <input type="file" name="img"  id="img">
    </div>
      
                    <button style="background-color: #cccccc;border: none;width: 300px;margin-left: 300px;" class="btn btn-lg btn-primary btn-block" type="submit" value="update">Update</button>
  </form>
            </div>

<?php
include 'connect.php';
$query="SELECT * FROM flats WHERE h_id=".$_GET['hid'];
if(mysqli_query($link, $query)){
    $sql="UPDATE flats SET h_no='".$_REQUEST['hnumber']."' , area='".$_REQUEST['ar']."', length='".$_REQUEST['len']."', width='".$_REQUEST['wid']."', stories='".$_REQUEST['stories']."', bedrooms='".$_REQUEST['bedroom']."', baths='".$_REQUEST['bath']."', kitchen='".$_REQUEST['kitchen']."', store='".$_REQUEST['store']."', garage='".$_REQUEST['garage']."' WHERE h_id=".$_GET['hid'] ;
    if(mysqli_query($link, $sql)){
    echo '<script>alert("Successfully Updated");</script>';
    }
   
}
?>



