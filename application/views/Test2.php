<div class="col main pt-5 mt-3">
	<table border="1">
		<?php foreach ($Student_res as  $row) { ?>
			
		
		<tr>
			<td><?php echo $row->ST_ID; ?></td>
			<td><?php echo $row->FName_LName; ?></td>
			<td><?php echo $row->School; ?></td>
			<td><?php echo $row->Discipline; ?></td>
			<td><?php echo $row->GPAX; ?></td>
			<td><?php echo $row->Date_Birth; ?></td>
			<td><?php echo $row->Tele_Number; ?></td>
			<td><?php echo $row->Bank_id; ?></td>
			<td><?php echo $row->Sex; ?></td>
			<td><?php echo $row->Religion; ?></td>
			<td><?php echo $row->Email; ?></td>
			<td><?php echo $row->status; ?></td>
		</tr>
		<?php } ?>
	</table>
</div>