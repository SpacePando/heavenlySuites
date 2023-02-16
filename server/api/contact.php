<?php
	$SERVERNAME = "localhost";
	$USERNAME = "sooi_dbHeavenlySuites";
	$PASSWORD = "DeBesteS001";
	$DATABASE = "sooi_dbHeavenlySuites";
  $id = '';

    $dbconn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DATABASE);

    $method = $_SERVER['REQUEST_METHOD'];
    $request = explode('/', trim($_SERVER['PATH_INFO'],'/'));
    //$input = json_decode(file_get_contents('php://input'),true);

    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
      }

    switch ($method) {

        if($_POST) {

            $email = trim(stripslashes($_POST['info.email']));
            $subject = trim(stripslashes($_POST['info.subject']));
            $msg = trim(stripslashes($_POST['info.msg']));
         
            
             if ($subject == '') { $subject = "Contact Form Submission"; }
         
            // Set Message
            $message .= "Email from: " . $email . "<br />";
            $message .= "Message: <br />";
            $message .= nl2br($msg);
            $message .= "<br /> ----- <br /> This email was sent from your site " . url() . " contact form. <br />";
         
            // Set From: header
            $from =  $name . " <" . $email . ">";
         
            // Email Headers
            $headers = "From: " . $from . "\r\n";
            $headers .= "Reply-To: ". $email . "\r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
         
            ini_set("sendmail_from", $to); // for windows server
            $mail = mail($to, $subject, $message, $headers);
         
            if ($mail) { echo "OK"; }
            else { echo "Something went wrong. Please try again."; }
        }
    }
    
    // run SQL statement
    $result = mysqli_query($con,$sql);
    
    // die if SQL statement failed
    if (!$result) {
      http_response_code(404);
      die(mysqli_error($con));
    }
    
    if ($method == 'GET') {
        if (!$id) echo '[';
        for ($i=0 ; $i<mysqli_num_rows($result) ; $i++) {
          echo ($i>0?',':'').json_encode(mysqli_fetch_object($result));
        }
        if (!$id) echo ']';
      } elseif ($method == 'POST') {
        echo json_encode($result);
      } else {
        echo mysqli_affected_rows($con);
      }
    
    $con->close();
    




























?>