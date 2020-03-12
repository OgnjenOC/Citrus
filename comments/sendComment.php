<?php

//create short variable names
$name = $_POST['fullName'];
$email = $_POST['emailAdrs'];
$feedback = $_POST['comment'];


//set up some static information
$toaddress = "cicovic@gmail.com";

$subject = "Comments from web site";

$mailcontent = "Customer name: ".filter_var($name)."\n".
               "Customer email: ".$email."\n".
               "Customer comments:\n".$feedback."\n";

$fromaddress = "From: webserver@example.com";

//invoke mail() function to send mail
mail($toaddress, $subject, $mailcontent, $fromaddress);

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Citrus Company - Comments Submitted</title>
  </head>
  <body>

    <h1>Comments submitted</h1>
    <p>Your comments has been sent and will be reviewed and posted. Thank you</p>
    <p><?php echo nl2br(htmlspecialchars($feedback)); ?> </p>

  </body>
</html>