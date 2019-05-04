<form id="#">
    <div class="row">
    	<div class="col-md-3">
            <label>Country Name</label>
        </div>
        <div class="col-md-5">
            <div class="form-group">
                <input type="hidden" class="idforupdata" value="<?=($data['id'])?$data['id']:'0'?>">
                <input type="text" class="required form-control border-input country-name" placeholder="Country Name" value="<?=$data['name']?>">
            </div>
        </div>
    </div>
</form>