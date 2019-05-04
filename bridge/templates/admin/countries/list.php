<div class="table-responsive table-full-width">
    <table class="table table-striped">
        <thead>
            <th>Country Name</th>
            <th>Action</th>
        </thead>
        <tbody>
        	<?php foreach($conlist as $info){?>
        		<tr>
        			<td><?=$info['name']?></td>
        			<td>                                
        				<button onClick="edit_item(<?=$info['id']?>)" class='btn btn-sm btn-success edit_item' id="<?=$info['id']?>">
        					<i class='ti-pencil'></i>
        				</button>
					</td>
        		</tr>
        	<?php } ?>
        </tbody>
    </table>
</div>