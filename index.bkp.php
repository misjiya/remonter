<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
* {
  box-sizing: border-box;
}

.row::after {
  content: "";
  clear: both;
  display: table;
}

[class*="col-"] {
  float: left;
  padding: 15px;
}

html {
  font-family: "Lucida Sans", sans-serif;
}
body{
    margin:0px;
    background: #fef8ea;

}
.header {
    background: linear-gradient(to right,#61045f,#aa076b);
    color: #ffffff;
    height: 75px;
    top: 0;
    position: fixed;
    width: 100%;
    left: 0;
    padding-left: 20px;
}

.menu ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

.menu li {
  padding: 8px;
  margin-bottom: 7px;
  background-color: #33b5e5;
  color: #ffffff;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}

.menu li:hover {
  background-color: #0099cc;
}

.aside {
  background-color: #33b5e5;
  padding: 15px;
  color: #ffffff;
  text-align: center;
  font-size: 14px;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}

.footer1 {
  background-color: #a9076b;
  color: #ffffff;
  font-size: 12px;
  padding: 15px;
  border-bottom:1px solid white;
}
.border-r{
    border-right: 1px solid white;
}
.footer2 {
  background-color: #a9076b;
  color: #ffffff;
 
  font-size: 12px;
  padding: 15px;
}
.head-block{
    width: 50%;
    float: left;
}
/* For mobile phones: */
[class*="col-"] {
  width: 100%;
}
.logo-img{
    height: 55px;
    margin-top: 12px;
}
.content-body{
    margin-top: 75px;
}
.signup-blk{
    width: 140px;
    float: right;
    padding: 29px;
    height: 100%;
    text-align: center;
}
.signup-blk a{
    text-decoration: none;
}
.signup-blk a strong{
    color:white;
}
.ban-b{
    padding: inherit;
}
.d-banner{
    height: 582px;
    text-align: center;
    background: url(assets/img/banner-home2.jpg) no-repeat;
    background-size: cover;
}
.b-img{
    height:100%;
}
@media only screen and (min-width: 600px) {
  /* For tablets: */
  .col-s-1 {width: 8.33%;}
  .col-s-2 {width: 16.66%;}
  .col-s-3 {width: 25%;}
  .col-s-4 {width: 33.33%;}
  .col-s-5 {width: 41.66%;}
  .col-s-6 {width: 50%;}
  .col-s-7 {width: 58.33%;}
  .col-s-8 {width: 66.66%;}
  .col-s-9 {width: 75%;}
  .col-s-10 {width: 83.33%;}
  .col-s-11 {width: 91.66%;}
  .col-s-12 {width: 100%;}
}
@media only screen and (min-width: 768px) {
  /* For desktop: */
  .col-1 {width: 8.33%;}
  .col-2 {width: 16.66%;}
  .col-3 {width: 25%;}
  .col-4 {width: 33.33%;}
  .col-5 {width: 41.66%;}
  .col-6 {width: 50%;}
  .col-7 {width: 58.33%;}
  .col-8 {width: 66.66%;}
  .col-9 {width: 75%;}
  .col-10 {width: 83.33%;}
  .col-11 {width: 91.66%;}
  .col-12 {width: 100%;}
}
.mob-reg-but{
    display:none;
}
.s-para{
        text-align: justify;
        font-size: 16px;
        line-height: 25px;
    }
.f1-ul{
    padding:0;
}
.f1-ul li{
    list-style: none;
    font-size: 16px;
    padding:3px;
}
.f1-ul li a{
    text-decoration:none;
    color:white;
}
.copyr{
    font-size: 16px;
}
.s-prof-f{
    width:100%;
}
.s-prof-f img{
    height: 60px;
    width: 60px;
    border-radius: 50%;
    opacity: 0.6;
}
.signup-block{
    float:right;
    width: 400px;
    background: #fef8ea;
    margin-top:15px;
    margin-right:20px;
    border-radius: 5px;
    box-shadow: 2px 2px 5px #a8076b;
    text-align:left;
}
.f-control{
    width:100%;
    padding:5px;
}
.f-group{
    padding-bottom:0px;
}
.f-group1{
    padding-bottom:0px;
    padding-top:0px;
}
.t-center{
    text-align:center;
}
.signup-btn-reg{
        background: orange linear-gradient(orange,#ff8c00);
        padding: 10px;
        font-size: 16px;
        font-weight:700;
        border-color: #ff8c00;
        color:#FFF;
        text-align:center;
    }
.sign-priv p{
    font-size: 11px;
    text-align: justify;
    color: grey;
}
@media screen and (max-width: 600px) {
    .d-banner{
        height: 661px;
        background: url(assets/img/m-banner-home2.jpg) no-repeat;
        background-size: cover;
    }
    .signup-blk{
        display:none;
    }
    .mob-reg-but{
        display: block;
        bottom: 0px;
        position: absolute;
        text-align: center;
        width: 100%;
        padding: 20px;
    }
    .mob-btn-reg{
        background: orange linear-gradient(orange,#ff8c00);
        padding: 10px;
        margin-top: 15px;
        font-size: 16px;
        font-weight:700;
        border-color: #ff8c00;
        color:#FFF;
    }
    .mob-btn-log{
        background: linear-gradient(to right,#61045f,#aa076b);
        padding: 10px;
        margin-top: 15px;
        font-size: 16px;
        font-weight:700;
        border-color: #ff8c00;
        color:#FFF;
    }
    .s-para{
        text-align: justify;
        font-size: 16px;
        line-height: 25px;
    }
    .border-r{
        border-bottom:1px solid white;
        border-right:none;
    }
    .footer1,.footer2{
        text-align:center;
    }
    .signup-block{
        width: 100%;
    height: 100%;
    background: #fef8ea;
    margin-top: 0px;
    margin-right: 0px;
    border-radius: 0px;
    box-shadow: 2px 2px 5px #a8076b;
    position: absolute;
    z-index: 999999;
    }
    .sign-priv p{
        font-size: 12px;
        text-align: justify;
        color: grey;
        line-height: 16px;
    }
}

</style>
</head>
<body>
<div class="header">
    <div class="head-block">
        <img class="logo-img" src="assets/img/logo3.png" alt="">
    </div>
    <div class="signup-blk">
        <a href="#"><strong>SIGN IN</strong></a>
    </div>
</div>

<div class="content-body">
  <div class="ban-b">
     <div class="d-banner">
        <div class="signup-block">
            <div class="row">
                <div class="col-12 col-s-12 f-group1">
                    <h2 class="t-center">Register for free!</h2>
                </div>
                <div class="col-12 col-s-12 f-group1">
                    <label>I'm looking for</label>
                    <select class="f-control">
                        <option value="Female">Female</option>
                        <option value="Male">Male</option>
                    </select>
                </div>
                <div class="col-12 col-s-12 f-group">
                    <label>Age</label>
                    <select class="f-control">
                    <?php for($i=18;$i<=75;$i++){?>
                        <option value="<?=$i;?>"><?=$i;?></option>
                    <?php }?>
                    </select>
                </div>
                <div class="col-12 col-s-12 f-group">
                    <label>Email</label>
                    <input type="text" class="f-control" />
                </div> 
                <div class="col-12 col-s-12 f-group">
                    <label>Live in</label>
                    <select class="f-control">
                        <option value="Hyderabad">Hyderabad</option>
                        <option value="Chennai">Chennai</option>
                        <option value="Banglore">Banglore</option>
                    </select>
                </div>
                <div class="col-12 col-s-12 f-group">
                    <label>Username</label>
                    <input type="text" class="f-control" />
                </div> 
                <div class="col-12 col-s-12 f-group">
                    <label>Password</label>
                    <input type="password" class="f-control" />
                </div> 
                <div class="col-12 col-s-12 f-group">
                    <div class="signup-btn-reg">Register Now!</div>
                </div> 
                <div class="col-12 col-s-12 f-group1">
                    <div class="sign-priv">
                        <p>By clicking the submit button above you expressly consent to 
                        our <a href="#">Privacy policy</a> including use of profiling to find your
                        matches and you agree to our <a href="#">Terms of use</a>, and receive newsletters, accounts updates, offers sent by hheart.</p>
                    </div>
                </div> 
            </div>
        </div>
        <div class="mob-reg-but">
            <div class="mob-btn-reg">Register Now!</div>
            <div class="mob-btn-log">Login</div>
        </div>
     </div>
  </div>
</div>
<section class="seo-section">
<div class="row">
    <div class="col-m-12 col-s-12">
        <div class="center">
            <div class="">    
                <h1>Online Dating at Its Best!</h1>
                <p class="s-para">An Indian Dating Site that Unites Singles of Indian Origin Worldwide! Are you seeking someone who can really understand your language, culture and inner world? Are these factors important to you when dating offline? If so, you need to join our site. Indiandating.com is a different online dating site. It stands out from the crowd because it was created as an  Indian online dating portal where Indian singles can meet and freely associate with other like-minded people. Our advantage is that we guarantee that you will meet a 100% genuine Indian date, speak with your match in your native language and find common interests with them more easily and quickly. Indian online dating wasn't so popular as other online dating niches, but over the years demand has grown for this type of dating, due to people's mobility and because they have time. These days, whether you are living in the UK or the USA, you can easily find someone single of the same origin as you. Using our Indian dating service you can avoid the problem of the cultural gap. There are lots of reasons why the site has become popular nowadays. It also offers Muslim dating and has a vast database of culturally diverse dating personals.</p>
                <h2>Online Dating For Your Enjoyment</h2>
                <p class="s-para">Our free Indian dating site differs greatly from other Indian dating websites when it comes to the time to find matches, and in terms of its user-friendliness and dating quality. Millions of people all over the world have enjoyed our services. If there are Indian folks living in your area, we guarantee some of them are registered at our site. Over the years, we have experienced a solid growth in the number of registrations by people looking for Indian dating in the USA and Indian dating in the UK. It's very easy to register and login to IndianDating.com. You don't have to answer too many questions; you just have to fill in a few simple forms and you are done! The only reason we require these forms is so we can match you with the right Indian man or woman, and to make you feel comfortable at our site for Indian singles dating.</p>
                <h2>Online Dating for Those Who Understand</h2>
                <p class="s-para">Indian online dating is a bit different from the typical westernized version of dating. Traditionally, dating can unite different people of various origins who may have completely outspoken ideas about life and everything else. Looking for an Indian date, all is different. Not every person can understand all the peculiarities of Indian life values and how Indians bring up their children. This is the real reason why Free Indian Dating has become so popular. Many sites offer Indian expats the chance to enjoy meetings with singles actually living in India. Our site offers a great variety of membership plans and opportunities to start Indian dating in London, elsewhere in the UK or in the North American region as well.</p>
                <h2>Avoid Dating Mistakes with our Indian Online Dating Site</h2>
                <p class="s-para">The most important feature of our site is similar to that shared by other sites. We provide people with an opportunity to meet new friends without too much emotional involvement. They can just flirt and find the common topics to discuss. Then they can actually meet up and discuss serious matters, including love and marriage. To avoid lots of dating mistakes and to find an ideal Indian date, you need to try IndianDating.com. It's easier to find a date online rather than wasting time on blind dates or meetings arranged by your friends.</p>
                <h2>Simplify Your Online Dating Experience</h2>
                <p class="s-para">It is a difficult process to meet other singles and get into contact with them. Considering how busy and fast-paced our life is today, we've decided to broaden the borders and offer you a chance to go dating online. Here you can be yourself, here you can find an Indian single person that match your cultural views and values; here you can have the best online dating experience and find lots of Indian people eager to chat and date. Simply register and find an Indian date in a matter of seconds.</p>
            </div>
        </div>
        </div>
</div>
</section>
    <div class="footer1">
         <div class="row">
            <div class="col-4 col-s-12 border-r">
            <h2>Our Generic Pages</h2>
                <ul class="f1-ul">
                    <li><a href="#">About us</a></li>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">About us</a></li>
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
                        <td><a href="#"><img src="assets/img/seo-profile/1.jpg"></a></td>
                        <td><a href="#"><img src="assets/img/seo-profile/2.jpg"></a></td>
                        <td><a href="#"><img src="assets/img/seo-profile/3.jpg"></a></td>
                        <td><a href="#"><img src="assets/img/seo-profile/7.jpg"></a></td>
                    </tr>    
                    <tr>
                        <td><a href="#"><img src="assets/img/seo-profile/4.jpg"></a></td>
                        <td><a href="#"><img src="assets/img/seo-profile/5.jpg"></a></td>
                        <td><a href="#"><img src="assets/img/seo-profile/6.jpg"></a></td>
                        <td><a href="#"><img src="assets/img/seo-profile/8.jpg"></a></td>
                    </tr>     
                   
                </table>
            </div>
         </div>
    </div>    
    <div class="footer2">
    <strong class="copyr">hhheart.com ©2019</strong>
    </div>
</body>
</html>
