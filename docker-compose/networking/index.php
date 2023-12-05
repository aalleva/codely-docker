<?php

require_once __DIR__ . '/vendor/autoload.php';

$connectionParams = [
    'dbname'    => 'codelytv_pro',
    'user'      => getenv('MYSQL_USER'),
    'password'  => getenv('MYSQL_PASSWORD'),
    'host'      => getenv('MYSQL_HOST'),
    'driver'    => 'pdo_mysql',
];

$config = new \Doctrine\DBAL\Configuration();
$connection = \Doctrine\DBAL\DriverManager::getConnection($connectionParams, $config);

$users = $connection->fetchAll("SELECT id, name, lastname FROM users");

?>

<!DOCTYPE html>
<html>
<head>
    <title>Users List</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Users</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Last Name</th>
        </tr>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?= htmlspecialchars($user['id']) ?></td>
                <td><?= htmlspecialchars($user['name']) ?></td>
                <td><?= htmlspecialchars($user['lastname']) ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>

