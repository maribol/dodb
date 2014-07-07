<?php

include('DODBApi.class.php');

$dodb = new DODBApi();
$device_info = $dodb->getBrandModelInfo('Samsung', 'Galaxy Note 3');
print_r($device_info);