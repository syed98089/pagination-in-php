<?php
    session_start();
    if (!isset($_SESSION['login'])) {

    	header('location:adminlogin.php');
    	
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Dashboard </title>
</head>
<style type="text/css">
	body{
		margin: 0;
	}
	div.header{

		 background-color: rgb(3,43,3);
		 align-items: center;
		 display: flex;
		 justify-content: space-between;
		 color: white;
		 padding-left: 500px;
	}
	

</style>
<body>

<div class="header">
<h1>Welcome to Dashboard page..<?php echo $_SESSION['login']; ?></h1>
<form method="POST">
<button  type="submit" name="logout">Logout</button>
</form>
</div>

<?php
if (isset($_POST['logout'])) {
	session_destroy();
	header('location:adminlogin.php');
}
?>
<br>
<?php include 'conn.php';
$s1="select * from form_details";
$s2=mysqli_query($con,$s1);

?>
<table width="50%" border="1px solid black" align="center">
	<tr>
		<th>id</th>
		<th>fname</th>
		<th>lname</th>
		<th>checkin</th>
		<th>checkout</th>
		<th>mobile</th>
		<th>rooms</th>
	</tr>
     	<?php
     	while($s3=mysqli_fetch_Array($s2)){
      ?>
      <tr>
      <td><?php echo $s3['id'];?></td>
      <td><?php echo $s3['fname'];?></td>
      <td><?php echo $s3['lname'];?></td>
      <td><?php echo $s3['checkin'];?></td>
      <td><?php echo $s3['checkout'];?></td>
      <td><?php echo $s3['mobile'];?></td>
      <td><?php echo $s3['room'];?></td>
     </tr>
 <?php
 }
 ?>
</table>
</body>
</html>