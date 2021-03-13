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
        $this->id_role = $id_role;
    }

    /**
     * @param string $name_role
     */
    public function setNameRole(string $name_role): void
    {
        $this->name_role = $name_role;
    }
}