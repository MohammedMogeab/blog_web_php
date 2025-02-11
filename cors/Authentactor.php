<?php
namespace cors;
use cors\App;
use cors\session;
class Authentactor
{
    public function attempt($email, $password)
    {

        $user = App::resovle(Database::class)->query("SELECT * FROM users where email=:email", [
            'email' => $email
        ])->find();



        if ($user) {
            if (password_verify($password, $user["password"])) {

                $this->login([
                    'email' => ['email']
                ]);
                return true;
            }
        }
        return false;

    }
    public function login($user)
    {
        $_SESSION['user'] = [
            'email' => $user['email']
        ];
        session_regenerate_id(true);
    }
    public function logout()
    {
     session::destory();

    }
 




    
}