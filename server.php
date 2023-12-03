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

if(isset($_POST['deleteTask'])){
    $deleteTask = $_POST['deleteTask'];
    array_splice($list, $deleteTask, 1);
    file_put_contents('todo-list.json', json_encode($list));
}

if(isset($_POST['toggleTask'])){
    $toggleTask = $_POST['toggleTask'];
    if($list[$toggleTask]['done']){
        $list[$toggleTask]['done'] = false;
    }
    else{
        $list[$toggleTask]['done'] = true;
    }
    file_put_contents('todo-list.json', json_encode($list));
}
header('Content-Type: application/json');

echo json_encode($list);

?>