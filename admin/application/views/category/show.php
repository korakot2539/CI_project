 <!-- Main Content -->
    <div id="content">

        <?php $this->load->view("layout/menu-top") ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

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
        <h6 class="m-0 font-weight-bold text-primary">Category</h6>
    </a>
    <!-- Card Content - Collapse -->
    <div class="collapse show" id="collapseCardExample">
        <div class="card-body">
           <div class="row">
			<div class="col-md-12">
				<div class="table-responsive">
					<table class="table table-striped">
						<tr>
							<td colspan="4">
								<form method="get" action="<?=base_url("Category/index")?>">
									<a href="<?=base_url("Category/add")?>" class="btn btn-success">add</a>
									
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
							<th>Category name</th>
							<th>Action</th>
						</tr>
						<?php foreach ($categories as $category) { ?>
						<tr>
							<td><?=$category->category_id ?></td>
							<td><?=$category->category_name ?></td>
							<td>
								<a href="<?=base_url("Category/edit/$category->category_id")?>" class="btn btn-warning">edit</a>
								<a href="<?=base_url("Category/delete/$category->category_id")?>" class="btn btn-danger"
								onclick="return confirm('Delete ?'); ">delete</a>
							</td>
						</tr>
						<?php } ?>
						<tr>
							<td colspan="3">
								<?=$links ?>
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
        </div>
    </div>
</div>
</div>
</div>