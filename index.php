<?php
// Read the variables sent via POST from our API
$sessionId   = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
$phoneNumber = $_POST["phoneNumber"];
$text        = $_POST["text"];

if ($text == "") {
    // This is the first request. Note how we start the response with CON
    $response  = "CON ~ Emergency Report Sytem ~\n Select your emergency from below\n";
    $response .= "1. Crime (Robbery/ Assault) \n";
    $response .= "2. Fire\n";
    $response .= "3. Medical emergency\n";
    $response .= "4. Road Accident\n";
    $response .= "5. Domestic Violence\n";
    $response .= "6. Other\n";

} else if ($text == "1") {
    // Business logic for first level response
    $response = "CON What is your location \n";
    $response .= "1. Nairobi  \n";
    $response .= "2. Chuka \n";
    $response .= "3. Embu \n";

} 

else if ($text == "2") {    
  $response = "CON What is your location \n";
  $response .= "1. Nairobi  \n";
  $response .= "2. Chuka \n";
  $response .= "3. Embu \n";

}

else if ($text == "3") {
    
  $response = "CON What is your location \n";
  $response .= "1. Nairobi  \n";
  $response .= "2. Chuka \n";
  $response .= "3. Embu \n";

}

else if ($text == "4") {
  
  $response = "CON What is your location \n";
  $response .= "1. Nairobi  \n";
  $response .= "2. Chuka \n";
  $response .= "3. Embu \n";

}

else if ($text == "5") {
 
  $response = "CON What is your location \n";
  $response .= "1. Nairobi  \n";
  $response .= "2. Chuka \n";
  $response .= "3. Embu \n";

}

else if ($text == "6") {
  
  $response = "CON What is your location \n";
  $response .= "1. Nairobi  \n";
  $response .= "2. Chuka \n";
  $response .= "3. Embu \n";

}

else if($text == "1*1") { 
    // This is a second level response where the user selected 1 in the first instance
    $accountNumber  = "ACC1001";

    // This is a terminal request. Note how we start the response with END
    $response = "END Your account number is ".$accountNumber;

}

// Echo the response back to the API
header('Content-type: text/plain');
echo $response;