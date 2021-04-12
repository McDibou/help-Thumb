<?php

class UserManager extends Manager
{
    protected string $table = 'helpthumb_user';

    public function signIn(User $user): bool
    {
        $data = $this->select('*', 'role', 'pseudo_user', $user->getPseudoUser(), true);

        if (!empty($data)) {
            if ($this->verifyPassword($data['password_user'], $user->getPasswordUser())) {
                $this->createSession($data);
                return true;
            }
        }
        return false;
    }

    public static function signOut(): bool
    {
        $_SESSION = [];

        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
            );
        }

        session_destroy();
        return true;
    }

    public function signUp(User $user): bool
    {
        $cryptPassword = $this->cryptPassword($user->getPasswordUser());
        $signUpValidationKey = $this->signUpValidationKey();

        $this->insert([
            'name_user'=> $user->getNameUser(),
            'username_user' => $user->getUsernameUser(),
            'mail_user' => $user->getMailUser(),
            'pseudo_user' => $user->getPseudoUser(),
            'password_user' => $cryptPassword,
            'key_user' => $signUpValidationKey,
            'active_user' => 0,
            'date_user' => new DateTime(),
            'role_id' => 1
        ]);
    }

    protected function signUpValidationKey(): string {
        return md5(microtime(TRUE) * 100000);
    }

    protected function createSession(array $datas): bool
    {
        $_SESSION = $datas;
        $_SESSION['session_id'] = session_id();
        return true;
    }

    protected function cryptPassword(string $pwd): string
    {
        return password_hash($pwd, PASSWORD_DEFAULT);
    }

    protected function verifyPassword(string $cryptPwd, string $pwd): bool
    {
        return password_verify($pwd, $cryptPwd);
    }

}
