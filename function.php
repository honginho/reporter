<?php
//連線到資料庫
function link_db()
{
    $db = new mysqli('localhost', 'root', '12345', 'reporter10610');
    if ($db->connect_error) {
        die('無法連上資料庫：' . $db->connect_error);
    }
    $db->set_charset("utf8");
    return $db;
}

//讀出單一文章
function show_article($sn)
{
    global $db, $smarty;

    $sql    = "SELECT * FROM `article` WHERE `sn`='$sn'";
    $result = $db->query($sql) or die($db->error);
    $data   = $result->fetch_assoc();
    $smarty->assign('article', $data);
}
