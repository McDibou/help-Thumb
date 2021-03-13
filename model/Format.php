<?php


class Format extends AbstractTable
{
    protected int $id_format;
    protected string $name_format;

    /**
     * @return int
     */
    public function getIdFormat(): int
    {
        return $this->id_format;
    }

    /**
     * @return string
     */
    public function getNameFormat(): string
    {
        return $this->name_format;
    }

    /**
     * @param int $id_format
     */
    public function setIdFormat(int $id_format): void
    {
        $this->id_format = $id_format;
    }

    /**
     * @param string $name_format
     */
    public function setNameFormat(string $name_format): void
    {
        $this->name_format = $name_format;
    }
}