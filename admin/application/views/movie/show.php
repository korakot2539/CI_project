<div class="row">
    <div class="col-12">
        <div class="card card-chart">
            <div class="card-header ">
                <div class="row">
                    <div class="col-sm-6 text-left">
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
                            <th class="movie-detail-head">Detail</th>
                            <th class="movie-name-head">Trailer</th>
                            <th class="movie-name-head">Time (Min.)</th>
                            <th class="movie-name-head">Imdb</th>
                            <th class="movie-name-head">Year</th>
                            <th class="movie-name-head">Category</th>
                            <th class="movie-poster-head">Poster</th>
                            <th class="text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($movies as $key => $movie) {  ?>
                        <tr>
                            <td class="text-center"><?= $movie->movie_id ?></td>
                            <td class="movie-name-body"><?=$movie->movie_name ?></td>
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
                            <?php $imgpath = base_url("$movie->poster") ?>
                                <a onclick="showModal('<?php echo $imgpath ?>')">
                                    <?
									if($movie->poster!="") 
									{
										echo "<i class='img-icon fas fa-image'></i>";
									}
								?>
                                </a>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">

                                            <div class="modal-body">

                                                <img id="myImg" src="<?=base_url("$movie->poster")?>"
                                                    alt="<?=$movie->poster ?>" style="width:100%;max-width:250px" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

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
                <div class="custom-pagination">
                    <?=$links ?>
                </div>
            </div>
        </div>
    </div>
</div>