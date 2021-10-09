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
							<h4 class="" style ="text-align:left;" align="left">Sub Manu Add</h4>
						  </div>
						  <form action="<?php echo site_url('Adminpanel/Sub_menu_manage/store');?>" method="post" enctype="multipart/form-data">
						  <div class="modal-body">
								<div class="input-group mb-3">
								<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1"><i class="fa fa-building" aria-hidden="true"></i></span>
								</div>
                  <select class="form-control" id="menu_id" name="menu_id">
  									<option value="">Select Menu Name</option>
  									 <?php foreach($menuitems as $mv) { ?>
  									<option value="<?php echo $mv->menu_id; ?>"><?php echo $mv->menu_name; ?></option>
  									<?php } ?>
								  </select>
								</div>
								<div class="input-group mb-3">
								<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1"><i class="fa fa-building" aria-hidden="true"></i></span>
								</div>
								<input type="text" class="form-control" name="sub_menu_name" id="sub_menu_name" placeholder="Sub Menu Name" required>
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
			  <th scope="col">Menu Name</th>
			  <th scope="col">Sub Menu Name</th>
			  <th scope="col">Action</th>
			</tr>
		  </thead>
		  <tbody>
		  <?php
				$i=1;
				foreach($submenuitems as $v) {
				$menuIbByname  = $this->M_cloud->tbWhRow('menu_manage', array('menu_id' => $v->menu_id));
			?>
			<tr>
			  <td><?php echo $i++; ?></td>
			  <td><?php echo $menuIbByname->menu_name; ?></td>
			  <td><?php echo $v->sub_menu_name; ?></td>
			  <td><a class="green" data-id="<?php echo $v->sub_menu_id; ?>"  href="#"><i style="font-size:18px;" class="fa fa-pencil-square-o" aria-hidden="true"></i> </a><span style="font-size:18px;">|</span><a href="<?php echo site_url('Adminpanel/Sub_menu_manage/Delete/' .$v->sub_menu_id);?>"> <i style="font-size:18px;" class="fa fa-trash-o" aria-hidden="true"></i></a></td>
			</tr>
			<?php } ?>

			<!-- edit modal start -->
			<div class="modal fade bd-example-modal-lg_edit" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg">
			<div class="modal-content">
			<div class="modal-header">
			<h4 class="" style ="text-align:left;" align="left">Sub Menu Edit</h4>
			</div>
			<form action="<?php echo site_url('Adminpanel/Sub_menu_manage/Update');?>" method="post" enctype="multipart/form-data">
			<input type="hidden" class="form-control" name="sub_menu_id" id="sub_menu_id_edit" placeholder="Name" required>
        <div class="modal-body">
								<div class="input-group mb-3">
								<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1"><i class="fa fa-building" aria-hidden="true"></i></span>
								</div>
								<select class="form-control" id="menu_id_edit" name="menu_id_edit">
									<option value="">Select Menu Name</option>
									 <?php foreach($menuitems as $mv) { ?>
									<option value="<?php echo $mv->menu_id; ?>"><?php echo $mv->menu_name; ?></option>
									<?php } ?>
								  </select>
								</div>
								<div class="input-group mb-3">
								<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1"><i class="fa fa-building" aria-hidden="true"></i></span>
								</div>
								<input type="text" class="form-control" name="sub_menu_name_edit" id="sub_menu_name_edit" placeholder="Sub Menu Name" required>
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
			var formURL = "<?php echo site_url('Adminpanel/Sub_menu_manage/edit'); ?>";
			$.ajax(
			{
				url : formURL,
				type: "POST",
				data : {id:id},
				dataType: "json",
				success:function(data){
					$('.bd-example-modal-lg_edit').modal('show');
					$('#sub_menu_id_edit').val(data.sub_menu_id);
					$('#menu_id_edit').val(data.menu_id);
					$('#sub_menu_name_edit').val(data.sub_menu_name);
					$('.update').text("Update");

				}
			});

			e.preventDefault();
		});

</script>


</body>
</html>
