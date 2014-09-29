<?php
if (!headers_sent())
{
	session_start();
}
require_once __DIR__ . '/autoload.php';
require_once __DIR__ . '/core/logging.php';
require_once __DIR__ . '/models/question.php';
require_once __DIR__ . '/config/database.php';
require_once __DIR__ . '/core/database.php';
