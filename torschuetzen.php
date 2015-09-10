
    <td width="600" align="left" valign="top" bgcolor="#FFFFFF" id="nurlinks">
      
	<div style="position:relative; top:-20px; left:0px;  z-index:3 ;width:150px">  
		     
      <table width="600" border="0" cellpadding="0" cellspacing="0">
        <tr> 
          <td colspan="3" id="contentTable"> 
            <div align="left">SVI Torsch&uuml;tzen 1. Mannschaft Saison 2015/2016</div>
          </td>
        </tr>
  
    <tr> 
      <td colspan="2">&nbsp;</td>
    </tr>
    <!--
	<tr id="contentFont"> 
      <td width="120" align="right" id="contentFont"> <p align="right"><font size="+1">&nbsp;</font></p></td>
      <td width="424" id="contentFont"><font size="+1">Bisher keine Torschützen</font></td>
    </tr>
    -->
  
<?php
    //turn off notice and deprecated reporting
    error_reporting(E_ALL ^ ( E_NOTICE | E_DEPRECATED ));
    $db_link = mysqli_connect('w00be8df.kasserver.com','d01f06ec','qwe123','d01f06ec');
    
    if (mysqli_connect_errno() == 0)
    { 
		 $query = "SELECT `index`, `name`, `tore` FROM `Torschuetzen1` ORDER BY `tore` DESC ";
		
		 $db_erg = $db_link->prepare( $query );
		 $db_erg->execute();
		 $db_erg->bind_result( $index, $name, $tore ); 
	
		while ($db_erg->fetch())
		{ 
			if ($tore > 1) $num = "Tore"; 
			else $num = "Tor";
			echo "<tr id='contentFont'><td width='120' align='right' id='contentFont'> <p align='right'><font size='+1'>".       $tore . " " . $num . "</font></p></td>" .      
		"<td width='424' id='contentFont'><font size='+1'>" . $name . "</font></td></tr>" ;
		}
	}
	else
	{
		// Es konnte keine Datenbankverbindung aufgebaut werden
		echo 'Die Datenbank konnte nicht erreicht werden. Folgender Fehler trat auf: <strong>' .mysqli_connect_errno(). ' : ' .mysqli_connect_error(). '</strong>';
	}
	
	// Datenbankverbindung schliessen
	$db_link->close();
?>

    <tr> 
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr> 
      <td colspan="2">&nbsp;</td>
    </tr>


    <tr> 
      <td height="50px" colspan="2"> <hr width="85%" size="2px" noshade style="color:#0066cc; background-color:#CCCCCC;"> 
      </td>
    </tr>
    
        <tr> 
      <td colspan="2">&nbsp;</td>
    </tr>

    
       <tr> 
          <td colspan="3" id="contentTable"> 
            <div align="left">SVI Torsch&uuml;tzen 2. Mannschaft Saison 2015/2016</div>
          </td>
        </tr>
		
		 <tr> 
      <td colspan="2">&nbsp;</td>
    </tr>
    <!--
	 <tr id="contentFont"> 
      <td width="120" align="right" id="contentFont"> <p align="right"><font size="+1">&nbsp;</font></p></td>
      <td width="424" id="contentFont"><font size="+1">Bisher keine Torschützen</font></td>
    </tr>
    -->
   
<?php
    //turn off notice and deprecated reporting
    error_reporting(E_ALL ^ ( E_NOTICE | E_DEPRECATED ));
    $db_link = mysqli_connect('w00be8df.kasserver.com','d01f06ec','qwe123','d01f06ec');
    
    if (mysqli_connect_errno() == 0)
    { 
		 $query = "SELECT `index`, `name`, `tore` FROM `Torschuetzen2` ORDER BY `tore` DESC ";
		
		 $db_erg = $db_link->prepare( $query );
		 $db_erg->execute();
		 $db_erg->bind_result( $index, $name, $tore ); 
	
		while ($db_erg->fetch())
		{ 
			if ($tore > 1) $num = "Tore"; 
			else $num = "Tor";
			echo "<tr id='contentFont'><td width='120' align='right' id='contentFont'> <p align='right'><font size='+1'>".       $tore . " " . $num . "</font></p></td>" .      
		"<td width='424' id='contentFont'><font size='+1'>" . $name . "</font></td></tr>" ;
		}
	}
	else
	{
		// Es konnte keine Datenbankverbindung aufgebaut werden
		echo 'Die Datenbank konnte nicht erreicht werden. Folgender Fehler trat auf: <strong>' .mysqli_connect_errno(). ' : ' .mysqli_connect_error(). '</strong>';
	}
	
	// Datenbankverbindung schliessen
	$db_link->close();
?>
 

    <tr> 
      <td colspan="2">&nbsp;</td>
    </tr>

   	<tr> 
      <td height="50px" colspan="2"> <hr width="85%" size="2px" noshade style="color:#0066cc; background-color:#CCCCCC;"> 
      </td>
    </tr>
  </table>
      <p>&nbsp;</p>
    </td>