<section>
    <h2>Contàctenos</h2>
    <form action="#" onsubmit="e.preventDefault()">
        <div>
         <label for="nombre">Nombre y Apellido</label>
         <input type="text" id="nombre" name="nombre" required>

         <label for="email">Email</label>
         <input type="email" id="email" name="email" required>

         <label for="telefono">Telefono</label>
         <input type="tel" id="telefono" name="telefono" required>
        </div>
        <label for="area">Àrea de la empresa</label>
        <select id="area" name="area" required>
            <option value="">Selecione</option>
            <option >Ventas</option>
            <option >Administraciòn</option>
            <option >Atenciòn al cliente</option>
        </select>

        <div>
            <label for="comentario"></label>
            <textarea id="comentario" name="comentario" required></textarea>
            <button type="submit">Enviar</button>
        </div>
    </form>
</section>