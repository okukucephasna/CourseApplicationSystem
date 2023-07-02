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
        <h1>Diploma:</h1><br>
<select class="drpselecttext" style="left:0px;width:200px; height:25px;line-height:20px;margin:0;padding:0;">
	<option value="moja">Select a course</option>
    <option value="Diploma in Social Work & Community Development">Diploma in Social Work & Community Development</option>
<option value="Diploma in Business Management">Diploma in Business Management</option>
<option value="Diploma in Information Technology">Diploma in Information Technology</option>
<option value="Diploma in Public Relations and Creative Advertising">Diploma in Public Relations and Creative Advertising</option>
<option value="Diploma in Criminology & Criminal Justice">Diploma in Criminology & Criminal Justice</option>
<option value="Diploma in Project Management">Diploma in Project Management</option>
<option value="Diploma in Ethics and Corruption Stuies">Diploma in Ethics and Corruption Stuies</option>
</select><br><br>
<div class="myselectedtxtdiv"></div>
<a href="academia.php"  class="btn btn-danger">previous</a>
<a href="#" id="dolla" class="btn btn-success">Submit</a>
</center>
<small>Select your course then click on the submit button</small><br>
<small>To go back to the previous page click on the previous button</small>
    </form>
    <script src="js/jquery.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            function soc(){
        var firstname = "Diploma in Social Work & community Development";
        localStorage.setItem("textvalue",firstname);
        window.location.href="cv/diploma of social work.php";
       }
     function bus(){
        var firstname = "Diploma in Business Management";
        localStorage.setItem("textvalue",firstname);
        window.location.href="cv/diploma business.php";
       }
       function info(){
        var firstname = "Diploma in Information Technology";
        localStorage.setItem("textvalue",firstname);
        window.location.href="cv/diploma it.php"; 
       }
    function public(){
        var firstname = "Diploma in Public Relations and Creative Advertising";
        localStorage.setItem("textvalue",firstname);
        window.location.href="cv/diploma public relations.php";
       }
    function crim(){
         var firstname = "Diploma in Criminology & Criminal Justice";
        localStorage.setItem("textvalue",firstname);
        window.location.href="cv/diploma criminology.php";
       }
     function proj(){
         var firstname = "Diploma in Project Management";
        localStorage.setItem("textvalue",firstname);
        window.location.href="cv/diploma in project management.php";
       }
         function ethic(){
        var firstname = "Diploma in Ethics and Corruption";
        localStorage.setItem("textvalue",firstname);
        window.location.href="cv/diploma ethics and corruption studies.php";
        
       }
    $('.drpselecttext').change(function(){
  		var myselectedtxt = $(this).find("option:selected").text();
           $('#dolla').click(function() {
               $("div#errMsg").html("");
        if(myselectedtxt=="Diploma in Social Work & Community Development"){
            soc();
    }else if(myselectedtxt=="Diploma in Business Management"){
        bus();
    }else if(myselectedtxt=="Diploma in Information Technology"){
        info();
    }else if(myselectedtxt=="Diploma in Public Relations and Creative Advertising"){
        public();
    }else if(myselectedtxt=="Diploma in Criminology & Criminal Justice"){
       crim();
    }else if(myselectedtxt=="Diploma in Project Management"){
       proj();
     }else if(myselectedtxt=="Diploma in Ethics and Corruption Stuies"){
       ethic();
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
