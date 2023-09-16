<?php
namespace Administrator;
use Exception;

abstract class Administrator {
    /**
     * @param String $administratorName Just put administrator's name in.
     */
    abstract public function getAdministrator(String $administratorName);

    /**
     * @param String $administratorName Just put administrator's name in.
     * @param AdministratorLevel $level Don't you think it's cool?
     */
    abstract public function setAdministrator(String $administratorName, AdministratorLevel $level);
}