# City Farmac 
# City Farmac

Proyecto realizado en PHP para maquetar el sitio público y el panel de administración de City Farmac.

En esta instancia no se utiliza base de datos. Los datos mostrados son de ejemplo.

## Cómo levantar el proyecto

1. Copiar la carpeta del proyecto dentro de:

```text
C:\xampp\htdocs\
```

Por ejemplo:

```text
C:\xampp\htdocs\city-farmac
```

2. Iniciar Apache desde XAMPP.

3. Abrir el navegador e ingresar a:

```text
http://localhost/city-farmac/public/
```

## Configuración de la ruta base

La ruta base se configura en:

```text
config/config.php
```

Actualmente se obtiene automáticamente con:

```php
$carpetaProyecto = basename(dirname(__DIR__));

define('BASE_URL', '/' . $carpetaProyecto . '/public');
```

Si la carpeta del proyecto se llama:

```text
city-farmac
```

la ruta generada será:

```text
/city-farmac/public
```

## Vistas del sitio público

| Vista | URL |
|---|---|
| Inicio | `/city-farmac/public/index.php` |
| Productos | `/city-farmac/public/productos.php` |
| Detalle de producto | `/city-farmac/public/detalle.php` |
| Contacto | `/city-farmac/public/contacto.php` |
| Error 404 | `/city-farmac/public/404.php` |

## Vistas del panel de administración

| Vista | URL |

| Login | `/city-farmac/public/admin/login.php` |
| Registro | `/city-farmac/public/admin/registro.php` |
| Inicio del panel | `/city-farmac/public/admin/index.php` |
| Productos | `/city-farmac/public/admin/productos.php` |
| Categorías | `/city-farmac/public/admin/categorias.php` |
| Marcas | `/city-farmac/public/admin/marcas.php` |
| Comentarios | `/city-farmac/public/admin/comentarios.php` |
| Usuarios | `/city-farmac/public/admin/usuarios.php` |
| Perfiles | `/city-farmac/public/admin/perfiles.php` |

## Tecnologías utilizadas

- PHP
- HTML5
- CSS3
- XAMPP / Apache