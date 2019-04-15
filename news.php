<?php

class News {
    public $title = "";
    public $content = "";

    public function __construct ($title, $content) {
        $this->title = $title;
        $this->content = $content;
    }
}

class NewsDatabase {
    public function __construct ($connection) {
        $this->connection = $connection;
    }

    public function get($from, $to) {
        $result = $this->connection->query("select title, content from news limit " . $from . ", " . $to . ";");
        while ($row = $result->fetch_assoc())
            yield new News($row['title'], $row['content']);
    }
}

?>
