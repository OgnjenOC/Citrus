<?php require('../config/db_connect.php'); ?>


<?php


if($_SERVER['REQUEST_METHOD'] == 'POST'){

    
    $cust_name = mysqli_real_escape_string($conn , $_POST['custName']);
    $cust_comment = mysqli_real_escape_string ($conn , $_POST['commentApproved']);
    
    $query = "INSERT INTO comments ";
    $query .= "(customer_name, comment_text) ";
    $query .= "VALUES ('$cust_name','$cust_comment')";

    
    $result = mysqli_query($conn, $query);

    
    if($result){
        echo 'Data Inserted';
    }else {
        echo 'Data Not Inserted';
    }

}
?>


<!DOCTYPE HTML>
<html lang="en">
  <head>
    <title>Insert comments</title>    
    <meta charset="utf-8">
  </head>
  
  <body>
      <div>
          <form action="updateComments.php" method="POST">
              <p>
                  <label>Customer Name:</label>
                  <input type="text" id="custName" name="custName" />
              </p>
              
              <textarea name="commentApproved" rows="10" cols="30">Enter approved Comment</textarea>
              
              <p>
               <input type="submit" id="btn" value="Add Comments" />
              </p>
              
          </form>
      </div>
  </body>
  
  
</html>