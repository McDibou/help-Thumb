<?php


class Notification extends AbstractTable
{
    protected int $id_notification;
    protected string $date_notification;
    protected int $read_notification;
    protected int $user_id;
    protected int $content_id;
    protected int $type_id;

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
     * @return int
     */
    public function getTypeId(): int
    {
        return $this->type_id;
    }


    /**
     * @param int $id_notification
     */
    public function setIdNotification(int $id_notification): void
    {
        $id_notification = (int)$id_notification;
        if (empty($id_notification)) {
            trigger_error('');
        } else {
            $this->id_notification = $id_notification;
        }
    }

    /**
     * @param string $date_notification
     */
    public function setDateNotification(string $date_notification): void
    {
        $test_date_notification = new DateTime($date_notification);
        if (empty($date_notification)) {
            trigger_error('');
        } else if (!is_object($test_date_notification)) {
            trigger_error('');
        } else {
            $this->date_notification = $date_notification;
        }
    }

    /**
     * @param int $read_notification
     */
    public function setReadNotification(int $read_notification): void
    {
        $read_notification = (int)$read_notification;
        if (empty($read_notification)) {
            trigger_error('');
        } else {
            $this->read_notification = $read_notification;
        }
    }

    /**
     * @param int $user_id
     */
    public function setUserId(int $user_id): void
    {
        $user_id = (int)$user_id;
        if (empty($user_id)) {
            trigger_error('');
        } else {
            $this->user_id = $user_id;
        }
    }

    /**
     * @param int $content_id
     */
    public function setContentId(int $content_id): void
    {
        $content_id = (int)$content_id;
        if (empty($content_id)) {
            trigger_error('');
        } else {
            $this->content_id = $content_id;
        }
    }

    /**
     * @param int $type_id
     */
    public function setTypeId(int $type_id): void
    {
        $type_id = (int)$type_id;
        if (empty($type_id)) {
            trigger_error('');
        } else {
            $this->type_id = $type_id;
        }
    }
}