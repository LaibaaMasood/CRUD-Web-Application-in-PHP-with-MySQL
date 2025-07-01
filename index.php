<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Records</title>
</head>
<body>
    <h2>Student List</h2>
    <a href="add.php">➕ Add New Student</a>
    <br><br>

    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Course</th>
            <th>Enrollment Date</th>
            <th>Actions</th>
        </tr>

        <?php
        $result = $conn->query("SELECT * FROM students");
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                <td>{$row['student_id']}</td>
                <td>{$row['full_name']}</td>
                <td>{$row['email']}</td>
                <td>{$row['course']}</td>
                <td>{$row['enrollment_date']}</td>
                <td>
                    <a href='edit.php?id={$row['student_id']}'>Edit</a> |
                    <a href='delete.php?id={$row['student_id']}' onclick=\"return confirm('Are you sure?')\">Delete</a>
                </td>
            </tr>";
        }
        ?>
    </table>
</body>
</html>
