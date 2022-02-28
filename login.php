<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>XYZ Airline Flight Schedule Portal</title>
</head>
<body>
    <!-- create a class showcase which encapulates it all -->
<section class="showcase">


<div align="center">
<video src="airplanevideo.mp4" muted loop autoplay></video>
<form  role="form" method="POST" action="process_login.php">

<!-- create a class in showcase to reveal what you want to be untop with css  -->
<div class = "loginform"> 
<div align="center"><h2>Login</h2></div>

<br />

<table width="95%" border="0" align="center">
<tr>
<td><div align="center">
<input id="username" type="text" class="form-control" name="username" placeholder="Username">
</div></td>
</tr>

<tr>
<td><div align="center">
<input id="password" type="password" class="form-control" name="password" placeholder="Password">
</div></td>
</tr>

<tr>
<td colspan="2" align="center"><span style="float:center;"><button type="login" 
class="btn btn-custom" style="background-color:#060; font-weight:bold; color:#FFF;">login</button></span>
</td>
</tr>
</table>
</div>
<!-- create a class in showcase to reveal what you want to be untop with css ends here  -->
</section>
<!-- showcase class ends here -->
</form>
</body>

<style>
    /* very important for video full screen */
    *{
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }
.showcase{
    position:absolute;
    right: 0;
    width: 100%;
    min-height: 100vh;
    padding-top: 150px;
    align-items: center;
    background: black;
    color: black;
    z-index: 2;
}

.showcase video{
    position: absolute;
    top:0;
    left:0;
    width:100%;
    height:100%;
    object-fit: cover;

}

.loginform{
position: relative;
z-index: 4;

}
</style>
</html>