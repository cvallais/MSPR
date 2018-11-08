<?php
$user_id		= htmlspecialchars($_POST['firstname']);

include_once('get_user.php');
require_once('db.php');
$sql = "SELECT
        FROM users
        INNER JOIN events
        ON events.id_user = users.id
        WHERE id = '' AND  = '' ";


 ?>
