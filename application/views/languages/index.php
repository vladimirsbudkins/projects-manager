<div class="row">
    <div class="col-xs-12">
	<div class="table-responsive">
	    <table id="sample-table-1" class="table table-striped table-bordered table-hover text-center">
		<tr>
		    <th class="text-center">Id</th>
		    <th class="text-center">Lang key</th>
		    <th class="text-center">Lang title</th>
		    <th class="text-center">Image</th>
		    <th class="text-center">Default</th>
		    <th class="text-center">Status</th>
		    <th class="text-right">Options</th>
		</tr>
		<?php if ($records): ?>
		    <?php foreach ($records as $value): ?>
			<tr>
			    <td><?php echo $value->id; ?></td>
			    <td><?php echo $value->lang; ?></td>
			    <td><?php echo $value->title; ?></td>
			    <td><?php echo $value->img ? img(['src' => $value->img]) : null; ?></td>
			    <td><?php echo $value->default ? '<span class="label label-sm label-success">Yes</span>' : '<span class="label label-sm label-warning">No</span>'; ?></td>
			    <td><?php echo $value->status ? '<span class="label label-sm label-success">Enabled</span>' : '<span class="label label-sm label-warning">Disabled</span>'; ?></td>
			    <td class="text-right">
				<?php
				echo anchor(
					'languages/update/' . $value->id, 
					'<i class="icon-edit bigger-120"></i>', 
					'class="btn btn-xs btn-success"'
				);
				?>
			    </td>
			</tr>
    <?php endforeach; ?>
		<?php endif; ?>
	    </table>
	</div>
    </div>
</div>