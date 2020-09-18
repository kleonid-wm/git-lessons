<?php
# test module

function testUI_NAME($name){
    if(isset($name) && $name != '') return $name; else return false;
}

function testUI_EMAIL($mail){
    if(isset($mail) && $mail != '') return $mail; else return false;
}
?>