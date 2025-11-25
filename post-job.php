<?php
include 'includes/config.php';

if (isset($_POST['postJob'])) {
    $title = $_POST['title'];
    $company = $_POST['company'];
    $location = $_POST['location'];
    $salary = $_POST['salary'];
    $description = $_POST['description'];

    $query = "INSERT INTO jobs(title, company, location, salary, description)
              VALUES('$title', '$company', '$location', '$salary', '$description')";

    if (mysqli_query($conn, $query)) {
        $success = "Job Posted Successfully!";
    } else {
        $error = "Failed to Post Job!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Job | Online Job Portal</title>
    <style>
        body {
            margin: 0;
            font-family: Arial;
            background: #f3f4f6;
        }

        .container {
            width: 450px;
            background: white;
            margin: 40px auto;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        input, textarea {
            width: 100%;
            padding: 12px;
            margin-top: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        textarea {
            height: 120px;
        }

        button {
            width: 100%;
            background: #3b82f6;
            padding: 12px;
            border: none;
            color: white;
            border-radius: 5px;
            font-size: 16px;
            margin-top: 20px;
            cursor: pointer;
        }

        button:hover {
            background: #2563eb;
        }

        .success {
            color: green;
            text-align: center;
        }

        .error {
            color: red;
            text-align: center;
        }
    </style>
</head>

<body>

<div class="container">
    <h2>Post New Job</h2>

    <?php if (!empty($success)) { ?>
        <p class="success"><?php echo $success; ?></p>
    <?php } ?>

    <?php if (!empty($error)) { ?>
        <p class="error"><?php echo $error; ?></p>
    <?php } ?>

    <form action="" method="POST">

        <input type="text" name="title" placeholder="Job Title" required>

        <input type="text" name="company" placeholder="Company Name" required>

        <input type="text" name="location" placeholder="Location" required>

        <input type="text" name="salary" placeholder="Salary (Optional)">

        <textarea name="description" placeholder="Job Description" required></textarea>

        <button type="submit" name="postJob">Post Job</button>

    </form>
</div>

</body>
</html>
