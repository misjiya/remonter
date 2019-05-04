
<style>
    .login-body{
        background-color: #f4f3ef;
    }

    .login-card {
        margin-top: 25%;
        padding: 25px;
        border-radius: 6px;
        box-shadow: 0 2px 2px rgba(204, 197, 185, 0.5);
        background-color: #FFFFFF;
        color: #252422;
        margin-bottom: 20px;
        position: relative;
        z-index: 1;
    }
    .btn-wd.login{
        width: 100%;
    }
 
</style>
<!--Include Head-->
<?php include_once(INC.'head.php');?>
<body class="login-body">
    <!-- Include Sidebar-->
    <div class="main-login">
        <!-- Include Sidebar-->
        <div class="login-content">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="login-card">
                    <div class="row">
                        <div class="col-md-12">
                            <h3>Login</h3>
                            <div class="form-group">
                                <label>Account Type</label>
                                <select type="text" class="required form-control border-input acconttype">
                                    <option value="admin">Admin</option>
                                    <option value="seo">SEO</option>
                                    <option value="campaign">Campaign</option>
                                    <option value="moderator">Moderator</option>
                                    <option value="accountant">Accountant</option>
                                </select>
                            </div>
                        
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" class="required form-control border-input username" placeholder="Usename" value="admin">
                            </div>
                        
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="required form-control border-input password" placeholder="Password" value="password">
                            </div>
                            <div class="form-group notification"></div>
                            <div class="form-group">
                                <input type="button" class="btn btn-info btn-wd login" value="Login">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
    <script>
        var module      ="LOGIN";
        var BASEURL     ="<?=BASE_URL?>";
    </script>
    <?php include_once(INC.'footer.php');?>
</body>
</html>