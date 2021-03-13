<?php


class Notification extends AbstractTable
{
    protected int $id_notification;
    protected string $type_notification;
    protected string $date_notification;
    protected int $read_notification;
    protected int $user_id;
    protected int $content_id;

    /**
     * @return int
     */
    public function getIdNotification(): int
    {
        return $this->id_notification;
    }

    /**
     * @return string
     */
    public function getTypeNotification(): string
    {
        return $this->type_notification;
    }

    /**
     * @return string
     */
    public function getDateNotification(): string
    {
        return $this->date_notification;
    }

    /**
     * @return int
     */
    public function getReadNotification(): int
    {
        return $this->read_notification;
    }

    /**
     * @return int
     */
    public function getUserId(): int
    {
        return $this->user_id;
    }

    /**
     * @return int
     */
    public function getContentId(): int
    {
        return $this->content_id;
    }

    /**
     * @param int $id_notification
     */
    public function setIdNotification(int $id_notification): void
    {
        $this->id_notification = $id_notification;
    }

    /**
     * @param string $type_notification
     */
    public function setTypeNotification(string $type_notification): void
    {
        $this->type_notification = $type_notification;
    }

    /**
     * @param string $date_notification
     */
    public function setDateNotification(string $date_notification): void
    {
        $this->date_notification = $date_notification;
    }

    /**
     * @param int $read_notification
     */
    public function setReadNotification(int $read_notification): void
    {
        $this->read_notification = $read_notification;
    }

    /**
     * @param int $user_id
     */
    public function setUserId(int $user_id): void
    {
        $this->user_id = $user_id;
    }

    /**
     * @param int $content_id
     */
    public function setContentId(int $content_id): void
    {
        $this->content_id = $content_id;
    }
}