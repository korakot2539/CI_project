<!-- header -->
<header class="header">
<<<<<<< HEAD
		<div class="header__wrap">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="header__content">
							<!-- header logo -->
							<a href=<?=base_url()?> class="header__logo">
								<img src="<?php echo base_url('/asset/home/')?>img/logo.svg" alt="">
=======
	<div class="header__wrap">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="header__content">
						<!-- header logo -->
						<a href=<?= base_url() ?> class="header__logo">
							<a href="index.html" class="header__logo">
								<img src="<?php echo base_url('/asset/home/') ?>img/logo.svg" alt="">
>>>>>>> 97acd1ba70e9f6710197c3ff9102cfe8d7ee208c
							</a>
							<!-- end header logo -->

							<!-- header nav -->
							<ul class="header__nav">
								<li class="header__nav-item">
									<a class="header__nav-link" href="<?= base_url('Home') ?>" role="button" aria-haspopup="true" aria-expanded="false">Home</a>
								</li>
									
								<!-- dropdown -->
								<li class="header__nav-item">
<<<<<<< HEAD
									<a class="dropdown-toggle header__nav-link" href="#" role="button" id="dropdownMenuCatalog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Category</a>
									<ul class="dropdown-menu header__dropdown-menu" aria-labelledby="dropdownMenuCatalog">
		
										<?foreach ($showcategorys as $showcategory) {?>
											<li><a href="<?=base_url("Category/index/$showcategory->category1")?>"><?= $showcategory->category_name ?></a></li>
                   						<?}?>
									</ul>
=======
									<a class="header__nav-link" href=<?= base_url('History') ?> role="button" aria-haspopup="true" aria-expanded="false">History</a>
>>>>>>> 97acd1ba70e9f6710197c3ff9102cfe8d7ee208c
								</li>
								<!-- end dropdown -->

								<li class="header__nav-item">
									<a class="header__nav-link" href="<?= base_url('Contact') ?>" role="button" aria-haspopup="true" aria-expanded="false">Contact</a>
								</li>
							</ul>
							<div class="header__auth">
								<!-- <button class="header__search-btn" type="button">
									<i class="icon ion-ios-search"></i>
								</button> -->
							</div>

<<<<<<< HEAD
							<!-- end header nav -->
							<!-- header auth -->
							<div class="header__auth">
							<?php $name = "";
							if($this->session->userdata('ss_user_name')!="") $name=$this->session->userdata('ss_user_name') ?>
							<?php if($name != ""){ ?>
								<!-- dropdown -->
								<li class="header__nav-item">
									<a class="dropdown-toggle header__nav-link" href="#" role="button" id="dropdownMenuCatalog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Welcome... <?=$name ?></a>
									<ul class="dropdown-menu header__dropdown-menu" aria-labelledby="dropdownMenuCatalog">
										<li><a href="#">Chage Password</a></li>
										<li><a href="#">History</a></li>
										<li><a href=<?=base_url("Auth/logout") ?>>Logout</a></li>
									</ul>
								</li>
								<!-- end dropdown -->
								<!-- <a href=<?=base_url("Auth/logout") ?> class="header__sign-in">
								<i class="icon ion-ios-log-in"></i>
									<span>logout</span>
								</a> -->
								<? }else{?>
								<a href=<?=base_url("Auth/loginForm")?> class="header__sign-in">
								<i class="icon ion-ios-log-in"></i>
									<span>login</span>
								</a>
							<? }?>
							</div>
							<!-- end header auth -->
							<!-- header menu btn -->
							<button class="header__btn" type="button">
								<span></span>
								<span></span>
								<span></span>
							</button>
							<!-- end header menu btn -->
						</div>
=======
								<a href=<?= base_url("Auth/loginForm") ?> class="header__sign-in">
									<a href="<?php echo base_url('Auth/loginForm') ?>" class="header__sign-in">
										<i class="icon ion-ios-log-in"></i>
										<span>sign in</span>
									</a>
							</div>
							<!-- end header auth -->ด
>>>>>>> 97acd1ba70e9f6710197c3ff9102cfe8d7ee208c
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- header search -->
	<form action="#" class="header__search">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="header__search-content">
						<input type="text" placeholder="Search for a movie, TV Series that you are looking for">

						<button type="button">search</button>
					</div>
				</div>
			</div>
		</div>
	</form>
	<!-- end header search -->
</header>
<!-- end header -->