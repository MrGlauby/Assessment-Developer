<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    $newUser = [
        'username' => $_POST['username'],
        'email' => $_POST['email'],
        'password' => $_POST['password']
    ];

    // Lese vorhandene Daten aus der JSON-Datei
    $existingData = file_get_contents('users.json');
    $users = json_decode($existingData, true);

    // Füge den neuen Benutzer hinzu
    $users[] = $newUser;

    // Speichere die aktualisierten Daten zurück in die JSON-Datei
    file_put_contents('users.json', json_encode($users, JSON_PRETTY_PRINT));

    echo 'Benutzer wurde erfolgreich registriert.';
}

?>
