<?php


class Role extends AbstractTable
{
    protected int $id_role;
    protected string $name_role;

    /**
     * @return int
     */
    public function getIdRole(): int
    {
        return $this->id_role;
    }

    /**
     * @return string
     */
    public function getNameRole(): string
    {
        return $this->name_role;
    }

    /**
     * @param int $id_role
     */
    public function setIdRole(int $id_role): void
    {
        $id_role = (int)$id_role;
        if (empty($id_role)) {
            trigger_error('');
        } else {
            $this->id_role = $id_role;
        }
    }

    /**
     * @param string $name_role
     */
    public function setNameRole(string $name_role): void
    {
        if (empty($name_role)) {
            trigger_error('');
        } else if (strlen($name_role) < 5 || strlen($name_role) > 80) {
            trigger_error('');
        } else {
            $this->name_role = $name_role;
        }
    }
}