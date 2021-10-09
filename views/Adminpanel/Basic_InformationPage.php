<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
<title>Sales Admin | CORK - Multipurpose Bootstrap Dashboard Template</title>
<?php $this->load->view('Adminpanel/Header_scripts'); ?>

</head>
<body>

 <?php $this->load->view('Adminpanel/HeaderPage'); ?>


<!--  END NAVBAR  -->
<!--  BEGIN MAIN CONTAINER  -->
<div class="main-container" id="container">
  <div class="overlay"></div>
  <div class="search-overlay"></div>
  <!--  BEGIN SIDEBAR  -->
  <?php $this->load->view('Adminpanel/Left_menuPage'); ?>
  <!--  END SIDEBAR  -->
  <!--  BEGIN CONTENT AREA  -->
  <div id="content" class="main-content">
    <div class="layout-px-spacing">
      <div class="row layout-top-spacing">
	  <?php if(!empty($success)){?>
          <div class="alert alert-success alert-dismissible" role="alert" align="center">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Success!</strong> &nbsp; &nbsp;<?php echo $success; ?> </div>
          <?php }?>
	  <div style="background:#FFFFFF; width:100%; text-align:right; padding:5px 5px 5px 5px;"><a data-toggle="modal" data-target=".bd-example-modal-lg_add"><i style="color:#000000; font-size:26px;" class="fa fa-plus" aria-hidden="true"></i></a></div>



	  <!-- Add modal start -->
		<div class="modal fade bd-example-modal-lg_add" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-lg">
			<div class="modal-content">
						  <div class="modal-header">
							<h4 class="" style ="text-align:left;" align="left">Basic Information Add</h4>
						  </div>
						  <form action="<?php echo site_url('Adminpanel/Basic_Information/store');?>" method="post" enctype="multipart/form-data">
						  <div class="modal-body">

								<div class="input-group mb-3">
								<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1"><i class="fa fa-building" aria-hidden="true"></i></span>
								</div>
								<input type="text" class="form-control" name="company_title" id="company_title" placeholder="company title" required>
								</div>
								<div class="input-group mb-3">
								<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1"><i class="fa fa-building" aria-hidden="true"></i></span>
								</div>
								<input type="text" class="form-control" name="company_name" id="company_name" placeholder="company name" required>
								</div>
								<div class="input-group mb-3">
								<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1"><i class="fa fa-mobile" aria-hidden="true"></i></span>
								</div>
								<input type="text" class="form-control" name="mobile" id="mobile" placeholder="mobile" required>
								</div>
								<div class="input-group mb-3">
								<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope" aria-hidden="true"></i></span>
								</div>
								<input type="text" class="form-control" name="email" id="email" placeholder="email" required>
								</div>
								<div class="input-group mb-3">
								<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
								</div>
								<input type="text" class="form-control" name="address" id="address" placeholder="address" required>
								</div>

								<div class="input-group mb-3">
								<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1"><i class="fa fa-facebook-official" aria-hidden="true"></i></span>
								</div>
								<input type="text" class="form-control" name="facebook" id="facebook" placeholder="facebook" required>
								</div>
								<div class="input-group mb-3">
								<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1"><i class="fa fa-twitter" aria-hidden="true"></i></span>
								</div>
								<input type="text" class="form-control" name="twitter" id="twitter" placeholder="twitter" required>
								</div>
								<div class="input-group mb-3">
								<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1"><i class="fa fa-google-plus-official" aria-hidden="true"></i></span>
								</div>
								<input type="text" class="form-control" name="google" id="google" placeholder="google+" required>
								</div>

								<div class="input-group mb-3">
								<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1"><i class="fa fa-pinterest-square" aria-hidden="true"></i></span>
								</div>
								<input type="text" class="form-control" name="pintarest" id="pintarest" placeholder="pintarest" required>
								</div>
								<div class="form-group">
								<label for="exampleFormControlFile1">Logo</label>
								<input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
							  </div>


						  </div>
						  <div class="modal-footer">
							<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button> | <button type="submit" class="btn btn-success">Save</button>
						  </div>
						  </form>
						</div>
		  				</div>
		</div>
 	  <!-- Add modal End -->

       <table class="table table-bordered table-dark">
		  <thead>
			<tr>
			  <th scope="col">Sl.</th>
			  <th scope="col">Company Title</th>
			  <th scope="col">Company Name</th>
			  <th scope="col">Mobile</th>
			  <th scope="col">Email</th>
        <th scope="col">Address</th>
			  <th scope="col">Logo</th>
			  <th scope="col">Action</th>
			</tr>
		  </thead>
		  <tbody>
		  <?php
				$i=1;
				foreach($basicList as $v) {
			?>
			<tr>
			  <th scope="row"><?php echo $i++; ?></th>
			  <td><?php echo $v->company_title; ?></td>
			  <td><?php echo $v->company_name; ?></td>
			  <td><?php echo $v->mobile; ?></td>
			  <td><?php echo $v->email; ?></td>
        <td><?php echo $v->address; ?></td>
			  <td><img height="30" src="<?php echo base_url('uploads/' .$v->image);?>"/></td>
			  <td><a class="green" data-id="<?php echo $v->basic_id; ?>"  href="#"><i style="font-size:18px;" class="fa fa-pencil-square-o" aria-hidden="true"></i> </a><span style="font-size:18px;">|</span><a href="<?php echo site_url('Adminpanel/Basic_Information/Delete/' .$v->basic_id);?>"> <i style="font-size:18px;" class="fa fa-trash-o" aria-hidden="true"></i></a></td>
			</tr>
			<?php } ?>

			<!-- edit modal start -->
			<div class="modal fade bd-example-modal-lg_edit" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg">
			<div class="modal-content">
			<div class="modal-header">
			<h4 class="" style ="text-align:left;" align="left">Basic Information Edit</h4>
			</div>
			<form action="<?php echo site_url('Adminpanel/Basic_Information/Update');?>" method="post" enctype="multipart/form-data">
				<input type="hidden" name="edit_id" id="edit_id" required>
					  <div class="modal-body">
							<div class="input-group mb-3">
							<div class="input-group-prepend">
							<span class="input-group-text" id="basic-addon1"><i class="fa fa-building" aria-hidden="true"></i></span>
							</div>
							<input type="text" class="form-control" name="company_title_edit" id="company_title_edit" placeholder="company title" required>
							</div>
							<div class="input-group mb-3">
							<div class="input-group-prepend">
							<span class="input-group-text" id="basic-addon1"><i class="fa fa-building" aria-hidden="true"></i></span>
							</div>
							<input type="text" class="form-control" name="company_name_edit" id="company_name_edit" placeholder="company name" required>
							</div>
							<div class="input-group mb-3">
							<div class="input-group-prepend">
							<span class="input-group-text" id="basic-addon1"><i class="fa fa-mobile" aria-hidden="true"></i></span>
							</div>
							<input type="text" class="form-control" name="mobile_edit" id="mobile_edit" placeholder="mobile" required>
							</div>
							<div class="input-group mb-3">
							<div class="input-group-prepend">
							<span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope" aria-hidden="true"></i></span>
							</div>
							<input type="text" class="form-control" name="email_edit" id="email_edit" placeholder="email" required>
							</div>
							<div class="input-group mb-3">
							<div class="input-group-prepend">
							<span class="input-group-text" id="basic-addon1"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
							</div>
							<input type="text" class="form-control" name="address_edit" id="address_edit" placeholder="address" required>
							</div>

							<div class="input-group mb-3">
							<div class="input-group-prepend">
							<span class="input-group-text" id="basic-addon1"><i class="fa fa-facebook-official" aria-hidden="true"></i></span>
							</div>
							<input type="text" class="form-control" name="facebook_edit" id="facebook_edit" placeholder="facebook" required>
							</div>
							<div class="input-group mb-3">
							<div class="input-group-prepend">
							<span class="input-group-text" id="basic-addon1"><i class="fa fa-twitter" aria-hidden="true"></i></span>
							</div>
							<input type="text" class="form-control" name="twitter_edit" id="twitter_edit" placeholder="twitter" required>
							</div>
							<div class="input-group mb-3">
							<div class="input-group-prepend">
							<span class="input-group-text" id="basic-addon1"><i class="fa fa-google-plus-official" aria-hidden="true"></i></span>
							</div>
							<input type="text" class="form-control" name="google_edit" id="google_edit" placeholder="google+" required>
							</div>
							<div class="input-group mb-3">
							<div class="input-group-prepend">
							<span class="input-group-text" id="basic-addon1"><i class="fa fa-pinterest-square" aria-hidden="true"></i></span>
							</div>
							<input type="text" class="form-control" name="pintarest_edit" id="pintarest_edit" placeholder="pintarest" required>
							</div>

							<div class="form-group">
								<label for="exampleFormControlFile1">Logo</label>
								<input type="file" class="form-control-file" id="exampleFormControlFile1" name="image_edit">
							  </div>

					  </div>
					  <div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button> | <button type="submit" class="btn btn-success">Update</button>
					  </div>
					  </form>

			</div>
			</div>
			</div>
			<!-- edit modal End -->
		  </tbody>
		</table>
      </div>
    </div>
    <?php $this->load->view('Adminpanel/FooterPage'); ?>
  </div>
  <!--  END CONTENT AREA  -->
