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

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/dynamic.js"></script>
    <script type="text/javascript">
    function populate(s1,s2){
        var s1 = document.getElementById(s1);
        var  s2 = document.getElementById(s2);
        s2.innerHTML = "";
        if(s1.value == "Undergraduate"){
            var optionArray = ["|","bachelor of criminology|Bachelor of Criminology","bachelor of education(arts)|Bachelor of Education(Arts)","bachelor of science(information technology|Bachelor of Science(Information Technology)","bachelor of science(economics|Bachelor of Science(Economics)","bachelor of social work|Bachelor of Social Work","bachelor of commerce|Bachelor of Commerce","bachelor of disaster management & international diplomancy|Bachelor of Disaster Management & International Diplomacy"];
        }else if(s1.value == "Diploma"){
            var optionArray = ["|","diploma in social work & community development|Diploma in Social Work & Community Development","diploma in business management|Diploma in Business Management","diploma in information technology|Diploma in Information Technology","diploma in public relations and relations and creative advertising|Diploma in Public Relations and Creative Advertising","diploma in criminology and criminal justice|Diploma in Criminlogy and Criminal Justice","diploma in project management|Diploma in Project Management","diploma in ethics and corruption studies|Diploma in Ethics and Corruption Studies"];
          }else if(s1.value == "Certificate"){
            var optionArray = ["|","certificate in social work & community development|Certificate in Social Work & Community Development","certificate in business management|Certificate in Business Management","certificate in information technology|Certificate in Information Techology","certificate in criminology and criminal justice|Certificate in Criminlogy and Criminal Justice"];  
        }
        for(var option in optionArray){
            var pair = optionArray[option].split("|");
            var newOption = document.createElement("option");
            newOption.value = pair[0];
            newOption.innerHTML = pair[1];
            s2.options.add(newOption);
        }
    }
    alert(optionArray[1]);
    
    

    </script>
</head>

<body>

    <div class="brand">Kafuco Course Application Website</div>
    <?php require_once 'nav.php'; ?>

    <div class="container">
    <form>
        <img src="img/kafuco.png">
        <h1>Programme Details</h1>
        <a href="idex.php">For Courses Available</a>
        <br>
        <div class="form-group">
    <a href="Academic Details.php" class="btn btn-danger" id="prev-2">Previous</a>
    <a href="Student Details.php" class="btn btn-danger" id="next-2">Next</a>
    </div>
        <br>
        <strong>Select Your Programme:</strong>
    <select id="slct1" name="slct1" onchange="populate(this.id,'slct2')">
    <option value=""></option>
    <option value="Undergraduate"><strong>Undergraduate</strong></option>
    <option value="Diploma"><strong>Diploma</strong></option>
    <option value="Certificate"><strong>Certificate</strong></option>
    </select>
        <br>
        <div class="clearfix"></div>
    <strong>Courses Available:</strong>
    <select id="slct2" name="slct2">
        <br>
        <div class="form-group">
    <a href="Academic Details.php" class="btn btn-danger" id="prev-2">Previous</a>
    <a href="Student Details.php" class="btn btn-danger" id="next-2">Next</a>
    </div>
    <a href="coursevalidation/undergraduatevalidations/commerce.php"></a>
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
   

</body>

</html>
