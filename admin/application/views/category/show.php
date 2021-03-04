<div class="row">
    <div class="col-12">
        <div class="card card-chart">
            <div class="card-header ">
                <div class="row">
                    <div class="col-sm-6 text-left">
                        <h2 class="card-title">Category</h2>
                    </div>
                </div>
            </div>
            <div class="card-body">
			<div class="mb-3 search-section">
                    <form class="form-text" method="get" action="<?php echo base_url("Category/index") ?>">
                        <div class="row">
                            <div class="col col-lg-1">
                                <a href="<?php echo base_url("Category/add") ?>">
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
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Category name</th>
                                <th class="text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($categories as $key => $category) { ?>
                            <tr>
                                <td><?=$key+1 ?></td>
                                <td class="movie-name-body"><?=$category->category_name ?></td>
								<td class="td-actions text-right">
                                <a href="<?=base_url("Category/edit/$category->category_id")?>">
                                    <button type="button" rel="tooltip"
                                        class="btn-edit btn btn-success btn-link btn-icon btn-sm">
                                        <i class="tim-icons icon-settings"></i>
                                    </button>
                                </a>
                                <a href="<?=base_url("Category/delete/$category->category_id")?>">
                                    <button onclick="return confirm('Delete\n<?php echo $category->category_name?> ?'); "
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
</div>