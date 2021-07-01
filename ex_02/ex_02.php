<?php
function my_create_map(...$array) {
    $res = array();
    foreach ($array as $value) {
        if (count($value) < 2) {
            echo "The given arguments aren't valid.\n";
            return NULL;
        }
        $res[$value[0]] = $value[1];
    }
    return $res;
}
?>