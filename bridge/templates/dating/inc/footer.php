<?php
    $helper = new CommonHelper();
    $GenericPages=$helper->fetchGenericPages();
?>
<div class="footer1">
         <div class="row">
            <div class="col-4 col-s-12 border-r">
            <h2>Our Generic Pages</h2>
                <ul class="f1-ul">

                    <?php if($GenericPages){foreach($GenericPages as $page){?>
                    <li><a href="<?=BASE_URL.$page['slug']?>"><?=$page['title']?></a></li>
                    <?php } } ?>
                </ul>
            </div>
            <div class="col-4 col-s-12 border-r">
                <h2>Find your match in your city</h2>
                <ul class="f1-ul">
                    <li><a href="#">Hyderabad</a></li>
                    <li><a href="#">Chennai</a></li>
                    <li><a href="#">Banglore</a></li>
                    <li><a href="#">Delhi</a></li>
                    <li><a href="#">Kolkata</a></li>
                    <li><a href="#">Mumbai</a></li>
                </ul>
            </div>
        
            <div class="col-4 col-s-12">
            <h2>Check profile for dating</h2>
                <table class="s-prof-f">
                    <tr>
                        <td><a href="#"><img src="<?=BASE_URL?>assets/img/seo-profile/1.jpg"></a></td>
                        <td><a href="#"><img src="<?=BASE_URL?>assets/img/seo-profile/2.jpg"></a></td>
                        <td><a href="#"><img src="<?=BASE_URL?>assets/img/seo-profile/3.jpg"></a></td>
                        <td><a href="#"><img src="<?=BASE_URL?>assets/img/seo-profile/7.jpg"></a></td>
                    </tr>    
                    <tr>
                        <td><a href="#"><img src="<?=BASE_URL?>assets/img/seo-profile/4.jpg"></a></td>
                        <td><a href="#"><img src="<?=BASE_URL?>assets/img/seo-profile/5.jpg"></a></td>
                        <td><a href="#"><img src="<?=BASE_URL?>assets/img/seo-profile/6.jpg"></a></td>
                        <td><a href="#"><img src="<?=BASE_URL?>assets/img/seo-profile/8.jpg"></a></td>
                    </tr>     
                   
                </table>
            </div>
         </div>
    </div>    
    <div class="footer2">
    <strong class="copyr">hhheart.com ©2019</strong>
</div>
<script src="<?=BASE_URL?>assets/js/jquery-1.10.2.js" type="text/javascript"></script>
<!-- Application Script don't touch this -->
<script>var BASEURL="<?=BASE_URL?>"</script>
<script src="<?=BASE_URL?>assets/js/dating.js"></script>