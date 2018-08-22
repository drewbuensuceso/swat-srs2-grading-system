			<H2>
				<span style= "font-size: 40pt" class= "glyphicon glyphicon-education"></span>Recto University Portal
			</H2>

		<?php
			if($this->session->flashdata('success msg')){
		?>
			<div class = "alert alert-success">
				<?php echo $this->session->flashdata('success msg');?>
			</div>
		<?php	
			}else if($this->session->flashdata('error msg')){
		?>
			<div class = "alert alert-danger">
				<?php echo $this->session->flashdata('error msg');?>
			</div>
		<?php		
			}
		?> 



		</div>
	</div>
	<div class="container">
		<H3><span class= "glyphicon glyphicon-menu-down"></span>My Class Students</H3>
		<a href="<?php echo base_url('gradingsys/add') ?>" class ="btn btn-primary">Add new student</a>


	<table class = "table table-bordered table-responsive">
		<thead>
			<tr>
				<td>ID</td>
				<th>Last Name</th>
				<th>First Name</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php
			if($students){
				foreach($students as $stdnt){
			?>
			<tr>
				<td><?php echo $stdnt->id;?></td>
				<td><?php echo $stdnt->last_name;?></td>
				<td><?php echo $stdnt->first_name;?></td>
				<td>
					<a href="<?php echo base_url('gradingsys/edit/'. $stdnt->id) ?>" class ="btn btn-info">
						Edit
					</a>
					<a href="<?php echo base_url('gradingsys/delete/'. $stdnt->id) ?>" class ="btn btn-danger">
						Delete
					</a>
				</td>
			</tr>
			<?php

				}
			}
			?>
		</tbody>
	</table>
