
<script src="js/jquery.js"></script>
<link href="css/bootstrap.min.css" rel="stylesheet">
<center>
<select class="drpselecttext">
	<option value="">Choose Your Grade</option>
    <option value="A">A</option>
<option value="-A">A-</option>
<option value="B+">B+</option>
<option value="B">B</option>
<option value="B-">B-</option>
<option value="C+">C+</option>
<option value="C">C</option>
<option value="C-">C-</option>
<option value="D+">D+</option>
<option value="D"> D</option>
<option value="D-">D-</option>
<option value="E">E</option>
</select><br><br>
<div class="myselectedtxtdiv"></div>
<div id="errMsg"></div>
<button type="submit" id="dolla" class="btn btn-primary">Click</button>
</center>
<script type="text/javascript">
    
$(document).ready(function(){
    function nextPage(){
           window.location.href="validate.html";
       }
     function onPage(){
           window.location.href="good.html";
       }
    $('.drpselecttext').change(function(){
  		var myselectedtxt = $(this).find("option:selected").text();
           $('#dolla').click(function() {
               $("div#errMsg").html("");
        if(myselectedtxt=='A'){
      nextPage();
    }else if(myselectedtxt=='B'){
       onPage();
    }else if(myselectedtxt=='E'){
//        $("div#errMsg").css("background-color", "red");
        $("div#errMsg").html('<div class="alert alert-danger"> \
                                <strong>We do not cater for Students with grade E</strong>,thank you for visiting . \ \
                                </div>');
    }
//  		$('.myselectedtxtdiv').html("The selected text is:<strong> "+myselectedtxt+"</strong>");
  	});
}); 
    });
	
</script>