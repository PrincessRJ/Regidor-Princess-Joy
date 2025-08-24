<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="form-card">
        <h1>REGISTER HERE</h1>
        <p class="subtitle"><?php echo "pag register na bhie"; ?></p>

        <form action="studentinfo.php" method="post">

            <div class="row">
                <input type="text" name="fname" placeholder="Firstname" required>
                <input type="text" name="lname" placeholder="Lastname" required>
            </div>

            <input type="number" name="age" placeholder="Age" required>

            <input type="number" name="studentid" placeholder="Student ID" required>
            
            <input type="text" name="course" placeholder="Course" required>

            <div class="row">
                <select name="day" required>
                    <option value="">Day</option>
                    <?php for ($i=1; $i<=31; $i++) echo "<option>$i</option>"; ?>
                </select>

                <select name="month" required>
                    <option value="">Month</option>
                    <?php 
                        $months = ["January","February","March","April","May","June",
                                   "July","August","September","October","November","December"];
                        foreach($months as $m) echo "<option>$m</option>";
                    ?>
                </select>

                <select name="year" required>
                    <option value="">Year</option>
                    <?php for ($y=2025; $y>=1950; $y--) echo "<option>$y</option>"; ?>
                </select>
            </div>

            <select name="gender" required>
                <option value="">Select your gender</option>
                <option value="female">Female</option>
                <option value="male">Male</option>
                <option value="other">Other</option>
            </select>
            
            <input type="email" name="email" placeholder="Email" required>

            <button type="register">Register</button>

            <div class="extras">
                <p>If you click the "Submit" button, the form-data will be submitted.</p>
            </div>
        </form>
    </div>

</body>
</html>
