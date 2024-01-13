<?php

class User
{
    public $name;
    public $email;

    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
    }

    public function login()
    {
        echo "User logged in!";
    }
}

$user1 = new User("kuldeep", "kuldeep@gmail.com");
$user2 = new User("kuldeep kumar", "kumar@gmail.com");


echo $user1->name;
echo $user1->email;
print_r($user1);
