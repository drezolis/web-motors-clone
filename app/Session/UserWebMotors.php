<?php

namespace App\Session;

class UserWebMotors{
    /**
     * @return boolean
     */
    private static function init(){
        session_status() !== PHP_SESSION_ACTIVE ? session_start() : true; 
          
    }
  
    /**
     * @param string $email
     * @param string $nome_completo
     */
    public static function login_webmotors($email, $nome_completo, $id){
        self::init();
        
        $_SESSION['user_webmotors'] = [
            'email' => $email,
            'nome_completo'  => $nome_completo,
            'id' => $id
        ];
    }
    /**
     * @return boolean
     */
    public static function isLogged(){
        self::init();

        return isset($_SESSION['user_webmotors']);
    }

    /**
     * @return array
     */
    public static function getInfo(){
        self::init();

        return $_SESSION['user_webmotors'] ?? [''];
    }

    public static function logout(){
        self::init();

        unset($_SESSION['user_webmotors']);
        echo '<script>alert("Você saiu da sua conta!");window.location.href ="../../public/index.php";</script>';
    }
    
}
?>