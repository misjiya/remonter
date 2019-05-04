<!--Include Head-->
<?php include_once(INC.'head.php');?>
<body>
    <div class="wrapper">
        <!-- Include Sidebar-->
        <?php include_once(INC.'sidebar.php');?>
        <div class="main-panel">
            <!-- Include Sidebar-->
            <?php include_once(INC.'nav.php');?>
            <div class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <div class="row">
                                    <div class="col-md-3">
                                        <h4 class="title title-item">Showing Records</h4>
                                        <input type="hidden" class="item-id" value="0"/>
                                        <input type="hidden" class="page-item-id" value="0"/>
                                        <p class="category notification"></p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="input-group search-input-text">
                                            <input type="text" class="form-control search-text" placeholder="Search">
                                            <span class="input-group-addon search search-item"><i class="ti-search"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <select class="select_page form-control"></select>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <button style="display:none;" type="button" class="btn btn-info btn-fill btn-wd save_items">Save</button>
                                    </div>
                                    <div class="col-md-2">
                                        <button type="button" class="btn btn-info btn-fill btn-wd create_item">Add</button>
                                        <button style="display:none;" type="button" class="btn btn-info btn-fill btn-wd cancel_items">Cancel</button>
                                    </div>
                                </div>
                            </div>
                            <div class="content load_content">
                                <?php
                                    $conlist = $this->service->fetch();
                                    $totalList=$this->service->fetchCount($SEARCH_TEXT='');
                                    $limit=$this->service->limit;
                                    include(TEMPLATE_ROOT."generic/list.php");
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        var totalList   ="<?=$totalList?>";
        var module      ="GENERIC";
        var limit       ="<?=$limit?>";
        var BASEURL     ="<?=BASE_URL?>";
    </script>
    <?php include_once(INC.'footer.php');?>
</body>
</html>