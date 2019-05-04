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
                	<option value="<?=$country['id']?>"  selected> <?=$country['name']?></option>
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
                <input type="hidden" class="idforupdata" value="<?=($data['id'])?$data['id']:'0'?>">
                <select class="required form-control border-input state-name">
                    <option value="" disabled >Select State</option>
                    <?php foreach($states as $state){?>
                    <option value="<?=$state['id']?>"  <?php if($data['state_id']==$state['id']) echo "selected" ?> > <?=$state['name']?></option>
                    <?php }?>
                </select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <label>City Name</label>
        </div>
        <div class="col-md-5">
            <div class="form-group">
                <input type="text" class="required form-control border-input city-name" placeholder="Country Name" value="<?=$data['name']?>">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <label>Locality</label>
        </div>
        <div class="col-md-5">
            <div class="form-group">
                <select class="required form-control border-input locality">
                    <option value="" disabled >Select Locality</option>
                    <option <?php if($data['locality']=='0') echo "selected" ?> value="0">No</option>
                    <option <?php if($data['locality']=='1') echo "selected" ?> value="1">Yes</option>
                </select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <label>Top City</label>
        </div>
        <div class="col-md-5">
            <div class="form-group">
                <select class="required form-control border-input top-city">
                    <option value="" disabled >Select Top City</option>
                    <option <?php if($data['top']=='0') echo "selected" ?> value="0">No</option>
                    <option <?php if($data['top']=='1') echo "selected" ?> value="1">Yes</option>
                </select>
            </div>
        </div>
    </div>
</form>