<html>
<body>
    <link rel="stylesheet" href="studentstyle.css">

<div class="container">
    <h1>STUDENT INFORMATION</h1>
    <p class="intro">Konichiwa! <?php echo $_POST["fname"]; ?></p>

    <p><strong>Firstname:</strong> <?php echo $_POST["fname"]; ?></p>
    <p><strong>Lastname:</strong> <?php echo $_POST["lname"]; ?></p>
    <p><strong>Age:</strong> <?php echo $_POST["age"]; ?></p>
    <p><strong>Student ID:</strong> <?php echo $_POST["studentid"]; ?></p>
    <p><strong>Course:</strong> <?php echo $_POST["course"]; ?></p>
    <p><strong>Date of Birth:</strong> <?php echo $_POST["month"] . " " . $_POST["day"] . ", " . $_POST["year"]; ?></p>    
    <p><strong>Gender:</strong> <?php echo $_POST["gender"]; ?></p>
    <p><strong>Email:</strong> <?php echo $_POST["email"]; ?></p>
</div>

</body>
</html>
