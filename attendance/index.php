//this is the index page which is the frontend . this is wgere the WYSIWYG is wriiten
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Tick your name</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
	require('db.php');
    // If form submitted, insert values into the database.
    if (isset($_REQUEST['username'])){
		$username = stripslashes($_REQUEST['username']); // removes backslashes
		$username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
		$matricule = stripslashes($_REQUEST['matricule']);
		$matricule = mysqli_real_escape_string($con,$matricule);
		$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `studspresent` (username, matricule, trn_date) VALUES ('$username','$matricule', '$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
           echo "<div class='success'>
<div class='sucmsg'>
<h2>SUCCESS!</h2><hr>
<h3>You have successfully marked your name present for today.</h3><br/>
<p><a href='/dashboard/index.html'>BACK</a></p>
</div>
</div>";
        }
    }else{
?>
<div class="formcontainer">  
<div class="form">
<fieldset>
<legend>ATTENDANCE</legend>
<form name="registration" action="" method="post">

<label><span class="field"> Name :</span>
<input type="text" name="username" placeholder="Your Name" required />
</label><br>

<label><span class="field">Matricule :</span>
<input type="matricule" name="matricule" placeholder=" Your Matricule" required />
</label><br>
<input type="submit" class="btn" name="submit" value="send name" />
</form>
</fieldset>
</div>
</div>
<?php } ?>
</body>
</html>
