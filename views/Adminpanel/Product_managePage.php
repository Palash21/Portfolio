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
							<h4 class="" style ="text-align:left;" align="left">Product Add</h4>
						  </div>
						  <form action="<?php echo site_url('Adminpanel/Product_manage/store');?>" method="post" enctype="multipart/form-data">
						  <div class="modal-body">
								<div class="input-group mb-3">
								<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1"><i class="fa fa-building" aria-hidden="true"></i></span>
								</div>
                  <select class="form-control menu_palash" id="menu_id" name="menu_id">
  									<option value="">Select Menu Name</option>
  									 <?php foreach($menuitems as $mv) { ?>
  									<option value="<?php echo $mv->menu_id; ?>"><?php echo $mv->menu_name; ?></option>
  									<?php } ?>
								  </select>
								</div>

              <div class="input-group mb-3" id="palashList">
								<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1"><i class="fa fa-building" aria-hidden="true"></i></span>
								</div>
                  <select class="form-control sub_menu_palash" id="sub_menu_id" name="sub_menu_id">
  									<option value="">Select Sub Menu Name</option>
  									 <?php foreach($submenuitems as $mv) { ?>
  									<option value="<?php echo $mv->sub_menu_id; ?>"><?php echo $mv->sub_menu_name; ?></option>
  									<?php } ?>
								  </select>
								</div>

                <div class="input-group mb-3" id="subsubpalashList">
                <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fa fa-building" aria-hidden="true"></i></span>
                </div>
                  <select class="form-control" id="sub_to_sub_menu_id" name="sub_to_sub_menu_id">
                    <option value="">Select Sub To Sub Menu Name</option>
                     <?php foreach($subtosubmenuitems as $mv) { ?>
                    <option value="<?php echo $mv->sub_to_sub_menu_id; ?>"><?php echo $mv->sub_to_sub_menu_name; ?></option>
                    <?php } ?>
                  </select>
                </div>

								<div class="input-group mb-3">
  								<div class="input-group-prepend">
  								<span class="input-group-text" id="basic-addon1"><i class="fa fa-building" aria-hidden="true"></i></span>
  								</div>
  								<input type="text" class="form-control" name="pro_name" id="pro_name" placeholder="product name" required>
								</div>
                <div class="input-group mb-3">
  								<div class="input-group-prepend">
  								<span class="input-group-text" id="basic-addon1"><i class="fa fa-building" aria-hidden="true"></i></span>
  								</div>
  								<input type="text" class="form-control" name="pro_keyword" id="pro_keyword" placeholder="product keyword" required>
								</div>
                <div class="input-group mb-3">
  								<div class="input-group-prepend">
  								<span class="input-group-text" id="basic-addon1"><i class="fa fa-building" aria-hidden="true"></i></span>
  								</div>
  								<input type="text" class="form-control" name="buying_price" id="buying_price" placeholder="buying price" required>
								</div>
                <div class="input-group mb-3">
  								<div class="input-group-prepend">
  								<span class="input-group-text" id="basic-addon1"><i class="fa fa-building" aria-hidden="true"></i></span>
  								</div>
  								<input type="text" class="form-control" name="selling_price" id="selling_price" placeholder="selling price" required>
								</div>

                <div class="input-group mb-3" id="palashList">
                  <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1"><i class="fa fa-building" aria-hidden="true"></i></span>
                  </div>
                    <select class="form-control sub_menu_palash" id="brand_id" name="brand_id">
                      <option value="">Select Sub Menu Name</option>
                       <?php foreach($branditems as $bv) { ?>
                      <option value="<?php echo $mv->brand_id; ?>"><?php echo $bv->brand_name; ?></option>
                      <?php } ?>
                    </select>
                  </div>





                <div class="input-group mb-3">
  								<div class="input-group-prepend">
  								<span class="input-group-text" id="basic-addon1"><i class="fa fa-building" aria-hidden="true"></i></span>
  								</div>
  								<input type="text" class="form-control" name="details" id="details" placeholder="details" required>
								</div>
                <div class="input-group mb-3">
  								<div class="input-group-prepend">
  								<label for="exampleFormControlFile1">image</label>
  								</div>
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
			  <th scope="col">Pro Name</th>
			  <th scope="col">Pro Keyword</th>
        <th scope="col">Buying Price</th>
        <th scope="col">Selling Price</th>
        <th scope="col">Image</th>
			  <th scope="col">Action</th>

		  </thead>

		  <tbody>
		  <?php
				$i=1;
				foreach($productitems as $v) {
				$menuIbByname  = $this->M_cloud->tbWhRow('menu_manage', array('menu_id' => $v->menu_id));
        $submenuIbByname  = $this->M_cloud->tbWhRow('sub_menu_manage', array('sub_menu_id' => $v->sub_menu_id));
			?>
			<tr>
			  <td><?php echo $i++; ?></td>
        <td><?php echo $v->pro_name; ?></td>
        <td><?php echo $v->pro_keyword; ?></td>
        <td><?php echo $v->buying_price; ?></td>
        <td><?php echo $v->selling_price; ?></td>
			  <td><img height="30" src="<?php echo base_url('uploads/' .$v->image);?>"/></td>
			  <td><a class="green" data-id="<?php echo $v->pro_id; ?>"  href="#"><i style="font-size:18px;" class="fa fa-pencil-square-o" aria-hidden="true"></i> </a><span style="font-size:18px;">|</span><a href="<?php echo site_url('Adminpanel/Product_manage/Delete/' .$v->pro_id);?>"> <i style="font-size:18px;" class="fa fa-trash-o" aria-hidden="true"></i></a></td>
			</tr>
			<?php } ?>

			<!-- edit modal start -->
			<div class="modal fade bd-example-modal-lg_edit" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg">
			<div class="modal-content">
			<div class="modal-header">
			<h4 class="" style ="text-align:left;" align="left">Product Edit</h4>
			</div>
			<form action="<?php echo site_url('Adminpanel/Product_manage/Update');?>" method="post" enctype="multipart/form-data">
			<input type="hidden" class="form-control" name="pro_id_edit" id="pro_id_edit" placeholder="Name" required>
      <div class="modal-body">
        <div class="input-group mb-3">
        <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1"><i class="fa fa-building" aria-hidden="true"></i></span>
        </div>
          <select class="form-control" id="menu_id_edit" name="menu_id">
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
          <select class="form-control" id="sub_menu_id_edit" name="sub_menu_id">
            <option value="">Select Sub Menu Name</option>
             <?php foreach($submenuitems as $mv) { ?>
            <option value="<?php echo $mv->sub_menu_id; ?>"><?php echo $mv->sub_menu_name; ?></option>
            <?php } ?>
          </select>
        </div>

        <div class="input-group mb-3">
        <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1"><i class="fa fa-building" aria-hidden="true"></i></span>
        </div>
          <select class="form-control" id="sub_to_sub_menu_id_edit" name="sub_to_sub_menu_id">
            <option value="">Select Sub To Sub Menu Name</option>
             <?php foreach($subtosubmenuitems as $mv) { ?>
            <option value="<?php echo $mv->sub_to_sub_menu_id; ?>"><?php echo $mv->sub_to_sub_menu_name; ?></option>
            <?php } ?>
          </select>
        </div>
        <div class="input-group mb-3">
        <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1"><i class="fa fa-building" aria-hidden="true"></i></span>
        </div>
        <input type="text" class="form-control" name="pro_name-edit" id="pro_name-edit" placeholder="pro_name" required>
        </div>
        <div class="input-group mb-3">
        <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1"><i class="fa fa-building" aria-hidden="true"></i></span>
        </div>
        <input type="text" class="form-control" name="pro_keyword-edit" id="pro_keyword-edit" placeholder="pro_keyword" required>
        </div>
        <div class="input-group mb-3">
        <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1"><i class="fa fa-building" aria-hidden="true"></i></span>
        </div>
        <input type="text" class="form-control" name="buying_price-edit" id="buying_price-edit" placeholder="buying_price" required>
        </div>
        <div class="input-group mb-3">
        <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1"><i class="fa fa-building" aria-hidden="true"></i></span>
        </div>
        <input type="text" class="form-control" name="selling_price-edit" id="selling_price-edit" placeholder="selling_price" required>
        </div>
        <div class="input-group mb-3">
        <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1"><i class="fa fa-building" aria-hidden="true"></i></span>
        </div>
        <input type="text" class="form-control" name="details-edit" id="details-edit" placeholder="details" required>
        </div>
        <div class="input-group mb-3">
        <div class="input-group-prepend">
        <label for="exampleFormControlFile1">image</label>
        </div>
        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image-edit">
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
			var formURL = "<?php echo site_url('Adminpanel/Product_manage/edit'); ?>";
			$.ajax(
			{
				url : formURL,
				type: "POST",
				data : {id:id},
				dataType: "json",
				success:function(data){
					$('.bd-example-modal-lg_edit').modal('show');
					$('#pro_id_edit').val(data.pro_id);
					$('#sub_to_sub_menu_id_edit').val(data.sub_to_sub_menu_id);
					$('#menu_id_edit').val(data.menu_id);
					$('#sub_menu_id_edit').val(data.sub_menu_id);
					$('#sub_to_sub_menu_id_edit').val(data.sub_to_sub_menu_id);
					$('#pro_name-edit').val(data.pro_name);
					$('#pro_keyword-edit').val(data.pro_keyword);
					$('#buying_price-edit').val(data.buying_price);
					$('#selling_price-edit').val(data.selling_price);
					$('#details-edit').val(data.details);
					$('.update').text("Update");

				}
			});

			e.preventDefault();
		});


		$(document).on("change", ".menu_palash", function(e)
		{
			var id 		= $(this).val();

			var formURL = "<?php echo site_url('Adminpanel/Product_manage/menu_Id_wise_Submenu_list'); ?>";
			$.ajax(
			{
				url : formURL,
				type: "POST",
				data : {id:id},
				dataType: "html",
				success:function(data){
					$('#palashList').html(data);
				}
			});

			e.preventDefault();
		});

		$(document).on("change", ".sub_menu_palash", function(e)
		{
			var id 		= $(this).val();

			var formURL = "<?php echo site_url('Adminpanel/Product_manage/sub_menu_Id_wise_Submenu_list'); ?>";
			$.ajax(
			{
				url : formURL,
				type: "POST",
				data : {id:id},
				dataType: "html",
				success:function(data){
					$('#subsubpalashList').html(data);
				}
			});

			e.preventDefault();
		});

</script>


</body>
</html>
