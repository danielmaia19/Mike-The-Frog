
<?php 

$products = array();

$products[101] = array(
	"name" => "Long Shirt, Red",
	"price" => 18,
	"img" => "img/shirts/shirt-101.jpg",
	);

$products[102] = array(
	"name" => "Mike the Frog Shirt, Black",
	"price" => 20,
	"img" => "img/shirts/shirt-102.jpg",
	);

$products[103] = array(
	"name" => "Mike the Frog Shirt, Blue",
	"price" => 20,
	"img" => "img/shirts/shirt-103.jpg",
	);

$products[104] = array(
	"name" => "Logo Shirt, Green",
	"price" => 20,
	"img" => "img/shirts/shirt-104.jpg",
	);

$products[105] = array(
	"name" => "Logo Shirt, Yellow",
	"price" => 20,
	"img" => "img/shirts/shirt-105.jpg",
	);

$products[106] = array(
	"name" => "Logo Shirt, Yellow",
	"price" => 20,
	"img" => "img/shirts/shirt-106.jpg",
	);



$pageTitle = "Mike's Full Catalog of Shirts";
$section = "shirts"; 
include('includes/header.php');

?>

	<div class="section shirts page">

		<div class="wrapper">
			<h1>Mike&rsquo;s Full Caralog Of Shirts </h1>

			<ul class="products">
				<?php foreach($products as $product) { 
					echo "<li>";
					echo '<a href="#">';
					echo '<img src="' . $product["img"] . '" alt="' . $product["name"] . '">';
					echo "<p>View Details</p>";
					echo "</a>";
					echo "</li>"; 
				} ?>
			</ul>

		</div>

	</div>

<?php include('includes/footer.php'); ?>