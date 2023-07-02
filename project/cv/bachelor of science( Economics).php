<?php
if(isset($_POST['submit'])){
    $english = $_POST['english'];
    
    if($english=="e|E"){
        echo("low value");
    }
}




?>



<htmL>
<head>
<title></title>

</head>
<body>
<form method="post">
<p>English/Kiswahili :<input type="text" name="english"></p>
<p>Mathematics/Business::<input type="text" name="english"></p>
<button name="submit">Submit</button>
</form>

</body>








</htmL>s