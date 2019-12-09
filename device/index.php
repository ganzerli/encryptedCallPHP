<?php
$DEVID = "938dh938hd39d283";
$RELATED='1234567891011121'; // must be 16 bytes

//related = findRelated($DEVID){

//}
 // ask password to user
$userPassword = "LJHWFD9P2H";

//////////////// decription from server
$ciphering = "AES-128-CTR"; 
$options = 0;
// decription server respones
$decryption_iv = $RELATED; 
// Store the decryption key 
$decryption_key = $userPassword; 
// Use openssl_decrypt() function to decrypt the data
if(isset($_POST['res'])){

    $encryption_servresponse = $_POST['res'];
    $decryptionfromserv = openssl_decrypt ($encryption_servresponse, $ciphering, 
	$decryption_key, $options, $decryption_iv); 

    echo $decryptionfromserv;

echo "server encripted text  found";

}else{
    echo "server encripted text not found";
}


