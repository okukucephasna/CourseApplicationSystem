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
    <form>
        <img src="img/kafuco.png">
        <div id="add_err2"></div>
        <div id="errMsg"></div>
        <h1>Academic Details</h1>
        <center>
        <label>Undergraduate programmess<small>(only grade C+ and above)</small</label>
<select class="drpselecttext" style="left:0px;width:200px; height:25px;line-height:20px;margin:0;padding:0;">
	<option value="">Select a course</option>
    <option value="A">Bachelor of Criminology</option>
<option value="A-">Bachelor of Education(Arts)</option>
<option value="B+">Bachelor of Science(I.T)</option>
<option value="B">Bachelor of Social Work</option>
<option value="B-">Bachelor of Commerce</option>
<option value="C+">Bachelor of Disaster Management & Internal Diplomancy</option>
</select><br><br>
<div class="myselectedtxtdiv"></div>
<a href="#" id="dolla" class="btn btn-success">Submit</a>
</center>
    </form>
    <script src="js/jquery.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            function nextPage(){
           window.location.href="Student Details.php";
       }
     function onPage(){
           window.location.href="Student Details.php";
       }
       function inPage(){
           window.location.href="Student Details.php";
       }
    $('.drpselecttext').change(function(){
  		var myselectedtxt = $(this).find("option:selected").text();
           $('#dolla').click(function() {
               $("div#errMsg").html("");
        if(myselectedtxt=='A'){
      nextPage();
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
       onPage();
    }else if(myselectedtxt=='C-'){
       onPage();
    }else if(myselectedtxt=='D+'){
       inPage();
    }else if(myselectedtxt=='D'){
        $("div#errMsg").html('<div class="alert alert-danger"> \
                                <strong>We do not cater for Students with grade D</strong>,thank you for visiting . \ \
                                </div>'); 
    }else if(myselectedtxt==" "){
        $("div#errMsg").html('<div class="alert alert-danger"> \
                                <strong>Select your grade</strong> . \ \
                                </div>');
    }else if(myselectedtxt=='D-'){
        $("div#errMsg").html('<div class="alert alert-danger"> \
                                <strong>We do not cater for Students with grade D-</strong>,thank you for visiting . \ \
                                </div>');
    }else if(myselectedtxt=='E'){
        $("div#errMsg").html('<div class="alert alert-danger"> \
                                <strong>We do not cater for Students with grade E</strong>,thank you for visiting . \ \
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
