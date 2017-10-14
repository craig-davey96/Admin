<?php
/**
 * Created by PhpStorm.
 * User: craig
 * Date: 03/10/2017
 * Time: 20:43
 */
?>
<div class="pace"></div>

<aside class="menu bg-dark">
    <div class="menu-top">

    </div>
    <h5>Main Navigation</h5>

    <ul class="menu-list">

        <li class="list-item"><a href="<?=base_url().'admin/dashboard'?>"> Dashboard</a></li>

        <li class="list-item dropdown">
            <a href="">News</a>
            <ul class="dropdown-list">
                <li><a href="<?=base_url().'admin/addNews'?>">Add News</a></li>
                <li><a href="<?=base_url().'admin/manageNews'?>">Manage News</a></li>
            </ul>
        </li>

        <li class="list-item dropdown">
            <a href="">Products</a>
            <ul class="dropdown-list">
                <li><a href="<?=base_url().'admin/addProduct'?>">Add Product</a></li>
                <li><a href="<?=base_url().'admin/manageProducts'?>">Manage Products</a></li>
            </ul>
        </li>

    </ul>

</aside>

<nav class="navbar navbar-light navbar-expand-lg navbar-custom">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="#"><i class="material-icons">format_indent_decrease</i></a>
        </li>
        <li class="nav-item active">
            <a class="nav-link goInFull" href="#" data-toggle="tooltip" data-placement="bottom" title="Fullscreen"><i class="material-icons">zoom_out_map</i></a>
        </li>
    </ul>
</nav>
