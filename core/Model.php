<?php
class Model extends Controller {

    protected $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function create($query, $params)
    {
        $data = $this->db->insert($query, $params);

        return $data;
    }

    public function read($query, $params)
    {
        $data = $this->db->fetch($query, $params);

        return $data;
    }

    public function read_all($query)
    {
        $data = $this->db->fetch_all($query);

        return $data;
    }

    public function update($query, $params)
    {
        $this->db->update($query, $params);
    }

    public function delete($query, $params)
    {
        $this->db->delete($query, $params);
    }

}