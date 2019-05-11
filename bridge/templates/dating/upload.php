<?php include_once(INC.'head.php');?>
<body>
<?php include_once(INC.'nav.php');?>
<div class="content-body">
    <div class="upload-container">
        
        <div class="upl-ins-blck">
            <div class="upg-title"><h3 class="t-center">GUIDELINES</h3></div>
            <p class="msg">Upload your photos to get more focused here and get ready to meet new people.</p>
            <ul class="upg-gline">
                <li>Your own photos</li>
                <li>Good quality photos</li>
                <li>Ignore obscene photos</li>
                <li>Keep changing your photos</li>
            </ul>
            <p class="sul">We will keep you photos safe and secure, only visible to recommended profiles</p>
        </div>
        <div class="upg-photo-blck">
            <div class="upg-in">
                <form id="uploadPic" method="post"enctype="multipart/form-data" >
                    <div class="row">
                        <div class="col-4">
                            <div class="upg-photos">
                                <span>+</span>
                                <input id="photo1" type="file" name="photo1" />
                            </div>
                    </div>
                    <div class="col-4">
                        <div class="upg-photos">
                            <span>+</span>
                            <input id="photo2" type="file" name="photo2" />
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="upg-photos">
                            <span>+</span>
                            <input id="photo3" type="file" name="photo3" />
                        </div>
                    </div>
                </div> 
                <div class="row">
                    <div class="col-4">
                        <div class="upg-photos">
                            <span>+</span>
                            <input id="photo4" type="file" name="photo4" />
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="upg-photos">
                            <span>+</span>
                            <input id="photo5" type="file" name="photo5" />
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="upg-photos">
                            <span>+</span>
                            <input id="photo6" type="file" name="photo6" />
                        </div>
                    </div>
                </div>
                <input type="hidden" value="upload_image" name="type">
                <button style="display:none;" class="upload_images">SUBMIT</button>
                </form>
                <div class="row">
                    <div class="col-3 mrtop-15">
                        <div class="btn-defalut">Skip</div>
                    </div>
                    <div class="col-9 mrtop-15">
                        <div class="signup-btn-reg upload_photo">Proceed</div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>  
    
</div>
<?php include_once(INC.'bottom-footer.php');?>
</body>
</html>
