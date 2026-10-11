<section>
    <h2>Productos</h2>
    <form action="">

       <label for="categoria"> Categoría</label>
            <select id="categoria">
            <option>Todas</option>
            <option>Medicamentos</option>
            <option>Cuidado Personal</option>
        </select>

        <label for="subcategoria"> Subcategoría </label>

        <select id="subcategoria">
             <option>Todas</option>
             <option>Analgésicos</option>
             <option>Antigripales</option>
        </select>
 
    </form>

    <table>
        <thead>
           <tr>
              <th>Producto</th>
              <th>Categoría</th>
              <th>Precio</th>
              <th>Acciones</th>
           </tr>

        </thead>

        <tbody>
            <tr>
                <td>Ibuprofeno</td>
                <td>Medicamentos</td>
                <td>$4500</td>

                <td>
                    <button>Modificar</button>
                    <button>Inactivar</button>
                    <button>Ver comentarios</button>
                </td>
            </tr>
        </tbody>

    </table>

</section>
<section>

    <h3>Alta / edición de producto</h3>

    <form>
        <label for="nombre"> Nombre </label>
          <input type="text" id="nombre" name="nombre" required>

        <label for="descripcion">Descripción</label>
        <textarea id="descripcion" required ></textarea>

        <label for="precio"> Precio </label>
        <input type="number" id="precio" min="0" required >

        <label for="categoriaProducto"> Categoría </label>

        <select id="categoriaProducto" required >
            <option > Seleccione </option>

            <option>  Medicamentos </option>
            <option > Cuidado Personal </option>
        </select>

        <label for="marca"> Marca </label>
            <select id="marca" required>
            <option>Bayer</option>

            <option>Actron</option>

           </select>

        <label for="modelo"> Modelo </label>
        <input type="text" id="modelo" name="modelo" required >

        <label for="imagen"> Imagen </label>
         <input type="file" id="imagen" name="imagen" accept="image/*" >

        <label> <input type="checkbox"> Producto destacado </label>

        <button type="submit"> Guardar  </button>

    </form>

</section>