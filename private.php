<?php
include 'config.php';

// Check if the user is logged in

if(!isset($_SESSION['username']))
{
header("Location: index.html");
exit;
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
 <HEAD>
  <TITLE>Private Page</TITLE>
  <META name="Author" Content="Bit Repository">
  <META name="Keywords" Content="private">
  <META name="Description" Content="Private Page">
</HEAD>

 <BODY>

<CENTER>Welcome, <?php echo $_SESSION['username']; ?> | <a href="logout.php">Logout</a><br /><br />

This is your private page. You can put specific content here.
</CENTER>
 </BODY>
</HTML>