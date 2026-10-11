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