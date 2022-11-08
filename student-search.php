<?php
session_start();
require('dbcon.php');
include('includes/header.php');

$search = $_POST['searchbar'];

$sql = "SELECT * FROM students WHERE phone LIKE '%$search%'";

$result = $con->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<table class='table table-bordered table-striped table-hove'>";
        echo "<thead>";
        echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>First Name</th>";
        echo "<th>Last Name</th>";
        echo "<th>E-mail</th>";
        echo "<th>Phone number</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['firstName'] . "</td>";
        echo "<td>" . $row['lastName'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['phone'] . "</td>";
        echo "</tr>";
        echo "</tbody>";
        echo "</table>";
    }
} else {
    echo "0 records were found!";
}
echo "<div class='container p-4' style='width: 300px'>";
echo "<a href='index.php' class='btn btn-dark float-none mt-4 mx-auto d-block''>Back</a>";
echo "</div>";

include('includes/footer.php');
?>