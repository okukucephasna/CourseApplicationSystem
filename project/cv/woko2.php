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
   
    
    
</head>

<body>

    <div class="brand">Kafuco Course Application Website</div>
    <div class="address-bar"></div>

    <!-- Navigation -->
    <?php require_once 'nav.php'; ?>

    <div class="container">
    
    <form action="Student Details.php">
        <img src="img/kafuco.png">
        <div id="errMsg"></div>
<!--     <h1>Undergraduate programmes</h1>-->
        <center>
        <h1>Undergraduate:</h1><br>
<select class="drpselecttext" style="left:0px;width:200px; height:25px;line-height:20px;margin:0;padding:0;">
	<option value="moja">Select a course</option>
    <option value="Bachelor of Criminology">Bachelor of Criminology</option>
<option value="Bachelor of Education(Arts)">Bachelor of Education(Arts)</option>
<option value="Bachelor of Science(I.T)">Bachelor of Science(I.T)</option>
<option value="Bachelor of Social Work">Bachelor of Social Work</option>
<option value="Bachelor of Commerce">Bachelor of Commerce</option>
<option value="Bachelor of Disaster Management & Internal Diplomancy">Bachelor of Disaster Management & Internal Diplomancy</option>
</select><br><br>
<div class="myselectedtxtdiv"></div>

<a href="#" id="dolla" class="btn btn-success"  >Submit</a>
</center>
<small>Select your course then click on the submit button</small>
    </form>
    <script src="js/jquery.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            function criminology(){
            var firstname = "bachelor of criminology";
        localStorage.setItem("textvalue",firstname);
           window.location.href="bachelor of criminology.php";
       }
     function commerce(){
           window.location.href="bachelor of commerce.php";
       }
       function dmip(){
           window.location.href="bachelor of dmip.php";
       }
    function arts(){
           window.location.href="bachelor of Education(arts).php";
       }
    function economics(){
           window.location.href="bachelor of science(Economics).php";
       }
     function IT(){
           window.location.href="bachelor of science(Information Technology).php";
       }
         function social(){
           window.location.href="bachelor of social work.php";
       }
    $('.drpselecttext').change(function(){
  		var myselectedtxt = $(this).find("option:selected").text();
           $('#dolla').click(function() {
               $("div#errMsg").html("");
        if(myselectedtxt=='Bachelor of Criminology'){
      criminology();
    }else if(myselectedtxt=='Bachelor of Education(Arts)'){
       arts();
    }else if(myselectedtxt=='Bachelor of Science(I.T)'){
       IT();
    }else if(myselectedtxt=='Bachelor of Social Work'){
       social();
    }else if(myselectedtxt=='Bachelor of Commerce'){
       commerce();
    }else if(myselectedtxt=='Bachelor of Disaster Management & Internal Diplomancy'){
       dmip();
    }else if(myselectedtxt== 'moja'){
        $("div#errMsg").html('<div class="alert alert-danger"> \
                                <strong>Select a course</strong>. \ \
                                </div>');
    }
  	});
});     
                      
        });
    </script>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; Your Website 2020</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
  

    <!-- Bootstrap Core JavaScript -->
    <!-- <script src="js/bootstrap.min.js"></script> -->

</body>

</html>
