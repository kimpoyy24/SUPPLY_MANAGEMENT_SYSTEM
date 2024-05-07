<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body style="margin: 50px;">
    <h1> Area</h1>
    <br>
    <table class="table">
        <thead>
            <tr>
                <th>area_id</th>
                <th>area_name</th>
                <th>area_code</th>
            </tr> 
        </thead> 
        
        <tbody>
        <?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "supply_management_system";

// Create connection
$connection = new mysqli($servername, $username, $password, $database);

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// read all rows from the database table
$sql = "SELECT * FROM `area`"; // Use backticks (`) here
$result = $connection->query($sql);

if (!$result) {
    die("Invalid query: " . $connection->error);
}

// read data of each row
while ($row = $result->fetch_assoc()) {
    echo "<tr>
    <td>" . $row["area_id"] . "</td>
    <td>" . $row["area_name"] . "</td>
    <td>" . $row["area_code"] . "</td>-
    <td>
        <a class='btn btn-primary btn-sm' href='update.php?id=" . $row["area_id"] . "'>Update</a>
        <a class='btn btn-danger btn-sm' href='delete.php?id=" . $row["area_name"] . "'>Delete</a>
    </td>
    </tr>";
}

$connection->close();
?>

        </tbody>
    </table>
</body>
</html>