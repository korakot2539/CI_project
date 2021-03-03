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
        </div>
    </div>
</div>