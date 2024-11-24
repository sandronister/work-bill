<?php

function select($list,$selected){
    $result = "";

    foreach ($list as  $value) {
        $result .= "<option value='$value' ";
        $result .= $selected==$value ? 'selected' : '';
        $result .= " >$value</option>";
    }
    return $result;
}