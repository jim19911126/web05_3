<?php include_once "db.php";

$type = $_POST['type'];
$data = $_POST['data'];

switch ($type) {
    case 'data':
        $Order->del(['date' => $data]);
        break;
    case 'movie':
        $Order->del(['movie' => $data]);
        break;

}

?>