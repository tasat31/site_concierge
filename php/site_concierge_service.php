<?php
/* For (PHP 5 >= 5.3.0, PHP 7) */

class rconDB extends SQLite3
{
    function __construct()
    {
        $this->open('site_concierge.db');
    }
}


$db = new rconDB();

$query = $db->query('SELECT id, message FROM rc_message');

$rownum = $db->querySingle('SELECT count(id) FROM rc_message');

$msg_id = (int) ($rownum * $_REQUEST['rand_val'] + 0.5);


$result = $db->querySingle(sprintf('SELECT message FROM rc_message where id=%s', $msg_id));

echo $result;
?>
