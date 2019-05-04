<?php //echo"<pre>"; print_r($data);?>
<form id="#">
    <div class="row">
        <div class="col-md-3">
            <label>Type</label>
        </div>
        <div class="col-md-5">
            <div class="form-group">
                <input type="hidden" class="idforupdata" value="<?=($data['id'])?$data['id']:'0'?>">
                <select class="required form-control border-input seotype" placeholder="Type"><
                    <option disabled>Select Type</option>
                    <option <?php if($data['seotype']=="All") echo "selected" ?> value="All">All</option>
                    <option <?php if($data['seotype']=="City") echo "selected" ?> value="City">City</option>
                    <option <?php if($data['seotype']=="State") echo "selected" ?> value="State">State</option>
                    <option <?php if($data['seotype']=="Country") echo "selected" ?> value="Country">Country</option>
                </select> 
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <label>Title</label>
        </div>
        <div class="col-md-5">
            <div class="form-group">
                <input type ="text" class="required form-control border-input seotitle" placeholder="Title" value="<?=$data['title']?>">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <label>Description</label>
        </div>
        <div class="col-md-5">
            <div class="form-group">
                <textarea class="form-control border-input description" placeholder="Description"><?=$data['description']?></textarea> 
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <label>Keyword</label>
        </div>
        <div class="col-md-5">
            <div class="form-group">
                <textarea class="form-control border-input keyword" placeholder="Keyword"><?=$data['keyword']?></textarea> 
            </div>
        </div>
    </div>
    <?php for($i=1;$i<7;$i++){?>
    <div class="row">
        <div class="col-md-3">
            <label>Header <?=$i?></label>
        </div>
        <div class="col-md-5">
            <div class="form-group">
                <input type="text" rows="5" class="form-control border-input header<?=$i?>" placeholder="Header <?=$i?>" value="<?=$data['header'.$i]?>"> 
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <label>Content <?=$i?></label>
        </div>
        <div class="col-md-5">
            <div class="form-group">
                <textarea rows="5" class="form-control border-input con<?=$i?>" placeholder="Content <?=$i?>"><?=$data['con'.$i]?></textarea> 
            </div>
        </div>
    </div>
    <?php } ?>
</form>