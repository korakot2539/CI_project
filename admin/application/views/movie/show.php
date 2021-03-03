<div class="row">
    <div class="col-12">
        <div class="card card-chart">
            <div class="card-header ">
                <div class="row">
                    <div class="col-sm-6 text-left">
                        <h5 class="card-category">Managing</h5>
                        <h2 class="card-title">Movie</h2>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="mb-3 search-section">
                    <form class="form-text" method="get" action="<?php echo base_url("Movie/index") ?>">
                        <div class="row">
                            <div class="col col-lg-1">
                                <a href="<?php echo base_url("Movie/add") ?>">
                                    <button type="button" class="add-btn btn btn-primary btn-sm">ADD</button>
                                </a>
                            </div>
                            <div class="result-count col col-lg-1">
                                Total
                                <span style="color:red">
                                    <?= $total_rows ?>
                                </span>
                                records
                            </div>

                            <div class="search-section col col-lg-8">
                                <div class="input-group">

                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fa fa-search" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <input name="keyword" id="keyword" type="text" value="<? echo $keyword?>"
                                        class="form-control search-input" placeholder="Search">
                                </div>
                            </div>
                            <div class="search-submit col col-lg-2">
                                <button type="submit" class="btn search-submit-btn btn-sm"><i
                                        class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </form>


<<<<<<< HEAD
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                        class="fas fa-download fa-sm text-white-50"></i> Home</a>
            </div>
            
            
            <!-- Collapsable Card Example -->
<div class="card shadow mb-4">
    <!-- Card Header - Accordion -->
    <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse"
        role="button" aria-expanded="true" aria-controls="collapseCardExample">
        <h6 class="m-0 font-weight-bold text-primary">Movie</h6>
    </a>
    <!-- Card Content - Collapse -->
    <div class="collapse show" id="collapseCardExample">
        <div class="card-body">
           <div class="row">
			<div class="col-md-12">
				<div class="table-responsive">
					<table class="table table-striped"> <!--style="table-layout: fixed;"> -->
						<tr>
							<td colspan="10">
								<form method="get" action="<?=base_url("Movie/index")?>">
									<a href="<?=base_url("Movie/add")?>" class="btn btn-success">add</a>
									
									Total 
									<span style="color:red">
										<?= $total_rows ?>
									</span> 
									records 

									Search : 
									<div style="display: inline-block; width: 500px;">
										<div class="input-group">
				                            <input type="text" name="keyword" value="<?=$keyword?>" class="form-control bg-light border-0 small" placeholder="Search for..."
				                                aria-label="Search" aria-describedby="basic-addon2">
				                            <div class="input-group-append">
				                                <button class="btn btn-primary" type="submit">
				                                    <i class="fas fa-search fa-sm"></i>
				                                </button>
				                            </div>
				                        </div>
									</div>
									
									
								</form>
								
							</td>
						</tr>
						<tr>
							<th>ID</th>
							<th style="max-width:50px">Movie name</th>
							<th style="max-width:100px">Detail</th>
							<th style="max-width:50px">Trailer</th>
							<th>Time (Min.)</th>
							<th>Imdb</th>
							<th>Year</th>
							<th>Category</th>
							<th>Poster</th>
							<th>Action</th>
						</tr>
						<?php foreach ($movies as $movie) { ?>
						<tr style="max-height:3em">
							<td><?=$movie->movie_id ?></td>
							<td><?=$movie->movie_name ?></td>
							<td><?=$movie->movie_detail ?></td>
							<td>
								<a id="trailer<?=$movie->movie_id ?>" href=<?=$movie->movie_trailer?>>
									<?=$movie->movie_name." trailer"?>
								</a>
							</td>
							<td>
								<?=$movie->movie_time ?>
							</td>
							<td>
								<?=$movie->movie_imdb ?>
							</td>
							<td>
								<?=$movie->release_year ?>
							</td>
							<td>
								<?=$movie->category1_name ?>
							</td>
							<td>
								<?= $movie->poster ? "<a href='#'><i class='fas fa-image'></i></a>":"-" ?>
								<!-- <img id="poster<?=$movie->movie_id ?>" src="<?=base_url("$movie->poster")?>" alt="<?=$movie->poster ?>" style="width:100%;max-width:100px"> -->
							</td>
							<td>
								<a href="<?=base_url("Movie/edit/$movie->movie_id")?>" class="btn btn-warning">edit</a>
								<a href="<?=base_url("Movie/delete/$movie->movie_id")?>" class="btn btn-danger"
								onclick="return confirm('Delete ?'); ">delete</a>
							</td>
						</tr>
						<?php } ?>
						<tr>
							<td colspan="10">
								<?=$links ?>
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
=======

                </div>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="movie-name-head">Movie Name</th>
                            <th class="movie-poster-head">Poster</th>
                            <th>Category</th>
                            <th class="text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $count = 0;
                        foreach ($movies as $movie) {   
                            $count+=1  
                            ?>
                        <tr>
                            <td class="text-center"><?php echo $count ?></td>
                            <td class="movie-name-body"><?=$movie->movie_name ?></td>
                            <td>
                                <?
									if($movie->poster!="") 
									{
										echo "<i class='fas fa-image'></i>";
									}
								?>

                                <img id="myImg" src="<?=base_url("$movie->poster")?>" alt="<?=$movie->poster ?>"
                                    style="width:100%;max-width:100px">

                            </td>
                            <td><?=$movie->category1_name.", ".$movie->category2_name.", ".$movie->category3_name ?>
                            </td>
                            <td class="td-actions text-right">
                                <a href="<?php echo base_url("Movie/edit/$movie->movie_id") ?>">
                                    <button type="button" rel="tooltip"
                                        class="btn-edit btn btn-success btn-link btn-icon btn-sm">
                                        <i class="tim-icons icon-settings"></i>
                                    </button>
                                </a>
                                <a href="<?php echo base_url("Movie/delete/$movie->movie_id") ?>">
                                    <button onclick="return confirm('Delete\n<?php echo $movie->movie_name?> ?'); "
                                        type="button" rel="tooltip" class="btn btn-danger btn-link btn-icon btn-sm">
                                        <i class="tim-icons icon-simple-remove"></i>
                                    </button>
                                </a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
>>>>>>> origin/theme_admin
        </div>
    </div>
</div>