</div>
<script src="<?php echo base_url('Backend_resorces/assets/js/libs/jquery-3.1.1.min.js');?>"></script>
<script src="<?php echo base_url('Backend_resorces/bootstrap/js/popper.min.js');?>"></script>
<script src="<?php echo base_url('Backend_resorces/bootstrap/js/bootstrap.min.js');?>"></script>
<script src="<?php echo base_url('Backend_resorces/plugins/perfect-scrollbar/perfect-scrollbar.min.js');?>"></script>
<script src="<?php echo base_url('Backend_resorces/assets/js/app.js');?>"></script>
<script>
        $(document).ready(function() {
            App.init();
        });
    </script>
<script src="<?php echo base_url('Backend_resorces/assets/js/custom.js');?>"></script>
<script src="<?php echo base_url('Backend_resorces/plugins/apex/apexcharts.min.js');?>"></script>
<script src="<?php echo base_url('Backend_resorces/assets/js/dashboard/dash_1.js');?>"></script>

<script>
		//$(".edit").click(function(e)
		$(document).on("click", ".green", function(e)
		{
			var id 		= $(this).attr("data-id");
			var formURL = "<?php echo site_url('Adminpanel/Basic_Information/edit'); ?>";
			$.ajax(
			{
				url : formURL,
				type: "POST",
				data : {id:id},
				dataType: "json",
				success:function(data){
					$('.bd-example-modal-lg_edit').modal('show');
					$('#edit_id').val(data.basic_id);
					$('#company_title_edit').val(data.company_title);
					$('#company_name_edit').val(data.company_name);
					$('#mobile_edit').val(data.mobile);
					$('#email_edit').val(data.email);
					$('#address_edit').val(data.address);
					$('#facebook_edit').val(data.facebook);
					$('#twitter_edit').val(data.twitter);
					$('#google_edit').val(data.google);
					$('#pintarest_edit').val(data.pintarest);
					$('.update').text("Update");
				}
			});

			e.preventDefault();
		});

</script>


</body>
</html>
