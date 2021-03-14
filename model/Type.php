<?php


class Type
{
    protected int $id_type;
    protected string $name_type;

    /**
     * @return int
     */
    public function getIdType(): int
    {
        return $this->id_type;
    }

    /**
     * @return string
     */
    public function getNameType(): string
    {
        return $this->name_type;
    }

    /**
     * @param int $id_type
     */
    public function setIdType(int $id_type): void
    {
        $id_type = (int)$id_type;
        if (empty($id_type)) {
            trigger_error('');
        } else {
            $this->id_type = $id_type;
        }
    }

    /**
     * @param string $name_type
     */
    public function setNameType(string $name_type): void
    {
        if (empty($name_type)) {
            trigger_error('');
        } else if (strlen($name_type) < 5 || strlen($name_type) > 80) {
            trigger_error('');
        } else {
            $this->name_type = $name_type;
        }
    }
}