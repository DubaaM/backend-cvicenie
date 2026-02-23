<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulár</title>
</head>
<body>

<form method="POST" action="/example/result">
    @csrf

    <p>
        <label>Číslo:</label><br>
        <input type="number" name="n" required>
    </p>

    <button type="submit">Vypočítať</button>
</form>

</body>
</html>
