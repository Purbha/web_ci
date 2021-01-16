<!DOCTYPE html>
<html lang="en">
<head>
	<title>User Form</title>
 	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="<?=base_url();?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url();?>assets/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="<?=base_url();?>assets/fontawesome/css/solid.min.css">
    <link rel="stylesheet" href="<?=base_url();?>assets/fontawesome/css/brands.min.css">    
  	<script src="<?=base_url();?>assets/js/jquery.js"></script>
  	<script src="<?=base_url();?>assets/js/popper.min.js"></script>
  	<script src="<?=base_url();?>assets/js/bootstrap.min.js"></script>
</head>
<body>
<div class="jumbotron text-center" style="margin-bottom:0">
	<h1>Halaman Home</h1>
  	<p>Dota blog untuk latihan CodeIgniter Framework</p> 
</div>
<div class="container" style="margin-top:30px">
	<div class="row">
    	<div class="col-sm-4">
      		<h2>Tentang Saya</h2>
   			<img src="<?=base_url();?>assets/img/me.jpg" class="rounded" alt="Me" width="200" height="250">
      		<p>Website ini adalah cerita tentang aku dan putriku Inara</p>
      		<h3>Menu Kiri</h3>
			<ul class="nav nav-pills flex-column">
        		<li class="nav-item">
                	<?php
						$link = site_url()."/latihan5/controller2/logout";
						$caption = "Logout"; 
						$properti = array(
							'onclick'=>"return confirm('Apakah anda ingin Logout?')",
							'class'=>"nav-link active",
						);
						echo anchor($link,$caption,$properti);
					?>
        		</li>
      		</ul>
      		<hr class="d-sm-none">
    	</div>
    	<div class="col-sm-8">
			<h2>Hero Trending dan Meta Dota 2 dari MDL Disneyland Major</h2>
      		<h5>Minggu, 26 Mei 2019 12:34 WIB</h5>
   	  		<p align="justify">
    			<img src="<?=base_url();?>assets/img/dota.jpeg" class="rounded" alt="Dota" width="400" height="225">
                <?=br(2);?>
            	<kbd>Jakarta</kbd> - Seiring tuntasnya MDL Disneyland Paris Major,
                yuk mengulas tren hero trending dan meta <abbr title="Defence Of The Ancients">DOTA</abbr> 2
                yang dibawa pro player dalam salah satu turnamen utama rangkaian Dota Pro Circuit tersebut.
            </p>
      		<p align="justify">
            	Disneyland Paris Major diselenggarakan oleh MDL atau
                Mars <abbr title="Defence Of The Ancients">DOTA</abbr> 2 League,
                penyelenggara turnamen Dota 2 asal China yang untuk pertama kalinya menggelar turnamen
                mayor <abbr title="Defence Of The Ancients">DOTA</abbr> 2 di luar regional Negeri Tirai Bambu.
                Disneyland Paris, yang terletak di Marne-la-Vallee,
                menjadi lokasi turnamen yang berlangsung pada 4-12 Mei dengan total hadiah
                mencapai USD 1 juta dolar itu.
            </p>
            <p align="justify">
            	<span class="text-danger">Baca juga</span>:
                <?php
					$link = 'https://inet.detik.com/games-news/d-4534246/'.
						'dota-2-jelang-mdl-disneyland-paris-major-usai-stockholm-major';
					$caption = 'Dota 2: Jelang MDL Disneyland Paris Major, Usai Stockholm Major.';
					$properti = array('target'=>'blank_');
					echo anchor($link,$caption,$properti);
				?>
           	</p>
			<p align="justify">
            	Beberapa hero yang sangat populer seperti Shadow Shaman, Nature Prophet, dan Vengeful Spirit.
                Simak lebih lanjut hero trending di MDL Disneyland Major lewat statistik hero di bawah ini:
                <?=br(2);?>
	            <img src="<?=base_url();?>assets/img/hero.jpg" class="rounded" alt="Hero" width="600" height="400">
                <?=br();?>
                <small>12 Hero yang paling sering dipakai di MDL Disneyland Major. (Dok. Datdota)</small>
            </p>
			<p align="justify">
            	Dari kedua belas hero di atas satu hero yang jadi andalan Liquid, Nyx Assassin,
                menempati peringkat pertama dari segi winrate yaitu sebesar 70.67%. Nyx termasuk
                favorit dikarenakan dia cocok dengan draft apapun dan kekuatan utamanya saat mengkontes lane. 
            </p>
            <p align="justify">
            	<span class="text-danger">Baca juga</span>:
                <?php
					$link = 'https://inet.detik.com/games-features/d-4545610/panduan-hero-dota-2-drow-ranger';
					$caption = 'Panduan Hero Dota 2: Drow Ranger.';
					$properti = array('target'=>'blank_');
					echo anchor($link,$caption,$properti);
				?>
           	</p>
            <p align="justify">
            	Hal kedua yang perlu diperhatikan adalah bagaimana hero-hero team fight dan pusher menjadi
                favorit di MDL Disneyland Major. Sebut saja Shadow Shaman yang menempati ranking pertama dari
                total count yaitu 95 dan Nature Prophet menempati peringkat ketiga dengan 85 total count.
                Dengan total count sebesar 95, Shadow Shaman punya win rate melebihi 50%. Kekuatan Shadow
                Shaman sebagai pusher, disabler, dan juga initiator membuat hero ini jadi favorit pemain
                support di MDL Disneyland Major.
            </p>
            <p align="justify">
				Salah satu meta yang muncul dalam turnamen ini adalah penggunaan offlane dengan build tanky
                dan aura carrier. Offlaner dibuild dan diposisikan sebagai hero di lini depan di team fight,
                akan tetapi bukan sebagai initiator, melainkan sebagai tanker dan tempo controller.
                Inisiasi tetap dipegang oleh support 4 dan kadang-kadang support 5.
            </p>
    	</div>
  	</div>
</div>
<div class="jumbotron text-center" style="margin-bottom:0">
    <h3>Universitas Islam As-Syafi'iyah</h3>
    <p>Copyright @2019 - Irsyad Purbha</p>
</div>
</body>
</html>