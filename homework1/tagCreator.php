<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>HTML Tag Program</title>

<script type="text/javascript">

function hideOnLoad(){
	document.getElementById('tag').style.display = 'block';
	document.getElementById('chooseHeader').style.display = 'none';
	document.getElementById('chooseJavascript').style.display = 'none';
	document.getElementById('chooseCSS').style.display = 'none';
	document.getElementById('headerText').style.display = 'none';
}

function displayFields(){
var tag=document.getElementById("Tag Selection");

if(tag.selectedIndex == '1'){
	document.getElementById('chooseJavascript').style.display = 'block';
	document.getElementById('chooseHeader').style.display = 'none';
	document.getElementById('chooseCSS').style.display = 'none';
	document.getElementById('headerText').style.display = 'none';
}

else if(tag.selectedIndex == '2'){
	document.getElementById('chooseJavascript').style.display = 'none';
	document.getElementById('chooseHeader').style.display = 'none';
	document.getElementById('chooseCSS').style.display = 'block';
	document.getElementById('headerText').style.display = 'none';
}

else if(tag.selectedIndex == '5'){
	document.getElementById('chooseJavascript').style.display = 'none';
	document.getElementById('chooseHeader').style.display = 'block';
	document.getElementById('chooseCSS').style.display = 'none';
	document.getElementById('headerText').style.display = 'block';
}

else {
	document.getElementById('chooseJavascript').style.display = 'none';
	document.getElementById('chooseHeader').style.display = 'none';
	document.getElementById('chooseCSS').style.display = 'none';
	document.getElementById('headerText').style.display = 'none';
}

}

</script>
</head>
<body onLoad="javascript:hideOnLoad()";>
<div id="all" align="center">
<form name="Tag Creation" action="createTags.php">
<h1>PLEASE CHOOSE YOUR TAG TYPE</h1>
<div id="tag">
<select id="Tag Selection" onchange="javascript:displayFields()">
<option value="doctype">Doctype</option>
<option value="javascript">Javascript file link</option>
<option value="css">CSS file link</option>
<option value="body">Body tag</option>
<option value="html">HTML tag</option>
<option value="header">Font Header tag</option>
</select>
</div>
<div id="chooseHeader">
<h3>Choose your header type:</h3>
<select name = "header selection">
<option value="h1">Header 1</option>
<option value="h2">Header 2</option>
<option value="h3">Header 3</option>
<option value="h4">Header 4</option>
<option value="h5">Header 5</option>
<option value="h6">Header 6</option>
</select>
</div>
<br/>
<div id="chooseJavascript">
<h3>Enter the location of the javascript file:</h3><input name="javascript link" type="text" size="50" /><br/>
</div>
<div id="chooseCSS">
<h3>Enter the location of the CSS file:</h3><input name="css link" type="text" size="50" /><br/>
</div>
<div id="headerText">
<h3>Enter your desired texts:</h3><input name="javascript link" type="text" size="50" /><br/>
</div>
<input name="Submit" type="submit" value="Create Tag" />
</form>
</div>
</body>
</html>