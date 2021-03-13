<?php


class Subject extends AbstractTable
{
    protected int $id_subject;
    protected string $name_subject;

    /**
     * @return int
     */
    public function getIdSubject(): int
    {
        return $this->id_subject;
    }

    /**
     * @return string
     */
    public function getNameSubject(): string
    {
        return $this->name_subject;
    }

    /**
     * @param int $id_subject
     */
    public function setIdSubject(int $id_subject): void
    {
        $this->id_subject = $id_subject;
    }

    /**
     * @param string $name_subject
     */
    public function setNameSubject(string $name_subject): void
    {
        $this->name_subject = $name_subject;
    }
}