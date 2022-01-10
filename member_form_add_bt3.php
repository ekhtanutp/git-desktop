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
                <h3>ฟอร์มกรอกข้อมูลพนักงาน</h3>

                <form class="form-horizontal" action="" method="POST">
            <div class="form-group">
                <label for="inputusername" class="col-sm-2 control-label">Username</label>
                <div class="col-sm-5">
                <input type="text" name="username" class="form-control" id="inputusername" placeholder="Username">
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                <div class="col-sm-5">
                <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
                </div>
            </div>
            <div class="form-group">
                <label for="inputname" class="col-sm-2 control-label">Name - Surname</label>
                <div class="col-sm-5">
                <input type="text" name="name" class="form-control" id="inputname" placeholder="Name">
                </div>
            </div>
            <div class="form-group">
                <label for="inputphone" class="col-sm-2 control-label">Phone</label>
                <div class="col-sm-5">
                <input type="text" name="phone" class="form-control" id="inputphone" placeholder="Phone">
                </div>
            </div>
            <div class="form-group">
                <label for="inputemail" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-5">
                <input type="email" name="email" class="form-control" id="inputemail" placeholder="Email">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                    <label>
                    <input type="checkbox"> Remember me
                    </label>
                </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                <button class="btn btn-primary" type="submit" class="btn btn-default">Save</button>
                </div>
            </div>
            </form>


  
                </div>
            </div>
        </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
  </body>
</html>