<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1"><i class="fa fa-building" aria-hidden="true"></i></span>
								</div>
<select class="form-control" id="sub_menu_id" name="sub_menu_id">
<option value="">Select Sub Menu Name</option>
<?php foreach($result as $mvc) { ?>
<option <?php if ($subtosubmenuitems->sub_menu_id == $mvc->sub_menu_id ) echo 'selected' ; ?> value="<?php echo $mvc->sub_menu_id; ?>"><?php echo $mvc->sub_menu_name; ?></option>
<?php } ?>
</select>
