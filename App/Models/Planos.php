<?php

namespace App\Models;

use PDO;
use Core\Model;
use PDOException;



class Planos extends Model
{
    public function list_planos_old($busca = null)
    {

        $sql = "";
        $filtros = [];

        $sql = "SELECT plano_id, nome_plano FROM planos";

        if (!empty($busca)) {

            $filtros[] = " WHERE plano_id = :id_plan";

            $params[':id_plan'] = (int)$busca;
        }

        // Se houver filtros, aplica-os à consulta
        if (!empty($filtros)) {
            $sql .=  " AND " . implode(" AND ", $filtros);
        }


        try {

            $constul = $this->db->prepare($sql);
            foreach ($params as $key => $value) {
                $constul->bindParam($key, $value);
            }
            $constul->execute();

            $a = $constul->fetchAll(PDO::FETCH_ASSOC);

            print_R($a);
        } catch (PDOException $e) {

            print_R($e->getMessage());
        }
    }
    public function list_planos()
    {

        $sql = "";


        $sql = "SELECT plano_id, nome_plano FROM planos";

        try {

            $constul = $this->db->prepare($sql);

            $constul->execute();

            return $constul->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {

            print_R($e->getMessage());
        }
    }
}
