<?php

$link = mysqli_connect("127.0.0.1", "root", "DanPila12", "login_data");

if (!$link) {
    echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
    exit;
}

return $link;