<?php

namespace App\Models\BD;

use App\Database\Database;

class ModelUser extends Database
{

  public function __construct()
  {
    parent::__construct();
  }


  public function getUsers()
  {
    $res = $this->pdo->query("SELECT * FROM Users;")->fetchAll(\PDO::FETCH_ASSOC);

    if (count($res) === 0)
      return null;

    return $res;

  }

  public function getUsers_Id()
  {
    $res = $this->pdo->query('SELECET * FROM Users;')->fetchAll(\PDO::FETCH_ASSOC);

    if (count($res) === 0)
      return null;

    return $res;

  }



  public function createUsers()
  {

  }

  public function updateUsers()
  {

  }


  public function deleteUsers()
  {

  }


}





?>