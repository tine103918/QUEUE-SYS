<?php
session_start();
include 'login.php';

if (isset($_SESSION['type'])) {

    if ($_SESSION['type'] === 'admin') {
        header('Location: admin/dashboard.php');
    } 
    elseif ($_SESSION['type'] === 'faculty') {
        header('Location: faculty/dashboard.php');
    } 
    elseif ($_SESSION['type'] === 'student') {
        header('Location: student/dashboard.php');
    }

    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>System Login</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>

<body class="bg-light">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">

            <div class="card mt-5 shadow">
                <div class="card-body">

                    <h3 class="text-center mb-4">System Login</h3>

                    <form method="POST" action="login.php">
                        <div class="mb-3">
                            <label for="type" class="form-label">Login As</label>
                            <select class="form-select" id="type" name="type" required>
                                <option value="" selected disabled>Select Role</option>
                                <option value="admin">Admin</option>
                                <option value="faculty">Faculty</option>
                                <option value="student">Student Officer</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required >
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input  type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100"> Login </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
