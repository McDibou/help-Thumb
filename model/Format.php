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
        $id_format = (int)$id_format;
        if (empty($id_format)) {
            trigger_error('');
        } else {
            $this->id_format = $id_format;
        }
    }

    /**
     * @param string $name_format
     */
    public function setNameFormat(string $name_format): void
    {
        if (empty($name_format)) {
            trigger_error('');
        } else if (strlen($name_format) > 5 || strlen($name_format) > 80) {
            trigger_error('');
        } else {
            $this->name_format = $name_format;
        }
    }
}