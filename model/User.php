<?php


class User extends AbstractTable
{
    protected int $id_user;
    protected string $name_user;
    protected string $username_user;
    protected string $mail_user;
    protected string $pseudo_user;
    protected string $password_user;
    protected string $key_user;
    protected int $active_user;
    protected string $date_user;
    protected int $role_id;

    /**
     * @return int
     */
    public function getIdUser(): int
    {
        return $this->id_user;
    }

    /**
     * @return string
     */
    public function getNameUser(): string
    {
        return $this->name_user;
    }

    /**
     * @return string
     */
    public function getUsernameUser(): string
    {
        return $this->username_user;
    }

    /**
     * @return string
     */
    public function getMailUser(): string
    {
        return $this->mail_user;
    }

    /**
     * @return string
     */
    public function getPseudoUser(): string
    {
        return $this->pseudo_user;
    }

    /**
     * @return string
     */
    public function getPasswordUser(): string
    {
        return $this->password_user;
    }

    /**
     * @return string
     */
    public function getKeyUser(): string
    {
        return $this->key_user;
    }

    /**
     * @return int
     */
    public function getActiveUser(): int
    {
        return $this->active_user;
    }

    /**
     * @return string
     */
    public function getDateUser(): string
    {
        return $this->date_user;
    }

    /**
     * @return int
     */
    public function getRoleId(): int
    {
        return $this->role_id;
    }

    /**
     * @param int $id_user
     */
    public function setIdUser(int $id_user): void
    {
        $id_user = (int)$id_user;
        if (empty($id_user)) {
            trigger_error('');
        } else {
            $this->id_user = $id_user;
        }
    }

    /**
     * @param string $name_user
     */
    public function setNameUser(string $name_user): void
    {
        if (empty($name_user)) {
            trigger_error('');
        } else if (strlen($name_user) < 5 || strlen($name_user) > 80) {
            trigger_error('');
        } else {
            $this->name_user = $name_user;
        }
    }

    /**
     * @param string $username_user
     */
    public function setUsernameUser(string $username_user): void
    {
        if (empty($username_user)) {
            trigger_error('');
        } else if (strlen($username_user) < 5 || strlen($username_user) > 80) {
            trigger_error('');
        } else {
            $this->username_user = $username_user;
        }
    }

    /**
     * @param string $mail_user
     */
    public function setMailUser(string $mail_user): void
    {
        if (empty($mail_user)) {
            trigger_error('');
        } else if (strlen($mail_user) < 5 || strlen($mail_user) > 255) {
            trigger_error('');
        } else {
            $this->mail_user = $mail_user;
        }
    }

    /**
     * @param string $pseudo_user
     */
    public function setPseudoUser(string $pseudo_user): void
    {
        if (empty($pseudo_user)) {
            trigger_error('');
        } else if (strlen($pseudo_user) < 5 || strlen($pseudo_user) > 20) {
            trigger_error('');
        } else {
            $this->pseudo_user = $pseudo_user;
        }
    }

    /**
     * @param string $password_user
     */
    public function setPasswordUser(string $password_user): void
    {
        if (empty($password_user)) {
            trigger_error('');
        } else if (strlen($password_user) < 5 || strlen($password_user) > 255) {
            trigger_error('');
        } else {
            $this->password_user = $password_user;
        }
    }

    /**
     * @param string $key_user
     */
    public function setKeyUser(string $key_user): void
    {
        if (empty($key_user)) {
            trigger_error('');
        } else if (strlen($key_user) < 5 || strlen($key_user) > 255) {
            trigger_error('');
        } else {
            $this->key_user = $key_user;
        }
    }

    /**
     * @param int $active_user
     */
    public function setActiveUser(int $active_user): void
    {
        $active_user = (int)$active_user;
        if (empty($active_user)) {
            trigger_error('');
        } else {
            $this->active_user = $active_user;
        }
    }

    /**
     * @param string $date_user
     * @throws Exception
     */
    public function setDateUser(string $date_user): void
    {
        $test_date_user = new DateTime($date_user);
        if (empty($date_user)) {
            trigger_error('');
        } else if (!is_object($test_date_user)) {
            trigger_error('');
        } else {
            $this->date_user = $date_user;
        }
    }

    /**
     * @param int $role_id
     */
    public function setRoleId(int $role_id): void
    {
        $role_id = (int)$role_id;
        if (empty($role_id)) {
            trigger_error('');
        } else {
            $this->role_id = $role_id;
        }
    }
}