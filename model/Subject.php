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
        $id_subject = (int)$id_subject;
        if (empty($id_subject)) {
            trigger_error('');
        } else {
            $this->id_subject = $id_subject;
        }
    }

    /**
     * @param string $name_subject
     */
    public function setNameSubject(string $name_subject): void
    {
        if (empty($name_subject)) {
            trigger_error('');
        } else if (strlen($name_subject) < 5 || strlen($name_subject) > 80) {
            trigger_error('');
        } else {
            $this->name_subject = $name_subject;
        }
    }
}