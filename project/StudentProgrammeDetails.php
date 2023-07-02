<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>

<?php
//Initialize Session



if (isset($_SESSION['login'])) {
    $fname = $_SESSION['fname'];
    $lname = $_SESSION['lname'];
    $email = $_SESSION['email'];
    

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Student Registartion</title>
    <style type="text/css">
    .two{
        background-color:#fff;
    }
    
    </style>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css?v=<?php echo time(); ?>" rel="stylesheet">

    <link href="css/style.css?v=<?php echo time(); ?>" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <h2 class="text-center"><div class="two">Welcome <?php echo $fname; echo " "; echo $lname; ?> - <a href="logout.php"> Logout</a></div></h2>
    <div class="content-wrapper">
  
  <section class="content">
    <?php
      if(isset($_SESSION['error'])){
        echo "
          <div class='alert alert-danger alert-dismissible'>
            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
            <h4><i class='icon fa fa-warning'></i> Error!</h4>
            ".$_SESSION['error']."
          </div>
        ";
        unset($_SESSION['error']);
      }
      if(isset($_SESSION['success'])){
        echo "
          <div class='alert alert-success alert-dismissible'>
            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
            <h4><i class='icon fa fa-check'></i> Success!</h4>
            ".$_SESSION['success']."
          </div>
        ";
        unset($_SESSION['success']);
      }
    ?>
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header with-border">
            <!-- <a href="#addnew" data-toggle="modal" class="btn btn-primary ">Add User</a> -->
          </div>
          <div class="box-body">
            <table id="example1" class="table table-bordered">
              <thead>
                <th>ID</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Email</th>
                <th>Course</th>
              </thead>
              <tbody>
                <?php
                  //  $sql = "SELECT * FROM members WHERE fname ='$fname'";
                   $sql = "SELECT * FROM members WHERE email ='$email'";
                   $query = $conn->query($sql);
                   while($row = $query->fetch_assoc()){
                     $image = (!empty($row['photo'])) ? '../images/'.$row['photo'] : '../images/profile.jpg';
                     echo "
                       <tr>
                       <td>".$row['id']."</td>
                       <td>".$row['fname']."</td>
                        
                         <td>".$row['lname']."</td>
                         <td>".$row['email']."</td>
                         <td>".$row['course']."</td>
                       </tr>
                     ";
                   }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>   
</div>
<?php

} else {
  header("location:student Details.php ");
}
?>