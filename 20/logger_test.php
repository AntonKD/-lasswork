<?php
require_once 'autoloder.php';

$logger = new \Logger\FileLogger(__DIR__.date('Y.m.d').'/log.txt');
$logger->debug('hi');
$logger->info('text');
$logger->log(\Logger\Psr\Log\LogLevel::EMERGENCY, 'EMERGENCY messege');

