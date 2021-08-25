<?php




namespace App\Controllers;
use  CodeIgniter\Controller;





class Users extends Controller {

    public function index()
    {
        $db = \Config\Database::connect();
        $query = $db->query('select id,name,email,phone,course from students ');
        $result = $query->getResult();
        echo "<pre>";
        print_r($result);
    }
}