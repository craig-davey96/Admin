<?php
/**
 * Created by PhpStorm.
 * User: craig
 * Date: 03/10/2017
 * Time: 20:41
 */
?>

<div class="login-block">

    <div class="left">
        <h1>Login</h1>

        <hr>

        <?=form_open('' , array('autocomplete' => 'off'))?>

        <div class="form-group">
            <label for="">Email</label>
            <input type="email" class="form-control">
        </div>

        <div class="form-group">
            <label for="">Password</label>
            <input type="password" class="form-control">
        </div>

        <div class="form-group">
            <div class="checkbox">
                <label for="rememberme"><input id="rememberme" type="checkbox"> Remember Me</label>
            </div>
        </div>

        <div class="form-group">
            <button class="btn btn-primary">Submit</button>
        </div>

        <a href="">Forgotten Password?</a>

        <?=form_close()?>
    </div>
    <div class="right bg-dark">


    </div>

</div>
