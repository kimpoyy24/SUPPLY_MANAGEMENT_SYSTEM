<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body style="margin: 50px;">
    <div class="container">
        <h1>Login</h1>
        <br>

        <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the username and password keys are set
    if (isset($_POST["admin"]) && isset($_POST["password"])) {
        $username = $_POST["admin"];
        $password = $_POST["password"];

        // Perform validation and authentication
        // You may want to add more robust validation and security measures
        if ($username == "your_username" && $password == "your_password") {
            // Redirect to the page displaying categories info
            header("Location: categories.php");
            exit();
        } else {
            echo "<div class='alert alert-danger' role='alert'>
                    Invalid username or password. Please try again.
                </div>";
        }
    } else {
        echo "<div class='alert alert-danger' role='alert'>
                Username or password field is missing.
            </div>";
    }
}
?>


        <form method="post" action="">
            <div class="mb-3">
                <label for="username" class="form-label">Username:</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
</body>
</html>