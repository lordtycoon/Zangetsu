<!DOCTYPE html>
<html>
<head>
<meta http-equiv="refresh" content="5; URL=page.php">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
$("#refreshButton").click(function(e){
 
  e.preventDefault();
 
 setTimeout(function(){
  window.location.reload(1);
}, 10000);
 
});
</script>
</head>
<body bgcolor="#909090">
<center>
<h1>Eagle</h1>
<img src="eagle.png">
<img src="eagle.png">
<img src="eagle.png">
<img src="eagle.png">
<img src="eagle.png">
<img src="eagle.png">
<img src="eagle.png">
<img src="eagle.png">
<img src="eagle.png">
<img src="eagle.png">
<br>
<button><a id="refreshButton" href="page.php">Refresh</a></button>
</center>
</body>
</html>