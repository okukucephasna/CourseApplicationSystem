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
    <script>
    function passValues()
    {
        var firstname = "bachelor of criminology";
        localStorage.setItem("textvalue",firstname);
        return false;
    }
    </script>	
</head>

<body>

    <div class="brand">Kafuco Course Application Website</div>
    <div class="address-bar"></div>
    <div class="container">
    
    <form action="okuku.php">
        <img src="img/kafuco.png">
        <h1>How To Pass Variables From One Page To Another Page(HTML)</h1>  
   <h2>Using Local Storage With Javascript</h2> 
   <hr> 
   <input type="text" id="txt"/>
    <input type="submit" value="click" onclick="passValues();"/>
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
