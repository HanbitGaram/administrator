<?php
use Administrator\AdministratorLevel;

$exam = new Implementation();
$level = new AdministratorLevel(10);

$exam->setAdministrator('test', $level);

try {
    print_r($exam->getAdministrator('test'));
} catch (Throwable $e) {
    echo $e->getMessage();
}