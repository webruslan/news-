<?php

    namespace application\models;

    use application\core\Model;

    use PDO;

    class News extends Model
    {

        public function getNews($limit, $page)
        {
            // Отправная точка отсчета статей
            $page = isset($page) ? (($page - 1) * $limit) : $page = 0;
            $sql = "SELECT * FROM news ORDER BY idate DESC LIMIT $page,$limit";
            $result  = $this->db->query($sql);
            $row = $result->fetchAll(PDO::FETCH_ASSOC);
            return $row;
        }

        public function getCount($limit)
        {
            $sql = "SELECT COUNT(*) as count FROM news";
            $result = $this->db->query($sql);
            // Здесь мы подсчитываем сколько всего у нас статей
            $count = $result->fetch(PDO::FETCH_OBJ)->count;
            // Вычисляем сколько будет страниц
            $pageCount = ceil($count/$limit);
            return $pageCount;
        }

        public function newsData($id) {
            $params = [
                'id' => $id,
            ];
            return $this->db->row('SELECT * FROM news WHERE id = :id', $params);
        }
    }