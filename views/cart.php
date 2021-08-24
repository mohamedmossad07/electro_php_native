<?php
// check if req is ajax and req has product id , quantity , op=insert and user id
if (\App\Request::ajax() && \App\Request::postData('user') && \App\Request::postData('product') && \App\Request::postData('quntity')) {
    echo \App\Response::json(\Models\Cart::insert(\App\Request::postData()));
}
