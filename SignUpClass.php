<?php
 include  "Connection.php";
class SignUpClass extends Connection {
    
    protected function checkUser($email){
        $query = "SELECT uid FROM users WHERE email = ?";
        $stmt = $this->Dblink()->prepare($query);
         $results  = $stmt->execute($email);
         if(!$results){
            $results = null;
            
         }


    }


}