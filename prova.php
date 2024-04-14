<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validazione dei dati
    $username = $_POST['username'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $password = $_POST['password'];

    // Esempio di validazione
    if (empty($username) || empty($email) || empty($age) || empty($password)) {
        echo "Tutti i campi sono obbligatori.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Email non valida.";
    } elseif (!is_numeric($age) || $age < 0) {
        echo "Età non valida.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
</head>

<body class="bg-dark text-white">
    <div class="container">
        <h1 class="text-center mt-5 mb-3">PROVA NUOVO FORM</h1>
        <form action="./processa_dati.php" method="POST" class="row">
            <div class="col-md-12 mb-4">
                <label for="validationUsername" class="form-label mb-3"><strong>USERNAME</strong></label>
                <input type="text" class="zoom form-control bg-info" id="validationUsername" name="username" placeholder="Username" required>
            </div>
            <div class="col-md-12 mb-4">
                <label for="validationEmail" class="form-label mb-3"><strong>EMAIL</strong></label>
                <input type="email" class="zoom form-control bg-info" id="validationEmail" name="email" placeholder="Example@gmail.com" required>
            </div>
            <div class="col-md-12 mb-4">
                <label for="validationAge" class="form-label mb-3"><strong>AGE</strong></label>
                <input type="number" class="zoom form-control bg-info" id="validationAge" name="age" required>
            </div>
            <div class="col-md-12 mb-4">
                <label for="validationPassword" class="form-label mb-3"><strong>PASSWORD</strong></label>
                <input type="password" class="zoom form-control bg-info" id="validationPassword" name="password" placeholder="Password" required>
            </div>
            <div class="col-12">
                <button class="zoom btn btn-primary" type="submit" name="submit">Submit Form</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>