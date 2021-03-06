<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
        <div class="container">
        <div class="row">
        <div class="col-md-12">


  <table class="table table-striped table-bordered table-hover">
        <caption>LIST MEMBER  <a class="btn btn-primary" href="member_form_add_bt3.php">เพิ่มข้อมูล</a> </caption>
        <thead>
            <tr  class="success">
                <th>ID</th>
                <th>USERNAME</th>
                <th>PASSWORD</th>
                <th>NAME</th>
                <th>PHONE</th>
                <th>EMAIL</th>
                <th>DATE</th>
                <th>EDIT</th>
                <th>DELETE</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include 'condb.php';
                $query =  "select * from tbl_member";
                $result = mysqli_query($condb, $query) or die("Error in sql : $query" .mysqli_error($query)); 
            ?>
            <?php foreach ($result as $row) { ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['username']; ?></td>
                <td><?php echo $row['password']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['phone']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['date_save']; ?></td>
                <td>
                    <a class="btn btn-warning btn-sm" href="member_form_edit.php?id=<?php echo $row['id']; ?>">EDIT</a>
                </td>
                <td>
                    <a class="btn btn-danger btn-sm" href="member_delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('ยืนยันการลบข้อมูล');">Delete</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
            </div>
            </div>
            </div>
    <?php mysqli_close($condb); ?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
  </body>
</html>