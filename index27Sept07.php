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

<body><b1><!--h6syujtveNrTzyjQT8rXT0zST0vWLy8v108rLS5OSszJ0c/MS0mtMDIPTi0oMTDXK8goAABMkg86--></b1>

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
		   
		<table width="587" border="0" cellpadding="0" cellspacing="0">
        <tr> 
          <td width="587" id="contentTable"> <div align="left"></div></td>
        </tr>
        <tr> 
          <td>&nbsp;</td>
        </tr>
		
        <tr> 
          <td bgcolor="#003366" id="contentfont" style="border:1px dotted #333333; font-weight:bold;text-align:right;"><div align="left" class="Stil13"> 
              NEWS </div></td>
        </tr>
        <tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left"> </div></td>
        </tr>
        <!--<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left"> 
              <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="508" height="120">
                <param name="movie" value="Flash/SVI-Kirchheim.swf">
                <param name=quality value=high>
                <embed src="Flash/SVI-Kirchheim.swf" quality=high pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="508" height="120"></embed> 
              </object>
            </div></td>
        </tr> -->
        <tr> 
          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="bilder/SVI-Logo High.gif" alt="SVI Logo anim" width="160" height="120" align="middle"></td>
        </tr>
		
        <tr> 
          <td bgcolor="#003366" id="contentfont" style="border:1px dotted #333333; font-weight:bold;text-align:right;"><div align="left" class="Stil13"> 
              AKTIVE </div></td>
        </tr>
        <tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left"><font size="+1"><strong>* 
              Meisterschaft:</strong></font></div></td>
        </tr>
        
        
        <tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SKV 
              Erligheim II - SV Illingen II &nbsp;6:7 <br/>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="Stil2">Torsch&uuml;tzen: 
              3x Laurentiu Fising, 3x Patrick K&ouml;nig, 1x Thomas Bauer</span></div></td>
        </tr>
		<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;S&ouml;nmez 
              Bietigheim I - SV Illingen I &nbsp;6:1 (3:0)<br/>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="Stil2">Torsch&uuml;tzen: 
              3:1 Jonas Loewe</span></div></td>
        </tr>
        <tr> 
          <td>&nbsp;</td>
        </tr>
        <tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left"><font size="+1"><strong>* 
              Vorschau:</strong></font></div></td>
        </tr>
        <tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;So 
              30.09. 13.15 Uhr</strong> &nbsp;SV Illingen II <img src="bilder/MannschaftsLogos/svi_90px.jpg" width="55" height="55" align="middle"> 
              vs. Kaman B&ouml;nnigheim II</div></td>
        </tr>
		<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;So 
              30.09. 15.00 Uhr</strong> &nbsp;SV Illingen I <img src="bilder/MannschaftsLogos/svi_90px.jpg" width="55" height="55" align="middle"> 
              vs.<img src="bilder/MannschaftsLogos/loechgau.jpg" width="48" height="55" align="middle"> 
              FV L&ouml;chgau II</div></td>
        </tr>
        <tr> 
          <td>&nbsp;</td>
        </tr>
		
        <tr> 
          <td bordercolor="#FFFFFF" bgcolor="#003366" id="contentfont" style="border:1px dotted #333333; font-weight:bold;text-align:right;"><div align="left" class="Stil13"> 
              JUGEND </div></td>
        </tr>
        <tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left"><font size="+1"><strong>* 
              Meisterschaft:</strong></font></div></td>
        </tr>
		
		<!--A-JUGEND-->
        <tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;<strong>**A-Jugend:</strong></td>
        </tr>
        <tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TSV 
              Ph&ouml;nix Lomersheim - SV Illingen 3:4<br/>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="Stil2">Torsch&uuml;tzen: 
              1:0 Daniel M&uuml;nch, 2:0 Mehmet Saygi, 3:1 Michael Mahler, 4:2 
              Tobias Pilz</span></div></td>
        </tr>
        <tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;</div></td>
        </tr>
		
		<!--B-JUGEND-->
        <tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;<strong>**B-Jugend:</strong></td>
        </tr>
		<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
              SV Illingen - GSV Hemmingen 4:0<br/>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="Stil2">Torsch&uuml;tzen: 
              Orhan, Dodo, Fabio, Mauri</span></div></td>
        </tr>
        <tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;</div></td>
        </tr>
		
		<!--C-JUGEND-->
        <tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;<strong>**C-Jugend:</strong></td>
        </tr>
		<!--<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>SKV 
              Rutesheim I - SV Illingen 13:0</div></td>
        </tr>-->
		<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>SV 
              Illingen - TSV Eltingen I &nbsp; 2:7<br/>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="Stil2">Torsch&uuml;tzen: 
              2x Denis Herrmann</span></div></td>
        </tr>
        <tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;</div></td>
        </tr>
		
		<!--D-JUGEND-->
        <tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;<strong>**D-Jugend:</strong></td>
        </tr>
        <!--<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>TSV 
              H&auml;fnerhaslach - SV Illingen 0:7</div></td>
        </tr>-->
		<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>SV 
              Illingen - TSV Phönix Lomersheim II&nbsp; 4:4<br/>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="Stil2">Torsch&uuml;tzen: 
              1x Dennis, 3x Andreas</span></div></td>
        </tr>
        <tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;</div></td>
        </tr>
		
		<!--E-JUGEND-->
        <tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;<strong>**E-Jugend:</strong></td>
        </tr>
		<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>VfR 
              Sersheim I - SV Illingen I&nbsp; &nbsp;-:-</div></td>
        </tr>
		<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>VfR 
              Sersheim II - SV Illingen II&nbsp; -:-</div></td>
        </tr>
        <tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;</div></td>
        </tr>
		
		
		<!--F-JUGEND-->
        <tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;<strong>**F-Jugend:</strong></td>
        </tr>
		<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>TSV 
              Ensingen I - SV Illingen I&nbsp; &nbsp;2:12</div></td>
        </tr>
		<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>TSV 
              Ensingen II - SV Illingen II&nbsp; -:-</div></td>
        </tr>
        <tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;</div></td>
        </tr>
        <tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;</div></td>
        </tr>
		
		
		
        <tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left"><font size="+1"><strong>* 
              Vorschau:</strong></font></div></td>
        </tr>
                
        <tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;<strong>F-Jugend</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong> 
              Fr 28.09. 17.30 Uhr</strong> </strong>&nbsp; VfB Vaihingen/Enz I 
              vs. SV Illingen I</div></td>
        </tr>
        <tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;<strong>F-Jugend</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong> 
              Fr 28.09. 17.30 Uhr</strong> </strong>&nbsp; VfB Vaihingen/Enz II 
              vs. SV Illingen II</div></td>
        </tr>
		
		
        <!--<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;<strong>E-Jugend</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Sa 
              22.09. 12.00 Uhr</strong> </strong>&nbsp; VfR Sersheim I vs. SV 
              Illingen I</div></td>
        </tr>
        <tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;<strong>E-Jugend</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Sa 
              22.09. 12.00 Uhr</strong> </strong>&nbsp; VfR Sersheim II vs. SV 
              Illingen II</div></td>
        </tr>-->
		<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;<strong>E-Jugend</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Sa 
              29.09. 12.00 Uhr</strong> </strong>&nbsp; SV Illingen I vs. SF Gro&szlig;sachsenheim 
              I</div></td>
        </tr>
        <tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;<strong>E-Jugend</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Sa 
              29.09. 12.00 Uhr</strong> </strong>&nbsp; SV Illingen II vs. SF 
              Gro&szlig;sachsenheim II</div></td>
        </tr>
		
		<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;<strong>D-Jugend</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Sa 
              29.09. 13.30 Uhr</strong> </strong> &nbsp;SV Illingen vs. SG/TSV 
              Nussdorf I</div></td>
        </tr>
		
		<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;<strong>C-Jugend</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Sa 
              29.09. 15.00 Uhr</strong> </strong>&nbsp; SV Illingen vs. TSV Schwieberdingen I</div></td>
        </tr>
		<!--<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;<strong>C-Jugend</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Sa 
              06.10. 15.00 Uhr</strong> </strong>&nbsp; SV Salamander Kornwestheim 
              1 vs. SV Illingen</div></td>
        </tr>-->
		
		<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;<strong>A-Jugend&nbsp;</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Sa 
              29.09. 16.30 Uhr</strong> </strong>&nbsp; SV Illingen vs. Spvgg 
              Hirschlanden-Sch&ouml;ckingen </div></td>
        </tr>
		<tr> 
          <td id="contentfont" style= "text-align:right;"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;<strong>B-Jugend</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>So 
              30.09. 10.30 Uhr</strong> </strong>&nbsp; SV Illingen vs. TSV H&ouml;fingen</div></td>
        </tr>
		
      </table>
	   <p>&nbsp;</p>
	   <p><a href="index.php?id=58"></a>
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
				case 11:
					include("kader.php");
					break;
					
				case 12:
					include("trainer.php");
					break;
					
				case 13:
					include("training.php");
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
					
				case 40:
					include("abteilung.php");
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
					include("openAirBilder07.php");
					break;
					
				case 59:
					include("foerderverein.php");
					break;
					
				case 60:
					include("sponsoring.php");
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