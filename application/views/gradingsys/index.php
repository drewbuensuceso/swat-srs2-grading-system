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
		<H3><span class= "glyphicon glyphicon-menu-down"></span>Student Grades</H3>
		<a href="<?php echo base_url('gradingsys/add') ?>" class ="btn btn-primary">Add new student</a>


	<table class = "table table-bordered table-responsive">
		<thead>
			<tr>
				<td>ID</td>
				<th>Last Name</th>
				<th>First Name</th>
				<th>Math</th>
				<th>Science</th>
				<th>English</th>
				<th>Filipino</th>
				<th>MAPEH</th>
				<th>Weighted Ave.</th>
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
				<td><?php echo $stdnt->Math;?></td>
				<td><?php echo $stdnt->Science;?></td>
				<td><?php echo $stdnt->English;?></td>
				<td><?php echo $stdnt->Filipino;?></td>
				<td><?php echo $stdnt->Mapeh;?></td>
				<td><?php echo 

				$wtd_grd = ($stdnt->English*(1.2/100)) + ($stdnt->Math*(1.5/100)) + ($stdnt->Science*(1.8/100)) + ($stdnt->Filipino*(1.2/100)) + ($stdnt->Mapeh* (0.8/100));
				echo ($wtd_grd/6.5);

				?></td>
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
