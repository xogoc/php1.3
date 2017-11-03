<?php
function spaces2underscore($str) {
    return implode("_", explode(" ", $str)); // или str_replace(" ", "_", $str);
}