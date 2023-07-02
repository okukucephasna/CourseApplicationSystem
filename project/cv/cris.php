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
    <div class="container">
<form  action="">
<img src="img/kafuco.png">
<div id="errMsg"></div>
<h1>Bachelor of Criminology</h1>
<center>
<label>Select Your English/Kiswahili Grade:</label>
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
<a href="../1.php" class="btn btn-danger" id="prev-2">Previous</a>
<a href="#" id="dolla" class="btn btn-success"  >Submit</a>
</center>
    <script src="js/jquery.js"></script>
    Welcome ...<span id="result"><script>
       document.getElementById("result").innerHTML=localStorage.getItem("textvalue"); 
        </script></span>
    
    <script type="text/javascript">
        $(document).ready(function () {
           
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
        $("div#errMsg").html('<div class="alert alert-danger"> \
                                <strong>With grade C you cannot take bachelor of criminology</strong>,thank you for visiting . \ \
                                </div>');
    }else if(myselectedtxt=='C-'){
        $("div#errMsg").html('<div class="alert alert-danger"> \
                                <strong>With grade C- you cannot take bachelor of criminology</strong>,thank you for visiting . \ \
                                </div>');
    }else if(myselectedtxt=='D+'){
        $("div#errMsg").html('<div class="alert alert-danger"> \
                                <strong>With grade D+ you cannot take bachelor of criminology</strong>,thank you for visiting . \ \
                                </div>');
    }else if(myselectedtxt=='D'){
        $("div#errMsg").html('<div class="alert alert-danger"> \
                                <strong>With grade D you cannot take bachelor of criminology</strong>,thank you for visiting . \ \
                                </div>');
    }else if(myselectedtxt==" "){
        $("div#errMsg").html('<div class="alert alert-danger"> \
                                <strong>With grade C you cannot take bachelor of criminology</strong>,thank you for visiting . \ \
                                </div>');
    }else if(myselectedtxt=='D-'){
        $("div#errMsg").html('<div class="alert alert-danger"> \
                                <strong>With grade D- you cannot take bachelor of criminology</strong>,thank you for visiting . \ \
                                </div>');
    }else if(myselectedtxt=='E'){
        $("div#errMsg").html('<div class="alert alert-danger"> \
                                <strong>With grade E you cannot take bachelor of criminology</strong>,thank you for visiting . \ \
                                </div>');
    }
  	});
}); 
 });
    </script>
        <div class="clearfix"></div>
    <div class="form-group">
   
    </div>
    </form>
      
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
    <s src="js/bootstrap.min.js"></s>

</body>

</html>
