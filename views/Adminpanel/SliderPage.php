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
	  <!--<div style="background:#FFFFFF; width:100%; text-align:right; padding:5px 5px 5px 5px;"><i style="color:#000000; font-size:26px;" class="fa fa-plus" aria-hidden="true"></i></div>-->
	  <div style="background:#FFFFFF; width:100%; text-align:right; padding:5px 5px 5px 5px;"><a data-toggle="modal" data-target=".bd-example-modal-lg_add"><i style="color:#000000; font-size:26px;" class="fa fa-plus" aria-hidden="true"></i></a></div>
	  <!-- Add modal start -->
		<div class="modal fade bd-example-modal-lg_add" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-lg">
			<div class="modal-content">
						  <div class="modal-header">
							  <h4 class="" style ="text-align:left;" align="left">Slider Add</h4>
						  </div>
            <form action="<?php echo site_url('Adminpanel/Slider/Store');?>" method="post" enctype="multipart/form-data">
						  <div class="modal-body">
						  <div class="input-group mb-3">
								<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1"><i class="fa fa-building" aria-hidden="true"></i></span>
								</div>
								<input type="text" class="form-control" name="slideImg_1Title" id="slideImg_1Title" placeholder="Title" required>
								</div>
  							<div class="input-group mb-3">
  							  <input type="file" class="form-control" name="slideImg_1">
  							</div>
						  </div>

						  <div class="modal-footer">
							<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button> | <button type="submit" class="btn btn-success">Save</button>
						  </div>
					</div>
  </form>
		  </div>
		</div>
 	  <!-- Add modal End -->

       <table class="table table-bordered table-dark">
		  <thead>
			<tr>
			  <th scope="col">Sl.</th>
			  <th scope="col">Title</th>
			  <th scope="col">Images</th>
			  <th scope="col">Action</th>
			</tr>
		  </thead>
		  <tbody>
        <?php
  				$i=1;
  				foreach($slide_manage as $v) {
  			?>
			<tr>
			  <th scope="row"><?php echo $i++; ?></th>
			  <td><?php echo $v->slideImg_1Title; ?></td>
			  <td><img height="30" src="<?php echo base_url('uploads/' .$v->slideImg_1);?>"/></td>
        <td><a class="green" data-id="<?php echo $v->slide_id; ?>"  href="#"><i style="font-size:18px;" class="fa fa-pencil-square-o" aria-hidden="true"></i> </a><span style="font-size:18px;">|</span><a href="<?php echo site_url('Adminpanel/Slider/Delete/' .$v->slide_id);?>"> <i style="font-size:18px;" class="fa fa-trash-o" aria-hidden="true"></i></a></td>
      </tr>
        	<?php } ?>
				<div class="modal fade bd-example-modal-lg_edit" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg">
				<div class="modal-content">
				<div class="modal-header">
				<h4 class="" style ="text-align:left;" align="left">Slider Edit</h4>
				</div>
				<div class="modal-body">
          <form action="<?php echo site_url('Adminpanel/Slider/Update');?>" method="post" enctype="multipart/form-data">
		          <input type="hidden" class="form-control" name="edit_id" id="edit_id" placeholder="" required>
              <div class="modal-body">
  						  <div class="input-group mb-3">
  								<div class="input-group-prepend">
  								<span class="input-group-text" id="basic-addon1"><i class="fa fa-building" aria-hidden="true"></i></span>
  								</div>
  								<input type="text" class="form-control" name="slideImg_1Title_edit" id="slideImg_1Title_edit" placeholder="Title" required>
  								</div>
    							<div class="input-group mb-3">
    							  <input type="file" class="form-control" name="slideImg_1_edit">
    							</div>
  						  </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button> | <button type="submit" class="btn btn-success">Update</button>
            </div>
        </div>
      </form>
				</div>
				</div>
				</div>
				</div>
				<!-- edit modal End -->
			</tr>
		  </tbody>
		</table>
      </div>
    </div>
    <?php $this->load->view('Adminpanel/FooterPage'); ?>
  </div>
  <!--  END CONTENT AREA  -->
</div>
<!-- END MAIN CONTAINER -->
<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
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

			var formURL = "<?php echo site_url('Adminpanel/Slider/edit'); ?>";
			$.ajax(
			{
				url : formURL,
				type: "POST",
				data : {id:id},
				dataType: "json",
				success:function(data){
					$('.bd-example-modal-lg_edit').modal('show');
					$('#edit_id').val(data.slide_id);
					$('#slideImg_1Title_edit').val(data.slideImg_1Title);
					$('.update').text("Update");
				}
			});

			e.preventDefault();
		});

</script>


</body>
</html>
