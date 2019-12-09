DEVICE HAS AS INPUT THE URL AND A PASSWORD FOR THE REQUEST FROM USER
in cryptRequest.php insert url and password, will encrypt them for the server call.
in / computer insert the values given as result after cripting, the computer makes a call to the server.
the server gets the crypted request, decrypt it and calls the URL, sends back resource from url encodded.
the device then gets as input the crypted request of the server and decrypts it to display
...........................................................................
get the password and url cripted from device/cryptRequest.
start computer on localhost:8000 , server on localhost:8001 , and (end) device on localhost:8002
insert url and a password for the call in the form and get the url encripted back, device will decript the resource.