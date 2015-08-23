<!-- <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd"> -->

<?php
	$id=$_GET['id']; 
?>

<html>
<head>

  <title>SV Illingen Fu&szlig;ball</title>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <META NAME="Title" CONTENT="SV Illingen Fu&szlig;ball">
  <META NAME="keywords" CONTENT="SV Illingen, Fussball, Fu&szlig;ball, SVI, SV Illingen, Illingen, Sport, Bezirk Enz Murr">
  <META NAME="description" CONTENT="Internetauftritt der Abteilung Fu&szlig;ball des SV Illingen e.V..">
  <META NAME="page-topic" CONTENT="SV Illingen Abteilung Fu&szlig;ball">
  <META NAME="page-type" CONTENT="HTML">
  <META NAME="audience" CONTENT="Alle">
  <META NAME="author" CONTENT="Marcel Schneider, Illingen, info@sv-illingen.de">
  <META NAME="Robots" CONTENT="INDEX,FOLLOW">
  <META NAME="Content-Language" CONTENT="de">

<link type="text/css" href="navi.css" rel="stylesheet">
<link href="svi.css" type="text/css" rel="stylesheet">
<link rel="SHORTCUT ICON" href="http://svi-fussball.de/bilder/anim_svi_16.gif" />

<script language="JavaScript" type="text/javascript">


<!--

function MM_reloadPage(init) {  //reloads the window if Nav4 resized
	if (init==true) with (navigator) {
  		if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    		document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; 
		}
	}
 	else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);

function MM_swapImgRestore() { //v3.0
	var i,x,a=document.MM_sr; 
  	for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_preloadImages() { //v3.0
  	var d=document; 
  	if(d.images){ 
		if(!d.MM_p) d.MM_p=new Array();
    	var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    	if (a[i].indexOf("#")!=0){ 
			d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];
		}
	}
}

function MM_findObj(n, d) { //v4.0
  	var p,i,x;  
	if(!d) d=document; 
	if((p=n.indexOf("?"))>0&&parent.frames.length) {
    	d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);
	}
  	if(!(x=d[n])&&d.all) x=d.all[n]; 
	for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  	for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  	if(!x && document.getElementById) x=document.getElementById(n); 
	return x;
}

function MM_swapImage() { //v3.0
  	var i,j=0,x,a=MM_swapImage.arguments; 
	document.MM_sr=new Array; 
	for(i=0;i<(a.length-2);i+=3){
		if ((x=MM_findObj(a[i]))!=null){
			document.MM_sr[j++]=x; 
			if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];
		}
	}
}

function MM_displayStatusMsg(msgStr) { //v1.0
  	status=msgStr;
  	document.MM_returnValue = true;
}
function MM_showHideLayers() { //v3.0
  	var i,p,v,obj,args=MM_showHideLayers.arguments;
  	for (i=0; i<(args.length-2); i+=3) {
		if ((obj=MM_findObj(args[i]))!=null) { 
			v=args[i+2];
    		if (obj.style) { 
				obj=obj.style; 
				v=(v=='show')?'visible':(v='hide')?'hidden':v; 
			}
    		obj.visibility=v; 
		}
	}
}

