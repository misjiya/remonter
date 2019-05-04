<div class="table-responsive table-full-width">
    <table class="table table-striped">
        <thead>
            <th>Name</th>
            <th>Slug</th>
            <th>Title</th>
            <th>Description</th>
            <th>Action</th>
        </thead>
        <tbody>
        	<?php foreach($conlist as $info){?>
        		<tr>
                    <td><?=$info['name']?></td>
                    <td><?=$info['slug']?></td>
                    <td><?=$info['title']?></td>
        			<td><?=$info['description']?></td>
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