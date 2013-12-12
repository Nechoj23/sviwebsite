<style type="text/css">
/*--------------------------------------------------------------------------------
# ah-68-Technik 2.5 - Februar 2013 (J2.5)
# Copyright (C) 2006-2013 www.ah-68.de All Rights Reserved.
----------------------------------------------------------------------------------*/
body {
    font-family: <?php echo $this->params->get('bodyfontfamily');?> !important;
	font-size: <?php echo $this->params->get('bodyfontsize');?>px !important;
	line-height: <?php echo $this->params->get('bodylineheight');?>% !important;
    color: <?php echo $this->params->get('bodyColor');?>;
	background-color: <?php echo $this->params->get('bodybgColor');?>;
}
#contentframe {
	margin-top: <?php echo $this->params->get('frametotop');?>px;
}
#contentframe, #sidebar, .gotop {
	background-color: <?php echo $this->params->get('contentframebgcolor');?>;
}
.border-radius, #contentframe, #sidebar, .gotop {
	-webkit-border-radius: <?php echo $this->params->get('borderradius');?>px;
    -moz-border-radius: <?php echo $this->params->get('borderradius');?>px;
    border-radius: <?php echo $this->params->get('borderradius');?>px;
}
.box-shadow, #contentframe, #sidebar, .gotop {	
	-webkit-box-shadow: 0px 4px 5px rgba(0, 0, 0, <?php echo $this->params->get('contentframeshadow');?>);
    -moz-box-shadow: 0px 4px 5px rgba(0, 0, 0, <?php echo $this->params->get('contentframeshadow');?>);
    box-shadow: 0px 4px 5px rgba(0, 0, 0, <?php echo $this->params->get('contentframeshadow');?>);
}
h1 {
    color: <?php echo $this->params->get('h1color');?>;
}
h2 {
    color: <?php echo $this->params->get('h2color');?>;
}
h3 {
    color: <?php echo $this->params->get('h3color');?>;
}
h4, h5, h6 {
    color: <?php echo $this->params->get('h4h5h6');?>;
}
a, a:link, a:visited, a:active, a:focus {
   color: <?php echo $this->params->get('alinkColor');?>;
}
a:hover {
   color: <?php echo $this->params->get('ahoverlinkColor');?>;
}
.highlight {
	color : <?php echo $this->params->get('highlight');?>;
}
.invalid {
	border-color: <?php echo $this->params->get('invalid');?> !important;
}
label.invalid {
	color : <?php echo $this->params->get('labelinvalid');?>;
}
.item-separator, #article-index {
	border-color: <?php echo $this->params->get('separator');?> !important;
	border-bottom: <?php echo $this->params->get('separatorsize');?>px;
	border-bottom-style: <?php echo $this->params->get('separatorstyle');?>	
}
#topnav {
	background-color: <?php echo $this->params->get('topnavBGColor');?>;
	border-bottom-color: <?php echo $this->params->get('topnavbottom');?> !important;
}
.top-line {
	background-color: <?php echo $this->params->get('topstripeColor');?>;
	height: <?php echo $this->params->get('topstripeHeight');?>px;
	border-top-color: <?php echo $this->params->get('topstripetop');?> !important;
	border-bottom-color: <?php echo $this->params->get('topstripebottom');?> !important;
}
#header {
	background-color: <?php echo $this->params->get('headerbgcolor');?>;
}
.gotop {
	color: <?php echo $this->params->get('alinkColor');?>;
}
.gotop:hover {
	color: <?php echo $this->params->get('ahoverlinkColor');?>
}
.logo {
	height: <?php echo $this->params->get('logoheight');?>px;
	width: <?php echo $this->params->get('logowidth');?>px;
}
<?php if ($this->countModules('superfish')): ?>
ul.menusf-menu ul {;
	background-color: <?php echo $this->params->get('sfdropdownbgcolor');?>;	
	-webkit-box-shadow: 0px 3px 5px rgba(0, 0, 0, <?php echo $this->params->get('sfboxshadow');?>);
    -moz-box-shadow: 0px 3px 5px rgba(0, 0, 0, <?php echo $this->params->get('sfboxshadow');?>);
    box-shadow: 0px 3px 5px rgba(0, 0, 0, <?php echo $this->params->get('sfboxshadow');?>);
	-webkit-border-radius: <?php echo $this->params->get('sfaborderradius');?>px;
    -moz-border-radius: <?php echo $this->params->get('sfaborderradius');?>px;
    border-radius: <?php echo $this->params->get('sfaborderradius');?>px;
}
ul.menusf-menu li a, .menusf-menu li .separator  {
	font-size: <?php echo $this->params->get('sffontsize');?>px;
	font-weight: <?php echo $this->params->get('sffontweight');?>;
	color: <?php echo $this->params->get('alinksupermenuColor');?>;	
	background-color: <?php echo $this->params->get('sfbg');?>;	
	-webkit-border-radius: <?php echo $this->params->get('sfborderradius');?>px;
    -moz-border-radius: <?php echo $this->params->get('sfborderradius');?>px;
    border-radius: <?php echo $this->params->get('sfborderradius');?>px;
}
ul.menusf-menu li a:hover {
	color : <?php echo $this->params->get('ahoverlinksupermenuColor');?>;
	background-color: <?php echo $this->params->get('sfhoverbg');?>;
}
ul.menusf-menu li.active > a {
	color : <?php echo $this->params->get('activelinksupermenuColor');?>;	
	background-color: <?php echo $this->params->get('sfactivebg');?>;
}
ul.menusf-menu ul li a {
    color: <?php echo $this->params->get('alinksfmenuColor');?>;
	background-color: <?php echo $this->params->get('subsuperbg');?>;
  	font-size: <?php echo $this->params->get('sfsubfontsize');?>px;
	font-weight: <?php echo $this->params->get('sfsubfontweight');?>;
	-webkit-border-radius: <?php echo $this->params->get('sfsubborderradius');?>px;
    -moz-border-radius: <?php echo $this->params->get('sfsubborderradius');?>px;
    border-radius: <?php echo $this->params->get('sfsubborderradius');?>px;
}
ul.menusf-menu ul li a:hover {
    color: <?php echo $this->params->get('alinksfhovermenuColor');?>;
	background-color: <?php echo $this->params->get('subsuperhoverbg');?>;
}
ul.menusf-menu ul li.active > a {
    color: <?php echo $this->params->get('alinksfactivemenuColor');?>;
	background-color: <?php echo $this->params->get('subsuperactivebg');?>;
}
<?php endif; ?>
.menusf-vmenu ul {
    background-color: <?php echo $this->params->get('sfvdropdownbgcolor');?>;	
	-webkit-box-shadow: 0px 3px 5px rgba(0, 0, 0, <?php echo $this->params->get('sfvboxshadow');?>);
    -moz-box-shadow: 0px 3px 5px rgba(0, 0, 0, <?php echo $this->params->get('sfvboxshadow');?>);
    box-shadow: 0px 3px 5px rgba(0, 0, 0, <?php echo $this->params->get('sfvboxshadow');?>);
	-webkit-border-radius: <?php echo $this->params->get('sfvborderradius');?>px;
    -moz-border-radius: <?php echo $this->params->get('sfvborderradius');?>px;
    border-radius: <?php echo $this->params->get('sfvborderradius');?>px;
}
ul.menusf-vmenu li a  {
    color: <?php echo $this->params->get('alinksfvmenuColor');?>;
	background-color: <?php echo $this->params->get('subsupervbg');?>;
	font-size: <?php echo $this->params->get('sfvfontsize');?>px;
	font-weight: <?php echo $this->params->get('sfvfontweight');?>;		
	-webkit-border-radius: <?php echo $this->params->get('sfvsubborderradius');?>px;
    -moz-border-radius: <?php echo $this->params->get('sfvsubborderradius');?>px;
    border-radius: <?php echo $this->params->get('sfvsubborderradius');?>px;
}
ul.menusf-vmenu li a:hover {
    color: <?php echo $this->params->get('alinksfvhovermenuColor');?>;
	background-color: <?php echo $this->params->get('subsupervhoverbg');?>;
}
ul.menusf-vmenu li.active > a {
	color : <?php echo $this->params->get('alinksfvactivemenuColor');?>;
	background-color: <?php echo $this->params->get('subsupervactivebg');?>;
}
ul.menusf-vmenu ul li a  {
    color: <?php echo $this->params->get('alinksfvmenuColor');?>;
	background-color: <?php echo $this->params->get('subsupervbg');?>;
	font-size: <?php echo $this->params->get('sfsubvfontsize');?>px;
	font-weight: <?php echo $this->params->get('sfsubvfontweight');?>;			
	-webkit-border-radius: <?php echo $this->params->get('sfvsubborderradius');?>px;
    -moz-border-radius: <?php echo $this->params->get('sfvsubborderradius');?>px;
    border-radius: <?php echo $this->params->get('sfvsubborderradius');?>px;
}
ul.menusf-vmenu ul li a:hover {
    color: <?php echo $this->params->get('alinksfvhovermenuColor');?>;
	background-color: <?php echo $this->params->get('subsupervhoverbg');?>;
}
ul.menusf-vmenu ul li.active > a {
	color : <?php echo $this->params->get('alinksfvactivemenuColor');?>;
	background-color: <?php echo $this->params->get('subsupervactivebg');?>;
}
.inputbox, input, textarea {
	color: <?php echo $this->params->get('inputColor');?>;
	background-color: <?php echo $this->params->get('inputbgColor');?>;	
	-webkit-border-radius: <?php echo $this->params->get('inputborderradius');?>px;
    -moz-border-radius: <?php echo $this->params->get('inputborderradius');?>px;
    border-radius: <?php echo $this->params->get('inputborderradius');?>px;
}
.inputbox:hover, input:hover, textarea:hover {
	color: <?php echo $this->params->get('inputhoverColor');?>;
	background-color: <?php echo $this->params->get('inputbghoverColor');?>;
}
.cat-list-row0 {
	background-color : <?php echo $this->params->get('row0');?>;
	border-bottom-color: <?php echo $this->params->get('row0borderColor');?> !important;
}
.cat-list-row1 {
	background-color : <?php echo $this->params->get('row1');?>;
	border-bottom-color: <?php echo $this->params->get('row1borderColor');?> !important;
}
td.hits {
	border-left-color: <?php echo $this->params->get('hitsborderColor');?> !important;
}
.button, .validate, button, input.button, button.button, button.validate {
	color: <?php echo $this->params->get('abuttonColor');?>;
	background-color: <?php echo $this->params->get('bgbuttonColor');?>;
	-webkit-border-radius: <?php echo $this->params->get('buttonborderradius');?>px;
    -moz-border-radius: <?php echo $this->params->get('buttonborderradius');?>px;
    border-radius: <?php echo $this->params->get('buttonborderradius');?>px;
}
.button:hover, .validate:hover, button:hover, input.button:hover, button.button:hover, button.validate:hover {
	color: <?php echo $this->params->get('abuttonhoverColor');?>;
	background-color: <?php echo $this->params->get('bgbuttonhoverColor');?>;
}
.readmore {
    color: <?php echo $this->params->get('areadmoreColor');?>;
	background-color: <?php echo $this->params->get('bgreadmoreColor');?>;
	-webkit-border-radius: <?php echo $this->params->get('readmoreborderradius');?>px;
    -moz-border-radius: <?php echo $this->params->get('readmoreborderradius');?>px;
    border-radius: <?php echo $this->params->get('readmoreborderradius');?>px;
}
.readmore:hover {	
    color: <?php echo $this->params->get('areadmorehoverColor');?>;
	background-color: <?php echo $this->params->get('bgreadmorehoverColor');?>;
}
.readmore a, a.readmore {
	color: <?php echo $this->params->get('areadmoreColor');?>;
}
.readmore a:hover, a:hover.readmore {
    color: <?php echo $this->params->get('areadmorehoverColor');?>;
}
.moduletable_text h3, .module_text h3, div.moduletable h3, div.module h3, div.module_menu h3, div.moduletable_menu h3, div.moduletablenew h3, div.moduletablehot h3, div.modulenew h3, div.modulehot h3 {
    color:  <?php echo $this->params->get('moduleh3Color');?>;
	background-color: <?php echo $this->params->get('moduleh3bgColor');?>;
	-webkit-border-radius: <?php echo $this->params->get('moduleh3bgborderradius');?>px;
    -moz-border-radius: <?php echo $this->params->get('moduleh3bgborderradius');?>px;
    border-radius: <?php echo $this->params->get('moduleh3bgborderradius');?>px;
}
div.module div div div, div.module_menu div div div, div.moduletable div div div, .moduletable, div.moduletable_menu, div.moduletablenew, div.moduletablehot, div.modulenew, div.modulehot {
    color: <?php echo $this->params->get('modulefontColor');?>;
	background-color: <?php echo $this->params->get('modulebgColor');?>;
	-webkit-border-radius: <?php echo $this->params->get('modulebgborderradius');?>px;
    -moz-border-radius: <?php echo $this->params->get('modulebgborderradius');?>px;
    border-radius: <?php echo $this->params->get('modulebgborderradius');?>px;
}
</style>
