
	<!-- header -->
	<header class="header">
		<div class="header__wrap">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="header__content">
							<!-- header logo -->
							<a href=<?=base_url()?> class="header__logo">
							<a href="index.html" class="header__logo">
								<img src="<?php echo base_url('/asset/home/')?>img/logo.svg" alt="">
							</a>
							<!-- end header logo -->

							<!-- header nav -->
							<ul class="header__nav">
								<li class="header__nav-item">
									<a class="header__nav-link" href="<?=base_url('Home')?>" role="button" aria-haspopup="true" aria-expanded="false">Home</a>
								</li>
									
								<!-- dropdown -->
								<li class="header__nav-item">
									<a class="dropdown-toggle header__nav-link" href="#" role="button" id="dropdownMenuCatalog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Category</a>
									<ul class="dropdown-menu header__dropdown-menu" aria-labelledby="dropdownMenuCatalog">
										<!-- <li><a href="<?=base_url('Category/index/1')?>">Action</a></li>
										<li><a href="<?=base_url('Category/index/2')?>">Adventure</a></li>
										<li><a href="<?=base_url('Category/index/3')?>">War</a></li>
										<li><a href="<?=base_url('Category/index/4')?>">Drama</a></li>
										<li><a href="<?=base_url('Category/index/5')?>">Sci-Fi</a></li>
										<li><a href="<?=base_url('Category/index/6')?>">Family</a></li>
										<li><a href="<?=base_url('Category/index/7')?>">Thriller</a></li>
										<li><a href="<?=base_url('Category/index/8')?>">Documentaries</a></li>
										<li><a href="<?=base_url('Category/index/9')?>">Animation</a></li>
										<li><a href="<?=base_url('Category/index/10')?>">Comedy</a></li>
										<li><a href="<?=base_url('Category/index/11')?>">Romance</a></li>
										<li><a href="<?=base_url('Category/index/12')?>">Fantasy</a></li>
										<li><a href="<?=base_url('Category/index/13')?>">Musicals</a></li> -->
										<?foreach ($showcategory as $category) {?>
											<li><a href="<?=base_url('Category/index/1')?>"><?= $category->category_name ?></a></li>
                    <?}?>
									</ul>
								</li>
								<!-- end dropdown -->

								<li class="header__nav-item">
									<a class="header__nav-link" href="<?=base_url('Contact')?>" role="button" aria-haspopup="true" aria-expanded="false">Contact</a>
								</li>

								<div class="header__auth">
								<button class="header__search-btn" type="button">
									<i class="icon ion-ios-search"></i>
								</button>


							</ul>
							<!-- end header nav -->
							<!-- header auth -->
								<a href=<?=base_url("Auth/loginForm")?> class="header__sign-in">
								<i class="icon ion-ios-log-in"></i>
									<span>login</span>
								</a>

							</div>
							<!-- end header auth -->
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