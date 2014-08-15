<?php
if(isset($_POST['imageurl'])) {
  $imageurl = ($_POST['imageurl']);
} else {
  print('<p align="center" style="background-color: red;">You haven\'t inserted a URL</p>');
  $imageurl = htmlspecialchars('http://fc06.deviantart.net/fs70/f/2013/044/4/b/adventure_time_by_tompreston-d5uk0m5.jpg');
}
?>

<!DOCTYPE html>
<head>
<style>
#slider {
	position: relative;
	display: block;
	margin: 0 auto;
	overflow: hidden;
	background-color: #ffffff;
	width: 960px;
	height: 430px;
}
#changeimg {
	display: block;
	margin: 0 auto;
	padding: 12px;
	width: 50%;
}
.left {
	position: absolute;
	right: 0px;
	top: 0px;
	z-index: 100;
	height: 430px;
	width: 250px;
	background: rgb(84, 84, 84);
	background: rgba(84, 84, 84, 0.5);
}
.teaser {
	position: absolute;
	bottom: 0px;
	left: 0px;
	right: 250px;
	padding: 40px 100px 20px 25px;
	z-index: 1;
	background: rgb(200, 54, 54);
	background: rgba(200, 54, 54, 0.5);
}
.slider {
	float: left;
	clear: both;
	width: 100%;
	height: 100%;
	//background: url();
}
</style>
</head>
<body>
<div id="slider">

<div class="slider"><img src="<?php print (htmlspecialchars($imageurl));?>" class="slider" /></div>

	<div class="left"><p>I'm the left panel.</p></div>

		<div class="teaser"><p>I'm the teaser at the bottom.</p></div>

</div>
<div id="changeimg">
<h2>Curious about how your slideshow image will look on the homepage?</h2>
<p>This little program can help. Simply follow the directions below and get a true preview of how your image will look when published to ColoradoSprings.gov.</p>
<ol>
<li>Upload your prepared image to ColoradoSprings.gov as you normally would</li>
<li>Go to the "Media Library" and <em>double-click</em> your image (this will bring the image up in its own window)</li>
<li>Copy the <em>URL</em> by either selecting the address and <em>copying</em> it, or by <em>right-clicking</em> the image and selecting <em>Copy Image URL</em>.</li>
<li><em>Paste</em> the URL into the text-box below and hit <em>Insert Image</em>.</li>
</ol>
<form name="changeimg" action="slidehelp.php" method="post">
	<input type="text" name="imageurl" />
	<input type="submit" name="changeurl" value="Insert Image" />
</form>
<?php 
if(isset($_POST['imageurl'])) {
  $imageurl = ($_POST['imageurl']);
  print($imageurl);
} 
?>

</div>
</body>
</html>