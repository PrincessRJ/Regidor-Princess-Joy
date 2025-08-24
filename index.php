<!DOCTYPE html>
<html>
<body>
    <h1>Welcome Index Page</h1>
    <?php echo "My first PHP script!";?>
    <br>
    <br>
    
    <form action="display.php" method="post">
        <label for="fname">First name:</label><br>
        <input type="text" id="fname" name="fname" value="John"><br>
        <label for="lname">Last name:</label><br>
        <input type="text" id="lname" name="lname" value="Doe"><br><br>
        <input type="submit" value="Submit">
      </form>

      <p>If you click the "Submit" button, the form-data will be submitted</p>
</body>
</html>