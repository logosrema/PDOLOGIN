<?php

class SignUpController{
    private $email;
    private $password;
    private $password1;
    private $result;


    public function __construct($email,$password,$password1){
        $this->$email = $email; 
        $this->$password = $password;  
      $this->$password1 = $password1;
        
    }



    /**
     * Summary of EmptyInput
     * checking for empty
     * @return bool
     */
    private function EmptyInput(){
        $this->result;
        if(empty($this->email) || empty($this->password)){
           $result = true ;
        }else{
            $result = false;
        }
        return $result;
        
    }



    private function emailValidate(){
        $this->result;
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
            $result = false;
        }else{
            $result = false;
        }
        return $result;
   

    }

    private function passMatch(){
        $this->result;
        if($this->password !== $this->password1){
            $result = false;
        }else{
            $result = true;
        }

    }


}