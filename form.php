<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include_once 'database.php';
    if(isset($_POST['save']))
    {	 
         $first_name = $_POST['first_name'];
         $last_name = $_POST['last_name'];
         $gender = $_POST['gender'];
         $address = $_POST['address'];
         $email = $_POST['email'];
         $sql = "INSERT INTO college (first_name,last_name,gender,address,email)
         VALUES ('$first_name','$last_name','$gender','$address','$email')";
         if (mysqli_query($conn, $sql)) {
            echo "New record created successfully !";
         } else {
            echo "Error: " . $sql . "
    " . mysqli_error($conn);
         }
         mysqli_close($conn);
    }
    ?>
</body>
</html>