
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
									<a class="header__nav-link" href=<?=base_url()?> role="button" aria-haspopup="true" aria-expanded="false">Home</a>
								</li>

								<li class="header__nav-item">
									<a class="header__nav-link" href=<?=base_url()?> role="button" aria-haspopup="true" aria-expanded="false">History</a>
								</li>

								<li class="header__nav-item">
									<a class="header__nav-link" href=<?=base_url()?> role="button" aria-haspopup="true" aria-expanded="false">Contact</a>
								</li>

								<li class="header__nav-item">
									<a class="header__nav-link" href="#" role="button" aria-haspopup="true" aria-expanded="false">History</a>
								</li>

								<li class="header__nav-item">
									<a class="header__nav-link" href="#" role="button" aria-haspopup="true" aria-expanded="false">Contact</a>
								</li>

							</ul>
							<!-- end header nav -->

							<!-- header auth -->
							<div class="header__auth">
								<button class="header__search-btn" type="button">
									<i class="icon ion-ios-search"></i>
								</button>

								<a href=<?=base_url("Auth/loginForm")?> class="header__sign-in">
								<a href="signin.html" class="header__sign-in">
									<i class="icon ion-ios-log-in"></i>
									<span>sign in</span>
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