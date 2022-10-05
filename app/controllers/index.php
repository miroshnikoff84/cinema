<?php
include '../../app/database/db.php';
require_once '../../classes/Films.class.php';



$nick = new Films();
$nick->title = 'ghdfghdfghd';
$nick->addFilmData();
tt($nick);







