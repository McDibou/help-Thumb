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
        $id_category = (int)$id_category;
        if (empty($id_category)) {
            trigger_error('');
        } else {
            $this->id_category = $id_category;
        }
    }

    /**
     * @param string $name_category
     */
    public function setNameCategory(string $name_category): void
    {
        if (empty($name_category)) {
            trigger_error('');
        } else if (strlen($name_category) < 5 || strlen($name_category) > 80) {
            trigger_error('');
        } else {
            $this->name_category = $name_category;
        }
    }
}