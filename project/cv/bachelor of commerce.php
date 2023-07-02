

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
    <script src="js/jquery.js"></script>
                
</head>

<body>

    <div class="brand">Kafuco Course Application Website</div>
    <div class="address-bar"></div>

    <!-- Navigation -->


    <div class="container">
    
    <form method="post">
        <img src="img/kafuco.png">
        
        <h1>Bachelor of Commerce </h1>
        <label>Select Your English Grade:</label>
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
        $("div#errMsg").html('<div class="alert alert-danger"> \
                                <strong>With grade C- in English you cannot take bachelor of Information Technology</strong>,thank you for visiting . \ \
                                </div>');
    }else if(myselectedtxt=='D+'){
        $("div#errMsg").html('<div class="alert alert-danger"> \
                                <strong>With grade D+ in English you cannot take bachelor of Information Technology</strong>,thank you for visiting . \ \
                                </div>');
    }else if(myselectedtxt=='D'){
        $("div#errMsg").html('<div class="alert alert-danger"> \
                                <strong>With grade D in English you cannot take bachelor of Information Technology</strong>,thank you for visiting . \ \
                                </div>');
    }else if(myselectedtxt==" "){
        $("div#errMsg").html('<div class="alert alert-danger"> \
                                <strong>With grade C you cannot take bachelor of criminology</strong>,thank you for visiting . \ \
                                </div>');
    }else if(myselectedtxt=='D-'){
        $("div#errMsg").html('<div class="alert alert-danger"> \
                                <strong>With grade D- in English you cannot take bachelor of Information Technology</strong>,thank you for visiting . \ \
                                </div>');
    }else if(myselectedtxt=='E'){
        $("div#errMsg").html('<div class="alert alert-danger"> \
                                <strong>With grade E in English you cannot take bachelor of Information Technology</strong>,thank you for visiting . \ \
                                </div>');
    }
  	});
}); 
 });
    </script>
<label>Select Your Math Grade:</label>
<select class="rpselecttext" style="left:0px;width:200px; height:25px;line-height:20px;margin:0;padding:0;">
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
        <div class="clearfix"></div>
    <div class="form-group">
    <a href="../woko2.php" class="btn btn-danger" id="prev-2">Previous</a>
    <a href="#" id="submit"class="btn btn-success">Submit</a><br>
    <small>Select your course then grade on the submit button</small><br>
<small>To go back to the previous page click on the previous button</small>
    </div>
    </form>
    <script type="text/javascript">
    $('#click').click(function(){
        var mean="";
        var mean=$('#grade0').val();
        var english=$('#grade1').val();
        var math=$('#grade1').val();
        alert(mean);
        if(mean == "c+|C+, || b-|B- ,|| b|B ,||"){
            alert(good value);    
        }else if{
            alert(bad value);
        }else if(mean == number){
            alert(mean can only b letter between a and e);
        }else
        if(math == "c+|C+, || b-|B- ,|| b|B ,||"){
            alert(good value);    
        }else if{
            alert(bad value);
        }else if(mean == number){
            alert(mean can only b letter between a and e);
        }else
        if(english == "c+|C+, || b-|B- ,|| b|B ,||"){
            alert(good value);    
        }else if{
            alert(bad value);
        }else if(mean == number){
            alert(mean can only b letter between a and e);
        }else

    }) 
    
    
    </script>
    <!-- <script type="text/javascript">
    document.getElementById("click").onclick = function (){
        var Mean = "";
         Mean = document.getElementBy("grade0").value;
        alert(Mean);
    }
    </script> -->
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
