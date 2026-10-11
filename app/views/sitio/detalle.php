<section id="contenedor-Producto">
    <img src="<?= BASE_URL ?>/assets/img/producto1.jpg">
    <div>
       <h2>Ibuprofeno 400mg</h2>
         <p>Analgèsico y antiinflamatorio.</p>
         <p>Marca: Actron</p>
         <p>Modelo: 400mg</p>
         <p>Precio: $4500</p>
         <p>Ranking: 1/5</p>
    </div>
</section>
<section id="contenedor-Formulario">

    <h3>Dejar comentario</h3>
       <form>
          <label for="email">Email :</label>
           <input type="email" id="email" name="email" required >

          <label for="comentario"> Comentario :</label>
          <textarea id="comentario" name="comentario" required ></textarea>

         <label for="valoracion"> Valoración :</label>
         <input type="number" id="valoracion"  name="valoracion"  min="1"  max="5" required >

         <button type="submit"> Enviar</button>
      </form>

</section>
<section id="contenedor-Comentario">
 
   <h3>Comentarios</h3>
      <article>
        <p> Muy buen producto. </p>
        <span>⭐⭐⭐ </span>
      </article>
      <article>
        <p> Excelente!!!!!!!. </p>
        <span>⭐⭐⭐⭐ </span>
      </article>
</section>



