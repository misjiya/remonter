<?php include_once(INC.'head.php');?>
<body>
<?php include_once(INC.'nav.php');?>
<div class="content-body">
  <div class="ban-b">
     <div class="d-banner">
        <div class="signup-block">
            <div class="row">
                <div class="col-12 col-s-12 col-p">
                    <h3 class="t-center m12">REGISTER FOR FREE!</h3>
                    <p class="f-error error-notification"></p>
                </div>
                <div class="col-12 col-s-12 col-p">
                    <div class="f-group">
                        <span class="f-label">Looking For</span>
                        <select class="f-control" id="looking">
                            <option value="Female">Female</option>
                            <option value="Male">Male</option>
                        </select>
                    </div>
                </div>
                <div class="col-12 col-s-12 col-p">
                    <div class="f-group">
                        <span class="f-label">My Age</span>
                        <select class="f-control" id="age">
                        <?php for($i=18;$i<=75;$i++){?>
                            <option value="<?=$i;?>"><?=$i;?></option>
                        <?php }?>
                        </select>
                    </div>
                </div>
                <div class="col-12 col-s-12 col-p">
                    <div class="f-group">
                        <span class="f-label">My Email</span>
                        <input type="text" class="f-control" id="email" placeholder="Here is my email id." autocomplete="off" />
                    </div>
                    <span class="f-error error-email"></span>
                </div> 
                <div class="col-12 col-s-12 col-p">
                    <div class="f-group">
                        <span class="f-label">I live in</span>
                        <select class="f-control" id="livein">
                            <?php foreach($TopCities as $city){?>
                                <option <?=($city['name']=="Delhi")?'selected':''; ?> value="<?=$city['name']?>"><?=$city['name']?></option>
                            <?php }?>
                        </select>
                    </div>
                </div>
                <div class="col-12 col-s-12 col-p">
                    <div class="f-group">
                        <span class="f-label">Username</span>
                        <input type="text" class="f-control" id="username" placeholder="My sweet username is." autocomplete="off"/>
                    </div>
                    <span class="f-error error-username"></span>
                </div> 
                <div class="col-12 col-s-12 col-p">
                    <div class="f-group">
                        <span class="f-label">Password</span>
                        <input type="text" class="f-control" id="password" placeholder="Now! my strong password." autocomplete="off"/>
                    </div>
                    <span class="f-error error-password"></span>
                </div> 
                <div class="col-12 col-s-12 col-p">
                    <div class="f-group">
                        <div class="signup-btn-reg register">Join Me Now!</div>
                    </div>
                </div> 
                <div class="col-12 col-s-12 col-p">
                    <div class="sign-priv">
                        <p>By clicking the submit button above you expressly consent to 
                        our <a href="#">Privacy policy</a> including use of profiling to find your
                        matches and you agree to our <a href="#">Terms of use</a>, and receive newsletters, accounts updates, offers sent by hheart.</p>
                    </div>
                </div> 
            </div>
        </div>
        <div class="mob-reg-but">
        <div class="signup-btn-reg show-register-form">Register Now</div>
            <div class="mob-btn-log">LOGIN</div>
        </div>
     </div>
  </div>
</div>
<section class="seo-section">
<div class="row">
    <div class="col-m-12 col-s-12">
        <div class="center">
            <div class="">
               <?php for($i=1;$i<6;$i++){?>
                <h2><?=$SeoContent["header$i"]?></h2>
                <p class="s-para"><?=$SeoContent["con$i"]?></p>
               <?php } ?>
            </div>
        </div>
        </div>
</div>
<?php //print_r($GenericPages) ;?>
</section>
<?php include_once(INC.'footer.php');?>
</body>
</html>
