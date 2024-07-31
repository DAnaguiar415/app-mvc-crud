<?php

include '../model/Conexao.class.php';
include '../model/Manager.class.php';

$manager = new Manager();

$id = $_POST['id'];

if (isset($id) && !empty($id)) {
    $manager->delete_user($id);

    header("Location: ../index.php?cod=2");
}
