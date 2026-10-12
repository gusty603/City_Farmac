<section>
    <h2>Usuarios</h2>
     <table>
        <tr>
            <th>Nombre</th>
            <th>Email</th>
            <th>Perfil</th>
            <th>Acciones</th>
        </tr>
        <tr>
           <td>Juan Pérez</td>
           <td>juan@email.com</td>
           <td>Administrador</td>
           <td>
                <button>Modificar</button>
                <button>Inactivar</button>
           </td>

        </tr>

    </table>
<h3>Nuevo usuario</h3>

    <form>

        <label for="nombreUsuario">Nombre :</label>
        <input type="text" id="nombreUsuario" name="nombreUsuario" required>

        <label for="emailUsuario">Email :</label>
        <input type="email" id="emailUsuario" name="emailUsuario" required>

        <label for="passwordUsuario">Contraseña :</label>
        <input type="password" id="passwordUsuario" name="passwordUsuario" required>

        <label for="perfilUsuario">Perfil :</label>
        <select id="perfilUsuario" required >

            <option>Administrador</option>

            <option>Editor</option>

        </select>
       <button type="submit"> Guardar </button>

    </form>


</section>