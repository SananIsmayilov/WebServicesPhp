<?php
$response = array();

if(isset($_POST['email']) && isset($_POST['pasword'])) {
  $email = $_POST['email'];
  $pasword = $POST['pasword'];

  require_once__DIR__ . '/config.php';
  $baglanti = mysqli_connect(DB_SERVER,DB_USER,DB_PASWORD,DB_NAME);
  if(!$baglanti){
      die ("ERROR " . mysqli_connect_error());

  }

  $sqlquery = "INSERT INTO login (email,pasword) VALUES ('$email','$pasword')";
  if(mysqli_query($baglanti,$sqlquery)){
      $response["succescode"] = 1;
      $response["message"] = "Succesfuly"  ;
      echo json_encode($response);
  }  else {
       $response["succescode"] = 0;
      $response["message"] = "Error"  ;
      echo json_encode($response);

  }
    mysqli_close($baglanti);
}else {
     $response["message"] = "no email and pasword" ;
     echo json_encode($response);
}






?>