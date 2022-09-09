<?php

include_once 'user_session.php';

$userSession = new User_Session();

$userSession->closeSession();
header("location:../index.php");
