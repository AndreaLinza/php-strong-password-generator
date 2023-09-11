<?php 

$passwordLength = $_GET["passwordLength"] ?? null;

$el =  "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%&*_";

$randomPassword = substr(str_shuffle($el), 0, $passwordLength);