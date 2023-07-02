<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Kafuco Course Application Website</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css?v=<?php echo time(); ?>" rel="stylesheet">
    <link href="css/style.css?v=<?php echo time(); ?>" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<div class="modal fade" id="add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

    <div class="brand">Admin DashBoard</div>

    <!-- Navigation -->
    <?php require_once 'nav.php'; ?>
    <section id="actions" class="py-4 mb-4 bg-light">
  <?php require_once 'nav.php'; ?>
    <div class="container">
      <div class="row">
        <!-- <div class="col-md-3">
          <a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target="#addPostModal">
            <i class="fas fa-plus"></i> Add User
          </a>
        </div>
        <div class="col-md-3">
          <a href="#" class="btn btn-success btn-block" data-toggle="modal" data-target="#addCategoryModal">
            <i class="fas fa-plus"></i> Add Category
          </a>
        </div> -->
        <div class="col-md-3">
          <a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target="#add">
            <i class="fas fa-plus"></i> Add User
          </a>
        </div>
           <div class="col-md-3">
          <a href="ano.php" class="btn btn-primary btn-block" >
            <i class="fas fa-plus"></i> User
          </a>
        </div>
      </div>
    </div>
<!--    <a href="ano.php">Click</a>-->
  </section>

  <!-- POSTS -->
  <section id="posts">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <div class="card">
            <div class="card-header">
              <h4></h4>
            </div>

    <div class="container">
    <table class="table table-striped" id="table">
              <thead class="thead-dark">
                <tr>
                  <th>ID</th>
                  <th>Fname</th>
                  <th>Lname</th>
                  <th>Email</th>
                  <th>Course</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Post One</td>
                  <td>Web Development</td>
                  <td>May 10 2018</td>
                  <td>
                    <a href="details.html" class="btn btn-secondary">
                      <i class="fas fa-angle-double-right"></i> Details
                    </a>
                  </td>
                  <td><button class="btn btn-warning">Edit</button></td>
                  <td><button class="btn btn-danger" data-toggle="modal" data-target="#add">Delete</button></td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Post Two</td>
                  <td>Tech Gadgets</td>
                  <td>May 11 2018</td>
                  <td>
                    <a href="details.html" class="btn btn-secondary">
                      <i class="fas fa-angle-double-right"></i> Details
                    </a>
                  </td>
                  <td><button class="btn btn-warning">Edit</button></td>
                  <td><button class="btn btn-danger">Delete</button></td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Post Three</td>
                  <td>Web Development</td>
                  <td>May 13 2018</td>
                  <td>
                    <a href="details.html" class="btn btn-secondary">
                      <i class="fas fa-angle-double-right"></i> Details
                    </a>
                  </td>
                  <td><button class="btn btn-warning">Edit</button></td>
                  <td><button class="btn btn-danger">Delete</button></td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>Post Four</td>
                  <td>Business</td>
                  <td>May 15 2018</td>
                  <td>
                    <a href="details.html" class="btn btn-secondary">
                      <i class="fas fa-angle-double-right"></i> Details
                    </a>
                  </td>
                  <td><button class="btn btn-warning">Edit</button></td>
                  <td><button class="btn btn-danger">Delete</button></td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>Post Five</td>
                  <td>Web Development</td>
                  <td>May 17 2018</td>
                  <td>
                    <a href="details.html" class="btn btn-secondary">
                      <i class="fas fa-angle-double-right"></i> Details
                    </a>
                  </td>
                  <td><button class="btn btn-warning">Edit</button></td>
                  <td><button class="btn btn-danger">Delete</button></td>
                </tr>
                <tr>
                  <td>6</td>
                  <td>Post Six</td>
                  <td>Health & Wellness</td>
                  <td>May 20 2018</td>
                  <td>
                    <a href="details.html" class="btn btn-secondary">
                      <i class="fas fa-angle-double-right"></i> Details
                    </a>
                  </td>
                  <td><button class="btn btn-warning">Edit</button></td>
                  <td><button class="btn btn-danger">Delete</button></td>
                </tr>
              </tbody>
            </table>
    <!-- <form>
        <img src="images/kafuco.png">
        <div id="add_err2"></div>
        <h1>Admin Privileges</h1>
    <div class="form-group">
    <a href="register.php" class="btn btn-danger" id="prev-2">Add</a>
    <a href="#" id="register"class="btn btn-success"  >Delete</a>
    <a href="#" id="register"class="btn btn-success"  >Update</a>
    <a href="#" id="register"class="btn btn-success"  >Delete</a>
    </div>
    </form> -->
    <footer class="foot">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; My Website 2020</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
