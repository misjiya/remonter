<form id="#">
    <div class="row">
        <div class="col-md-3">
            <label>Country Name</label>
        </div>
        <div class="col-md-5">
            <div class="form-group">
                <input type="hidden" class="idforupdata" value="<?=($data['id'])?$data['id']:'0'?>">
                <select class="required form-control border-input country-name">
                	<option value="" disabled >Select Country</option>
                	<?php foreach($countries as $country){?>
                	<option value="<?=$country['id']?>"  <?php if($data['country_id']==$country['id']) echo "selected" ?> > <?=$country['name']?></option>
                	<?php }?>
                </select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <label>State Name</label>
        </div>
        <div class="col-md-5">
            <div class="form-group">
                <input type="text" class="required form-control border-input state-name" placeholder="Country Name" value="<?=$data['name']?>">
            </div>
        </div>
    </div>
</form>