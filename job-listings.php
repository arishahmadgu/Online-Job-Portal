<?php
include 'includes/config.php';

// Fetch all jobs
$jobs = mysqli_query($conn, "SELECT * FROM jobs ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Browse Jobs | Job Portal</title>
    <style>
        body {
            margin: 0;
            font-family: Arial;
            background: #f3f4f6;
        }

        .navbar {
            background: #1f2937;
            padding: 15px 30px;
            color: white;
            display: flex;
            justify-content: space-between;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            margin-left: 20px;
        }

        h2 {
            text-align: center;
            margin-top: 20px;
        }

        .jobs-container {
            width: 90%;
            max-width: 1100px;
            margin: 30px auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }

        .job-card {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        .job-card h3 {
            margin: 0 0 10px
