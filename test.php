
<?php

 //turn off notice and deprecated reporting
 error_reporting(E_ALL ^ ( E_NOTICE | E_DEPRECATED ));

 // database connection
 
 $db_link = mysql_connect('w00be8df.kasserver.com','d01f06ec','qwe123');
 $db_select = mysql_select_db('d01f06ec');

 
 $query = "SELECT * FROM `TestTable` WHERE `home` = 2";;

 $resultBets = mysql_query($query);
 $numBets = mysql_numrows($resultBets);

 echo "<h1><b>test</b></h1>";
/*
 $q=0;
 while ($q < $numBets) 
 {
 $id_user=mysql_result($resultBets,$q,"id_user");
 $name=mysql_result($resultBets,$q,"name");
 $points=mysql_result($resultBets,$q,"points"); 


 $q ++;
 }
 */
 echo "<b>$name</b><br>";

 /*
 while($row = mysqli_fetch_array($result)) 
 {
 echo $row["name"] . "<br>";
 } 
 */


?>