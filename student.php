<?php
require_once 'db.php';
$query_student = mysqli_query($conn,"SELECT * FROM students") or die(mysqli_error($conn));
?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="assets/css/user.css">
</head>

<body>
    <nav class="navbar navbar-default custom-header">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button><a class="navbar-brand navbar-link" href="#">Vizzve<span>Tech </span> </a></div>
            </div>
        </nav>
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li><a href="student.php">Attendance</a></li>
            </ol>
            <div class="row">
                <div class="well">
                    <span>Date : <?php echo date("d-m-Y")?></span>
                </div>
                <div class="col-md-6">
                    <table>
                        <th>
                            USN
                        </th>
                        <th>
                            Student Name
                        </th>
                        <th>
                            Attendance
                        </th>

                        <?php 
                        while($result_student = $query_student->fetch_array())  {
                            ?>
                            <tr>
                                <td><?php echo $result_student['usn']?></td>
                                <td><?php echo $result_student['name']?></td>
                                <td id="<?php echo $result_student['usn']?>"></td>
                            </tr>
                            <?php
                        }
                        ?>
                    </table>
                </div>
                <div class="col-md-6">
                    <a href="qr.html" class="btn btn-danger btn-lg">Scan Attendance</a>
                </div>
            </div>
        </div>
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="https://cdn.rawgit.com/ethereum/web3.js/develop/dist/web3.js"></script>
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script>
        <script src="./index.js"></script>
    </body>

    </html>