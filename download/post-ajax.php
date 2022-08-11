<?php

if (isset($_POST) && !empty($_POST)) {
    $content = $_POST;
}

if (isset($_GET) && !empty($_GET)) {
    $content = $_GET;
}

echo json_encode(['success'=>true, 'content'=>$content]);

