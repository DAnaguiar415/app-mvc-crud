<?php

    class Manager extends Conexao{
        public function insert_user($data){

            $pdo = parent::get_instance();

            $sql = "INSERT INTO cliente VALUES(null, :name, :email, :cpf, :birth, :phone, :address)";

            $statement = $pdo->prepare($sql);
            foreach ($data as $key => $value){
                $statement->bindValue(":$key", $value);
            }

            $statement->execute();
        }

        public function list_user(){
            $pdo = parent::get_instance();
            $sql = "SELECT * FROM cliente ORDER BY id DESC";
            $statement = $pdo->query($sql);
            $statement->execute();

            return $statement->fetchAll();
        }
        public function list_user_by_id($id){

            $pdo = parent::get_instance();
            $sql = "SELECT * FROM cliente WHERE id = :id";
            $statement = $pdo->prepare($sql);
            $statement->bindValue(":id", $id);
            $statement->execute();

            return $statement->fetchAll();
        }

        public function delete_user($id){
            $pdo = parent::get_instance();
            $sql = "DELETE FROM cliente WHERE id = :id";
            $statement = $pdo ->prepare($sql);
            $statement->bindValue(":id", $id, PDO::PARAM_INT);
            $statement->execute();
        }

        public function update_user($data) {
            $pdo = parent::get_instance();
            $sql = "UPDATE cliente SET name = :name, email = :email, cpf = :cpf, birth = :birth, phone = :phone, address = :address WHERE id = :id";
            $statement = $pdo->prepare($sql);
            $statement->bindValue(":name", $data['name']);
            $statement->bindValue(":email", $data['email']);
            $statement->bindValue(":cpf", $data['cpf']);
            $statement->bindValue(":birth", $data['birth']);
            $statement->bindValue(":phone", $data['phone']);
            $statement->bindValue(":address", $data['address']);
            $statement->bindValue(":id", $data['id'], PDO::PARAM_INT);
            $statement->execute();
        }
    }