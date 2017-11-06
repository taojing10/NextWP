<?php
function wexweb($value,$default_value){
    $cs_value=cs_get_option($value);
    if (!empty($cs_value)){
        echo $cs_value;
    }elseif (empty($cs_value)){
        echo $default_value;
    }

}
function wexif($value,$default_value){
    $cs_value=cs_get_option($value);
    if (!empty($cs_value)){
        return $cs_value;
    }elseif (empty($cs_value)){
        return $default_value;
    }

}

?>