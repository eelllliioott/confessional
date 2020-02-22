<html>
<head>
<title>love you</title>
<META HTTP-EQUIV="refresh" CONTENT="300">
<style type="text/css">

body {
	font-family: Verdana, Arial, sans-serif;
	font-size: 22px;
}

table  {
	border-collapse: collapse;
	background-color: #FFFFFF;
	border-color: black;
	font-size: 22px;
	font-family: Verdana, Arial, sans-serif;
}
input {
	font-size: 18px;
	border: 1px solid black;
	color: black;
	background-color: #AAAAAA;
}
textarea {
	font-size: 18px;
	font-family: Verdana, Arial, sans-serif;
	border: 1px solid black;
	color: black;
	background-color: #AAAAAA;
}
</style>
</head>
<body>
<div id="datacontainer" style="position:absolute;left:0px;top:0px;width:100%" onMouseout="scrollspeed=cache">

<center>
<?php
    $myfilename = "data.txt";
    if(file_exists($myfilename)){
      echo file_get_contents($myfilename);
    }
?>
</div>
</center>

<script type="text/javascript">


//Specify speed of scroll. Larger=faster (ie: 5)
var scrollspeed=cache=1

//Specify intial delay before scroller starts scrolling (in miliseconds):
var initialdelay=0

function initializeScroller(){
dataobj=document.all? document.all.datacontainer : document.getElementById("datacontainer")
dataobj.style.top="0px"
setTimeout("getdataheight()", initialdelay)
}

function getdataheight(){
thelength=dataobj.offsetHeight
if (thelength==0)
setTimeout("getdataheight()",50)
else
scrollDiv()
}

function scrollDiv(){
dataobj.style.top=parseInt(dataobj.style.top)-scrollspeed+"px"
if (parseInt(dataobj.style.top)<thelength*(-1))
dataobj.style.top="0px"
setTimeout("scrollDiv()",80)
}

if (window.addEventListener)
window.addEventListener("load", initializeScroller, false)
else if (window.attachEvent)
window.attachEvent("onload", initializeScroller)
else
window.onload=initializeScroller

</script>


</body>
</html>

