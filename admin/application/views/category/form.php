
     <div class="row">
         <div class="col-12">
             <div class="card card-chart">

                 <div class="card-body form-card">
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
                                     <label for="movie_name" class="form-inp-pabel col-sm-2 col-form-label">Category Name</label>
                                     <div class="col-sm-4">
                                         <?php 
					    		// (condition)?true:false;
					    		$category_name = is_object($category)?$category->category_name:'';
					    	?>
                                         <input type="text" class="form-control" placeholder="Category Name" name="category_name" id="category_name"
                                             value="<?=$category_name ?>">
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