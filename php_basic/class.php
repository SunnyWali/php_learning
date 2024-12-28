<?php
class Atm
{
    public $name;
    public $account;
    public $balance;

    function set_name($name)
    {
        $this->name=$name;
    }

    function get_name()
    {
        return $this->name;
    }

    function set_account($account)
    {
        $this->account=$account;
    }

    function get_account()
    {
        return $this->account;
    }

    function set_balance($balance)
    {
        $this->balance=$balance;
    }

    function get_balance()
    {
        return $this->balance;
    }

    

function withDraw($amount)
{
    if($amount <= $this->balance)
    {
        $this->balance-=$amount;
        return $this->balance;

    }
    else
    {
        return "No sufficient balance";
    }
}
    

}
    $obj= new Atm();
    $obj->set_name('Sunny');
    $obj->set_account(686468654);
    $obj->set_balance(3000);
    echo $obj->withdraw(4000);

?>