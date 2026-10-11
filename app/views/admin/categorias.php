<section>
    <h2>Categorias</h2>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Categoria principal</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>Medicamentos</td>
                <td>-</td>
                <td>
                    <button>Modificar</button>
                    <button>Inactivar</button>
                    <button>Ver subcategorías</button>
                </td>

            </tr>
        </tbody>

    </table>

 <h3>Nueva categoría</h3>
       <form>
          <label for="nombre"> Nombre </label>
          <input  type="text" id="nombre" name="nombre" required>

          <label for="categoriaPrinciapl"> Categoría principal </label>
          <select id="categoriaPrincipal">
             <option >
                Sin categoría principal
            </option>

            <option>
                Medicamentos
            </option>
            <option >
                Cuidado Personal
            </option>

          </select>

         <button type="submit">  Guardar </button>

       </form>

</section>