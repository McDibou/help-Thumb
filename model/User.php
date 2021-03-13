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
        $this->id_user = $id_user;
    }

    /**
     * @param string $name_user
     */
    public function setNameUser(string $name_user): void
    {
        $this->name_user = $name_user;
    }

    /**
     * @param string $username_user
     */
    public function setUsernameUser(string $username_user): void
    {
        $this->username_user = $username_user;
    }

    /**
     * @param string $mail_user
     */
    public function setMailUser(string $mail_user): void
    {
        $this->mail_user = $mail_user;
    }

    /**
     * @param string $pseudo_user
     */
    public function setPseudoUser(string $pseudo_user): void
    {
        $this->pseudo_user = $pseudo_user;
    }

    /**
     * @param string $password_user
     */
    public function setPasswordUser(string $password_user): void
    {
        $this->password_user = $password_user;
    }

    /**
     * @param string $key_user
     */
    public function setKeyUser(string $key_user): void
    {
        $this->key_user = $key_user;
    }

    /**
     * @param int $active_user
     */
    public function setActiveUser(int $active_user): void
    {
        $this->active_user = $active_user;
    }

    /**
     * @param string $date_user
     */
    public function setDateUser(string $date_user): void
    {
        $this->date_user = $date_user;
    }

    /**
     * @param int $role_id
     */
    public function setRoleId(int $role_id): void
    {
        $this->role_id = $role_id;
    }
}