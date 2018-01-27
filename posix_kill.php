<?php
$processId = 13364;
if (function_exists('posix_kill')) {
  $i = posix_kill($processId, SIGTERM);
} elseif (function_exists('exec') && strstr(PHP_OS, 'WIN')) {
  $i = exec("taskkill /F /PID $processId") ? TRUE : FALSE;
}
var_dump($i);
