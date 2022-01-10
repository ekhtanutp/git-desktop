<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
        <div class="container">
        <div class="row">
        <div class="col-md-12">

        <h3>ฟอร์มกรอกข้อมูลพนักงาน</h3>

        <form class="form-horizontal" action="member_form_add_db.php" method="post">
        <div class="form-group row">
        <label for="inputusername" class="col-sm-1 col-form-label">Username</label>
        <div class="col-sm-5">
        <input type="text" name="username" class="form-control" id="inputusername" placeholder="Username">
        </div>
        </div>
        <div class="form-group row">
        <label for="inputPassword3" class="col-sm-1 col-form-label">Password</label>
        <div class="col-sm-5">
        <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
        </div>
        </div>
        <div class="form-group row">
        <label for="inputname" class="col-sm-1 col-form-label">Name - Surname</label>
        <div class="col-sm-5">
        <input type="text" name="name" class="form-control" id="inputname" placeholder="Name">
        </div>
        </div>
        <div class="form-group row">
        <label for="inputphone" class="col-sm-1 col-form-label">Phone</label>
        <div class="col-sm-5">
        <input type="text" name="phone" class="form-control" id="inputphone" placeholder="Phone">
        </div>
        </div>
        <div class="form-group row">
        <label for="inputemail" class="col-sm-1 col-form-label">Email</label>
        <div class="col-sm-5">
        <input type="email" name="email" class="form-control" id="inputemail" placeholder="Email">
        </div>
        </div>
       
        <div class="form-group row">
        <label for="inputphone" class="col-sm-1 col-form-label"></label>
        <div class="col-sm-1">
        <button class="btn btn-primary" type="submit" class="btn btn-default">Save</button>
        </div>
        </div>
        </form>

  
        </div>
        </div>
        </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
  </body>
</html>