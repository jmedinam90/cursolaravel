<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"></script>
</head>
<body>
    <h3>Operaciones Aritm&eacute;ticas</h3>
    <div class="col-sm-4">
        <label for="resultado">El resultado de la {{ $operacion }} es:</label>
        <div class="col-sm-4">
            <input type="text" disabled id="resultado" value="{{ $resultado }}">
        </div>
    </div>
</body>
</html>