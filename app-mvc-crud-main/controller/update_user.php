<?php
include '../model/Conexao.class.php';
include '../model/Manager.class.php';

$manager = new Manager();


if (isset($_POST['id'])) {
    $id = $_POST['id'];


    $data = [
        'id' => $id,
        'name' => $_POST['name'],
        'email' => $_POST['email'],
        'cpf' => $_POST['cpf'],
        'birth' => $_POST['birth'],
        'phone' => $_POST['phone'],
        'address' => $_POST['address']
    ];

    $manager->update_user($data);

    header("Location: ../index.php?cod=3");
    exit();
} else {
    header("Location: ../index.php?cod=0");
    exit();
}
