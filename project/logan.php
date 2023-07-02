<?php
mysql_connect("localhost","root",);
mysql_select_db("perfectcup");


$strSql = "SELECT * FROM members";
echo "<table cellpadding=5 cellspacing=5"><tr><th><id</th><th>fname</th><th>lname</th><th>email</th><tr>";

?>