<?php include 'header.php'; ?>


<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
require('app/config.php');
// Check connection

// Attempt select query execution
$sql = "SELECT * FROM child";

if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Domain</th>";
                echo "<th>Currency</th>";
                echo "<th>Email</th>";
                echo "<th>Password</th>";
                echo "<th>Phone</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['domain'] . "</td>";
                echo "<td>" . $row['currency'] . "</td>";
                echo "<td>" . $row['your_email'] . "</td>";
                echo "<td>" . $row['password'] . "</td>";
                echo "<td>" . $row['your_phone'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>

<style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>

<?php include 'footer.php'; ?>
