<div class="table-responsive table-full-width">
    <table class="table table-striped">
        <thead>
            <th>Name</th>
            <th>Slug</th>
            <th>Profile Type</th>
            <th>Profile's No.</th>
            <th>Girl Profile's No.</th>
            <th>Guy Profile's No.</th>
            <th>Action</th>
        </thead>
        <tbody>
        	<?php foreach($conlist as $info){?>
        		<tr>
                    <td><?=$info['name']?></td>
        			<td><?=$info['slug']?></td>
                    <td><?=$info['profile_type']?></td>
                    <td><?=$info['no_of_profile']?></td>
                    <td><?=$info['girl_no_of_profile']?></td>
                    <td><?=$info['guy_no_of_profile']?></td>
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