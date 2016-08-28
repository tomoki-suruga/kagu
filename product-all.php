<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>tomoki design tokyo</title>
<meta name="viewport" content="width=device-width">

<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/sanitize.css" rel="stylesheet" type="text/css">
<link href='https://fonts.googleapis.com/css?family=Slabo+13px' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script src="js/kagu.js"></script>


</head>

<body>

<div class="wrapper">
	<div class="menu-3">
	<button type="buttom" id="buttom">
		<i class="fa fa-bars" aria-hidden="true"></i>
	</button>
		<div class="menu" id="menu">

			<nav class="manu-navi">

			<p>menu</p>
				<ul>
					<li><a href="index.html" class="anc">HOME</a></li>
					<li><a href="product-all.php" class="anc">Product All</a></li>
					<li><a href="about-as.html" class="anc">About us</a></li>
					<li><a href="contect.html" class="anc">Contact</a></li>
				</ul>
			<p>product category</p>
				<ul>
					<li><a href="product-all.php?flg=chair" class="anc">Chair</a></li>
					<li><a href="product-all.php?flg=table" class="anc">Table</a></li>
					<li><a href="product-all.php?flg=interior" class="anc">Interior</a></li>
					<li><a href="product-all.php?flg=accessories" class="anc">Accessories</a></li>
				</ul>
			</nav>
			<p class="cory"> &copy;2004  2015 <br>
			tomoki design tokyo.</p>
		</div>
		</div>

	<div class="top-2"><h1 class="kaishamei-2">tomoki design tokyo</h1>
	</div>
	<div class="navi-top">
		<a id="warks-product" href="#"><p><i class="fa fa-chevron-left" aria-hidden="true"></i>Warks & Product</p></a>
	<nav class="navi">
		<ul>
			<li id="Chair-b" <?php if($_GET["flg"] == "chair"){echo('class="active"');}?> ><a href=".Chair-p">Chair</a></li>
			<li <?php if($_GET["flg"] == "table"){echo('class="active"');}?>><a href=".Table-p" id="Table-a">Table</a></li>
			<li <?php if($_GET["flg"] == "interior"){echo('class="active"');}?>><a href=".Interior-p" id="Interior-a">Interior</a></li>
			<li <?php if($_GET["flg"] == "accessories"){echo('class="active"');}?>><a href=".Accessories-p" id="Accessories-a">Accessories</a></li>
		</ul>
	</nav>
	</div>

	<div class="img-photo">
		<ul><li class="big-photo Chair-p">
				<a class="photo-a" href="prod-1.html"><img src="kagu-img/chair-2.jpg"><div class="photo-text"><span class="text-title">Yellow Chair</span><span class="category-text">Chair</span><span><i class="fa fa-chevron-right" aria-hidden="true"></i></span></div></a>
			</li>
			<li class="min-photo Accessories-p">
				<a class="photo-a" href="prod-2.html"><img src="kagu-img/cushion-1.jpg"><div class="photo-text"><span class="text-title">plant cushion</span><span class="category-text">Accessories</span><span><i class="fa fa-chevron-right" aria-hidden="true"></i></span></div></a>
			</li>
			<li class="min-photo Interior-p">
				<a class="photo-a" href="prod-3.html"><img src="kagu-img/Interior-3.jpg"><div class="photo-text"><span class="text-title">brick Interior</span><span class="category-text">Interior</span><span><i class="fa fa-chevron-right" aria-hidden="true"></i></span></div></a>
			</li>
			<li class="min-photo Table-p">
				<a class="photo-a" href="prod-4.html"><img src="kagu-img/table-1.jpg"><div class="photo-text"><span class="text-title">white Table</span><span class="category-text">Table</span><span><i class="fa fa-chevron-right" aria-hidden="true"></i></span></div></a>
			</li>
			<li class="min-photo Chair-p">
				<a class="photo-a" href="prod-5.html"><img src="kagu-img/chair-3.jpg"><div class="photo-text"><span class="text-title">red Chair</span><span class="category-text">Chair</span><span><i class="fa fa-chevron-right" aria-hidden="true"></i></span></div></a>
			</li>
			<li class="big-photo Interior-p">
				<a class="photo-a" href="prod-6.html"><img src="kagu-img/Interior-1.jpg"><div class="photo-text"><span class="text-title">navy Interior</span><span class="category-text">Interior</span><span><i class="fa fa-chevron-right" aria-hidden="true"></i></span></div></a>
			</li>
			<li class="min-photo Chair-p">
				<a class="photo-a" href="prod-7.html"><img src="kagu-img/chair-5.jpg"><div class="photo-text"><span class="text-title">gray Chair</span><span class="category-text">Chair</span><span><i class="fa fa-chevron-right" aria-hidden="true"></i></span></div></a>
			</li>
			<li class="min-photo Interior-p">
				<a class="photo-a" href="prod-8.html"><img src="kagu-img/cushion -3.jpg"><div class="photo-text"><span class="text-title">pink Interior</span><span class="category-text">Interior</span><span><i class="fa fa-chevron-right" aria-hidden="true"></i></span></div></a>
			</li>


			<li class="min-photo Interior-p">
				<a class="photo-a" href="prod-9.html"><img src="kagu-img/Interior-3.jpg"><div class="photo-text"><span class="text-title">brick Interior</span><span class="category-text">Interior</span><span><i class="fa fa-chevron-right" aria-hidden="true"></i></span></div></a>
			</li>



			<li class="big-photo Accessories-p">
				<a class="photo-a" href="prod-10.html"><img src="kagu-img/cushion-2.jpg"><div class="photo-text"><span class="text-title">face cushion</span><span class="category-text">Accessories</span><span><i class="fa fa-chevron-right" aria-hidden="true"></i></span></div></a>
			</li>
			<li class="min-photo Interior-p">
				<a class="photo-a" href="prod-11.html"><img src="kagu-img/Interior-2.jpg"><div class="photo-text"><span class="text-title">white Interior</span><span class="category-text">Interior</span><span><i class="fa fa-chevron-right" aria-hidden="true"></i></span></div></a>
			</li>
			<li class="min-photo Chair-p">
				<a class="photo-a" href="prod-12.html"><img src="kagu-img/chair.jpg"><div class="photo-text"><span class="text-title">black Chair</span><span class="category-text">Chair</span><i class="fa fa-chevron-right" aria-hidden="true"></i></div></a>
			</li>



			<li class="min-photo">
				<a class="photo-a" href="prod-9.html"><img src="kagu-img/Interior-3.jpg"><div class="photo-text"><span class="text-title">brick Interior</span><span class="category-text">Interior</span><span><i class="fa fa-chevron-right" aria-hidden="true"></i></span></div></a>
			</li>
			<li class="min-photo">
				<a class="photo-a" href="prod-2.html"><img src="kagu-img/cushion-1.jpg"><div class="photo-text"><span class="text-title">plant cushion</span><span class="category-text">Accessories</span><span><i class="fa fa-chevron-right" aria-hidden="true"></i></span></div></a>
			</li>
			<li class="min-photo">
				<a class="photo-a" href="prod-9.html"><img src="kagu-img/Interior-3.jpg"><div class="photo-text"><span class="text-title">brick Interior</span><span class="category-text">Interior</span><span><i class="fa fa-chevron-right" aria-hidden="true"></i></span></div></a>
			</li>
			<li class="min-photo">
				<a class="photo-a" href="prod-4.html"><img src="kagu-img/table-1.jpg"><div class="photo-text"><span class="text-title">white Table</span><span class="category-text">Table</span><span><i class="fa fa-chevron-right" aria-hidden="true"></i></span></div></a>
			</li>
			<li class="min-photo">
				<a class="photo-a" href="prod-5.html"><img src="kagu-img/chair-3.jpg"><div class="photo-text"><span class="text-title">red Chair</span><span class="category-text">Chair</span><span><i class="fa fa-chevron-right" aria-hidden="true"></i></span></div></a>
			</li>
			<li class="big-photo">
				<a class="photo-a" href="prod-6.html"><img src="kagu-img/Interior-1.jpg"><div class="photo-text"><span class="text-title">navy Interior</span><span class="category-text">Interior</span><span><i class="fa fa-chevron-right" aria-hidden="true"></i></span></div></a>
			</li>
			<li class="min-photo">
				<a class="photo-a" href="prod-2.html"><img src="kagu-img/cushion-1.jpg"><div class="photo-text"><span class="text-title">plant cushion</span><span class="category-text">Accessories</span><span><i class="fa fa-chevron-right" aria-hidden="true"></i></span></div></a>
			</li>
			<li class="min-photo">
				<a class="photo-a" href="prod-9.html"><img src="kagu-img/Interior-3.jpg"><div class="photo-text"><span class="text-title">brick Interior</span><span class="category-text">Interior</span><span><i class="fa fa-chevron-right" aria-hidden="true"></i></span></div></a>
			</li>
			<li class="min-photo">
				<a class="photo-a" href="prod-4.html"><img src="kagu-img/table-1.jpg"><div class="photo-text"><span class="text-title">white Table</span><span class="category-text">Table</span><span><i class="fa fa-chevron-right" aria-hidden="true"></i></span></div></a>
			</li>
			<li class="min-photo">
				<a class="photo-a" href="prod-5.html"><img src="kagu-img/chair-3.jpg"><div class="photo-text"><span class="text-title">red Chair</span><span class="category-text">Chair</span><span><i class="fa fa-chevron-right" aria-hidden="true"></i></span></div></a>
			</li>
			<li cl
		</ul>
	</div>
	<div>
		<nav class="manu-navi-2">
			<ul>
				<li><a href="index.html">Home</a></li>
				<li><a href="product-all.html">Product</a></li>
				<li><a href="about-as.html">About us</a></li>
				<li><a href="contect.html">Contact</a></li>
			</ul>
		</nav>
	</div>
</div>
<footer>
<table>
	<caption>tomoki design tokyo</caption>
	<tr>
	<td>address</td><td>**** ****** 5F, *******, Meguro-ku, Tokyo-City, Tokyo, Japan</td>
	</tr>
	<tr>
	<td>contect</td><td>アイコン050-****-**** アイコン *********@gmail.com</td>
	</tr>
</table>
</footer>
</body>
</html>


