<section>
    <h2>Perfiles</h2>
    <table>
        <tr>
            <th>Perfil</th>
            <th>Acciones</th>
        </tr>
        <tr>
            <td>Administrador</td>
            <td>
                <button>Modificar</button>
                <button>Inactivar</button>
            </td>

        </tr>

    </table>
 <h3>Nuevo perfil</h3>
     <form>
        <label for="nombrePerfil"> Nombre del perfil </label>
       <input type="text" id="nombrePerfil" name="nombrePerfil" required>
    
        <fieldset>
           <legend>Acceso a secciones </legend>

            <label> <input type="checkbox"> Productos</label>

            <label> <input type="checkbox"> Categorías </label>

            <label> <input type="checkbox"> Marcas </label>

            <label> <input type="checkbox"> Comentarios </label>

            <label> <input type="checkbox"> Usuarios </label>

            <label> <input type="checkbox"> Perfiles </label>

        </fieldset>

         <button type="submit">Guardar</button>

    </form>

</section>