<?php
/**
 * Created by PhpStorm.
 * User: francesco
 * Date: 16/03/2017
 * Time: 19:22
 */
include "barcode.php";
$bar = new barcode(null,4);
$number = "36627634746";
$bar->build($number, "prova", "");