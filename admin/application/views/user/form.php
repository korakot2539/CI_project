
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
						$action ="User/edit/$user->user_id";
						$str = "Edit form";
					}
					else
					{
						$action = "User/add";
						$str = "Add form";
					}	
					
				 ?>
				<form method="post" action="<?=base_url($action)?>" enctype="multipart/form-data">
					 <h3>User <?=$str ?></h3>
					 <div class="form-group row">
					    <label for="email" class="form-inp-pabel col-sm-2 col-form-label">E-mail</label>
					    <div class="col-sm-4">
					    	<?php 
					    		// (condition)?true:false;
					    		$email = is_object($user)?$user->email:'';
					    	?>
					      <input type="text" placeholder="E-mail" class="form-control" name="email" id="email" value="<?=$email ?>">
					    </div>
					  </div>

					  <div class="form-group row">
					    <label for="email" class="form-inp-pabel col-sm-2 col-form-label">Name</label>
					    <div class="col-sm-4">
					    	<?php 
					    		// (condition)?true:false;
					    		$name = is_object($user)?$user->name:'';
					    	?>
					      <input type="text" placeholder="Name" class="form-control" name="name" id="name" value="<?=$name ?>">
					    </div>
					  </div>

					  <div class="form-group row">
					    <label for="email" class="form-inp-pabel col-sm-2 col-form-label">Phone</label>
					    <div class="col-sm-4">
					    	<?php 
					    		// (condition)?true:false;
					    		$phone = is_object($user)?$user->phone:'';
					    	?>
					      <input type="text" placeholder="Phone Number" class="form-control" name="phone" id="phone" value="<?=$phone ?>">
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