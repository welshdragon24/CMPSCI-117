<?php
    session_start();
?>
<!DOCTYPE html>
<html>
	<head>
	<title>POTATO-PC</title>
	
	
		</head>
<style>
body {

  background: url(webssyy.png);
  background-repeat: no-repeat;
  background-size: cover;
  background-attachment: fixed;
  margin: 0;
  height: 100%;
  

}
.potato {
	width: 50%;
	height: 100%;
	margin: auto;
	overflow: auto;
	margin-top: 7%;
	background-color: white;
	padding: 10px;
	text-align: center;
	}
.potato img{
	border: 5px solid white;
	margin-bottom: 50px;
	overflow: auto;
	margin: auto;
	display: block;
	}
.pta {
	margin-top: 100px;
	margin-bottom: 50px;
	font-size: 50px;
	font-family:Courier New;
	color: white;
	padding: 5px;
	background-color: #80694d;
	text-decoration: none;
	position: relative;
	
	}
.log{
	   background: rgba(0, 0, 0, 0.6);
    width: 100%;
    height: 100%;
    position: fixed;
    top: 0;
    display: none;
    justify-content: center;
    align-items: center;
    text-align: center;
	}
.inlog{
	width: 40%;
    background: white;
    padding: 40px;
    border-radius: 10px;
    position: relative
	}
.inlog input{
	width: 40%;
    background: white;
    padding: 5px;
	display: block;
    border-radius: 10px;
    position: relative;
	margin: auto;
	margin-bottom: 10px;
	font-size: 15px;
	
	}
.pots{
	font-size: 30px;
	font-family:Courier New;
	text-decoration: none;
	background-color: #80694d;
	color: white;
	font-weight: bold;
	padding: 6px;
	}
.exit{
	size: 20px;
	background-color: #80694d;
	color: white;
	position: absolute;
	top: 5px;
	right: 5px;
	padding: 5px;
	}	
</style>
<body>
<div class = "potato">
<img src = "meme.jpg">
<p style = "font-family:Courier New">
    <?php
        if(!empty($_SESSION['message'])) {
            $message = $_SESSION['message'];
            echo $message;
            // echo $_SESSION['message'] . "<br> <br>";
            unset($_SESSION['message']);
        }
    ?>
</p>
<br><br>
            
	<a href = "#" class = "pta" id = "ptc">
	LOGIN
		</a>
		
</div>
	<div class = "log">
		<div class = "inlog">
		<h1>POTATO-PC</h1>
		<a href = "#" class = "exit">
	BACK
	</a>
		
		<form action="auth.php" method="post">

			Username: <input type="text" name="username" id="username"><br>
			Password: <input type="password" name="password" id="password"><br>

            <input type="submit" value="Login">
            

		</form>
		<!--<input type="text" placeholder="Username">
        <input type="password" placeholder="Password">
			<a href = "test.html" class = "pots">
			LOGIN
			</a>-->
			</div>
	</div>
<script>
	document.getElementById("ptc").addEventListener("click", function ()
		{document.querySelector(".log").style.display = "flex"; })
		document.querySelector(".exit").addEventListener("click", function ()
        {document.querySelector(".log").style.display = "none"; })
	</script>	
</body>

</html>