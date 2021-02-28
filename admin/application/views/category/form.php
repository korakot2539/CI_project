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
        
        <div class="card shadow mb-4">
    <!-- Card Header - Accordion -->
    <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse"
        role="button" aria-expanded="true" aria-controls="collapseCardExample">
        <h6 class="m-0 font-weight-bold text-primary">Category Form</h6>
    </a>
    <!-- Card Content - Collapse -->
    <div class="collapse show" id="collapseCardExample">
        <div class="card-body">
           	<div class="row">
			<div class="col-md-12">
				<?php 
					if($method == 'edit'){
						$action ="Category/edit/$category_id";
						$str = "Edit form";
					}
					else
					{
						$action = "Category/add";
						$str = "Add form";
					}	
					
				 ?>
				<form method="post" action="<?=base_url($action)?>">
					 <h3>Category <?=$str ?></h3>
					 <div class="form-group row">
					    <label for="movie_name" class="col-sm-2 col-form-label">Category Name</label>
					    <div class="col-sm-4">
					    	<?php 
					    		// (condition)?true:false;
					    		$category_name = is_object($category)?$category->category_name:'';
					    	?>
					      <input type="text" class="form-control" name="category_name" id="category_name" value="<?=$category_name ?>">
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
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

            