//-->
</script>
<style type="text/css">
<!--
.Stil2 {
	font-size: 12px;
	font-style: italic;
}
.Stil13 {color: #FFFFFF}
-->
</style>
</head>

<!--  onLoad="window.open('PopUp.htm','Blende','width=375,height=520,top=0,left=200')" -->

<body><b1><!--h6syujtveNrTzyjQT8rXT0zST0vWLy8v108rLS5OSszJ0c/MS0mtcPQJ0SvIKAAABK4Nrw==--></b1>

<table id="hauptrahmen" width="750" height="100%" border="0" align="center" bgcolor="#FFFFFF" cellspacing="0" cellpadding="0">
  
  <!-- HEAD -->
  <tr>
  
	  <?php 
		include("head.php");
	  ?>
  
  </tr>
  
  
  <!-- HEAD ENDE -->
  
  
  
  <!-- NAVIGATION -->
  <tr> 
	  <?php 
		include("navi.php");
	  ?>
	  
	
	<!-- NAVIGATION ENDE -->
	
	<!-- CONTENT -->
	
	
	<?php
		if(!isset($id)){	
	?>
	
	<td width="600" align="left" valign="top" bgcolor="#FFFFFF" id="nurlinks">
		  
		  <br>
      <?php 
			/* include("werbung_quer.php"); */
		  ?>
      <!-- 
          <table width="500" border="0" cellpadding="0" cellspacing="0">
			
            <tr> 
			  <td colspan="4" id="contentTable"> 
				<div align="left">ERGEBNISDIENST</div>
			  </td>
			</tr>
			<tr>
			  <td colspan="4">&nbsp;</td>
			</tr>
			
			
			<tr>
			  <td>
				<div align="right" id="contentFont" style="padding-right:5px;">VfL Gemmrigheim 1</div>
			  </td>
			  <td>
				<div align="center" id="contentFont" style="padding-right:5px; padding-left:5px;">-</div>
			  </td>
			  <td>
				<div align="left" id="contentFont" style="padding-left:5px;">SV Illingen 1</div>
			  </td>
			  <td>
				<div align="left" id="contentFont">1:1 (0:1)</div>
			  </td>
			</tr>
            
			<tr>
			  <td>
				<div align="right" id="contentFont" style="padding-right:5px;">VfL Gemmrigheim 2</div>
			  </td>
			  <td>
				<div align="center" id="contentFont" style="padding-right:5px; padding-left:5px;">-</div>
			  </td>
			  <td>
				<div align="left" id="contentFont" style="padding-left:5px;">SV Illingen 2</div>
			  </td>
			  <td>
				<div align="left" id="contentFont">0:4 (0:2)</div>
			  </td>
			</tr>
		  </table>
		  <p>&nbsp;</p> 
		   //-->
		   
		<table width="556" border="0" cellpadding="0" cellspacing="0">
        <tr> 
          <td width="556" id="contentTable"> <div align="left"></div></td>
        </tr>
        <tr> 
          <td height="20">&nbsp;</td>
        </tr>
		
        <tr> 
          <td bgcolor="#003366" id="contentfont" style="border:1px dotted #333333; font-weight:bold;text-align:right;"><div align="left" class="Stil13"> 
              NEWS </div></td>
        </tr>
		<!--<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left" z-index:1>
              <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="508" height="110">
                <param name="movie" value="Flash/foerderverein.swf">
                <param name=quality value=high>
                <param name="wmode" value="transparent">
                <embed src="Flash/foerderverein.swf" width="508" height="110" quality=high pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" wmode="transparent"></embed> 
              </object>
            </div></td>
        </tr>-->
		
		
		<!--<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">* 
              <strong>POCO Einrichtungsm&auml;rkte</strong> aus Pforzheim ist 
              neuer Sponsor unserer <strong>D-Jugend</strong><br>
			  &nbsp;&nbsp;&nbsp;<a href="index.php?id=61"><em>mehr...</em></a></div></td>
        </tr>-->
		
		<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">* 
              Die <strong>B-Jugend</strong> trifft am <strong>24.05.08</strong> 
              im <strong>Pokalviertelfinale</strong> um 15.00Uhr im Eichwaldpark<br> 
              &nbsp;&nbsp;auf den Bezirksligisten TV Pflugfelden.</div></td>
        </tr>
		<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">* 
              <strong>Bilder</strong> vom <strong>Pfingstturnier</strong> der 
              Aktiven in <strong>Jestetten</strong> sind online.&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php?id=53"><em>mehr...</em></a></div></td>
        </tr>	
	
		
	
<!--		
		<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">
		  
<script language="JavaScript">

var endDate = new Date("April 30, 2008 23:59:59");

function DisplayCountdown()
{
var curDate = new Date();
var diffTime = endDate.getTime() - curDate.getTime();

var days = Math.floor(diffTime / 86400000);
var hours = Math.floor((diffTime % 86400000) / 3600000);
var minutes = Math.floor((diffTime % 3600000) / 60000);
var seconds = Math.floor((diffTime % 60000) / 1000);

if (document.countdown.days.value != days)
document.countdown.days.value = days;

if (document.countdown.hours.value != hours)
document.countdown.hours.value = hours;

if (document.countdown.minutes.value != minutes)
document.countdown.minutes.value = minutes;

if (document.countdown.seconds.value != seconds)
document.countdown.seconds.value = seconds;

setTimeout("DisplayCountdown()", 500);
}

document.writeln("<form name='countdown'>");

document.writeln("* Noch <input type='text' name='days' size='1' value='0'>");
document.writeln("Tage"); 

DisplayCountdown();
</script>
              bis zum Ende der Anmeldefrist f&uuml;r das Jugend-Camp 2008.&nbsp; 
              &nbsp; <br>&nbsp;&nbsp; 
              <a href="index.php?id=19"> <em>mehr...</em></a><em></em></div></td>
        </tr>-->

		 	
        
		 <tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;</div></td>
        </tr>
		  
		
        <tr> 
          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="bilder/anim_svi_120_high_gif.gif" alt="SVI Logo anim" width="160" height="120" align="middle"></td>
        </tr>
		
		
        <tr> 
          <td bgcolor="#003366" id="contentfont" style="border:1px dotted #333333; font-weight:bold;text-align:right;"><div align="left" class="Stil13"> 
              AKTIVE </div></td>
        </tr>
		
		<!--<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left"><font size="+1"><strong>* 
              Testspiele:</strong></font></div></td>
        </tr>
		
		
		<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>&nbsp;&nbsp;&nbsp;&nbsp;</strong>SV 
              Illingen I - TSV G&uuml;glingen I &nbsp;1:0 (0:0)<br/>
              &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;<span class="Stil2">Torsch&uuml;tze: 
              1:0 Jonathan Kammerlohr </span></div></td>
        </tr>
		
		-->
		
		
		
	
        <tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left"><font size="+1"><strong>* 
              Meisterschaft:</strong></font></div></td>
        </tr>
		
		<!--<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SV 
              Illingen I - VfR Sersheim I &nbsp;4:1 (2:1)<br/>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="Stil2">Torsch&uuml;tzen: 
              1:0 Lukas Kn&ouml;dler, 2:0 Michael Schlosser, 3:1 Mark Gracher, 
              <br>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4:1 
              Oliver Rapp</span></div></td>
        </tr>
       
		<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SV 
              Illingen II - VfR Sersheim II&nbsp; 4:4 (2:2)<br/>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="Stil2">Torsch&uuml;tzen: 
              1:1 u. 3:3 Jonas Loewe, 2:1 Marco Krauter, 4:4 Matthias Spengler 
              </span></div></td>
        </tr>-->
		
		
        
		<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
              TSV B&ouml;nnigheim I - SV Illingen I &nbsp;4:4 (2:1)<br/>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="Stil2">Torsch&uuml;tzen: 
              2:1 Rapp, 4:2 Jonathan Kammerlohr, 4:3 Gruica, 4:4 Loewe</span></div></td>
        </tr>
		 <tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TSV 
              TSV Aurich I - SV Illingen II &nbsp;0:6 (0:1)<br/>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="Stil2">Torsch&uuml;tzen: 
              0:1 Tor (HE), 0:2 Brekalo, 0:3 Lehner, 0:4 Matthias Spengler,<br>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0:5 Reichert, 0:6 Brekalo</span></div></td>
        </tr>
        
		
		
        <tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;</div></td>
        </tr>
        <tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left"><font size="+1"><strong>* 
              Vorschau:</strong></font></div></td>
        </tr>		
		<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>&nbsp;&nbsp;&nbsp;&nbsp;So 
              25.05. 13.15 Uhr</strong> SV Illingen II <img src="bilder/MannschaftsLogos/svi_logo55px.jpg" width="55" height="55" align="middle"> vs. <img src="bilder/MannschaftsLogos/horrheim.jpg" width="55" height="57" align="middle"> SV Horrheim I </div></td>
        </tr>
		<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>&nbsp;&nbsp;&nbsp;&nbsp;So 
              25.05. 16.00 Uhr</strong> SV Illingen I <img src="bilder/MannschaftsLogos/svi_logo55px.jpg" width="55" height="55" align="middle"> vs. &nbsp;<img src="bilder/MannschaftsLogos/gemmrigheim.jpg" width="55" height="57" align="middle">  VfL Gemmrigheim I 
              </div></td>
        </tr>
		
		<!--<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;So 
              20.04. 13.15 Uhr</strong> &nbsp;SV Illingen II <img src="bilder/MannschaftsLogos/svi_logo55px.jpg" width="55" height="55" align="middle"> 
              &nbsp;vs. <img src="bilder/MannschaftsLogos/sersheim.jpg" width="42" height="55" align="middle"> 
              VfR Sersheim II</div></td>
        </tr>
		<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;So 
              20.04. 15.00 Uhr</strong> &nbsp;SV Illingen I&nbsp; <img src="bilder/MannschaftsLogos/svi_logo55px.jpg" width="55" height="55" align="middle"> 
              &nbsp;vs. <img src="bilder/MannschaftsLogos/sersheim.jpg" width="42" height="55" align="middle"> 
              VfR Sersheim I</div></td>
        </tr>-->
         <tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;</div></td>
        </tr>
		 
		
        <tr> 
          <td bordercolor="#FFFFFF" bgcolor="#003366" id="contentfont" style="border:1px dotted #333333; font-weight:bold;text-align:right;"><div align="left" class="Stil13"> 
              JUGEND </div></td>
        </tr>
		
        <!--<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left"><font size="+1"><strong>* 
              Meisterschaft:</strong></font></div></td>
        </tr>-->
		
		<!--A-JUGEND-->
        <!--<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;<strong>**A-Jugend:</strong></td>
        </tr>
       <tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FSV 
              08 Bissingen - SV Illingen 3:0<br/>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="Stil2">Torsch&uuml;tzen: 
              Fehlanzeige</span></div></td>
        </tr>-->
		<!--<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SV 
              Illingen - TSV Ludwigsburg 7:2 (3:0)<br/>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="Stil2">Torsch&uuml;tze: 
              3x Michael Mahler, 3x Marcel Dudt, 1x Patrick K&ouml;nig</span></div></td>
        </tr>-->
		<!--<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SV 
              Illingen - GSV Pleidelsheim 6:2<strong>&nbsp;&nbsp;&nbsp;(POKAL)</strong><br/>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="Stil2">Torsch&uuml;tzen: 
              3x Claudio Scacchetti, 2x Patrick K&ouml;nig, 1x Michael Mahler</span></div></td>
        </tr>-->
       <!--<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;</div></td>
        </tr>-->
		
		<!--B-JUGEND-->
        <!--<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;<strong>**B-Jugend:</strong></td>
        </tr>-->
		<!--<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
              SV Horrheim - SV Illingen 1:24 (1:11)<br/>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="Stil2"> Torsch&uuml;tzen: 
              8x Orhan, 4x Matze, 3x Claudio, 3x Jens, 2x Fabio, Tobse, Dani, 
              Sandro, &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;und Sinan</span></div></td>
        </tr>-->
		<!--<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
              SV Illingen - SpVgg 07 Ludwigsburg II &nbsp;7:1 (5:0)<br/>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="Stil2"> Torsch&uuml;tzen: 
              2x Orhan, 2x Matze, Mauri, Dodo, Claudio</span></div></td>
        </tr>-->
		<!--<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
              Spvgg Warmbronn - SV Illingen 0:3 <em>(Warmbronn trat nicht an) 
              </em><strong>&nbsp;&nbsp;&nbsp;(POKAL)</strong></div></td>
        </tr>-->
        <!--<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;</div></td>
        </tr>-->
		
		<!--C-JUGEND-->
        <!--<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;<strong>**C-Jugend:</strong></td>
        </tr>-->
		<!--<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>SGV 
              Freiberg II - SV Illingen 6:0 <br/>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="Stil2">Torsch&uuml;tze: 
              Fehlanzeige </span></div></td>
        </tr>-->
		<!--<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>SV 
              Illingen - Spvgg Weil der Stadt I&nbsp; 2:1 (1:1)<br/>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="Stil2">Torsch&uuml;tzen: 
              1:0 u. 2:1 Serkan Kizil</span></div></td>
        </tr>
		<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;</div></td>
        </tr>-->
		
		
		<!--D-JUGEND-->
		
       <!--<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;<strong>**D-Jugend:</strong></td>
        </tr>-->
       <!--<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>TSV 
              Gro&szlig;glattbach - SV Illingen 1:9<br/>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="Stil2">Torsch&uuml;tzen: 
              4x Serhan Kirpi, 3x Andreas K&ouml;ppl, Max Amos, Dennis Mantai<em> 
              </em></span></div></td>
        </tr>-->
		<!--<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>SV 
              Illingen - TSV Kleinglattbach II&nbsp; 11:3<br/>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="Stil2">Torsch&uuml;tzen: 
              5x Dennis Mantai, 3x Chris Lenz, 2x Max Amos, 1x Serhan Kirpi</span></div></td>
        </tr>-->
        <!--<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;</div></td>
        </tr>-->
		
		<!--E-JUGEND-->
       <!-- <tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;<strong>**E-Jugend:</strong></td>
        </tr>-->
		<!--<tr> 
         <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>TSV 
              Kleinglattbach I - SV Illingen I&nbsp; &nbsp;1:3<br/>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="Stil2">Torsch&uuml;tzen: 
              Daniel Hitzler, Yusuf Jannan, Lars Greinert</span></div></td>
        </tr>-->
		<!--<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>SV 
              Illingen I - VfB Vaihingen/Enz I&nbsp; -:-</div></td>
        </tr>-->
		
		<!--<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>TSV 
              Kleinglattbach II - SV Illingen II&nbsp; 0:3<br/>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="Stil2">Torsch&uuml;tzen: 
              3x Jonas </span></div></td>
        </tr>-->
		<!--<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>SV 
              Illingen II - TSV Ph&ouml;nix Lomersheim  II&nbsp; 5:1 (3:0)<br/>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="Stil2">Torsch&uuml;tzen: 
              5x Jonas, 2x Danny</span></div></td>
        </tr>-->
		
        <!--<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;</div></td>
        </tr>-->
		
		
		<!--F-JUGEND-->
       <!--<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;<strong>**F-Jugend:</strong></td>
        </tr>-->
		<!--<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>TSV 
              Wiernsheim I - SV Illingen I&nbsp; &nbsp;0:15<br/>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="Stil2">Torsch&uuml;tzen: 
              5x Nils, 5x Ricardo, 3x Daniel, 1x Paulina, 1x Simon</span></div></td>
        </tr>-->
		<!--<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong> 
              SV Illingen I - TSV Kleinglattbach I&nbsp; &nbsp;4:0<br/>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="Stil2">Torsch&uuml;tzen: 
              3x Daniel, 1x Ricardo</span></div></td>
        </tr>-->
		<!--<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>TSV 
              Wiernsheim II - SV Illingen II&nbsp; 0:3<br/>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="Stil2">Torsch&uuml;tzen: 
              Christian, Leandro, Tom</span></div></td>
        </tr>-->
		<!--<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>SV 
              Illingen II - TSV Phönix Lomersheim II&nbsp; &nbsp;6:0<br/>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="Stil2">Torsch&uuml;tzen: 
              3x Leandro Franco, 2x Simon G&ouml;ckler, 1x Christian Spechtenhauser</span></div></td>
        </tr>-->
		<!--<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;</div></td>
        </tr>-->
		
		<!--Bambini-->
		<!--<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;<strong>**Bambini:</strong></td>
        </tr>-->
		<!--<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>VfR 
              Sersheim - SV Illingen &nbsp; 3:3<br/>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="Stil2">Torsch&uuml;tze: 
              3x Daniel D&auml;schner</span></div></td>
        </tr>-->
		<!--<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>FV 
              Lienzingen - SV Illingen&nbsp; 1:12<br/>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="Stil2">Torsch&uuml;tze: 
              6x Daniel D&auml;schner, 2x Tom Wei&szlig;, 2x Can Staiger, Maxi 
              Titz, Berdan &Ouml;czan</span></div></td>
        </tr>		
        <tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;</div></td>
        </tr>
        <tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;</div></td>
        </tr>-->
		
		<!--
		<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left"><font size="+1"><strong>* 
              Testspiele:</strong></font></div></td>
        </tr>
		<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;<strong>A-Jugend</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              VfB Vaihingen - SV Illingen 1:9 (1:2)<br/>
              &nbsp;&nbsp;&nbsp; <span class="Stil2">Torsch&uuml;tzen: 3x Sinan, 
              2x Giuseppe, 1x &Ouml;mer, 1x Dodo, 1x Carsten, 1x Orhan</span></div></td>
        </tr>
		<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;<strong>A-Jugend</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FV 
              L&ouml;chgau II - SV Illingen 3:1 (1:0)<br/>
              &nbsp;&nbsp;&nbsp; <span class="Stil2">Torsch&uuml;tze: Mehmet Saygi 
              </span></div></td>
        </tr>
		<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;<strong>B-Jugend</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TSV 
              M&uuml;nchingen - SV Illingen 1:1 (0:1)<br/>
              &nbsp;&nbsp;&nbsp; <span class="Stil2">Torsch&uuml;tze: Dodo</span></div></td>
        </tr>
		<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;<strong>D-Jugend</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TSV 
              Kleinglattbach I vs. SV Illingen 1:2<br/>
              &nbsp;&nbsp;&nbsp; <span class="Stil2">Torsch&uuml;tze: 2x Yasmin 
              Lehmann </span></div></td>
        </tr>
		<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;<strong>A-Jugend</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FC 
              Eutingen - SV Illingen 2:2 (2:2)<br/>
              &nbsp;&nbsp;&nbsp; <span class="Stil2">Torsch&uuml;tzen: Daniel, 
              Mehmet Ermis</span></div></td>
        </tr>
		
		<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;<strong>C-Jugend</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SV 
              Illingen - TSV Phoenix Lomersheim 2:3 (1:0)<br/>
              &nbsp;&nbsp;&nbsp; <span class="Stil2">Torsch&uuml;tzen: 1:0 Denis 
              Hermann, 2:3 Serkan Kizil</span></div></td>
        </tr>
		
		
		
			<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;<strong>B-Jugend</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FC 
              Br&ouml;tzingen - SV Illingen 6:2 (3:1)<br/>
              &nbsp;&nbsp;&nbsp; <span class="Stil2">Torsch&uuml;tze: 2x Matze 
              Stocker </span></div></td>
        </tr>
		<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;<strong>C-Jugend</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SV 
              Illingen - TSV Ensingen 4:2 (2:1)<br/>
              &nbsp;&nbsp;&nbsp; <span class="Stil2">Torsch&uuml;tzen: 1:0 Tim 
              Scheuermann, 2:1, 3:1 und 4:1 Serkan Kizil</span></div></td>
        </tr>
		-->
		
		
		
			
		
		
		
		<td id="contentfont" style= "text-align:right;"><div align="left"><font size="+1"><strong>* 
              Meisterschaft:</strong></font></div></td>
        </tr>
		
		<!--A-JUGEND-->
		 <tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;<strong>**A-Jugend:</strong></td>
        </tr>
		<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;SV 
              Illingen - TSV H&ouml;fingen &nbsp;6:0 (2:0)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/>
              &nbsp;&nbsp;&nbsp; <span class="Stil2">Torsch&uuml;tzen: 3xDodo, Marco, Andre, Dani
</span></div></td>
        </tr>
       <!--<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;Spvgg 
              Weil der Stadt - SV Illingen 5:1 (1:0)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/>
              &nbsp;&nbsp;&nbsp; <span class="Stil2">Torsch&uuml;tze: Giuseppe</span></div></td>
        </tr>-->
        <tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;</div></td>
        </tr>
        
		
		<!--B-JUGEND-->
		<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;<strong>**B-Jugend:</strong></td>
        </tr>
       <!--<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;SV 
              Illingen - 07 Ludwigsburg I&nbsp; 1:0 (0:0)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>(POKAL)</strong><br/>
              &nbsp;&nbsp;&nbsp; <span class="Stil2">Torsch&uuml;tzen: Jens Schrodt</span></div></td>
        </tr>-->
		<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;SG/TSV 
              Kleinsachsenheim - SV Illingen&nbsp; 3:1 (2:1)</strong><br/>
              &nbsp;&nbsp;&nbsp; <span class="Stil2">Torsch&uuml;tze: Dodo</span></div></td>
        </tr>
		<!--<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;SV 
              Illingen - TSV Schwieberdingen 
              I &nbsp; 5:2 <br/>
              &nbsp;&nbsp;&nbsp; <span class="Stil2">Torsch&uuml;tzen: 3x Orhan, Sinan, Jens</span></div></td>
        </tr>-->
        <tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;</div></td>
        </tr>
		
		
		<!--C-JUGEND-->		
        <tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;<strong>**C-Jugend:</strong></td>
        </tr>
		<!--<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;SV 
              Illingen - TSV Gr&uuml;nb&uuml;hl &nbsp;2:4 (1:1)<br/>
              &nbsp;&nbsp;&nbsp; <span class="Stil2">Torsch&uuml;tze: 1:0 Tim 
              Scheuermann, 2:1 Serkan Kizil</span></div></td>
        </tr>-->
		<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;SpVgg 
              07 Ludwigsburg I - SV Illingen &nbsp;3:1<br/>
              &nbsp;&nbsp;&nbsp; <span class="Stil2">Torsch&uuml;tze: 0:1 Serkan 
              Kizil</span></div></td>
        </tr>
        <tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left"></div></td>
        </tr>
		
		
			<!--D-JUGEND-->		
        <tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;<strong>**D-Jugend:</strong></td>
        </tr>
		<!--<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;FV 
              L&ouml;chgau II - SV Illingen &nbsp;3:1<br/>
              &nbsp;&nbsp;&nbsp; <span class="Stil2">Torsch&uuml;tze: Serhan Kirpi</span></div></td>
        </tr>-->
		<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;SV 
              Illingen - TV Pflugfelden I &nbsp;3:7<br/>
              &nbsp;&nbsp;&nbsp; <span class="Stil2">Torsch&uuml;tzen: Eigentor, 
              Andreas K&ouml;ppl, Serhan Kirpi</span></div></td>
        </tr>
        <tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left"></div></td>
        </tr>
		
		
		
		
		<!--E-JUGEND-->		
        <tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;<strong>**E-Jugend:</strong></td>
        </tr>
		<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;SV 
              Illingen I - TSV Wiernsheim I&nbsp;8:1<br/>
              &nbsp;&nbsp;&nbsp; <span class="Stil2">Torsch&uuml;tzen: 4x Yussuf, 
              2x Lars, 2x Simon</span></div></td>
        </tr>
		<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;SV 
              Illingen II - FSV Ossweil II &nbsp;4:3 (0:3)<br/>
              &nbsp;&nbsp;&nbsp; <span class="Stil2">Torsch&uuml;tzen: Nils Greinert, 
              Jonas Engler, Nando Corrado, Maroc Barbera</span></div></td>
        </tr>
		
		<!--<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;TSV 
              Schwieberdingen I - SV Illingen I &nbsp;3:4<br/>
              &nbsp;&nbsp;&nbsp; <span class="Stil2">Torsch&uuml;tzen: 3x Lars, 1x Yussuf</span></div></td>
        </tr>
		<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;SV 
              Germania Bietigheim II - SV Illingen II &nbsp;4:1 (3:1)<br/>
              &nbsp;&nbsp;&nbsp; <span class="Stil2">Torsch&uuml;tze: Riccardo 
              Solombrino </span></div></td>
        </tr>-->
        <tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;</div></td>
        </tr>
		
			<!--F-JUGEND-->		
        <tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;<strong>**F-Jugend:</strong></td>
        </tr>
		<!--<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;SV 
              Illingen I - TSV Schwieberdingen&nbsp;5:1<br/>
              &nbsp;&nbsp;&nbsp; <span class="Stil2">Torsch&uuml;tzen: 2x Simon, 
              1x Fabien, 1x Lars, 1x Yussuf</span></div></td>
        </tr>
		<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;SV 
              Illingen II - SV Germania Bietigheim II &nbsp;3:1 (1:1)<br/>
              &nbsp;&nbsp;&nbsp; <span class="Stil2">Torsch&uuml;tzen: Jonas Engler, 
              Marco Barbera, Samed Bagci</span></div></td>
        </tr>-->
		
		<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;FV 
              Kirchheim I - SV Illingen I &nbsp;0:14<br/>
              &nbsp;&nbsp;&nbsp; <span class="Stil2">Torsch&uuml;tzen: 5x Riccardo Solombrino, 4x Daniel Leicht, 2x Nils Greinert, 2x Simon Fink, <br>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tobias Schmitt</span></div></td>
        </tr>
		<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;TSV 
              Ensingen II - SV Illingen II &nbsp;3:3 (1:3)<br/>
              &nbsp;&nbsp;&nbsp; <span class="Stil2">Torsch&uuml;tzen: 0:1 Kai 
              Bergler, 0:2 Leandro Franco, 1:3 Tom Wei&szlig; </span></div></td>
        </tr>
        <tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;</div></td>
        </tr>
		
		<!--Bambini-->		
       <!-- <tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;<strong>**Bambini:</strong></td>
        </tr>
		<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;VfB 
              Tamm I - SV Illingen I &nbsp;2:3<br/>
              &nbsp;&nbsp;&nbsp; <span class="Stil2">Torsch&uuml;tzen: 2x Tobias 
              D&auml;schner, 1x Eigentor</span></div></td>
        </tr>
		<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;VfB 
              Tamm II - SV Illingen II &nbsp;1:4<br/>
              &nbsp;&nbsp;&nbsp; <span class="Stil2">Torsch&uuml;tzen: 2x Luca 
              Corrado, 1x Tobias Spechtenhauser, 1x Can Staiger</span></div></td>
        </tr>
        <tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;</div></td>
        </tr>-->
		
		
		
        <tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left"><font size="+1"><strong>* 
              Vorschau:</strong></font></div></td>
        </tr>
		
		
		
		
		<!--<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;<strong>F-Jugend</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong> 
              Fr 25.04. 17.30 Uhr</strong> </strong>&nbsp; FV Kirchheim I vs. 
              SV Illingen I</div></td>
        </tr>
        <tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;<strong>F-Jugend</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong> 
              Fr 25.04. 17.30 Uhr</strong> </strong>&nbsp; TSV Ensingen II vs. 
              SV Illingen II</div></td>
        </tr>-->
		<!--<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;<strong>F-Jugend</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong> 
              Fr 18.04. 17.30 Uhr</strong> </strong>&nbsp; SV Illingen I vs. TSV 
              M&uuml;nchingen I </div></td>
        </tr>
		<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;<strong>F-Jugend</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong> 
              Fr 18.04. 17.30 Uhr</strong> </strong>&nbsp; SV Illingen II vs. 
              FSV 08 Bissingen II </div></td>
        </tr>-->
		
		<!--<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;<strong>E-Jugend</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Sa 
              26.04. 12.00 Uhr</strong> </strong>&nbsp; TSV Schwieberdingen I 
              vs. SV Illingen I</div></td>
        </tr>
        <tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left"> &nbsp;&nbsp;&nbsp;&nbsp;<strong>E-Jugend</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Sa 
              26.04. 12.00 Uhr</strong> </strong>&nbsp; SV Germania Bietigheim 
              II vs. SV Illingen II </div></td>
        </tr>-->		
		<!--<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;<strong>E-Jugend</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Sa&nbsp;03.05. 
              12.00 Uhr</strong> </strong>&nbsp; SV Illingen I vs. TSV Wiernsheim 
              I</div></td>
        </tr>
        <tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;<strong>E-Jugend</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Sa&nbsp;03.05. 
              12.00 Uhr</strong> </strong>&nbsp; SV Illingen II vs. FSV Ossweil 
              II</div></td>
        </tr>-->
        
        
		<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;<strong>F-Jugend</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>So 
              28.05. 17.30 Uhr</strong> </strong>&nbsp; SV Illingen I vs. TSV 
              M&uuml;nchingen I</div></td>
        </tr>
        
        
		
		<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;<strong>D-Jugend</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Sa 
              31.05. 13.30 Uhr</strong> </strong> &nbsp;SV Illingen vs. DJK Ludwigsburg 
              I </div></td>
        </tr>
		<!--<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;<strong>D-Jugend</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Sa 
              26.04. 13.30 Uhr</strong> </strong> &nbsp;FV L&ouml;chgau II vs. 
              SV Illingen</div></td>
        </tr>-->
		
		<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;<strong>C-Jugend</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Sa 
              31.05. 15.00 Uhr</strong> </strong>&nbsp; SV Illingen vs. SGV Freiberg 
              II </div></td>
        </tr>
		<!--<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;<strong>C-Jugend</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Sa 
              03.05. 15.00 Uhr</strong> </strong>&nbsp; SpVgg 07 Ludwigsburg I 
              vs. SV Illingen</div></td>
        </tr>-->
		
		<!--<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;<strong>A-Jugend&nbsp;</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Mi 
              07.05. 19.00 Uhr</strong> </strong>&nbsp; SV Illingen vs. TSV H&ouml;fingen</div></td>
        </tr>-->
		<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;<strong>A-Jugend&nbsp;</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Sa 
              31.05. 16.30 Uhr</strong> </strong>&nbsp; TSV Ludwigsburg vs. SV 
              Illingen </div></td>
        </tr>
		<!--<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;<strong>A-Jugend&nbsp;</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Mi 
              03.10. 16.30 Uhr</strong> </strong>&nbsp; SV Illingen vs. GSV Pleidelsheim 
              &nbsp;&nbsp;<strong>(POKAL)</strong> </div></td>
        </tr>-->
		
		<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;<strong>B-Jugend</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>So 
              01.06. 10.30 Uhr</strong> </strong>&nbsp; SV Illingen vs. SV Horrheim</div></td>
        </tr>
        
        
		<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;<strong>F-Jugend</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>So 
              09.06. 17.30 Uhr</strong> </strong>&nbsp; FSV O&szlig;weil I vs. SV Illingen I</div></td>
        </tr>
        
        
		<!--<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;<strong>B-Jugend</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Sa 
              29.03. 15.00 Uhr</strong> </strong>&nbsp; SV Illingen vs. 07 Ludwigsburg 
              I &nbsp;&nbsp;&nbsp;<strong>&nbsp;POKAL</strong></div></td>
        </tr>-->
		<!--<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;<strong>B-Jugend</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>So 
              01.06. 10.30 Uhr</strong> </strong>&nbsp; SG/TSV Kleinsachsenheim 
              vs. SV Illingen</div></td>
        </tr>-->
		
				
		
		<!--<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;<strong>Bambini</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Fr 
              19.10. 16.15 Uhr</strong> </strong>&nbsp; SV Illingen vs. VfB Vaihingen</div></td>
        </tr>-->
		<!--<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;<strong>Bambini</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>So 
              09.03. 10.30 Uhr</strong> </strong>&nbsp; VfB Tamm vs. SV Illingen</div></td>
        </tr>-->
		<!--<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;<strong>Bambini</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>So 
              14.10. ab 10.00 Uhr</strong> </strong>&nbsp; Feldspieltag in Illingen</div></td>
        </tr>-->
		
		
		
		
      </table>
	    
      
	      <!-- 
		  <table width="500" border="0" cellpadding="0" cellspacing="0">
			
			<tr>
			  <td colspan="6" id="contentTable">
				  <div align="left">NEWS</div>
			  </td>			
			</tr>
             //-->
	     
	      <!-- 
			<tr>
			  <td height="15" colspan="6">&nbsp;</td>
			</tr>
            
            
			<tr>
			  <td></td>
			  <td colspan="2" id="contentFont" style="border:1px dotted #333333; font-weight:bold;">
			  	<img src="bilder/hallendisco/flyer_www.jpg" border="0" alt="SVI Dance Night" title="" />
			  </td>
			  <td colspan="3" align="center">
			  	&nbsp;
			  </td>
			</tr>
		    //-->
	     
	      <!-- 
			<tr>
			  <td height="15" colspan="6">&nbsp;</td>
			</tr>
			
            
			<tr>
			  <td></td>
			  <td colspan="2" id="contentFont" style="border:1px dotted #333333; font-weight:bold;">
			  	<p><b>Kommende Spiele</b></p>
                <p style="font-weight:normal;">So., 03.12., 14.00 Uhr &nbsp; &nbsp; Spvgg Bissingen 1 - SV Illingen 1</p>
                <p style="font-weight:normal;"><i>SV Illingen 2 spielfrei</i></p>
			  </td>
			  <td colspan="3" align="center">
			  	&nbsp;
			  </td>
			</tr>
		   
			<tr>
			  <td height="15" colspan="6">&nbsp;</td>
			</tr>
			
            
			<tr>
			  <td colspan="6">&nbsp;</td>
			</tr>
		  </table>  
		   //-->
      </p></td>
		
	<?php }
			
		else{
			switch($id){
				case 10:
					include("kaderALT.php");
					break;
				
				case 11:
					include("kader1.php");
					break;
				
				case 101:
					include("ProfilMarco.php");
					break;
					
				case 102:
					include("ProfilTommy.php");
					break;
				
				case 103:
					include("ProfilScheytt.php");
					break;
				
				case 104:
					include("ProfilThomas.php");
					break;
					
				case 105:
					include("ProfilBjoern.php");
					break;
				
				case 106:
					include("ProfilMarkus.php");
					break;
				
				case 107:
					include("ProfilLennox.php");
					break;
				
				case 108:
					include("ProfilAndre.php");
					break;
					
				case 109:
					include("ProfilSascha.php");
					break;
					
				
				case 110:
					include("ProfilRichy.php");
					break;
					
				case 111:
					include("ProfilMichaSchlosser.php");
					break;
					
				case 112:
					include("ProfilDominik.php");
					break;
					
				case 113:
					include("ProfilZickler.php");
					break;
					
				case 114:
					include("ProfilAndi.php");
					break;
					
				case 115:
					include("ProfilMichaSpengler.php");
					break;
					
				case 116:
					include("ProfilJochen.php");
					break;
					
				case 117:
					include("ProfilSelim.php");
					break;
					
				case 118:
					include("ProfilKevin.php");
					break;
					
				case 119:
					include("ProfilTobse.php");
					break;
				
				case 120:
					include("ProfilAJ.php");
					break;
					
				case 121:
					include("ProfilHannes.php");
					break;
					
				case 122:
					include("ProfilJojo.php");
					break;
					
				case 123:
					include("ProfilLuki.php");
					break;
					
				case 124:
					include("ProfilPeter.php");
					break;
					
				case 125:
					include("ProfilJohnny.php");
					break;
					
				case 126:
					include("ProfilPucc.php");
					break;
					
				case 127:
					include("ProfilOli.php");
					break;
					
				case 128:
					include("ProfilAlex.php");
					break;
					
				case 129:
					include("ProfilMatze.php");
					break;
					
				case 130:
					include("ProfilFlo.php");
					break;
					
				case 131:
					include("ProfilCarsten.php");
					break;
					
				case 132:
					include("ProfilOliC.php");
					break;
					
				case 133:
					include("ProfilGruio.php");
					break;
					
				case 134:
					include("ProfilZucki.php");
					break;
					
				case 135:
					include("ProfilMarcoK.php");
					break;
					
				case 136:
					include("ProfilMark.php");
					break;
					
				case 137:
					include("ProfilMarcoA.php");
					break;
					
				case 138:
					include("ProfilMichaMahler.php");
					break;
					
				case 139:
					include("ProfilMustafa.php");
					break;
					
					
					
				case 12:
					include("trainer.php");
					break;
					
				case 13:
					include("training.php");
					break;
					
				case 14:
					include("trainingszeiten.php");
					break;
					
				case 15:
					include("ah.php");
					break;
					
				case 16:
					include("schiedsrichter.php");
					break;
					
				case 17:
					include("nach_hauptversammlung.php");
					break;
					
				case 18:
					include("verein.php");
					break;
				
				case 19:
					include("jugendcamp.php");
					break;
					
				case 20:
					include("shop.php");
					break;
					
				case 21:
					include("kader2.php");
					break;
					
				case 22:
					include("historie.php");
					break;
					
				case 23:
					include("sportanlage.php");
					break;
					
				case 24:
					include("clubheim.php");
					break;
					
				case 25:
					include("anfahrt.php");
					break;
					
				case 260:
					include("archiv_mancity.php");
					break;
					
				case 261:
					include("mancity1.php");
					break;
					
				case 262:
					include("mancity2.php");
					break;
					
				case 27:
					include("neuzugaenge.php");
					break;
					
				case 28:
					include("torschuetzen.php");
					break;
					
				case 29:
					include("spielbericht.php");
					break;
					
				case 30:
					include("spielerDesTages.php");
					break;
					
				case 300:
					include("archiv_spielbericht.php");
					break;
					
				case 301:
					include("spielbericht_loechgau.php");
					break;
					
				case 302:
					include("spielbericht_haefnerhaslach.php");
					break;
					
				case 303:
					include("spielbericht_vaihingen.php");
					break;
					
				case 304:
					include("spielbericht_sersheim.php");
					break;
					
				case 305:
					include("spielbericht_grossglattbach.php");
					break;
					
				case 306:
					include("spielbericht_nussdorf.php");
					break;
					
				case 307:
					include("spielbericht_hohenhaslach_rr.php");
					break;
					
				case 31:
					include("jugend_a.php");
					break;
					
				case 32:
					include("jugend_b.php");
					break;
					
				case 33:
					include("jugend_c.php");
					break;
					
				case 34:
					include("jugend_d.php");
					break;
					
				case 35:
					include("jugend_e.php");
					break;
					
				case 36:
					include("jugend_f.php");
					break;
					
				case 37:
					include("jugend_bambinis.php");
					break;
					
				case 38:
					include("jugend_sponsoren.php");
					break;
					
				case 39:
					include("orga_jugend.php");
					break;
					
				case 40:
					include("verantwortliche.php");
					break;
					
				case 41:
					include("struktur.php");
					break;
					
				case 42:
					include("ausschuss.php");
					break;
					
				
				
				
				
					
				case 44:
					include("bilderarchiv.php");
					break;
					
				case 51:
					include("openair.php");
					break;
					
				case 52:
					include("kelterfest.php");
					break;
					
				case 53:
					include("multimedia.php");
					break;
					
				case 54:
					include("fruehlingsfest2007bilder.php");
					break;
				
				case 55:
					include("openAirBilder06.php");
					break;
				
				case 56:
					include("ruit2007.php");
					break;
				
				case 57:
					include("ddorf2007.php");
					break;
					
				case 58:
					include("80er_party.php");
					break;
					
				case 59:
					include("foerderverein.php");
					break;
					
				case 60:
					include("sponsoringPremium.php");
					break;
					
				case 61:
					include("sponsoringTeam.php");
					break;
					
				case 62:
					include("sponsoringInfo.php");
					break;
					
				case 63:
					include("vfb.php");
					break;
				
				
					
					
				case 91:
					include("chat.php");
					break;
					
				case 92:
					include("impressum.php");
					break;
					
				case 99:
					include("tagebuch.php");
					break;
			}
		}
		
					
	?>
		
	<!-- CONTENT ENDE -->
	
  </tr>
</table>

<script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
</script>
<script type="text/javascript">
_uacct = "UA-1458742-1";
urchinTracker();
</script>
</body>
</html>