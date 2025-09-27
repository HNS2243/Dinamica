<?php


function data_submitted() {
    $data = !empty($_POST) ? $_POST : (!empty($_GET) ? $_GET : []);
    foreach ($data as $k => $v) {
        if ($v === "") $data[$k] = 'null';
    }
    return $data;
}

function verEstructura($e) {
    echo "<pre>"; print_r($e); echo "</pre>";
}
?>
