<?php //echo"<pre>"; print_r($data);?>
<form id="#">
    <div class="row">
        <div class="col-md-3">
            <label>Name</label>
        </div>
        <div class="col-md-5">
            <div class="form-group">
                <input type="hidden" class="idforupdata" value="<?=($data['id'])?$data['id']:'0'?>">
                <input type ="text" class="required form-control border-input genericname" placeholder="Name" value="<?=$data['name']?>">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <label>Title</label>
        </div>
        <div class="col-md-5">
            <div class="form-group">
                <input type ="text" class="required form-control border-input generictitle" placeholder="Title" value="<?=$data['title']?>">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <label>Slug</label>
        </div>
        <div class="col-md-5">
            <div class="form-group">
                <input <?=($data['id'])?'readonly':''?> type ="text" class="required form-control border-input slug" placeholder="Slug" value="<?=$data['slug']?>">
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
            <label>Body</label>
        </div>
        <div class="col-md-5">
            <div class="form-group">
                <textarea rows="6" class="form-control border-input genericbody" placeholder="Body"><?=$data['body']?></textarea> 
            </div>
        </div>
    </div>
</form>