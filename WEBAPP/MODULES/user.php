<?php

class User {

    public string $email;
    public string $username;
    public string $password;
    public int $userId;


    public function register() {
        $data= [
            "email" => $this->email,           
            "password" => $this->password,
            "email" => $this->email,
            "userId" => random_int(10000, 99999)

        ];
        $_SESSION["users"][] = $data;
        return 1;
    }
    public function login(){
       if(isset($_SESSION['users'])){
        foreach($_SESSION['users']as $key => $user){
            if($user['email'] && $user['password'] == $this->password){
                return $user;
            }
        }
        return "Invalid Credentials!!";
        }else{
                return "Invalid Account first!!";
       }
    }
}