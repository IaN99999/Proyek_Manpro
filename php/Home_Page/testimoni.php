<?php include '../navbar_footer/navbar.php'; ?>

	<style>
		body {
			background: url('../../assets/asset_web/bg.png');
		}

		.card-img-top {
			position: relative;
			display: block;
			margin-left: auto;
			margin-right: auto;
			z-index: 1;
			width: 140px;
			height: 140px;
			border-radius: 50%;
			border: 7px solid #fff;
			/* width: 65%;
          border-radius: 50%;
          margin: 0 auto;
          box-shadow: 0 0 10px rgba(0,0,-2);    */
		}

		.card {
			padding: 1.5em .5em .5em;
			text-align: center;
			box-shadow: 0 5px 10px rgba(0, 0, -2);
			background: #eeeeee
		}

		.card:hover img {
			border-color: darkblue;
			transition: .7s;
		}

		h1 {
			text-align: center;
			color: white;
		}

		h2 {
			text-align: center;
			margin-bottom: 30px;
			color: white;
		}

		hr {
			width: 10%;
			height: 5px;
			border: 0 none;
			margin-right: auto;
			margin-left: auto;
			margin-top: 30px;
			margin-bottom: 30px;
			background-color: white;
		}
	</style>
	<div class="container-fluid" style="padding-top: 15vh;padding-bottom:10vh">
		<h1>Testimonials</h1>
		<hr>
		<h2>What Our Clients Say</h2>
		<div class="row">
			<div class="col-md-4 d-flex justify-content-end">
				<div class="card" style="width: 18rem;">
					<img src="../../assets/foto_pengajar/guru1.jpg" class="card-img-top" alt="...">
					<div class="card-body">
						<h3 class="name">Nat Reynolds</h3>
						<p class="desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iste autem voluptatum illo molestiae dolore exercitationem deserunt quaerat, vero eos, assumenda asperiores nobis enim. Magnam soluta corrupti quibusdam porro tenetur ratione.</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 d-flex justify-content-center">
				<div class="card" style="width: 18rem;">
					<img src="../../assets/foto_pengajar/guru1.jpg" class="card-img-top" alt="...">
					<div class="card-body">
						<h3 class="name">Nat Reynolds</h3>
						<p class="desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iste autem voluptatum illo molestiae dolore exercitationem deserunt quaerat, vero eos, assumenda asperiores nobis enim. Magnam soluta corrupti quibusdam porro tenetur ratione.</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 d-flex justify-content-start">
				<div class="card" style="width: 18rem;">
					<img src="../../assets/foto_pengajar/guru1.jpg" class="card-img-top" alt="...">
					<div class="card-body">
						<h3 class="name">Nat Reynolds</h3>
						<p class="desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iste autem voluptatum illo molestiae dolore exercitationem deserunt quaerat, vero eos, assumenda asperiores nobis enim. Magnam soluta corrupti quibusdam porro tenetur ratione.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include '../navbar_footer/footer.php'; ?>
