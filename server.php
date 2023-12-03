<?php

$filecontent = file_get_contents("todo-list.json");
$list = json_decode($filecontent, true);

if(isset($_POST['task'])){
    $list[] = $_POST['task'];
    file_put_contents('todo-list.json', json_encode($list));
}

if(isset($_POST['newTask'])){
    $newTask = [
        "text" => $_POST['newTask'],
        "done" => false
    ];
    $list[] = $newTask;
    file_put_contents("todo-list.json", json_encode($list));
}

header('Content-Type: application/json');

echo json_encode($list);

?>