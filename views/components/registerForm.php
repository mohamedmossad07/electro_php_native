<?php

use App\Request;
use Models\User;

if (Request::method() == 'post' &&
    Request::postData('email') &&
    Request::postData('password') &&
    Request::postData('first_name') &&
    Request::postData('last_name')) {
    User::register(Request::postData());
}
?>
<div class="wrapper fadeInDown">
    <div id="formContent">
        <form action="<?= _url('') ?>" method="post">
            <input type="text" id="first_name" class="fadeIn second" name="first_name"
                   placeholder="Enter your first name" autofocus>
            <input type="text" id="last_name" class="fadeIn second" name="last_name" placeholder="Enter your last name">
            <input type="email" id="email" class="fadeIn second" name="email" placeholder="Enter your email">
            <input type="password" id="password" class="fadeIn third" name="password" placeholder="Enter your password">
            <input type="submit" id="submit" class="fadeIn fourth" value="Register">
        </form>

    </div>
</div>
<style>

    /* STRUCTURE */
    .wrapper {
        display: flex;
        align-items: center;
        flex-direction: column;
        justify-content: center;
        width: 100%;
        min-height: 100%;
        padding: 20px;
    }

    #formContent {
        -webkit-border-radius: 10px 10px 10px 10px;
        border-radius: 10px 10px 10px 10px;
        background: #fff;
        padding: 30px;
        width: 90%;
        max-width: 450px;
        position: relative;
        -webkit-box-shadow: 0 30px 60px 0 rgba(0, 0, 0, 0.1);
        box-shadow: 0 30px 60px 0 rgba(0, 0, 0, 0.1);
        text-align: center;
    }


    /* FORM TYPOGRAPHY*/

    input {
        -webkit-border-radius: 5px 5px 5px 5px;
        border-radius: 5px 5px 5px 5px;
        background-color: #f6f6f6;
        border: none;
        color: #0d0d0d;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 5px;
        width: 85%;
    }

    #submit:hover, #submit:hover, #submit:hover {
        background-color: #9a2d40;
        color: white;
    }

    input:focus {
        background-color: #fff;
        border-bottom: 2px solid #D10024;
    }

    input::placeholder {
        color: #cccccc;
    }

    /* OTHERS */

    *:focus {
        outline: none;
    }
</style>
