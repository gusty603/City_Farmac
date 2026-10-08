<?php

$productos = [ [
        'nombre' => 'Ibuprofeno',
        'marca' => 'Actron',
        'precio' => 4500,
        'ranking' => 1,
        'imagen' => 'producto1.jpg'
    ],
    [
        'nombre' => 'Protector solar',
        'marca' => 'Dermaglós',
        'precio' => 15000,
        'ranking' => 2,
        'imagen' => 'producto4.jpg'
    ],

    [
        'nombre' => 'Shampoo',
        'marca' => 'Pantene',
        'precio' => 7500,
        'ranking' => 3,
        'imagen' => 'producto6.webp'
    ],
     [
        'nombre' => 'Paracetamol',
        'marca' => 'Bayer',
        'precio' => 3200,
        'ranking' => 4,
        'imagen' => 'producto3.jpg'
    ],

    [
        'nombre' => 'Vitamina C',
        'marca' => 'Redoxon',
        'precio' => 6000,
        'ranking' => 5,
        'imagen' => 'producto2.webp'
    ],

    [
        'nombre' => 'Alcohol',
        'marca' => 'Farmacity',
        'precio' => 2500,
        'ranking' => 4,
        'imagen' => 'producto5.webp'
    ],
];

?>
<section>

    <h2>Productos destacados</h2>

    <div class="productos">
         <?php foreach ($productos as $producto): ?>

            <article class="producto">
                <img src="<?= BASE_URL ?>/assets/img/<?= $producto['imagen'] ?>" alt="<?= $producto['nombre'] ?>">
                <h3> <?= $producto['nombre'] ?></h3>
                <p>Marca: <?= $producto['marca'] ?></p>
                <p>Precio: $<?= $producto['precio'] ?></p>
                <p>Ranking: <?= $producto['ranking'] ?>/5</p>

                <a href="<?= BASE_URL ?>/detalle.php"> Ver producto</a>
            </article>

        <?php endforeach; ?>
     </div>

</section>
