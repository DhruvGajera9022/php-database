<?php
require 'database/config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Data</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.2/css/dataTables.dataTables.css" />
</head>

<body>
    <div class="container">
            <div>
                <h4>List
                    <a href="add.php" class="btn btn-primary float-end">Add</a>
                </h4>
            </div>
            <div class="card-body">
                <table id="recordTable" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Gender</th>
                            <th>Date of Birth</th>
                            <th>Hobby</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $query = "SELECT * FROM tblinfo";
                            $res = mysqli_query($conn, $query);
                                    
                            if(mysqli_num_rows($res) > 0){
                                foreach($res as $data){
                                ?>
                        <tr>
                            <td><?= $data['fname']; ?></td>
                            <td><?= $data['lname']; ?></td>
                            <td><?= $data['email']; ?></td>
                            <td><?= $data['phone']; ?></td>
                            <td><?= $data['gender']; ?></td>
                            <td><?= $data['dob']; ?></td>
                            <td><?= $data['hobby']; ?></td>
                            <td>
                                <a href="edit.php?id=<?= $data['id'];?>" class="btn btn-primary" name="updatebutton">Edit</a>
                                <a href="delete.php?id=<?= $data['id'];?>" 
                                    class="btn btn-danger" 
                                    onclick="return confirm('Are you sure you want to delete this record?');">Delete</a>
                            </td>
                        </tr>
                        <?php
                                }
                            }
                        ?>
                    </tbody>
                </table>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/2.1.2/js/dataTables.js"></script>
    <script>
        $(document).ready(function() {
            $('#recordTable').DataTable();
        });
    </script>
</body>

</html>
