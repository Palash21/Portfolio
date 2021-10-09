<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1"><i class="fa fa-building" aria-hidden="true"></i></span>
								</div>
<select class="form-control sub_menu_palash" id="sub_menu_id" name="sub_menu_id">
<option value="">Select Sub Menu Name</option>
<?php foreach($result as $mvc) { ?>
<option value="<?php echo $mvc->sub_menu_id; ?>"><?php echo $mvc->sub_menu_name; ?></option>
<?php } ?>
</select>