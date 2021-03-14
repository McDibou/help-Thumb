<?php


class Content extends AbstractTable
{
    protected int $id_content;
    protected string $name_content;
    protected string $link_content;
    protected string $desc_content;
    protected int $level_content;
    protected int $like_content;
    protected string $date_content;
    protected int $subject_id;
    protected int $user_id;
    protected int $category_id;
    protected int $format_id;

    /**
     * @return int
     */
    public function getIdContent(): int
    {
        return $this->id_content;
    }

    /**
     * @return string
     */
    public function getNameContent(): string
    {
        return $this->name_content;
    }

    /**
     * @return string
     */
    public function getLinkContent(): string
    {
        return $this->link_content;
    }

    /**
     * @return string
     */
    public function getDescContent(): string
    {
        return $this->desc_content;
    }

    /**
     * @return int
     */
    public function getLevelContent(): int
    {
        return $this->level_content;
    }

    /**
     * @return int
     */
    public function getLikeContent(): int
    {
        return $this->like_content;
    }

    /**
     * @return string
     */
    public function getDateContent(): string
    {
        return $this->date_content;
    }

    /**
     * @return int
     */
    public function getSubjectId(): int
    {
        return $this->subject_id;
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
    public function getCategoryId(): int
    {
        return $this->category_id;
    }

    /**
     * @return int
     */
    public function getFormatId(): int
    {
        return $this->format_id;
    }

    /**
     * @param int $id_content
     */
    public function setIdContent(int $id_content): void
    {
        $id_content = (int)$id_content;
        if (empty($id_content)) {
            trigger_error('');
        } else {
            $this->id_content = $id_content;
        }
    }

    /**
     * @param string $name_content
     */
    public function setNameContent(string $name_content): void
    {
        if (empty($name_content)) {
            trigger_error('');
        } else if (strlen($name_content) < 5 || strlen($name_content) > 50) {
            trigger_error('');
        } else {
            $this->name_content = $name_content;
        }
    }

    /**
     * @param string $link_content
     */
    public function setLinkContent(string $link_content): void
    {
        if (empty($link_content)) {
            trigger_error('');
        } else if (strlen($link_content) < 5 || strlen($link_content) > 255) {
            trigger_error('');
        } else {
            $this->link_content = $link_content;
        }
    }

    /**
     * @param string $desc_content
     */
    public function setDescContent(string $desc_content): void
    {
        if (empty($desc_content)) {
            trigger_error('');
        } else {
            $this->desc_content = $desc_content;
        }
    }

    /**
     * @param int $level_content
     */
    public function setLevelContent(int $level_content): void
    {
        $level_content = (int)$level_content;
        if (empty($level_content)) {
            trigger_error('');
        } else {
            $this->level_content = $level_content;
        }
    }

    /**
     * @param int $like_content
     */
    public function setLikeContent(int $like_content): void
    {
        $like_content = (int)$like_content;
        $this->like_content = $like_content;
    }

    /**
     * @param string $date_content
     * @throws Exception
     */
    public function setDateContent(string $date_content): void
    {
        $test_date_content = new DateTime($date_content);
        if (empty($date_content)) {
            trigger_error('');
        } else if (!is_object($test_date_content)) {
            trigger_error('');
        } else {
            $this->date_content = $date_content;
        }
    }

    /**
     * @param int $subject_id
     */
    public function setSubjectId(int $subject_id): void
    {
        $subject_id = (int)$subject_id;
        if (empty($subject_id)) {
            trigger_error('');
        } else {
            $this->subject_id = $subject_id;
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
     * @param int $category_id
     */
    public function setCategoryId(int $category_id): void
    {
        $category_id = (int)$category_id;
        if (empty($category_id)) {
            trigger_error('');
        } else {
            $this->category_id = $category_id;
        }
    }

    /**
     * @param int $format_id
     */
    public function setFormatId(int $format_id): void
    {
        $format_id = (int)$format_id;
        if (empty($format_id)) {
            trigger_error('');
        } else {
            $this->format_id = $format_id;
        }
    }
}