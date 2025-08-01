<?php include_once "db.php";


$id = $_GET['movieId'];
$date = $_GET['date'];
$movies = $Movie->find($id);
// $ondate = strtotime($movies['ondate']);
// $today = strtotime(date("Y-m-d"));
$start = 0;
$hr=date("G");
if ($date == date('Y-m-d') && $hr>13) {
    $start=ceil(($hr-13)/2);    # code...
}

for ($i = $start; $i < 5; $i++) {
    $remaining=20;
    echo "<option value='{$showStr[$i]}'>";
    echo $showStr[$i];
    echo "剩餘座位";
    echo "$remaining 人";
    echo "</option>";
}

?>