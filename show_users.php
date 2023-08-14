

<?php



//absoluter Pfad
// $usersData = file_get_contents(__DIR__ . '/users.json');


// show errors
ini_set('display_errors', 1);
error_reporting(E_ALL);

// <!-- Lese die JSON-Daten aus der users.json-Datei -->
$usersData = file_get_contents('users.json');

// <!-- Wandele die JSON-Daten in ein PHP-Array um -->
$usersArray = json_decode($usersData, true);


// Gib die JSON-Daten aus, um sie zu überprüfen
echo $usersData;


?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alle Benutzer anzeigen</title>
</head>
<body>

<h1>Alle Benutzer anzeigen</h1>

<table>
    <tr>
        <th>Benutzername</th>
        <th>Email</th>
    </tr>
    <?php foreach ($usersArray as $user): ?>
    <tr>
        <td><?php echo $user['username']; ?></td>
        <td><?php echo $user['email']; ?></td>
    </tr>
    <?php endforeach; ?>
</table>

</body>
</html>