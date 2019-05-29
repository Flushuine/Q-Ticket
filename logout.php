<?php

session_start();
session_unset("user");
header("location:index.php");