<?php

require 'database/config.php';

if(isset($_POST['submitbutton']))
{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $gender = $_POST['gen'];
    $dob= $_POST['dob'];
    $hobby = $_POST['hobby'];

    $query = "INSERT INTO tblinfo (fname,lname,email,phone,gender,dob,hobby) VALUES
    ('$fname', '$lname', '$email', '$phone', '$gender', '$dob', '$hobby')";

    $result = mysqli_query($conn, $query);
    if($result){
        header("Location: index.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Form</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    
</head>

<body>
    <div class="container">
        <form method="post" id="addForm" name="addForm">
            <h2>Fill Details</h2>

            <label for="fname">First Name:</label>
            <input type="text" name="fname" id="fname" placeholder="Enter First Name" class="input"><br><br>

            <label for="lname">Last Name:</label>
            <input type="text" name="lname" id="lname" placeholder="Enter Last Name" class="input"><br><br>

            <label for="email">Email:</label>
            <input type="text" name="email" id="email" placeholder="Enter Email Name" class="input"><br><br>

            <label for="phone">Phone:</label>
            <input type="number" name="phone" id="phone" placeholder="Enter Phone Number" class="input" maxlength="10"><br><br>

            <label for="">Gender:</label>
            <label for="male"><input type="radio" name="gen" value="Male" id="male"> Male</label>
            <label for="female"><input type="radio" name="gen" value="Female" id="female"> Female</label><br></span><br>

            <label for="dob">Date of Birth:</label>
            <input type="date" name="dob" id="dob"><br><br>

            <label for="hobby">Hobby:</label>
            <select name="hobby" id="hobby">
                <option value="">Select Hobby</option>
                <option value="Dancing">Dancing</option>
                <option value="Swimming">Swimming</option>
                <option value="Travelling">Travelling</option>
                <option value="Reading">Reading</option>
                <option value="Singing">Singing</option>
                <option value="Writing">Writing</option>
            </select><br><br>

            <button name="submitbutton" id="button" class="btn btn-primary">Submit</button>

        </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="validation.js"></script>
    
     
</body>

</html>