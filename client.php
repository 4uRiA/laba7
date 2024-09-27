<?php
class Client
{
    public $name;
    public $lastOrder;
    public $money;
    public function about_client()
    {
        var_dump($this);
    }
    public function last_order()
    {
        echo $this -> lastOrder;
    }
    public function monyee()
    {
        $this -> money += 100;
    }



}


?>