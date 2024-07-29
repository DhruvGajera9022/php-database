<?php

require 'database/config.php';

if(isset($_POST['updatebutton'])){
    $id = $_POST['id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $gender = $_POST['gen'];
    $dob = $_POST['dob'];
    $hobby = $_POST['hobby'];

    $query = "UPDATE tblinfo SET fname='$fname', lname='$lname', email='$email', phone='$phone', gender='$gender', dob='$dob', hobby='$hobby' WHERE id='$id' ";

    $updateResult = mysqli_query($conn, $query);

    if($updateResult){
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
    <script src="javascript/validation.js"></script>
</head>

<body>
    <div class="container">

        <?php

            if(isset($_GET['id']))
            {
                $dataid = mysqli_real_escape_string($conn, $_GET['id']);
                $query = "SELECT * FROM tblinfo WHERE id = '$dataid' ";
                $res = mysqli_query($conn, $query);

                if(mysqli_num_rows($res) > 0){
                    $data = mysqli_fetch_array($res);
                    ?>

            <form method="post" id="addForm" name="form" onsubmit="return validateForm()">
            <h2>Edit Details</h2>

            <input type="hidden" name="id" value="<?=$data['id'];?>">

            <label for="fname">First Name:</label>
            <input type="text" name="fname" id="fname" value="<?=$data['fname'];?>" placeholder="Enter First Name" class="input">
            <span id="fname-error" class="error-message"></span><br><br>

            <label for="lname">Last Name:</label>
            <input type="text" name="lname" id="lname" value="<?=$data['lname'];?>" placeholder="Enter Last Name" class="input">
            <span id="lname-error" class="error-message"></span><br><br>

            <label for="email">Email:</label>
            <input type="text" name="email" id="email" value="<?=$data['email'];?>" placeholder="Enter Email Name" class="input">
            <span id="email-error" class="error-message"></span><br><br>

            <label for="phone">Phone:</label>
            <input type="text" name="phone" id="phone" value="<?=$data['phone'];?>" placeholder="Enter Phone Number" class="input" maxlength="10">
            <span id="phone-error" class="error-message"></span><br><br>

            <label for="">Gender:</label>
            <label for="male"><input type="radio" name="gen" value="Male" <?php if($data['gender']=="Male"){?> checked="true" <?php } ?>  id="male"> Male</label>
            <label for="female"><input type="radio" name="gen" value="Female" <?php if($data['gender']=="Female"){?> checked="true" <?php } ?> id="female"> Female</label>
            <span id="gender-error" class="error-message"></span><br><br>

            <label for="dob">Date of Birth:</label>
            <input type="date" name="dob" id="dob" value="<?=$data['dob'];?>">
            <span id="dob-error" class="error-message"></span><br><br>

            <label for="hobby">Hobby:</label>
            <select name="hobby" id="hobby">
                <option value="">Select Hobby</option>
                <option value="Dancing" <?php if($data['hobby']=="Dancing") echo 'selected="selected"'; ?>>Dancing</option>
                <option value="Swimming" <?php if($data['hobby']=="Swimming") echo 'selected="selected"'; ?>>Swimming</option>
                <option value="Travelling" <?php if($data['hobby']=="Travelling") echo 'selected="selected"'; ?>>Travelling</option>
                <option value="Singing" <?php if($data['hobby']=="Singing") echo 'selected="selected"'; ?>>Singing</option>
                <option value="Reading" <?php if($data['hobby']=="Reading") echo 'selected="selected"'; ?>>Reading</option>
                <option value="Writing" <?php if($data['hobby']=="Writing") echo 'selected="selected"'; ?>>Writing</option>
            </select><br>
            <span id="hobby-error" class="error-message"></span><br><br>

            <button name="updatebutton" id="button" class="btn btn-primary">Edit</button>
        </form>
                    <?php
                }
            }
        ?>        
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>

</html>