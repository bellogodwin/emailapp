<?php
    class AdminClass 
    {
       
        private string $username;
        private string $password;
        


        function __construct(){
            
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

        

      

    }
    

?>