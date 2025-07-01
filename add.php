<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
</head>
<body>
    <h2>Add Student</h2>
    <form method="POST" action="">
        <input type="text" name="full_name" placeholder="Full Name" required><br><br>
        <input type="email" name="email" placeholder="Email" required><br><br>
        <input type="text" name="course" placeholder="Course" required><br><br>
        <input type="date" name="enrollment_date" required><br><br>
        <input type="submit" name="submit" value="Add Student">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $name = $_POST['full_name'];
        $email = $_POST['email'];
        $course = $_POST['course'];
        $date = $_POST['enrollment_date'];

        $sql = "INSERT INTO students (full_name, email, course, enrollment_date) 
                VALUES ('$name', '$email', '$course', '$date')";

        if ($conn->query($sql)) {
            echo "Student added successfully. <a href='index.php'>View List</a>";
        } else {
            echo "Error: " . $conn->error;
        }
    }
    ?>
</body>
</html>
