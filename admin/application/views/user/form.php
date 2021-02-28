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
        <h6 class="m-0 font-weight-bold text-primary">Movie Form</h6>
    </a>
    <!-- Card Content - Collapse -->
    <div class="collapse show" id="collapseCardExample">
        <div class="card-body">
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
        </div>
    </div>
</div>

		
	
        
       

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

            

