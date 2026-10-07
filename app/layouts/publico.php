<?php 
$vista = $vista ?? null;

if($vista === null){
    die('No se definio una vista');
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"content="width=device-width, initial-scale=1.0">
    <title><?= $titulo ?? 'City Farmac' ?></title>
    <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/style.css">
</head>
<body>
    <?php require __DIR__ . '/../vistasReutilizables/header.php'; ?>
    <?php require __DIR__ . '/../vistasReutilizables/navPublico.php'; ?>

    <main class="contenedor">

<?php require $vista; ?>

    </main>

    <?php require __DIR__ . '/../vistasReutilizables/footer.php'; ?>
</body>
</html>