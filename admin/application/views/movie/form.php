<div class="row">
    <div class="col-12">
        <div class="card card-chart">

            <div class="card-body form-card">
                <div class="row">
                    <?=$error?>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <?php 
					if($method == 'edit'){
						$action ="Movie/edit/$movie->movie_id";
						$str = "Edit form";
					}
					else
					{
						$action = "Movie/add";
						$str = "Add form";
					}	
					
				 ?>
<<<<<<< HEAD
				<form method="post" action="<?=base_url($action)?>" enctype="multipart/form-data">
					<h3>Movie <?=$str ?></h3>
					<div class="form-group row">
					    <label for="movie_name" class="col-sm-2 col-form-label">Movie Name</label>
					    <div class="col-sm-4">
					    	<?php 
					    		// (condition)?true:false;
					    		$movie_name = is_object($movie)?$movie->movie_name:'';
					    	?>
					      <input type="text" class="form-control" name="movie_name" id="movie_name" value="<?=$movie_name ?>">
					    </div>
					</div>

					<div class="form-group row">
					    <label for="movie_detail" class="col-sm-2 col-form-label">Movie detail</label>
					    <div class="col-sm-4">
							<?php 
					    		// (condition)?true:false;
					    		$movie_detail = is_object($movie)?$movie->movie_detail:'';
					    	?>
							<textarea id="movie_detail"  name="movie_detail" class="form-control" rows="6" cols="50">
								<?=$movie_detail ?>
							</textarea>
					    </div>
					</div>

					<div class="form-group row">
					    <label for="movie_trailer" class="col-sm-2 col-form-label">Movie trailer</label>
					    <div class="col-sm-4">
					    	<?php 
					    		// (condition)?true:false;
					    		$movie_trailer = is_object($movie)?$movie->movie_trailer:'';
					    	?>
					      <input type="text" class="form-control" name="movie_trailer" id="movie_trailer" value="<?=$movie_trailer ?>">
					    </div>
					</div>

					<div class="form-group row">
					    <label for="movie_time" class="col-sm-2 col-form-label">Movie time (Min)</label>
					    <div class="col-sm-4">
					    	<?php 
					    		// (condition)?true:false;
					    		$movie_time = is_object($movie)?$movie->movie_time:0;
					    	?>
					      <input type="number" class="form-control" name="movie_time" id="movie_time" min ="0" value="<?=$movie_time ?>" step="1">
					    </div>
					</div>

					<div class="form-group row">
					    <label for="movie_imdb" class="col-sm-2 col-form-label">Movie imdb rate</label>
					    <div class="col-sm-4">
					    	<?php 
					    		// (condition)?true:false;
					    		$movie_imdb = is_object($movie)?$movie->movie_imdb:0;
					    	?>
					      <input type="number" class="form-control" name="movie_imdb" id="movie_imdb" min ="0" max="10" value="<?=$movie_time ?>" step="0.1">
					    </div>
					</div>

					<div class="form-group row">
					    <label for="release_year" class="col-sm-2 col-form-label">Movie release year</label>
					    <div class="col-sm-4">
					    	<?php 
					    		// (condition)?true:false;
					    		$release_year = is_object($movie)?$movie->release_year:date("Y");
					    	?>
					      <input type="number" class="form-control" name="release_year" id="release_year" min ="0" max="10" value="<?=$release_year ?>" step="1">
					    </div>
					</div>

					<div class="form-group row">
					    <label for="category1" class="col-sm-2 col-form-label">Movie category</label>
					    <div class="col-sm-4">
							<?php 
					    		$category1 = is_object($movie)?$movie->category1:0;
					    	?>
							<select id="category1" name="category1" class="form-control" >
							<option >-- category --</option>
							<? foreach($categories as $category){?>
								<option value="<?=$category->category_id?>"
									<?= $category1==$category->category_id?'selected':''?>
								>
									<?=$category->category_name?>
								</option>
							<?}?>
							</select>
						</div>
					</div>
					

					<div class="form-group row">
					    <label for="poster" class="col-sm-2 col-form-label">Movie poster</label>
					    <div class="col-sm-4">
						  <input type="file" name="poster" id="poster"/>
					    </div>
					</div>

					<div class="form-group row">
					    <div class="col-sm-4">
					      <button type="submit" class="btn btn-success">Save</button>
					    </div>
					</div>

				</form>
			</div>
		</div>
=======
                        <form method="post" action="<?=base_url($action)?>" enctype="multipart/form-data">
                            <h3>Movie <?=$str ?></h3>
                            <div class="form-group row">
                                <label for="movie_name" class="form-inp-pabel col-sm-2 col-form-label">Movie
                                    Name</label>
                                <div class="col-sm-4">
                                    <?php 
					    		// (condition)?true:false;
					    		$movie_name = is_object($movie)?$movie->movie_name:'';
					    	?>
                                    <input type="text" class="form-control" placeholder="Movie Name" name="movie_name"
                                        id="movie_name" value="<?=$movie_name ?>">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="poster" class="form-inp-pabel col-sm-2 col-form-label">Movie poster</label>
                                <div class="col-sm-4">
                                    <input class="file-upload" type="file" name="poster" id="poster" />
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <button type="submit" class="btn btn-success">Save</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
>>>>>>> origin/theme_admin
        </div>
    </div>
</div>