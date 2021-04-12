<?php


class Form
{
    public $meta = [];

    public function __construct($table)
    {
        require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'config.php';
        $db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';port=' . DB_PORT . '', '' . DB_USER . '', '' . DB_PASS . '');

        $result = $db->query('SELECT * FROM helpthumb_' . $table);
        foreach (range(0, $result->columnCount() - 1) as $column_index) {
            $this->meta[] .= $result->getColumnMeta($column_index)['name'];
        }
    }

    public function render()
    {
        foreach ($this->meta as $field) {
            $test = explode('_', $field);
            if ($test[0] === 'id') {
                $this->hidden($field);
            }
            if ($test[0] === 'name') {
                $this->input($field);
            }
            if ($test[0] === 'username') {
                $this->input($field);
            }
            if ($test[0] === 'mail') {
                $this->input($field);
            }
            if ($test[0] === 'pseudo') {
                $this->input($field);
            }
            if ($test[0] === 'password') {
                $this->input($field);
            }
            if ($test[0] === 'key') {
                $this->input($field);
            }
            if ($test[0] === 'active') {
                $this->input($field);
            }
            if ($test[0] === 'date') {
                $this->input($field);
            }
            if ($test[1] === 'id') {
                $this->hidden($field);
            }
        }
    }

    public function input($name)
    {
        echo '<div><label for="' . $name . '">' . $name . '</label><input  id="' . $name . '" type="text" name="' . $name . '"></div>';
    }

    public function hidden($name)
    {
        echo '<div><input  id="' . $name . '" type="hidden" name="' . $name . '"></div>';
    }


}

$test = new Form('user');
?>
<pre>
<?php
$test->render();
?>
</pre>
