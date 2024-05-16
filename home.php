<?php
    include 'db.php'; // Include db.php for database connection

    // Retrieve data from the database
    $sql = "SELECT * FROM students";//selects all columns from users table
    $result = mysqli_query($conn, $sql);//executes mysqli query
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <!-- Add your CSS styles here if needed -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #fec7d7;
        }
        h2 {
            color: #0e172c;
            text-align: center;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 2px solid #0e172c;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #fec7d7;
        }
        .create button {
            width: 5rem;
            padding: 10px;
            background-color: #0e172c;
            color: #fffffe;
        }
        .delete button {
            width: 5rem;
            padding: 7px;
            background-color: #0e172c;
            color: #fffffe;
        }
        .update button {
            width: 5rem;
            padding: 7px;
            background-color: #0e172c;
            color: #fffffe;
            margin-left: 20px;
        }
    </style>
</head>
<body>

    <h2>Register</h2>
    <a href="add.php" class="create"><button>Create</button></a>
    <br>
    <br>
    <table>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Middle Name</th>
            <th>Suffix</th>
            <th>Course</th>
            <th>Year and Section</th>
            <th class="last">Remove and Update</th>
        </tr>
        <?php
            // Loop through each row of the result set
            while ($row = mysqli_fetch_assoc($result)) {// "mysqli_fetch_assoc()" used to fetch a record in a table.
                echo "<tr>";
                echo "<td>" . $row['student_id'] . "</td>";//displays the id 
                echo "<td>" . $row['firstname'] . "</td>";//displays the first name
                echo "<td>" . $row['middlename'] . "</td>";//displays the last name
                echo "<td>" . $row['lastname'] . "</td>";//displays the middle name 
                echo "<td>" . $row['suffix'] . "</td>";//displays the last name
                echo "<td>" . $row['course'] . "</td>";//displays the last name
                echo "<td>" . $row['year_and_section'] . "</td>";//displays the middle name 
            
            
                echo "<td>";
                echo "<a href='delete.php?id=" . $row['student_id'] . "' class='delete'><button>DELETE</button></a>";//delete button
                echo "<a href='update.php?id=" . $row['student_id'] . "' class='update'><button>EDIT</button></a>";//update button

                echo "</td>";
                echo "</tr>";
            }
        ?>

    </table>
</body>
</html>
