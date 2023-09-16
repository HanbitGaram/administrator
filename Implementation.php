<?php
use Administrator\Administrator;
use Administrator\AdministratorLevel;

include_once(__DIR__.'/Autoload.php');
class Implementation extends Administrator {
    protected array $administrator = [];

    /**
     * @param string $administratorName Just put administrator's name in.
     * @return array Data in the Administrator
     * @throws Exception Error when administrator does not exist
     */
    public function getAdministrator(string $administratorName): array
    {
        if(!isset($this->administrator[$administratorName])) throw new Exception('Administrator does not exist', 400);
        else return $this->administrator[$administratorName];
    }

    /**
     * @param string $administratorName Just put administrator's name in.
     * @param AdministratorLevel $level Don't you think it's cool?
     * @return void Nothing
     */
    public function setAdministrator(string $administratorName, AdministratorLevel $level): void
    {
        $this->administrator[$administratorName] = [
            'name' => $administratorName,
            'level'=> $level
        ];
    }
}