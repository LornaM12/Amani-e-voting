<?php
require('connection.php');

session_start();
//If your session isn't valid, it returns you to the login screen for protection
if(empty($_SESSION['member_id'])){
 header("location:access-denied.php");
}
?>
<html><head>
<link href="css/user_styles.css" rel="stylesheet" type="text/css" />
</head><body bgcolor="tan">

<center><b><font color = "brown" size="6">Amani eVoting and Polling System</font></b></center><br><br>
<div id="page">
<div id="header">
<h1>HOMEPAGE</h1>
<a href="student.php">Home</a> | <a href="vote.php">Current Polls</a> | <a href="manage-profile.php">Manage My Profile</a> | <a href="changepass.php">Change Password</a>| <a href="logout.php">Logout</a>
</div>
<div id="container">
<p> Click the tab current polls to start voting session.</p>
<em>Steps to vote<em>
<ul>
<li>Select position from the drop down menu</li>
<li>click on candidates to display contestants for the positions</li>
<li>Click on the circle next to preferred candidate</li>
<li>Confirm your candidate's name and click ok from the prompt</li>
<li> proceed to the next position</li>
</ul>
<p> You can only vote once for a specific position.</p>
<p> After confirmation, the results are captured and you can not undo the process. </div>
<div id="footer">
<div class="bottom_addr">&copy;Amani e-voting System 2022.</div>
</div>
</div>
</body></html>