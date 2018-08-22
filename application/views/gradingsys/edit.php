<H2><span class= "glyphicon glyphicon-education"></span>Recto University Portal&nbsp;</H2>
<H3>Edit Student Information</H3>
<br><br>
<form action="<?php echo base_url('gradingsys/update') ?>" method ="post" class = "form-horizontal">
	<input type ="hidden" name="student_id" value = "<?php echo $students->id;?>">
	<div class = "form-group">
		<label for="prof_id" class="col-md-2 text-right">Prof ID</label>
		<div class = "col-md-10">
			<input type="text" value = "<?php echo $students->prof_Id;?>" name="prof_id" readonly>
		</div>
	</div>
	<div class = "form-group">
		<label for="first_name" class="col-md-2 text-right">First Name</label>
		<div class = "col-md-10">
			<input type="text" value = "<?php echo $students->first_name;?>" name="first_name" required>
		</div>
	</div>
	<div class = "form-group">
		<label for="last_name" class="col-md-2 text-right">Last Name</label>
		<div class = "col-md-10">
			<input type="text" value = "<?php echo $students->last_name;?>" name="last_name" required>
		</div>
	</div>	
	<div class = "form-group">
		<label class="col-md-2 text-right"></label>
		<div class = "col-md-10">
			<input type="submit" name="UpdateBtn" class="btn btn-primary" value="Update">
			<a href="<?php echo base_url('gradingsys/index') ?>" class ="btn btn-default">Back</a>
		</div>
	</div>		
</form>