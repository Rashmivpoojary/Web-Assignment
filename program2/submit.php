<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Registration Successful</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h2>Registration Details</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $fullname = htmlspecialchars($_POST['fullname']);
      $email = htmlspecialchars($_POST['email']);
      $phone = htmlspecialchars($_POST['phone']);
      $gender = htmlspecialchars($_POST['gender']);
      $course = htmlspecialchars($_POST['course']);
      $address = htmlspecialchars($_POST['address']);

      echo "<p><strong>Full Name:</strong> $fullname</p>";
      echo "<p><strong>Email:</strong> $email</p>";
      echo "<p><strong>Phone Number:</strong> $phone</p>";
      echo "<p><strong>Gender:</strong> $gender</p>";
      echo "<p><strong>Course Interested:</strong> $course</p>";
      echo "<p><strong>Address:</strong> $address</p>";
      echo "<h3 style='color:green;'>Your form has been successfully submitted!</h3>";
    } else {
      echo "<p>No data submitted.</p>";
    }
    ?>

    <a href="index.html" style="text-decoration:none;"><button>Go Back</button></a>
  </div>
</body>
</html>
