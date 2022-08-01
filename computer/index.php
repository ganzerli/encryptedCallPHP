
<?php
if(isset($_POST['pass'],$_POST['url'])){
    $pass = $_POST['pass'];
    $url = $_POST['url'];
    echo $pass."   pass and url   ".$url;
}else{
    echo "no info from method";
}
?>


<form action='http://localhost:8001' method="POST">
  passwprd:<br>
  <input type='text' name='pass' value='criptedpassword'>
  <br>
  URL:<br>
  <input type='text' name='url' value='criptedtext'>
  <br><br>
  <input type='submit' value='Submit'>
</form> 
<br>
<div id='demo'></div>

