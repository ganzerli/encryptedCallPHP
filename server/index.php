<?php

$DEVID = "938dh938hd39d283";
$RELATED='1234567891011121'; // must be 16 bytes

if(isset($_POST['pass'],$_POST['url'])){
    $pass = $_POST['pass'];
    $url = $_POST['url'];
    echo $pass."   pass and url   ".$url;
}else{
    echo "no info from method";
}
// Non-NULL Initialization Vector for decryption 
$decryption_iv = $RELATED; 
// Store the decryption key 
$ciphering = "AES-128-CTR"; 
$options = 0;
$decryption_key = $DEVID; 
// Use openssl_decrypt() function to decrypt the data 
$decryption1_password=openssl_decrypt ($pass, $ciphering, 
    $decryption_key, $options, $decryption_iv); 

  echo "passwprd is ".$decryption1_password;

// Non-NULL Initialization Vector for decryption 
$decryption_iv = $RELATED; 
// Store the decryption key 
$decryption_key = $decryption1_password; 
// Use openssl_decrypt() function to decrypt the data 
$decryption2_text =openssl_decrypt ($url, $ciphering, 
		$decryption_key, $options, $decryption_iv); 

echo $decryption2_text;

echo "URL is ".$decryption2_text;








////////////////////////////////////////////////////
////////////////////////////////////////////////////
////////////////////////////////////////////////////
////////////////////////////////////////////////////


//curl text

$URL = $decryption2_text;
$res_extension = ".html";
$ch = curl_init(); //("https://www.google.com/");
curl_setopt($ch, CURLOPT_URL , $URL);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION , 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER , 1);
curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, false);
//curl_setopt($ch, CURLOPT_SSLVERSION,3);

$response = curl_exec($ch);
curl_close($ch);

//echo $response;




//// crypt response with password


$encryption_key = $decryption1_password;
$encryption_iv = $RELATED;// server has related

$encryption_servresponse = openssl_encrypt($response, $ciphering, 
      $encryption_key, $options, $encryption_iv); 

echo "<div id='response'>".$encryption_servresponse ."</div>";

?>

<form action="http://localhost:8002" method="POST" id="form1">
    <input id='inputFld' type='text' name='res' value=''>
</form>

<script>

const responseNode = document.getElementById('response');
const text = responseNode.innerHTML;
const input = document.getElementById('inputFld');
input.value = text;
const form = document.getElementById('form1');
form.submit();

</script>
