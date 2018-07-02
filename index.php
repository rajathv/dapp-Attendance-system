<?php
require_once 'db.php';
$query_faculty = mysqli_query($conn,"SELECT * FROM faculty") or die(mysqli_error($conn));

?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance Management System</title>
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
            <div class="well"><center><h2 style="color: #121212">Revolutionary Decentralized Attendance Management System</h2></center></div>
            <div class="row">
                <div class="col-md-6">
                    <table>
                        <th>
                            Faculty Name
                        </th>
                        <th>
                            Subject 1
                        </th>
                        <th>
                            Subject 2
                        </th>
                        <?php 
                        while($result1_faculty = $query_faculty->fetch_array())  {
                            ?>
                            <tr>
                                <td><?php echo $result1_faculty['facultyName']?></td>
                                <td><a href="student.php"><?php echo $result1_faculty['s1']?></a></td>
                                <td><a href="student.php"><?php echo $result1_faculty['s2']?></a></td>
                            </tr>
                            <?php
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    </body>

    </html>