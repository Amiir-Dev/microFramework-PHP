<?php
# front controller for

use App\Models\User;

include "bootstrap/init.php";


$router = new \App\Core\Routing\Router();
$router->run();

// $data = [
//     'name' => 'user-' . rand(1, 555),
//     'email' => 'user' . rand(1, 555) . '@example.com',
//     'pass' => 'userPass-' . rand(1, 555),
// ];

// $UserModel = new User();
// $result = $UserModel->count(['id[>=]' => 5]);
// nice_dump($result);
