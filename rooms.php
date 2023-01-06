<?php

session_start();

//Get parameters
if(isset($_POST['name'])){
$_SESSION['name'] = $_POST['name'];
}
$name = $_SESSION['name'];


//connecting to database
include 'db_connect.php';


?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0 auto;
  max-width: 800px;
  padding: 0 20px;
}

.container {
  border: 2px solid #dedede;
  background-color: #f1f1f1;
  border-radius: 5px;
  margin: 10px 0;
}

.darker {
  border-color: #ccc;
  background-color: #ddd;
}

.container::after {
  content: "";
  clear: both;
  display: table;
}

.time-right {
  float: right;
  color: #aaa;
}

.time-left {
  float: left;
  color: #999;
}
.anyclass{
    height: 350px;
    background-color:#f1f1f1;
    overflow-y:scroll;
    background-image: url("img3.jpg");
}
input {
	height: 40px;
	width: 90%;
	font-size: 16px;
	padding: 0 10px;
	border-radius: 5px;
	border: 1px solid #ccc;
}
button{
	height: 40px;
	border: none;
	color: #fff;
	font-size: 17px;
	background:#024488;
	border-radius: 5px;
	cursor: pointer;
	margin-top: 13px;
}
.logout{
  margin: 20px;
}

</style>
</head>
<body>

<form action="logout.php">
<h2>User -- <?php echo $_SESSION['name'];  ?>
<button class="logout">Logout</button></h2>
</h2>



<div class="container">
  <div class="anyclass">
  
  </div>
</div>



<input type = "text" class="input" name = "usermsg" id="usermsg" placeholder="Add message">
<button class="btn btn-default" name="submitmsg"  id="submitmsg" >Send</button> 

<script src="https://code.jquery.com/jquery-3.6.3.min.js" 
integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous">
</script>
<script type="text/javascript">

    //checking for new message very 1 second,agar hoga to display kara dega
    setInterval(runFunction,1000);
    function runFunction()
    {
        $.post("htcont.php",{room: '<?php echo $name ?>'},
        function(data,status)
        {
            document.getElementsByClassName('anyclass')[0].innerHTML = data;
        }
        )
    }
    //code for using enter key to send msg
    // Get the input field
     var input = document.getElementById("usermsg");

// Execute a function when the user presses a key on the keyboard
     input.addEventListener("keypress", function(event) {
  // If the user presses the "Enter" key on the keyboard
      if (event.key === "Enter") {
    // Cancel the default action, if needed
      event.preventDefault();
    // Trigger the button element with a click
     document.getElementById("submitmsg").click();
  }
});
    //if user submit the form
    $("#submitmsg").click(function()
    {
      var clientmsg = $("#usermsg").val();
      $.post("postmsg.php",{text: clientmsg , room: '<?php echo 'ram' ?>',
      name: '<?php echo $name ?>'},
      function(data,status)
      {
        document.getElementsByClassName('anyclass')[0].innerHTML = data;
        $("#usermsg").val("");
      });
      return false;
    });

</script>

</body>
</html>
