<form id="#">
    <div class="row">
        <div class="col-md-3">
            <label>Category Name</label>
        </div>
        <div class="col-md-5">
            <div class="form-group">
                <input type="hidden" class="idforupdata" value="<?=($data['id'])?$data['id']:'0'?>">
                <input type="text" class="required form-control border-input category-name" placeholder="Category Name" value="<?=$data['name']?>">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <label>Profile Type</label>
        </div>
        <div class="col-md-5">
            <div class="form-group">
                <select class="required form-control border-input profile-type" placeholder="Profile Type">
                    <option disabled value="">Profile Type</option>
                    <option <?php if($data['profile_type']=="Girl") echo "selected" ?> value="Girl">Girl</option>
                    <option <?php if($data['profile_type']=="Guy") echo "selected" ?> value="Guy">Guy</option>
                    <option  <?php if($data['profile_type']=="Both") echo "selected" ?> value="Both">Both</option>
                </select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <label>Slug</label>
        </div>
        <div class="col-md-5">
            <div class="form-group">
                <input type="text" class="required form-control border-input slug" placeholder="Slug" value="<?=$data['slug']?>">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <label>Profile's No.</label>
        </div>
        <div class="col-md-5">
            <div class="form-group">
                <select class="required form-control border-input profile-no" placeholder="Profile's No.">
                    <option disabled value="">Profile's No.</option>
                    <option <?php if($data['no_of_profile']=="6") echo "selected" ?> value="6">6</option>
                    <option <?php if($data['no_of_profile']=="9") echo "selected" ?> value="9">9</option>
                    <option  <?php if($data['no_of_profile']=="12") echo "selected" ?> value="12">12</option>
                </select>
            </div>
        </div>    
    </div>
    <div class="row">
        <div class="col-md-3">
            <label>Girl Profile's No.</label>
        </div>
        <div class="col-md-5">
            <div class="form-group">
                <input type="number" max='12' min='0' class="form-control border-input girl-profile-no" placeholder="Girl Profile's No." value="<?=($data['girl_no_of_profile'])?$data['girl_no_of_profile']:'0'?>">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <label>Guy Profile's No.</label>
        </div>
        <div class="col-md-5">
            <div class="form-group">
                <input type="number" max='12' min='0' class="form-control border-input guy-profile-no" placeholder="Girl Profile's No." value="<?=($data['guy_no_of_profile'])?$data['guy_no_of_profile']:'0'?>">
            </div>
        </div>
    </div>
</form>