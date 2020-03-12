<?php require('config/db_connect.php'); 

// Create Query
$query = 'SELECT * FROM comments';

// Get Result
$result = mysqli_query($conn, $query);

while ($comments = mysqli_fetch_array($result)) {
    
    echo "<p>" . htmlspecialchars($comments['comment_text']) . "</p>";
    
    
}

?>




