<?php

namespace App\Entity;

use App\Db\Database;
use PDO;

Class Cliente{

/**
 * Id
 * @var integer
 */
public $id;

/**
 * Nome
 * @string nome
 */
public $nome;


/**
 * Data
 * @string data
 */
public $dataData;

/**
 * 
 */

/**
 * @return array
 */
public static function getClientes(){
    return (new Database('clientes'))->listAll()
    ->fetchAll(PDO::FETCH_ASSOC);
}


}