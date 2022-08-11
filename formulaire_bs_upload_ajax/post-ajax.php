<?php

if (isset($_POST) && !empty($_POST)) {
    $content = $_POST;
}

if (isset($_GET) && !empty($_GET)) {
    $content = $_GET;
}

if (isset($_FILES) && !empty($_FILES)) {
    $content['file'] = '<pre>' . print_r($_FILES, true) . '</pre>';
}

echo json_encode(['success'=>true, 'content'=>$content]);

