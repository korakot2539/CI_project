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
						$action ="Movie/edit/$province_id";
						$str = "Edit form";
					}
					else
					{
						$action = "Movie/add";
						$str = "Add form";
					}	
					
				 ?>
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
        </div>
    </div>
</div>