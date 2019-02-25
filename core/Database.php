<?php
class Database extends Controller {

    public $db;

    public function __construct()
    {
        try
        {
            $this->db = new PDO(DSN, DB_USER, DB_PASS);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $this->db;
        }   
        catch(PDOException $e)
        {
            echo $e->getMessage();
            exit();
        }
    }

    public function insert($query)
    {
        $stmt = $this->db->prepare($query);
        $stmt->execute();

        return $this->db->lastInsertId();
    }

    public function fetch($query, $params)
    {
        $stmt = $this->db->prepare($query);
        $stmt->execute($params);
        $data = $stmt->fetch(PDO::FETCH_ASSOC);

        return $data;
    }

    public function fetch_all($query)
    {
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function fetch_obj($query)
    {
        $stmt = $this->db->prepare($query);
        $stmt->execute($params);
        $data = $stmt->fetch(PDO::FETCH_OBJ);

        return $data;
    }

    public function update($query, $params)
    {
        $stmt = $this->db->prepare($query);
        $stmt->execute($params);
    }

    public function delete($query, $params)
    {
        $stmt = $this->db->prepare($query);
        $stmt->execute($params);
    }

}