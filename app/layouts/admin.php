<?php
$vista = $vista ?? null;

if($vista === null){
    die('No se definio una vista');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=  BASE_URL ?>/assets/css/admin/style.css">
    <title><?= $titulo ?? 'City Farmac' ?></title>
     <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/style.css">

     <?php if (isset($indexCSS)): ?>

    <link
        rel="stylesheet"
        href="<?= BASE_URL ?>/assets/css/admin/<?= $indexCSS ?>"
    >

<?php endif; ?>
</head>
<body>
   <header class="admin-header">
      <h1>Administración City Farmac</h1>
  </header>
 
    <main class="contenedor">
<?php require $vista; ?>
    </main>

    <?php require __DIR__ . '/../vistasReutilizables/footer.php'; ?>

</body>
</html>