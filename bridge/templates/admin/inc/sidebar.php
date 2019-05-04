<div class="sidebar" data-background-color="white" data-active-color="danger">

    <!--
		Tip 1: you can change the color of the sidebar"s background using: data-background-color="white | black"
		Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
	-->

    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="#" class="simple-text"><?=BRAND?></a>
        </div>
        <ul class="nav">
            <li class="<?php if(strtolower($TITLE)=="dashboard") echo "active"?>">
                <a href="<?=BASE_URL?>hh/dashboard">
                    <i class="ti-panel"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="<?php if(strtolower($TITLE)=="countries") echo "active"?>">
            <a href="<?=BASE_URL?>hh/countries">
                    <i class="ti-world"></i>
                    <p>Countries</p>
                </a>
            </li>
            <li class="<?php if(strtolower($TITLE)=="states") echo "active"?>">
            <a href="<?=BASE_URL?>hh/states">
                    <i class="ti-world"></i>
                    <p>States</p>
                </a>
            </li>
            <li class="<?php if(strtolower($TITLE)=="cities") echo "active"?>">
            <a href="<?=BASE_URL?>hh/cities">
                    <i class="ti-world"></i>
                    <p>Cities</p>
                </a>
            </li>
            <li class="<?php if(strtolower($TITLE)=="categories") echo "active"?>">
            <a href="<?=BASE_URL?>hh/categories">
                    <i class="ti-heart"></i>
                    <p>Categories</p>
                </a>
            </li>
            <li class="<?php if(strtolower($TITLE)=="seo content") echo "active"?>">
            <a href="<?=BASE_URL?>hh/seo">
                    <i class="ti-search"></i>
                    <p>SEO Content</p>
                </a>
            </li>
            <li class="<?php if(strtolower($TITLE)=="generic page") echo "active"?>">
            <a href="<?=BASE_URL?>hh/generic">
                    <i class="ti-layout"></i>
                    <p>Generic Page</p>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="ti-view-list-alt"></i>
                    <p>Table List</p>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="ti-text"></i>
                    <p>Typography</p>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="ti-pencil-alt2"></i>
                    <p>Icons</p>
                </a>
            </li>
        </ul>
    </div>
</div>