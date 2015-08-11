<td width="600" align="left" valign="top" bgcolor="#FFFFFF" id="nurlinks">
      
	<div style="position:relative; top:-20px; left:0px;  z-index:3 ;width:150px">  
		     
      <table width="600" border="0" cellpadding="0" cellspacing="0">
        <tr> 
          <td width="475" colspan="3" id="contentTable"> 
            <div align="left">N&auml;chste Spiele</div>
          </td>
        </tr>
        <tr>
          <td>
       <?php

 //turn off notice and deprecated reporting
 error_reporting(E_ALL ^ ( E_NOTICE | E_DEPRECATED ));

 // database connection
 
 $db_link = mysql_connect('w00be8df.kasserver.com','d01f06ec','qwe123');
 $db_select = mysql_select_db('d01f06ec');


	date_default_timezone_set("Europe/Berlin");
	$timestamp = time();
	$heute = date("Y-m-d",$timestamp);
	$jetzt = date("H:i",$timestamp);
	$datumPlus21 = time() + (21 * 24 * 60 * 60);	// 21Tage in Sekunden
	$in3Wochen = date("Y-m-d",$datumPlus21);
	//echo $datum," - ",$uhrzeit," Uhr";
	//echo $in3Wochen;
 
 $query = "SELECT * FROM `Aktive` WHERE `datum` BETWEEN '$heute' AND '$in3Wochen'";

 $nextMatches = mysql_query($query);
 $numMatches = mysql_numrows($nextMatches);


 $q=0;
 while ($q < $numMatches) 
 {
 $home=mysql_result($nextMatches,$q,"home");
 $guest=mysql_result($nextMatches,$q,"guest");
 $date=mysql_result($nextMatches,$q,"datum");
 $phpDate = strtotime ($date);
 $myDate = date("d.m.Y", $phpDate);
 echo "<b>$myDate"." $home"." vs ".$guest."<br>";

 $q ++;
 }
  echo "<h1><b>test</b></h1>";
 /*
 while($row = mysqli_fetch_array($result)) 
 {
 echo $row["name"] . "<br>";
 } 
 */


?>

        
     </td>
        </tr>  
        

      </table>
      
      
      
    
    <p>&nbsp;</p>
    
    </td>
