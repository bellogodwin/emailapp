<?php
    class LoginClass 
    {
        private int $userid =0;
        private string $username;
        private string $password;
        private string $datereg;


        function __construct(){
            
        }

        function getUserId(){
            return $this->userid;
        }

        function getUser(){
            return $this->username;
        }

        function setUser(string $user){
            $this->username = $user;
        }

        function getPass(){
            return $this->password;
        }

        function setPass(string $pass){
           
            $this->password = $pass;
        }

        

        function getUserReg(){
            return $this->datereg;
        }

    }
    

?>