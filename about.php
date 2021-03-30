<?php
	include("include/common.php");
	if(isset($_SESSION['email'])){
		header("location: home.php");
	}
	include("include/header.php");
?>

	<div class="container con-margin text-center">
		<div class="row">
			<div class="col-md-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3>WHO WE ARE</h3><br>
					</div>
					<div class="panel-body">
						<img src="images/wwa.jpg" alt="" class="img img-responsive center-block"><br>
					<p class="text-justify">
						E-Store  is the retail revolution, that is planned to serve common people Mobile and Electronic products with best quality and competitive price at the doorsteps. The objective of this store chain is to arrange good quality on best price in the industry.We are the team of India's best Reatail professionals, business managers and financial experts who are committed to work for the benefits of a common man. E-Store is against of the high profit taking culture of the market, whereas we provide all branded products in comparative low cost.
					</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3>WHAT WE DO</h3><br>
					</div>
					<div class="panel-body">
					<p class="text-justify">
						We have always been pioneers in the industry with our vast experience of experts from the globe to bring together a world class brand which is made in India - be it in promoting 'Retail Stores’ when it was unheard of in the Indian market, to growing through 'Franchisee' networks. We understand that continual training is key to this business.</p>
						<p class="text-justify">
						E-Store has created and perfected a franchise system which has proved to be a successful business model, spelling a win-win situation to all partners.</p>
						<ul class="text-justify">
							<li>
								MISSION:
	Sourcing High Quality Daily Need direct to
	customer with best price and work to make every
	Indian Happy, Healthy and prosperous.
							</li>
							<li>
								VISION:
	To become big retails system to fulfil customer's
	general needs. Work to be a Big market
	shareholder in India as Swadeshi system to
	compete global competitors.
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3>WHY CHOOSE US</h3><br>
					</div>
					<div class="panel-body">
						<ul class="text-justify">
							<li>
								<b>GREAT PRODUCTS:</b>
	We pledge in bringing the best , freshest and the fastest at your door step.
							</li><br><br>
							<li>
								<b>GREAT PROMOTIONS:</b>
	We promise to bring to you never before promotions and offers that you simply cannot refuse.
							</li><br><br>
							<li>
								<b>GREAT DAYS:</b> Now discounts aren’t just limited to selected days or time. Avail our all year long discounts on selected products
							</li><br><br>
							<li>
								<b>GREAT PRICE:</b>
	We promise to offer the best, lowest and the cheapest in the market.
							</li><br><br>
							<li>
								<b>GREAT PUNCTUALITY:</b>
	We promise to honour your time and energy. We will deliver on time.
							</li><br><br>
							<li>
								<b>GREAT POLICIES:</b>
	We pledge in bringing the best , freshest and the fastest at your door step.
							</li>
						</ul>
					</div>
			</div>
		</div>
	</div>
</div>






<?php include("include/footer.php"); ?>