<H2><span class= "glyphicon glyphicon-education"></span>Recto University Portal&nbsp;</H2>
<H3>Add a student</H3>
<br><br>
<form action="<?php echo base_url('gradingsys/submit') ?>" method ="post" class = "form-horizontal">
	<div class = "form-group">
		<label for="prof_id" class="col-md-2 text-right">Prof ID</label>
		<div class = "col-md-10">
			<input type="text" value = "1" name="prof_id" readonly>
		</div>
	</div>
	<div class = "form-group">
		<label for="first_name" class="col-md-2 text-right">First Name</label>
		<div class = "col-md-10">
			<input type="text" name="first_name" required>
		</div>
	</div>
	<div class = "form-group">
		<label for="last_name" class="col-md-2 text-right">Last Name</label>
		<div class = "col-md-10">
			<input type="text" name="last_name" required>
		</div>
	</div>	
	<div class = "form-group">
		<label class="col-md-2 text-right"></label>
		<div class = "col-md-10">
			<input type="submit" name="SaveBtn" class="btn btn-primary" value="Save">
			<a href="<?php echo base_url('gradingsys/index') ?>" class ="btn btn-default">Back</a>
		</div>
	</div>		
</form>