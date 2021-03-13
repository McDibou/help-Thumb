<?php


class Category extends AbstractTable
{
    protected int $id_category;
    protected string $name_category;

    /**
     * @return int
     */
    public function getIdCategory(): int
    {
        return $this->id_category;
    }

    /**
     * @return string
     */
    public function getNameCategory(): string
    {
        return $this->name_category;
    }

    /**
     * @param int $id_category
     */
    public function setIdCategory(int $id_category): void
    {
        $this->id_category = $id_category;
    }

    /**
     * @param string $name_category
     */
    public function setNameCategory(string $name_category): void
    {
        $this->name_category = $name_category;
    }
}