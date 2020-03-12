<?php require('config/db_connect.php'); 

// Create Query
$query = 'SELECT * FROM items';

// Get Result
$result = mysqli_query($conn, $query);

?>


<!DOCTYPE HTML>
<html lang="en">
  <head>
    <title>Citrus Catalog</title>
        
    <meta charset="utf-8">
    <style>
        .imgTitle {
            color: blue;
            padding-left: 90px;
        }
        
        .imgDescription {
            color: red;
            padding-left: 70px;
        }
    </style>
  </head>
  
  <body>
      <?php
        // A counter which is incremented by one for each product row
        // in the loop below.
        $i = 0;

        echo "<table>\n";
        echo "<tr>\n";
        
       while ($product = mysqli_fetch_array($result)) {
         // Re-open HTML row, if $i is divisible by 3
        if ($i++ % 3 == 0) {
        echo "</tr><tr>\n";
        }
        
        
        
      
        echo "<td>";
        echo "<div>";
        //display image on the webpage
        echo '<img src="data:image;base64,'. base64_encode($product['product_img']).'" '
                . 'alt="Image" style="width: 200px; height: 200px; border-style: solid; margin: 10px;" >'; 
        echo "</div>";
        
        
        echo "<div>";
        //display title on the webpage
        echo "<span class=\"imgTitle\">". htmlspecialchars($product['product_title']) ."</span>";
        echo "</div>";
        
        
        echo "<div>";
        //display description on the webpage
        echo "<span class=\"imgDescription\">" . htmlspecialchars($product['product_description']) . "</span>";
        echo "</div>";
        echo "</td>";
        
     

}


// Add cells for the rest of the columns (if any)
while ($i++ % 3 != 0) {
  echo "<td></td>\n";
}

echo "</tr>\n";
echo "</table>\n";
?>


     
      
      
  </body>  
</html>