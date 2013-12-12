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

<link type="text/css" href="naviNEU.css" rel="stylesheet">
<link href="sviNEU.css" type="text/css" rel="stylesheet">
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
.Stil13 {
	color: #FFFFFF;
	font-weight: bold;
}
.Stil14 {color: #FFFFFF}
-->
</style>
</head>

<!--  onLoad="window.open('PopUp.htm','Blende','width=375,height=520,top=0,left=200')" -->

<body>

<p>&nbsp;</p>
<table id="hauptrahmen" width="1000" height="100%" border="0" align="center" bgcolor="#FFFFFF" cellspacing="0" cellpadding="0">
  
  <!-- HEAD -->
  <tr>
  
	  <?php 
		include("headNEU.php");
	  ?>
  </tr>
  
  
  <!-- HEAD ENDE -->
  
  <tr>
  <td colspan="4" height="110" bgcolor="#003366" align="right" valign="bottom" style="background-image:url(subheader.jpg); height:67px;">
  </td>
  </tr>
  
  <!-- NAVIGATION -->
  <tr> 
	  <?php 
		include("navi_left.php");
	  ?>
	  
	
	<!-- NAVIGATION ENDE -->
	
    
	<!-- CONTENT -->
	
	
	<?php
		if(!isset($id)){	
	?>

	<td width="600" align="left" valign="top" bgcolor="#FFFFFF" id="nurlinks">     
 
		<table width="600" border="0" cellpadding="0" cellspacing="0">
 
        <tr> 
          <td width="600" id="contentTable"> <div align="left">&nbsp;</div></td>
        </tr>
        <tr> 
          <td height="20">&nbsp;</td>
        </tr>
       
        <tr> 
          <td bgcolor="#0066cc" id="contentTable2"><div align="left" class="Stil14"> 
          NEWS </div></td>
        </tr>
        <!--
        <tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left" z-index:1>
              <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="508" height="110">
                <param name="movie" value="Flash/foerderverein.swf">
                <param name=quality value=high>
                <param name="wmode" value="transparent">
                <embed src="Flash/foerderverein.swf" width="508" height="110" quality=high pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" wmode="transparent"></embed> 
              </object>
            </div></td>
        </tr>
		-->
		
		<!--<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">* 
              <strong>POCO Einrichtungsm&auml;rkte</strong> aus Pforzheim ist 
              neuer Sponsor unserer <strong>D-Jugend</strong><br>
			  &nbsp;&nbsp;&nbsp;<a href="index.php?id=61"><em>mehr...</em></a></div></td>
        </tr>-->
    
		<!--
		<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">* 
              Ab der Saison 08/09 gibt es ihn wieder:<br>
              &nbsp;&nbsp;den <strong>&quot;SVI Club Call&quot;</strong> !!!<br><br>
              &nbsp;&nbsp;<strong>Ergebnisse</strong> nicht nur im Internet, sondern 
              auch<strong> per Telefon abfragen</strong>.Von den <br>&nbsp;&nbsp;Aktiven bis zur 
              Jugend immer aktuell. Die Nummer wird noch bekannt gegeben.<br><br>
              &nbsp;&nbsp;Ende der 80er Jahre waren wir der erste Club in Deutschland, der 
              seinen Fans diesen 
			  <br>&nbsp;&nbsp;Service angeboten hatte, kurze Zeit sp&auml;ter 
              hatte ihn auch der FC Bayern eingerichtet. 
			  <br>&nbsp;&nbsp;Nun lassen wir den Club 
              Call wieder aufleben.<br>
			  &nbsp;&nbsp;Auf eine erfolgreiche Zeit ...</div></td>
        </tr>-->
        
        <!--
        <tr> 
          <td id="contentfont" style= "text-align:right;"><div align="center"><img src="bilder/weihnachten2008.jpg" alt="weihnachten2008" width="450" height="200"></em></div></td>
        </tr>
         -->
         
         <!--
        <tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">* 
          Der Vorbereitungsplan der <strong>Aktiven</strong> f&uuml;r die kommende R&uuml;ckrunde ist online.<br>
          &nbsp;&nbsp;<a href="vorbereitung_rueckrunde_09.xls"><em>Download</em></a></div></td>
        </tr> 
        --> 
        
        <!--
        <tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">* 
              <strong>Beachten Sie unsere neuen </strong><a href="index.php?id=62"><em><strong>Werbepartner</strong></em></a><br>
              &nbsp;&nbsp;Danken Sie ihnen durch Besuch, Kauf und Weiterempfehlung</div></td>
        </tr>  
        -->
        
       
        
	
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
          <td id="contentfont" style= "text-align:right;"><div align="left">* 
          Am <strong>Samstag</strong>, den <strong>31.01.09</strong>, treffen sich die <strong>Aktiven</strong> nach dem Testspiel gegen<br>
          &nbsp;&nbsp;Hemmingen (ca. 18.00Uhr) im Gasthaus Krone in Illingen zu einem gem&uuml;tlichen<br>
          &nbsp;&nbsp;<strong>Kegelabend</strong>.</div></td>
        </tr>
        <tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">* 
          Bericht zum <strong>Bambini-Hallenspieltag</strong> in Kirchheim am Neckar.<br>
          &nbsp;&nbsp;<a href="index.php?id=66"><em>mehr</em></a>
          </div></td>
        </tr>
         <tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">* 
          Kennen Sie die <strong>SVI-Aktion "Geld für Müll"</strong> schon ???<br>
          &nbsp;&nbsp;Falls nicht, finden Sie weitere Infos unter folgendem Link:<br>
          &nbsp;&nbsp;<a href="index.php?id=12"><em>mehr</em></a></div></td>
        </tr>
         <tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;</div></td>
        </tr>
		  
		
        <tr> 
          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="bilder/anim_svi_120_high_gif.gif" alt="SVI Logo anim" width="160" height="120" align="middle"></td>
        </tr>
		
		
       <tr> 
          <td bgcolor="#0066cc" id="contentTable2"><div align="left" class="Stil13"> 
          AKTIVE </div></td>
        </tr>
        <!--
    <tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>&nbsp;&nbsp;&nbsp;&nbsp;</strong>SV 
              Illingen I - TSV Merklingen 
              I &nbsp;3:2 (3:0)<br/>
              &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;<span class="Stil2">Torsch&uuml;tzen: 
              1:0 u. 2:0 Lukas Kn&ouml;dler, 3:0 Johannes Kammerlohr</span></div></td>
        </tr>
		<tr> 
      <td height="50px" colspan="7"> <hr width="100%" size="1px" noshade style="color:#cccccc; background-color:#CCCCCC;"> 
      </td>
    </tr>
    -->
    <!--
      	<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left"><strong>Eichwald-Cup 
              2008 in Illingen</strong><br>
              <br>
              <strong>SV Illingen - TSV Asperg 3:0</strong> <br>
              Torsch&uuml;tzen: 1:0 Davor Brekalo, 2:0 Matthias Pucci, 3:0 Lukas 
              Kn&ouml;dler<br>
              <br>
              <strong>SV Illingen - TSV Stuttgart-M&uuml;hlhausen 0:2</strong><br>
              Torsch&uuml;tzen: <em>Fehlanzeige</em><br>
              <br>
              <strong>SV Illingen - GSV Hemmingen 1:0</strong><br>
              Torsch&uuml;tze: 1:0 Davor Brekalo<br>
              <br>
              <strong>Halbfinale</strong><br>
              <strong>SV Illingen - TSV Schwieberdingen 1:2</strong><br>
              Torsch&uuml;tze: 1:2 Lukas Kn&ouml;dler<br>
              <br>
              <strong>Finale</strong><br>
              <strong>TSV Stuttgart-M&uuml;hlhausen - TSV Schwieberdingen 0:1</strong></div></td>
        </tr>
		 <tr> 
      <td height="50px" colspan="7"> <hr width="100%" size="1px" noshade style="color:#cccccc; background-color:#CCCCCC;"> 
      </td>
    </tr>
			
		 <tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>&nbsp;&nbsp;&nbsp;&nbsp;</strong>SV 
              Illingen I - Nationalmannschaft Sambia 0:7 (0:5)<br/>
              &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;<span class="Stil2">Torsch&uuml;tzen: 
              <em>Fehlanzeige</em> </span>
			  <br><br>
              <a href="bilder/sambia2008_g.jpg"><img src="bilder/sambia2008.jpg"></a></div></td>
        </tr>
		 <tr> 
      <td height="50px" colspan="7"> <hr width="100%" size="1px" noshade style="color:#cccccc; background-color:#CCCCCC;"> 
      </td>
    </tr>
	
		<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;</div></td>
        </tr>-->
        
    
   <tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left"><font size="+1"><strong>* 
              Vorbereitung:</strong></font></div></td>
        </tr>
		<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;<strong>Turnier in Knittlingen: ausgeschieden</strong></div></td>
        </tr>
        <tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;<strong>Turnier in Weissach: ausgeschieden</strong></div></td>
        </tr>
      
      	<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;<strong>Turnier in Wiernsheim: 2. Platz</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <a href="bilder/2009_hallenturnier_wiernsheim/index.html">Bilder vom Turnier</a><br>
          &nbsp;&nbsp;&nbsp;&nbsp;<strong>Turnierverlauf:
              </strong><br>
              &nbsp;&nbsp;&nbsp;&nbsp;Gruppenphase:<br>
              &nbsp;&nbsp;&nbsp;&nbsp;SVI - SV Iptingen 0:0 <br>
              &nbsp;&nbsp;&nbsp;&nbsp;SVI - 08 M&uuml;hlacker 4:0 <br>
              &nbsp;&nbsp;&nbsp;&nbsp;SVI - TSV Wiernsheim II 5:1 <br>
              &nbsp;&nbsp;&nbsp;&nbsp;SVI - TSV Gro&szlig;glattbach 1:1 <br>
              &nbsp;&nbsp;&nbsp;&nbsp;Halbfinale:<br>
              &nbsp;&nbsp;&nbsp;&nbsp;SVI - SpVgg M&ouml;nsheim 3:0 <br>
              &nbsp;&nbsp;&nbsp;&nbsp;Finale:<br>
              &nbsp;&nbsp;&nbsp;&nbsp;SVI - TSV Gro&szlig;glattbach 2:3 n.V. (1:1)<br>
              </div></td>
        </tr>
		 <tr> 
      <td height="50px" colspan="7"> <hr width="100%" size="1px" noshade style="color:#cccccc; background-color:#CCCCCC;"> 
      </td>
    </tr>
       
        <tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;<strong>Sa 
              24.01. ??.?? Uhr</strong> </strong>&nbsp; Turnier in Leonberg (noch keinen Turnierplan erhalten)</div></td>
        </tr>
        <tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;<strong>Sa 
              31.01. 14.30 Uhr</strong> </strong>&nbsp; GSV Hemmingen - SVI</div></td>
        </tr>
       
        <tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;<strong>So 
              08.01. 14.30 Uhr</strong> </strong>&nbsp; SVI - 08 M&uuml;hlacker</div></td>
        </tr>
         <tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;<strong>Mi 
              04.02. 19.00 Uhr</strong> </strong>&nbsp; SV Iptingen - SVI (in Wiernsheim)</div></td>
        </tr>
        <tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;<strong>Sa 
              14.02. 14.30 Uhr</strong> </strong>&nbsp; TSV Maulbronn  - SVI</div></td>
        </tr>
        
         <tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;</div></td>
        </tr>
	
        <tr> 
          <td id="contentfont" style= "text-align:left; font-size:14pt;; font-weight:bold;">
            * Meisterschaft:          </td>
        </tr>
        <tr> 
          <td id="contentfont" style= "text-align:left; padding-left:50px;"><strong>WINTERPAUSE</strong></td>
        </tr>
		<!--
		<tr> 
          <td id="contentfont" style= "text-align:left; padding-left:50px;">FV Kirchheim I - SV Illingen I &nbsp;6:0 (2:0)<br/>
            <span class="Stil2">Torsch&uuml;tzen: Fehlanzeige</span></td>
        </tr>-->
        
        
        
		
				
		 <!--
        <tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;</div></td>
        </tr>
        
       
        <tr> 
          <td id="contentfont" style= "text-align:left; font-size:14pt;; font-weight:bold;">
            * Vorschau:          </td>
        </tr>

	
        <tr>           	
          <td id="contentfont" style= "text-align:left;"> <b>So 22.11. 12.45 Uhr</b> 
            &nbsp;TSV Nu&szlig;dorf  II&nbsp; <img src="bilder/MannschaftsLogos/nussdorf.jpg" alt="" align="middle">            vs.  <img src="bilder/MannschaftsLogos/svi_logo55px.jpg" alt="" align="middle"> &nbsp;SV Illingen II        </td>
        </tr>
        
        <tr>           	
          <td id="contentfont" style= "text-align:left;"> <b>So 07.12. 14.00 Uhr</b> 
            &nbsp;FV Kirchheim I <img src="bilder/MannschaftsLogos/kirchheim.jpg" alt="" align="middle">            vs.  <img src="bilder/MannschaftsLogos/svi_logo55px.jpg" alt="" align="middle"> &nbsp;SV Illingen I        </td>
        </tr>-->
        
		
        <!--
		<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left"><font size="+1"><strong>* 
              Saisonende:</strong></font></div></td>
        </tr>		
		<tr> 
          <td id="contentfont" style= "text-align:left; padding-left:50px;">
            Die Saison 2007/2008 ist f&uuml;r die Aktiven Mannschaften nun zu Ende. <br>
            Das Team bedankt sich recht herzlich bei den Fans und allen Helferinnen und Helfern 
            f&uuml;r ein ereignisreiches aber dennoch tolles Jahr - auf dass es in der <br>
            kommenden Saison ein St&uuml;ckchen weiter nach oben geht
          </td>
        </tr>
		-->
         <tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;</div></td>
        </tr>
        
       <tr> 
          <td bgcolor="#0066cc" id="contentTable2"><div align="left" class="Stil13"> 
          JUGEND </div></td>
        </tr>
		<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left"><font size="+1"><strong>* 
              Vorbereitung:</strong></font></div></td>
        </tr>
	
		
        <tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;SGV Freiberg - SVI 9:2 (4:1)<br/>
              <span class="Stil2">&nbsp;&nbsp;&nbsp;&nbsp;Torsch&uuml;tzen: Matthias Stocker, Emre G&uuml;r</span></div></td>
        </tr>
      
        <tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;<strong>A-Jugend</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Sa 
              24.01. 12.00 Uhr</strong> </strong>&nbsp; SKV Rutesheim - SVI</div></td>
        </tr>
        <tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;<strong>B-Jugend</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>So 
              25.01. 10.30 Uhr</strong> </strong>&nbsp; Spvgg Weil der Stadt - SVI</div></td>
        </tr>
        <tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;<strong>A-Jugend</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Sa 
              31.01. 11.00 Uhr</strong> </strong>&nbsp; FV L&ouml;chgau - SVI</div></td>
        </tr>
         <tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;<strong>C-Jugend</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Mi 
              18.02. 18.30 Uhr</strong> </strong>&nbsp; SVI - Germania Br&ouml;tzingen</div></td>
        </tr>
         <tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;<strong>C-Jugend</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Sa 
              21.02. 12.00 Uhr</strong> </strong>&nbsp; GSV Hemmingen - SVI</div></td>
        </tr>
        <tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;<strong>C-Jugend</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Mi 
              04.03. 18.30 Uhr</strong> </strong>&nbsp; SVI - FSV Knittlingen</div></td>
        </tr>
        
        
         <tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;</div></td>
        </tr>
		
		<!--
		<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left"><font size="+1"><strong>* 
              Pokal:</strong></font></div></td>
        </tr>
		<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;<strong>**A-Jugend:</strong></td>
        </tr>
		 
		<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">Spvgg 
              Renningen - SV Illingen&nbsp;0:5<br/>
              <span class="Stil2">Torsch&uuml;tzen: 2x Emre, 1x Matze, 1x Mauri, 
              1x Orhan</span></div></td>
        </tr>
	
			
        <tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;</div></td>
        </tr>
		<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;<strong>**C-Jugend:</strong></td>
        </tr>
		
		
				<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">SV 
              Illingen - FSV 08 Bissingen&nbsp;6:2<br/>
              <span class="Stil2">Torsch&uuml;tzen: 4x Serkan Kizil, 1x Andreas 
              K&ouml;ppl, 1x Eric Gayer</span></div></td>
        </tr>
	 
	 <tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;</div></td>
        </tr>
		-->
		<tr> 
          <td id="contentfont" style= "text-align:left; font-size:14pt;; font-weight:bold;">
            * Meisterschaft:          </td>
        </tr>
        <tr> 
          <td id="contentfont" style= "text-align:left; padding-left:50px;"><strong>WINTERPAUSE</strong></td>
        </tr>
        <!--
		<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;**A-Jugend:</td>
        </tr>
		 
		<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">SV Illingen - Spvgg Weil der Stadt&nbsp; 3:0 <br/>
              <span class="Stil2">Torsch&uuml;tzen: 2x Orhan Koc, 1x Sinan Yilmaz</span></div></td>
        </tr>
		<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;</div></td>
        </tr>
		
        	<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;**B-Jugend:</td>
        </tr>		
		<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">SV Illingen - JSG Remseck 08 I&nbsp;2:4<br/>
            <span class="Stil2">Torsch&uuml;tzen: Giuseppe Drogo, Matthias Hitzler</span></div></td>
        </tr>
	     <tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;</div></td>
        </tr>
        
		<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;**C-Jugend:</td>
        </tr>		
		
        
        
        <tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">FV Markgr&ouml;ningen - SV Illingen&nbsp;1:4<br/>
              <span class="Stil2">Torsch&uuml;tzen: 3x Tim Scheuermann, 1x Serkan Kizil</span></div></td>
        </tr>
        
	     <tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;</div></td>
        </tr>
        -->
        
		<!--D-JUGEND-->
		<!--
		<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;<strong>**D-Jugend:</strong></td>
        </tr>
		
		<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">TSV Kleinglattbach 2 - SV Illingen&nbsp; -:-<br/>
              <span class="Stil2">Torsch&uuml;tzen: </span></div></td>
        </tr> 
		
        <tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;</div></td>
        </tr>
		-->
		
		<!--E1-JUGEND-->
		<!--
		<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;<strong>**E1-Jugend:</strong></td>
        </tr>
		   
		<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">SV Illingen I - TSV Gro&szlig;glattbach I &nbsp;11:0 (4:0)<br/>
              <span class="Stil2">Torsch&uuml;tzen: 5x Jonas Engler, 2x Samed Bagci, 2x Danny Kallenberg, 2x Mark Wei&szlig;</span></div></td>
        </tr> 
        <tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;</div></td>
        </tr>
        -->
        
        <!--E2-JUGEND-->
		<!--
		<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;<strong>**E2-Jugend:</strong></td>
        </tr>
		<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">SV Illingen II - TSV Gro&szlig;glattbach II&nbsp;4:1 (1:1)<br/>
              <span class="Stil2">Torsch&uuml;tzen: 2x Nils Greinert, 1x Simon Fink, 1x Davide Tasselli</span></div></td>
        </tr>  
		<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;</div></td>
        </tr>  
       -->
		
       
		<!--F2-JUGEND-->
		<!--
		<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;<strong>**F2-Jugend:</strong></td>
        </tr>
		<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">SV 
              Illingen II - TSV Ph&ouml;nix Lomersheim&nbsp;10:3<br/>
              <span class="Stil2">Torsch&uuml;tzen: 4x Tobias D&auml;schner, 4x Daniel D&auml;schner, 2x Tom Wei&szlig;</span></div></td>
        </tr> 
        <tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;</div></td>
        </tr>
        -->
		
        <!--BAMBINIS-->
		<!--
		<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;<strong>**Bambinis:</strong></td>
        </tr>
		<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left"><strong>Di 02.09.08</strong> 17.30Uhr <strong>Trainingsauftakt</strong></div></td>
        </tr>     
		
        <tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;</div></td>
        </tr>-->
				
        <!--<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left"><font size="+1"><strong>* 
              Meisterschaft:</strong></font></div></td>
        </tr>
		
		<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;</div></td>
        </tr>-->
		
		<!--A-JUGEND-->
		<!--<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;<strong>**A-Jugend:</strong></td>
        </tr>
		<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;SV 
              Illingen - FSV 08 Bissingen &nbsp;6:0 (2:0)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/>
              &nbsp;&nbsp;&nbsp; <span class="Stil2">Torsch&uuml;tzen: 2x Patrick, 
              Dani, Andr&eacute;, Orhan, Kevin</span></div></td>
        </tr>
       <tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;TSV 
              Ludwigsburg - SV Illingen 3:6 (1:2)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/>
              &nbsp;&nbsp;&nbsp; <span class="Stil2">Torsch&uuml;tze: 2x Orhan, 
              Patrick, Andr&eacute;, Kevin, Dodo</span></div></td>
        </tr>
        <tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;</div></td>
        </tr>-->
        
		
		<!--B-JUGEND-->
		<!--<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;<strong>**B-Jugend:</strong></td>
        </tr>
       
		<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;SG/TSV 
              Kleinsachsenheim - SV Illingen&nbsp; 3:1 (2:1)</strong><br/>
              &nbsp;&nbsp;&nbsp; <span class="Stil2">Torsch&uuml;tze: Dodo</span></div></td>
        </tr>
		<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;SV 
              Illingen - SV Horrheim&nbsp; 12:0 (4:0)<br/>
              &nbsp;&nbsp;&nbsp; <span class="Stil2">Torsch&uuml;tzen: <br>
               &nbsp;&nbsp;&nbsp;&nbsp; Sinan Yilmaz (4), Orhan Koc (2), Matthias Stocker (2), <br>
               &nbsp;&nbsp;&nbsp;&nbsp; Marcel Liebendörfer, Dominik Knödler, Guiseppe Drogo und Niko Gatsas</span></div></td>
        </tr>
		<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;SV 
              Illingen - TV Pflugfelden&nbsp; 2:4 (1:1)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>(POKAL)</strong><br/>
              &nbsp;&nbsp;&nbsp; <span class="Stil2">Torsch&uuml;tzen: Orhan, 
              Jens </span></div></td>
        </tr>
        <tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;</div></td>
        </tr>
		-->
		
		
		<!--C-JUGEND-->		
        <!--<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;<strong>**C-Jugend:</strong></td>
        </tr>
		<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;SV 
              Illingen - SGV Freiberg II &nbsp; 1:4 (1:1)<br/>
              &nbsp;&nbsp;&nbsp; <span class="Stil2">Torsch&uuml;tze: 1:1 Dennis Rommel</span></div></td>
        </tr>
		<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;Spvgg 
              Weil der Stadt I - SV Illingen &nbsp;1:1<br/>
              &nbsp;&nbsp;&nbsp; <span class="Stil2">Torsch&uuml;tze: ?</span></div></td>
        </tr>
        <tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left"></div></td>
        </tr>
		-->
		
			<!--D-JUGEND-->		
        <!--<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;<strong>**D-Jugend:</strong></td>
        </tr>
		<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;GSV 
              Pleidelsheim II - SV Illingen &nbsp;2:2<br/>
              &nbsp;&nbsp;&nbsp; <span class="Stil2">Torsch&uuml;tzen: Andreas 
              K&ouml;ppl, Serhan Kirpi</span></div></td>
        </tr>
		<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;SV 
              Illingen - TSV Benningen I &nbsp;2:5<br/>
              &nbsp;&nbsp;&nbsp; <span class="Stil2">Torsch&uuml;tzen: 2x Serhan 
              Kirpi</span></div></td>
        </tr>
        <tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left"></div></td>
        </tr>
		-->
		
		
		
		<!--E-JUGEND-->		
       <!-- <tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;<strong>**E-Jugend:</strong></td>
        </tr>
		<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;SV 
              Illingen I - VfB Tamm I&nbsp; 3:0 (Tamm hat zur&uuml;ckgezogen! 
              Wertung 3:0 f&uuml;r Illingen)<br/>
              &nbsp;&nbsp;&nbsp; <span class="Stil2">Torsch&uuml;tzen: -</span></div></td>
        </tr>
		<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;SV 
              Illingen II - GSV Pleidelsheim&nbsp; 4:2 (1:1)<br/>
              &nbsp;&nbsp;&nbsp; <span class="Stil2">Torsch&uuml;tzen: 2x Samed 
              Bagci, Marco Barbera, Mark Wei&szlig;</span></div></td>
        </tr>
		
		<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;SV 
              Freudental I - SV Illingen I &nbsp;3:10 (1:5)<br/>
              &nbsp;&nbsp;&nbsp; <span class="Stil2">Torsch&uuml;tzen: 4x Lars, 
              2x Fabien, 3x Yussuf und 1x Onurcan</span></div></td>
        </tr>
		<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;SKV 
              Erligheim II - SV Illingen II &nbsp;3:3 (1:1)<br/>
              &nbsp;&nbsp;&nbsp; <span class="Stil2">Torsch&uuml;tze: 2x Jonas 
              Engler, Danny Kallenberg</span></div></td>
        </tr>
        <tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;</div></td>
        </tr>
		-->
		
			<!--F-JUGEND-->		
        <!--
		<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;<strong>**F-Jugend:</strong></td>
        </tr>
		<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;SV 
              Illingen I - TuS Freiberg I &nbsp;5:1<br/>
              &nbsp;&nbsp;&nbsp; <span class="Stil2">Torsch&uuml;tzen: 2x Nils 
              Greinert, Riccardo Solombrino, Paulina Krauth, Simon Fink</span></div></td>
        </tr>
		<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;SV 
              Illingen II - SV Sal. Kornwestheim II &nbsp;-:- <br/>
              &nbsp;&nbsp;&nbsp; <span class="Stil2">Torsch&uuml;tzen: </span></div></td>
        </tr>
		
		<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;FSV 
              O&szlig;weil I - SV Illingen I &nbsp;1:7<br/>
              &nbsp;&nbsp;&nbsp; <span class="Stil2">Torsch&uuml;tzen: 4x Nils 
              Greinert, 2x Simon Fink, Daniel Leicht</span></div></td>
        </tr>
		<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;TSV 
              Ph&ouml;nix Lomersheim II - SV Illingen II &nbsp;-:- <br/>
              &nbsp;&nbsp;&nbsp; <span class="Stil2">Torsch&uuml;tzen: </span></div></td>
        </tr>
        <tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;</div></td>
        </tr>
		-->
		
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
		
		
		<!--
        <tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left"><font size="+1"><strong>* 
              Vorschau:</strong></font></div></td>
        </tr>
				
		<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;<strong>F-Jugend</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Fr 
              18.09. 17.30 Uhr</strong> </strong>&nbsp; SV Illingen I vs. TuS 
              Freiberg I</div></td>
        </tr>
		<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;<strong>F-Jugend</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Fr 
              19.09. 17.30 Uhr</strong> </strong>&nbsp; SV Illingen II vs. VfB 
              Vaihingen/Enz II </div></td>
        </tr>
		
			
		<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;<strong>E-Jugend</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Sa&nbsp;11.10. 
              12.00 Uhr</strong> </strong>&nbsp; SV Illingen I - TSV Gro&szlig;glattbach I</div></td>
        </tr>
        <tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;<strong>E-Jugend</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Sa&nbsp;11.10. 
          12.00 Uhr</strong> </strong>&nbsp; SV Illingen II - TSV Gro&szlig;glattbach II</div></td>
        </tr>
       	
               
        
       
       
         <tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;<strong>B-Jugend</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>So 
              07.12. 10.30 Uhr</strong> </strong>&nbsp; SV Illingen - JSG Remseck 08 I</div></td>
        </tr>-->
        <!--
		<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;<strong>A-Jugend&nbsp;</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Sa 
          25.10. 17.00 Uhr</strong> </strong>&nbsp; SpVgg Renningen - SV Illingen</div></td>
        </tr>
		-->
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
		<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left"></div></td>
        </tr>
        
		
      </table>
	    
     
      </p></td>
	
     
        
	<?php 	}
			
	 
	
		else{
			switch($id){
					/*case 10:
					include("kaderALT.php");
					break;*/
				
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
					
				case 140:
					include("ProfilBernhard.php");
					break;
					
				case 141:
					include("ProfilBenny.php");
					break;
					
				case 142:
					include("ProfilBatu.php");
					break;
					
				case 143:
					include("ProfilMichaA.php");
					break;
					
				case 144:
					include("ProfilAndreW.php");
					break;
					
				case 145:
					include("ProfilDani.php");
					break;
					
				case 146:
					include("ProfilHueseyin.php");
					break;
					
					
				case 12:
					include("patronen.php");
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
					
				/*case 17:
					include("nach_hauptversammlung.php");
					break;
				*/	
				case 18:
					include("verein.php");
					break;
				
				case 19:
					include("jugendcamp2009.php");
					break;
					
				case 20:
					include("shop.php");
					break;
					
				case 201:
					include("Profil_a_matthias.php");
					break;
					
				case 202:
					include("Profil_a_micha.php");
					break;
					

				case 203:
					include("Profil_a_sinan.php");
					break;
					
				case 204:
					include("Profil_a_niko.php");
					break;
					
				case 205:
					include("Profil_a_marcel.php");
					break;
					
				case 206:
					include("Profil_a_sandro.php");
					break;
					
				case 207:
					include("Profil_a_hakan.php");
					break;
					
				case 208:
					include("Profil_a_tobse.php");
					break;
					
				case 209:
					include("Profil_a_carsten.php");
					break;
				
				case 210:
					include("Profil_a_dodo.php");
					break;
					
				case 211:
					include("Profil_a_mauri.php");
					break;
					
				case 212:
					include("Profil_a_matze.php");
					break;
					
				case 213:
					include("Profil_a_fabio.php");
					break;
					
				case 214:
					include("Profil_a_andre.php");
					break;
					
				case 215:
					include("Profil_a_orhan.php");
					break;
					
				case 216:
					include("Profil_a_emre.php");
					break;
					
				case 217:
					include("Profil_a_oemer.php");
					break;
					
				case 218:
					include("Profil_a_alex.php");
					break;
					
				case 219:
					include("Profil_a_klaus.php");
					break;
					
				case 220:
					include("Profil_a_nic.php");
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
					
				case 263:
					include("mancity3.php");
					break;
					
				case 264:
					include("mancity4.php");
					break;
					
				case 265:
					include("mancity5.php");
					break;
					
				case 266:
					include("mancity6.php");
					break;
					
				case 267:
					include("mancity7.php");
					break;
					
				case 268:
					include("mancity8.php");
					break;
					
				case 269:
					include("mancity9.php");
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
					
				case 308:
					include("spielbericht_boennigheim.php");
					break;
					
				case 310:
					include("spielbericht_kircheim_0809h.php");
					break;
					
				case 311:
					include("spielbericht_lomersheim_0809a.php");
					break;
					
				case 312:
					include("spielbericht_sersheim_0809a.php");
					break;
					
				case 313:
					include("spielbericht_gemmrigheim_0809a.php");
					break;
					
				case 314:
					include("spielbericht_wiernsheim_0809a.php");
					break;
					
				case 315:
					include("spielbericht_haefnerhaslach_0809a.php");
					break;
					
				case 316:
					include("spielbericht_loechgau_0809a.php");
					break;
					
				case 317:
					include("spielbericht_hellas_0809a.php");
					break;
					
				case 318:
					include("spielbericht_boennigheim_0809a.php");
					break;
					
				case 319:
					include("spielbericht_rosswag_0809a.php");
					break;
					
				case 320:
					include("spielbericht_nussdorf_0809a.php");
					break;	
					
				case 321:
					include("spielbericht_guendelbach_0809a.php");
					break;
					
				case 322:
					include("spielbericht_bissingen_0809a.php");
					break;
					
				case 323:
					include("spielbericht_kirchheim_0809b.php");
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
					include("hallenmeisterschaft.php");
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
					
				
				case 43:
					include("eichwaldcup.php");
					break;
				
					
				case 44:
					include("bilderarchiv.php");
					break;
					
				case 45:
					include("turniere.php");
					break;
					
				case 46:
					include("ruit2008.php");
					break;
					
				case 47:
					include("torschuetzen_2te.php");
					break;
					
				case 51:
					include("openair.php");
					break;
					
				case 52:
					include("kelterfest.php");
					break;
					
				case 53:
					include("multimedia2.php");
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
					include("sponsoringHauptsponsor.php");
					break;
					
				case 61:
					include("sponsoringPremiumpartner.php");
					break;
					
				case 62:
					include("sponsoringWerbepartner.php");
					break;
					
				/*case 63:
					include("vfb.php");
					break;*/
				
				case 64:
					include("d-jugend.php");
					break;
					
				case 65:
					include("c-jugend.php");
					break;
					
				case 66:
					include("bambinis.php");
					break;
					
					
					
				/*case 91:
					include("chat.php");
					break;*/
					
				case 92:
					include("impressum.php");
					break;
					
				/*case 99:
					include("tagebuch.php");
					break;*/			
			}
		}
		
					
	?>
		
	<!-- CONTENT ENDE -->
    
  <!-- NAVIGATION RECHTS -->
    
    
	  <?php 
		include("navi_right.php");
	  ?>
	 
	
	<!-- NAVIGATION RECHTS ENDE -->
    
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
