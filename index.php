<?php
$access = require_once"core/data/bootstrap.php";

require Router::load("router.php")

->goto(Request::requestUri(), Request::method());