<?php 
include($_SERVER['DOCUMENT_ROOT'].'/hheart/dating/config.php');
include($_SERVER['DOCUMENT_ROOT'].'/hheart/bridge/helper/dating/commonHelper.php');
$helper=new CommonHelper();
$GenericContents=$helper->fetchGenericContents(SLUG);
$TITLE=$GenericContents['title'];
include_once(INC.'head.php');
?>
<body>
<?php include_once(INC.'nav.php');?>
    <div class="content-body">
        <div class="row">
            <div class="col-12 col-s-12 f-group1">
               <h2 class="t-center"><?=$GenericContents['title']?></h2>
               <p class="g-para"><?=nl2br($GenericContents['body'])?></p>
            </div>
        </div>
    </div>
<?php include_once(INC.'generic-footer.php');?>
</body>