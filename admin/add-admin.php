<?php include('partials/menu.php'); ?>

<div class="main-content">
<div class="wrapper">
<h1> Add Admin </h1>
<br> <br>



<form action=""  method="POST">
<table class="tbl-30">
<tr>

<td>Full Name: </td>
<td><input type="text" name="full_name" placeholder="Enter Your Name"></td>
</tr>
<tr>
<td>Username: </td>
<td>
<input type="text" name= "username" placeholder="Your Username">

</td>
</tr>
<tr>
<td>Password:</td>
<td>
<input type="password" name="password" placeholder="Your password">
</td>
</tr>
<td colspan="2">
<input type="submit" name="submit" value="Add Admin" class="btn-secondary">

</td>
</tr>

</table>

 </form>
</div>


</div>


<?php include('partials/footer.php'); ?>                                          

<?php
if(isset($_POST['submit']))
{
//echo "Button Clicked";
 $full_name = $_POST['full_name'];
 $username = $_POST['username'];
  $password = md5($_POST['password']);
// sql query save data in database
$sql = "INSERT INTO tbl_admin SET fullname='$full_name', username='$username',password='$password' ";

// execute query and saving data in databse
$res = mysqli_query($conn,$sql) or die(mysqli_error());
//check whether the data is inserted or not
if($res==TRUE)
{
//echo "Data  Inserted";
$_SESSION['add'] = "Admin Added Succesfully";
header("location:".SITEURL.'admin/add-admin.php');
}
else{
  //echo "Fail to insert data";
  $_SESSION['add'] = "Failed to add admin";
  header("location:".SITEURL.'admin/add-admin.php');
}
}

?>