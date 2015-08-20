<td width="600" align="left" valign="top" bgcolor="#FFFFFF" id="nurlinks">
      
	<div style="position:relative; top:-20px; left:0px;  z-index:3 ;width:150px">  
		     
      <table width="600" border="0" cellpadding="0" cellspacing="0">
        <tr> 
          <td width="475" colspan="3" id="contentTable"> 
            <div align="left">&nbsp;</div>
          </td>
        </tr>
        <tr>
                </tr>  



	  <tr>                <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;</div></td>             </tr> 
          <td>
       <?php

 //turn off notice and deprecated reporting
 error_reporting(E_ALL ^ ( E_NOTICE | E_DEPRECATED ));

 // database connection
 
//$db_link = mysql_connect('w00be8df.kasserver.com','d01f06ec','qwe123')  or die(mysql_error());
//$db_select = mysql_select_db('d01f06ec') or die(mysql_error());
 	$db_link = mysqli_connect('w00be8df.kasserver.com','d01f06ec','qwe123','d01f06ec');
	
	$home = $_POST[home]; 
	if(empty($home) || $home != int) $home = NULL;
	$guest = $_POST[guest];
	if(empty($guest)  || $guest != int) $guest = NULL;
	$goalgetters = $_POST[goalgetters];
	if(empty($goalgetters)) $goalgetters = "";
	
	date_default_timezone_set("Europe/Berlin");
	$timestamp = time();
	$heute = date("Y-m-d",$timestamp);
	$jetzt = date("H:i",$timestamp);
	$datumMinusX = time() + (7 * 24 * 60 * 60);	// 7 Tage in Sekunden
	$vor1Woche = date("Y-m-d",$datumMinusX);
	
	$query  = "UPDATE `d01f06ec`.`Aktive` SET `goalsHome` = '$home',`goalsGuest` = '$guest',`goalgetters` = '$goalgetters' WHERE `datum` BETWEEN '$heute' AND '$vor1Woche'";
	$query2 = "SELECT * FROM `Aktive` WHERE `datum` BETWEEN '$heute' AND '$vor1Woche'";
	
/*$db_erg = mysqli_query( $db_link, $query2 );
while ($zeile = mysqli_fetch_array( $db_erg, MYSQL_ASSOC))
{	
	// Code
  	echo $zeile['home'] . " vs. " . $zeile['guest'];

}
*/
//$insert = mysqli_query($query);

 		$query  = "UPDATE `d01f06ec`.`Aktive` SET `goalsHome` = ?,`goalsGuest` = ?,`goalgetters` = ? WHERE `datum` BETWEEN '$heute' AND '$vor1Woche'";		
        $eintrag = $db_link->prepare( $query );
        $eintrag->bind_param( 'iis', $home, $guest, $goalgetters );
        $eintrag->execute();
		echo "Ergebnis erfolgreich eingetragen!";

//INSERT INTO `d01f06ec`.`Aktive` (`index`, `datum`, `anpfiff`, `home`, `guest`, `goalsHome`, `goalsGuest`, `goalgetters`) VALUES ('111', '2015-08-02', '15:00:00', 'a', 'b', NULL, NULL, '');
/*
	date_default_timezone_set("Europe/Berlin");
	$timestamp = time();
	$heute = date("Y-m-d",$timestamp);
	$jetzt = date("H:i",$timestamp);
	$datumPlusX = time() + (21 * 24 * 60 * 60);	// 21 Tage in Sekunden
	$in3Wochen = date("Y-m-d",$datumPlusX);
 
 	$query = "SELECT * FROM `Aktive` WHERE `datum` BETWEEN '$heute' AND '$in3Wochen' 
 	AND `goalsHome` is NULL";
 
 //$nextMatches = mysql_query($query);
 //$numMatches = mysql_numrows($nextMatches);

$db_erg = mysqli_query( $db_link, $query );
while ($zeile = mysqli_fetch_array( $db_erg, MYSQL_ASSOC))
{
	// Logoabfrage
	$homeTeam = substr($zeile['home'],0,strlen($zeile['home'])-3);
	$guestTeam = substr($zeile['guest'],0,strlen($zeile['guest'])-3);
	$queryLogoHome = "SELECT * FROM `Logos` WHERE `team` LIKE  '%$homeTeam%'";
	$db_logoHome = mysqli_query( $db_link, $queryLogoHome );
	$logosHome = mysqli_fetch_array( $db_logoHome, MYSQL_ASSOC);
	$queryLogoGuest = "SELECT * FROM `Logos` WHERE `team` LIKE  '%$guestTeam%'";
	$db_logoGuest = mysqli_query( $db_link, $queryLogoGuest );
	$logosGuest = mysqli_fetch_array( $db_logoGuest, MYSQL_ASSOC);
	
	// Datum
	$wochentage = array("So", "Mo", "Di", "Mi", "Do", "Fr", "Sa");
	$date = $zeile['datum'];
	$phpDate = strtotime ($date);
	$myDate = date("d.m.", $phpDate);
	$day = $wochentage[date("w", $phpDate)];
	$anpfiff = substr($zeile['anpfiff'],0,5); // Zeit ohne Sekunden
	
	// Code
 	echo "<tr>";
  	echo "<td id='contentfont' style= 'text-align:left;'><p><b>". 
  	$day . " " . $myDate . " " . $anpfiff . " Uhr </b> " . 
  	"&nbsp;&nbsp;&nbsp;<img src='" . $logosHome['logo'] . "' align='middle'>&nbsp;&nbsp;&nbsp;" . 
  	$zeile['home'] . " vs. " . $zeile['guest'] . 
  	"&nbsp;&nbsp;&nbsp<img src='" . $logosGuest['logo'] . "' align='middle'> " .
  	"</td>" ;
  	echo "</tr>";

}

*/
 /*$q=0;
 while ($q < $numMatches) 
 {
 $home=mysql_result($nextMatches,$q,"home");
 $guest=mysql_result($nextMatches,$q,"guest");
 $date=mysql_result($nextMatches,$q,"datum");
 $phpDate = strtotime ($date);
 $myDate = date("d.m.Y", $phpDate);
 echo "<b>$myDate"." $home"." vs. ".$guest."<br>";

 $q ++;
 }
 */
  //echo "<h1><b>test</b></h1>";
//  mysqli_close($db_link);
?>
</td>
<!--
	
	  	   <tr>        <td id="contentfont" style= "text-align:left;"><p><b>So 07.06</b><b>. 15.00 Uhr</b>          
	 &nbsp;<img src="bilder/MannschaftsLogos/bissingen.jpg"alt=" " align="middle"> TSV Ensingen I&nbsp;vs. SV Illingen II		
	  <img src="bilder/MannschaftsLogos/svi_logo55px.jpg" alt=" " align="middle"> </p></td>      </tr>  
	<tr>        <td id="contentfont" style= "text-align:left;"><p><b>So 07.06</b><b>. 15.00 Uhr</b>          
	 &nbsp; <img src="bilder/MannschaftsLogos/kleinglattbach.jpg"alt=" " align="middle"> Spvgg Bissingen I &nbsp;vs. SV Illingen I	
	  <img src="bilder/MannschaftsLogos/svi_logo55px.jpg" alt=" " align="middle">  </p></td>      </tr>
--> 

      </table>
      
      
      
    
    <p>&nbsp;</p>
    
    </td>
