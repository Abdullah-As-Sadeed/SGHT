<?php

/* By Abdullah As-Sadeed */

function Process_String($data)
{
    return trim(strip_tags(mysqli_real_escape_string($GLOBALS['connection'], $data)));
}
if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['textarea']) {
    date_default_timezone_set('Asia/Dhaka');
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $connection = mysqli_connect('localhost:62218', 'root', '2fN8G2BBcm4AS8wRfqTEAAuvgQJPaprBHeaHRvYKR3drbZkq6NhDxQvbhM74TpWmc6xquxpnVGb6DdV', 'SGHT');
    mysqli_set_charset($connection, 'utf8mb4');
    mysqli_query($connection, "SET GLOBAL SQL_MODE = '';");
    mysqli_query($connection, "SET GLOBAL time_zone = '+00:00';");
    mysqli_query($connection, "SET time_zone = '+06:00';");
    if (filter_var($_SERVER['HTTP_CLIENT_IP'], FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE)) {
        $ip_address = Process_String($_SERVER['HTTP_CLIENT_IP']);
    } elseif (filter_var($_SERVER['HTTP_X_FORWARDED_FOR'], FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE)) {
        $ip_address = Process_String($_SERVER['HTTP_X_FORWARDED_FOR']);
    } elseif (filter_var($_SERVER['HTTP_X_FORWARDED'], FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE)) {
        $ip_address = Process_String($_SERVER['HTTP_X_FORWARDED']);
    } elseif (filter_var($_SERVER['HTTP_FORWARDED_FOR'], FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE)) {
        $ip_address = Process_String($_SERVER['HTTP_FORWARDED_FOR']);
    } elseif (filter_var($_SERVER['HTTP_FORWARDED'], FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE)) {
        $ip_address = Process_String($_SERVER['HTTP_FORWARDED']);
    } elseif (filter_var($_SERVER['REMOTE_ADDR'], FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE)) {
        $ip_address = Process_String($_SERVER['REMOTE_ADDR']);
    } else {
        $ip_address = 'Unknown';
    }
    $textarea = Process_String($_POST['textarea']);
    mysqli_query($connection, "INSERT INTO `Replies`(`IP_Address`, `Reply`) VALUES ('$ip_address', '$textarea');");
    mysqli_close($connection);
}
exit();
