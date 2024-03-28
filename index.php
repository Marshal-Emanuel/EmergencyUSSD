<?php
// Read the variables sent via POST (from USSD simulator) from Africas Talking API
$sessionId   = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
$phoneNumber = $_POST["phoneNumber"];
$text        = $_POST["text"];

//Start the response with CON
//End response with END
function mainMenu(){
  $response  = "CON ~ Emergency Report System ~\n Select your emergency from below\n";
    $response .= "1. Crime (Robbery/ Assault) \n";
    $response .= "2. Fire\n";
    $response .= "3. Medical emergency\n";
    $response .= "4. Road Accident\n";
    $response .= "5. Domestic Violence\n";
    $response .= "6. Other\n";
    return $response;
}
function location(){
  $response = "CON What is your location \n";
  $response .= "1. Nairobi  \n";
  $response .= "2. Chuka \n";
  $response .= "3. Embu \n";
  return $response;
}
function nairobi(){
  $response = "CON What is your sub-location \n";
  $response .= "1. Lavington  \n";
  $response .= "2. Upper Hill \n";
  $response .= "3. Langata \n";
  return $response;
}
function chuka(){
  $response = "CON What is your sub-location \n";
  $response .= "1. Chuka Town  \n";
  $response .= "2. Chogoria \n";
  $response .= "3. Ndagani \n";
  return $response;
}

function embu(){
  $response = "CON What is your sublocation \n";
  $response .= "1. Runyenjes  \n";
  $response .= "2. Mbeeere South \n";
  $response .= "3.c Manyatta \n";
  return $response;
}

if ($text == "") {
    $response = mainMenu();
} 

else if ($text == "1") {
    // Business logic for first level response
    $report = "crime";
    $response = location();

} 

else if ($text == "2") {    
  $report = "fire";
  $response = location();
}

else if ($text == "3") {
   $report = "Medical Emergency";
   $response = location();

}

else if ($text == "4") {
  
  $report = "Road Accident";
  $response = location();

}

else if ($text == "5") {
  $report = "Domestic Violence";
  $response = location();
}

else if ($text == "6") {  
  $report = "Other";
  $response = location();

}

else if($text == "1*1") { 
  $location = "Nairobi";
  $response = nairobi();
  
}

else if($text == "1*2") { 
  $location = "Chuka";
  $response = chuka();
  
}
else if($text == "1*3") { 
  $location = "Embu";
  $response = embu();
  
}
else if($text == "1*1*1"){
  $sublocation = "Lavington";
  //$response = "END Your report on ".$report."been recieved and fowarded to the Law enforcement Unit\n You will recieve a message with further guidelines";
  $response = "CON Your report on has been recieved. ";
  $response = "END Neccesary actions will be taken.";"
}

// Echo the response back to the API
header('Content-type: text/plain');
echo $response;
