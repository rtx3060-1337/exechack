<?php

header('Content-Type: text/html; charset=UTF-8');

// Устанавливаем статус 200
http_response_code(200);

// Проверяем параметры в запросе
$gay = isset($_POST['gay']) ? $_POST['gay'] : null;
$bdsm = isset($_POST['bdsm']) ? $_POST['bdsm'] : null;

// Если нет параметров gay и bdsm
if ($gay === null && $bdsm === null) {
    echo file_get_contents('release.txt');
    exit;
}

// Если bdsm равно "ilove"
if ($bdsm === 'ilove') {
    echo file_get_contents('beta.txt');
    exit;
}

// Если gay равно "yes"
if ($gay === 'yes') {
    echo file_get_contents('client.txt');
    exit;
}

// Если gay равно "no"
if ($gay === 'no') {
    echo '1';
    exit;
}
