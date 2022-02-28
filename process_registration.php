<?php
 
include('connect.php');
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
$username = $_POST['username'];
$phone = $_POST['phone'];


/*if (isset($_POST['firstname']))	{$firstname = $_POST['firstname'];} else {$firstname ='';} 
if (isset($_POST['lastname']))	{$lastname = $_POST['lastname'];} else {$lastname ='';} 
if (isset($_POST['email']))	{$email = $_POST['email']; } else {$email ='';}			  
if (isset($_POST['password']))	{$password = $_POST['password']; } else {$password ='';} 
if (isset($_POST['username']))	{$username = $_POST['username'];} else {$username ='';}  
if (isset($_POST['phone']))	{$phone = $_POST['phone'];} else {$phone ='';}*/				







$insert = mysqli_query($db,"INSERT INTO `userdetails` (`member_id`, `firstname`, `lastname`, 
`email`, `username`, `password`, `phone`) 
VALUES (NULL, '$firstname', '$lastname', '$email', '$username', '$password', '$phone')");





if (!$insert)

{
echo $message = 'Sorry. There seems to be an error. You have not been succesfully registered 
- please try again later.';
exit;
}

else
{
	$message = 'Congratulations! You have been successfully registered!';
	require_once('registered.php');
}
?>

