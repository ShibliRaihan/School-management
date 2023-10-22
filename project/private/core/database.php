<?php
class Database 
{
    private function connect ()
    {
        $string = "mysql:host=localhost;dbname=school_db";
        if (!$conn = new PDO($string, 'root', '')) 
        {
            die("Database not connect!");
        }
        return $conn;
    }
    public function run ($query,$data = [],$data_type = "object")
    {
        $conn = $this->connect();
        $stm = $conn->prepare($query);

        if ($stm)
         {
            $check = $stm->execute($data);
            if ($check)
            {
                if ($data_type == "object") {
                    $data = $stm->fetchAll(PDO::FETCH_OBJ);
                }else
                {
                    $data = $stm->fetchAll(PDO::FETCH_ASSOC);
                }
                if (is_array($data) && count($data)>0)
                {
                    return is_array($data) ? $data : [];
                }
            }
            return false;
        }   
    }
    public function query ()
    {

    }
}