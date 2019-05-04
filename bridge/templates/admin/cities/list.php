<div class="table-responsive table-full-width">
    <table class="table table-striped">
        <thead>
            <th>City Name</th>
            <th>State Name</th>
            <th>Country Name</th>
            <th>Locality</th>
            <th>Top City</th>
            <th>Action</th>
        </thead>
        <tbody>
        	<?php foreach($conlist as $info){?>
        		<tr>
                    <td><?=$info['name']?></td>
        			<td><?=$info['state']?></td>
                    <td><?=$info['country']?></td>
                    <td>
                        <button onClick="locality(<?=$info['id']?>)" class='btn btn-sm btn-<?php if($info['locality']=="1") echo "success"; else echo "danger"; ?> locality-btn-<?=$info['id']?>'>
                            <i clASS='ti-location-pin'></i>
                        </button>  
                    </td>
                    <td>
                        <button onClick="top_city(<?=$info['id']?>)" class='btn btn-sm btn-<?php if($info['top']=="1") echo "success"; else echo "danger"; ?> top-btn-<?=$info['id']?>'>
                            <i class='top-<?=$info['id']?> ti-<?php if($info['top']=="1") echo "check"; else echo "close"; ?>'></i>
                        </button>  
                    </td>
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