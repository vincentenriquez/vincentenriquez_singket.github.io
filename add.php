<html>
    <body>
        <h2>Barangay Registration Form</h2>
        <form method="POST">
            First Name:
            <input type="text" name="fname" required><br><br>
            Middle Name:
            <input type="text" name="mname" required><br><br>
            Last Name:
            <input type="text" name="lname" required><br><br>
            Suffix:
            <input type="text" name="suffix" required><br><br>
            Course:
            <input type="text" name="course" required><br><br>
            Year and Section:
            <input type="text" name="section" required><br><br>
            <input type="submit" value="Add" name="next">
            <input type="reset" value="Clear">
            <a href="index.php"><input type="button" value="Back"></a>

        </form>
        <?php
            include 'db.php';

            if(isset($_POST['next'])) {
                
                $lastName = $_POST['lname'];
                $firstName = $_POST['fname'];
                $middleName = $_POST['mname'];
                $suffixName = $_POST['suffix'];
                $course = $_POST['course'];
                $year = $_POST['section'];
    
                $query = "INSERT INTO students (firstname, middlename, lastname, suffix, course, year_and_section)
                VALUES('$firstName', '$middleName', '$lastName', '$suffixName', '$course', '$year')";
    
                if (mysqli_query($conn, $query)) {
                    echo "New record created successfully";
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
            }
        ?>
    </body>
</html>
