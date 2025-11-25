<?php
include 'includes/config.php';

if (!isset($_GET['id'])) {
    die("Invalid Job ID");
}

$job_id = $_GET['id'];

// Fetch job details
$job = mysqli_query($conn, "SELECT * FROM jobs WHERE id = $job_id");
$jobData = mysqli_fetch_assoc($job);

if (isset($_POST['applyJob'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $resume = $_POST['resume'];

    $query = "INSERT INTO applications(job_id, applicant_name, email, resume_link)
              VALUES('$job_id', '$name', '$email', '$resume')";

    if (mysqli_query($conn, $query)) {
        $success = "Application Submitted Successfully!";
    } else {
        $error = "Failed to Submit Application!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply Job | Job Portal</title>

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
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        h2, h3 {
            text-align: center;
        }

        input {
            width: 100%;
            padding: 12px;
            margin-top: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            width: 100%;
            background: #3b82f6;
            padding: 12px;
            border: none;
            margin-top: 20px;
            color: white;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background: #2563eb;
        }

        .success { color: green; text-align: center; }
        .error { color: red; text-align: center; }

        .job-box {
            background: #e5e7eb;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>

<div class="container">

    <h2>Apply for Job</h2>

    <div class="job-box">
        <h3><?php echo $jobData['title']; ?></h3>
        <p><strong>Company:</strong> <?php echo $jobData['company']; ?></p>
        <p><strong>Location:</strong> <?php echo $jobData['location']; ?></p>
        <p><strong>Salary:</strong> <?php echo $jobData['salary']; ?></p>
    </div>

    <?php if (!empty($success)) { ?>
        <p class="success"><?php echo $success; ?></p>
    <?php } ?>

    <?php if (!empty($error)) { ?>
        <p class="error"><?php echo $error; ?></p>
    <?php } ?>

    <form action="" method="POST">

        <input type="text" name="name" placeholder="Your Full Name" required>

        <input type="email" name="email" placeholder="Your Email" required>

        <input type="text" name="resume" placeholder="Resume Link (Google Drive / URL)" required>

        <button type="submit" name="applyJob">Apply Now</button>

    </form>

</div>

</body>
</html>
