<?php
/*
*
* iFrame API usage
*/

/*
*  Required Veriables
*/
$error = null;
$api_server = 'https://yt2m.pro/api/?';
$type = array();
$id = '';
$type = '';

if (isset($_GET['id']) && $_GET['id'] != '' && isset($_GET['type']) && $_GET['type'] !=
    '') {
    $id = $_GET['id'];
    $type = $_GET['type'];
    if ($_GET['type'] == 'js') {
        $get_data = array('id' => $id, 'type' => $type);
    } elseif ($_GET['type'] == 'iframe') {
        $get_data = array('id' => $id, 'type' => $type);
    } elseif ($_GET['type'] == 'link') {
        $get_data = array('id' => $id, 'type' => $type);
    } else {
        $error .= 'Invalid <b>Type</b><br>';
    }

    if (!isset($error) && $error == '') {
        $query = http_build_query($get_data);
        $jsonData = file_get_contents($api_server . $query);
        if (isset($jsonData)) {
            $response = json_decode($jsonData, true);
            if (isset($response['api'])) {
                $result = $response['api'];
                echo $result;
            } else {
                $error .= 'Unable to Retrive API data!<br>';
            }
        } else {
            $error .= 'Unable to connect API server!<br>';
        }

    }
} else {
    $error .= 'Youtube ID or Type not selected!<br>';
}
echo $error;
