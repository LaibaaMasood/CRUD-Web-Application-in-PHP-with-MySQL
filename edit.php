<?php include 'db.php'; ?>

<?php
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM students WHERE student_id=$id");
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
</head>
<body>
    <h2>Edit Student</h2>
    <form method="POST" action="">
        <input type="text" name="full_name" value="<?php echo $row['full_name']; ?>" required><br><br>
        <input type="email" name="email" value="<?php echo $row['email']; ?>" required><br><br>
        <input type="text" name="course" value="<?php echo $row['course']; ?>" required><br><br>
        <input type="date" name="enrollment_date" value="<?php echo $row['enrollment_date']; ?>" required><br><br>
        <input type="submit" name="update" value="Update Student">
    </form>

    <?php
    if (isset($_POST['update'])) {
        $name = $_POST['full_name'];
        $email = $_POST['email'];
        $course = $_POST['course'];
        $date = $_POST['enrollment_date'];

        $sql = "UPDATE students SET 
                full_name='$name', email='$email', course='$course', enrollment_date='$date' 
                WHERE student_id=$id";

        if ($conn->query($sql)) {
            echo "Record updated. <a href='index.php'>Back to List</a>";
        } else {
            echo "Error: " . $conn->error;
        }
    }
    ?>
</body>
</html>
