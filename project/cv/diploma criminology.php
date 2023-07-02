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

    <div class="brand">Kafuco Course Application Website</div>
    <div class="address-bar"></div>

    <!-- Navigation -->


    <div class="container">
    
    <form>
        <img src="img/kafuco.png">
        <div id="add_err2"></div>
        <div id="errMsg"></div>
        <h1>Diploma in Criminology and Criminal Justice</h1>
        <center>
<label>Select Mean Grade:</label>
<select class="drpselecttext" style="left:0px;width:200px; height:25px;line-height:20px;margin:0;padding:0;">
<option value="">Choose Your Grade</option>
<option value="A">A</option>
<option value="A-">A-</option>
<option value="B+">B+</option>
<option value="B">B</option>
<option value="B-">B-</option>
<option value="C+">C+</option>
<option value="C">C</option>
<option value="C-">C-</option>
<option value="D+">D+</option>
<option value="D">D</option>
<option value="D-">D-</option>
<option value="E">E</option>
</select><br><br>
<div class="myselectedtxtdiv"></div>
<a href="../work3.php" class="btn btn-danger" id="prev-2">Previous</a>
<a href="#" id="dolla" class="btn btn-success"  >Submit</a><br>
<small>Select your course then grade on the submit button</small><br>
<small>To go back to the previous page click on the previous button</small>
</center>
    <script src="js/jquery.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            function passValues()
    {
        var firstname ="Bachelor of Criminology";
        localStorage.setItem("textvalue",firstname);
        return false;
       
    }
            function nextPage(){
           window.location.href="../Student Details.php";
       }
     function onPage(){
           window.location.href="../Student Details.php";
       }
       function inPage(){
           window.location.href="Student Details.php";
       }
    $('.drpselecttext').change(function(){
  		var myselectedtxt = $(this).find("option:selected").text();
           $('#dolla').click(function() {
               $("div#errMsg").html("");
        if(myselectedtxt=='A'){
     passValues();
    }else if(myselectedtxt=='A-'){
       nextPage();
    }else if(myselectedtxt=='B+'){
       nextPage();
    }else if(myselectedtxt=='B'){
       nextPage();
    }else if(myselectedtxt=='B-'){
       nextPage();
    }else if(myselectedtxt=='C+'){
       nextPage();
    }else if(myselectedtxt=='C'){
        nextPage();
    }else if(myselectedtxt=='C-'){
       nextPage();
    }else if(myselectedtxt=='D+'){
        $("div#errMsg").html('<div class="alert alert-danger"> \
                                <strong>With grade D+ you cannot take diploma in  criminology and Criminal Justice</strong>,thank you for visiting . \ \
                                </div>');
    }else if(myselectedtxt=='D'){
        $("div#errMsg").html('<div class="alert alert-danger"> \
                                <strong>With grade D you cannot take diploma in  criminology and Criminal Justice</strong>,thank you for visiting . \ \
                                </div>');
    }else if(myselectedtxt==" "){
        $("div#errMsg").html('<div class="alert alert-danger"> \
                                <strong>With grade C you cannot take diploma in  criminology and Criminal Justice</strong>,thank you for visiting . \ \
                                </div>');
    }else if(myselectedtxt=='D-'){
        $("div#errMsg").html('<div class="alert alert-danger"> \
                                <strong>With grade D- you cannot take diploma in  criminology and Criminal Justice</strong>,thank you for visiting . \ \
                                </div>');
    }else if(myselectedtxt=='E'){
        $("div#errMsg").html('<div class="alert alert-danger"> \
                                <strong>With grade E you cannot take diploma in  criminology and Criminal Justice</strong>,thank you for visiting . \ \
                                </div>');
    }
  	});
}); 
 });
    </script>
                 <div class="clearfix"></div>
    <div class="form-group">
    <!-- <a href="../2.php" class="btn btn-danger" id="prev-2">Previous</a>
    <a href="#" id="register"class="btn btn-success"  >Submit</a> -->
    </div>
    </form>
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
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
