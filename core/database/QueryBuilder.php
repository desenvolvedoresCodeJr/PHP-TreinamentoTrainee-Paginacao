<?php

namespace App\Core\Database;

use PDO, Exception;

class QueryBuilder
{
    protected $pdo;


    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table)
    {
        $sql = "select * from {$table}";

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_CLASS);

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function insert($table, $parameters)
    {
        // INSERT INTO table_name (column1, column2, column3,...columnN) VALUES (value1, value2, value3,...valueN)
        $sql = sprintf('INSERT INTO %s (%s) VALUES (%s)', 
            $table,
            implode(', ', array_keys($parameters)),
            ':' . implode(', :', array_keys($parameters))
        );

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute($parameters);

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function update($table, $id, $parameters)
    {
        // UPDATE tabela SET coluna_1 = novo_valor_1, coluna_2 = novo_valor_2 WHERE condicao-de-
        $sql = sprintf('UPDATE %s SET %s WHERE id = %s', 
            $table,
            implode(', ', array_map(function($param) {
                return $param . ' = :' . $param;
            }, array_keys($parameters))),
            $id
        );

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute($parameters);

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function delete($table, $id)
    {
        // DELETE FROM tabela WHERE condicao_de_busca
        
    }
}