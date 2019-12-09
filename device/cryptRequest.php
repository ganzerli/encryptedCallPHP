<?php

// device has a fixed devid and changeble related (related change not implenmented yet)
$DEVID = "938dh938hd39d283";
$RELATED='1234567891011121'; // must be 16 bytes

//related = findRelated($DEVID){

//}
 // ask password to user
$userPassword = "LJHWFD9P2H";
$text = "https://www.github.com/ganzerli";

// crypting

// Store the cipher method 
$ciphering = "AES-128-CTR"; 
// Use OpenSSl Encryption method 
$iv_length = openssl_cipher_iv_length($ciphering); 
$options = 0; 
// Non-NULL Initialization Vector for encryption 
$encryption_iv = $RELATED;
// Store the encryption key 
$encryption_key = $DEVID;
// Use openssl_encrypt() function to encrypt the data 
$encryption1 = openssl_encrypt($userPassword, $ciphering, 
			$encryption_key, $options, $encryption_iv); 

//
$encryption_key = $userPassword;
$encryption_iv = $RELATED;// server has related

$encryption2 = openssl_encrypt($text, $ciphering, 
      $encryption_key, $options, $encryption_iv); 


// print data encripted
echo "ENCRIPTED DATA    ";
echo "  PASSWORD    ";
echo $encryption1;
echo "   REQUEST    ";
echo $encryption2;


/////  END DEVICE
