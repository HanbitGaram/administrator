<?php
namespace Administrator;
class AdministratorLevel
{
    /**
     * @var int Declares the level of administrator.
     */
    protected Int $administratorLevel = 0;

    /**
     * @param Int $administratorLevel Sets the level of the Administrator immediately after class declaration.
     */
    public function __construct(Int $administratorLevel){
        $this->administratorLevel = $administratorLevel;
    }

    /**
     * @return int getLevel
     */
    public function getLevel(): int{
        return $this->administratorLevel;
    }
}