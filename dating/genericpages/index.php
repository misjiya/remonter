<?php 
include($_SERVER['DOCUMENT_ROOT'].'/remonter/dating/config.php');
include($_SERVER['DOCUMENT_ROOT'].'/remonter/bridge/helper/dating/commonHelper.php');
$helper=new CommonHelper();
$GenericContents=$helper->fetchGenericContents(SLUG);
$TITLE=$GenericContents['title'];
include_once(INC.'head.php');
?>
<body>
<?php include_once(INC.'nav.php');?>
    <div class="content-body">
        <div class="row">
            <div class="col-12 col-s-12">
                <div class="f-group">
                    <h2 class="t-center"><?=$GenericContents['title']?></h2>
                    <p class="g-para"><?=nl2br($GenericContents['body'])?></p>
                </div>
            </div>
        </div>
    </div>
<?php include_once(INC.'generic-footer.php');?>
</body>