# README -- Instalación del Proyecto WordPress (Nintendo Shop)

Este documento describe el proceso paso a paso para instalar y ejecutar
localmente el proyecto **Nintendo Shop** utilizando **XAMPP** y la
carpeta *htdocs* proporcionada.

------------------------------------------------------------------------

## 1. Requisitos previos

Antes de comenzar, asegúrate de tener instalado:

-   **XAMPP** (versión con Apache + MySQL)
-   **Navegador web** (Chrome, Firefox, etc.)
-   **Archivo del proyecto** (carpeta completa que se debe colocar
    dentro de *htdocs*)

------------------------------------------------------------------------

## 2. Preparar el entorno en XAMPP

1.  Abre **XAMPP Control Panel**.
2.  Inicia los servicios:
    -   **Apache**
    -   **MySQL**
3.  Verifica que ambos se encuentren en estado *Running*.

------------------------------------------------------------------------

## 3. Colocar el proyecto en htdocs

1.  Dirígete a la carpeta donde está instalado XAMPP.
    -   Normalmente: `C:/xampp/htdocs/`
2.  Copia la carpeta del proyecto que recibiste (por ejemplo:
    `videogamestore`).
3.  La ruta final debe quedar así:

```{=html}
<!-- -->
```
    C:/xampp/htdocs/videogamestore/

------------------------------------------------------------------------

## 4. Crear la Base de Datos en phpMyAdmin

1.  En tu navegador entra a:

        http://localhost/phpmyadmin/

2.  Haz clic en **Nueva** (columna izquierda).

3.  Crea una base de datos con el nombre:

```{=html}
<!-- -->
```
    videogamestorebd

4.  En caso de incluir archivo `.sql` (respaldo):

    -   Selecciona la base de datos recién creada.
    -   Ve a la pestaña **Importar**.
    -   Selecciona el archivo `.sql`.
    -   Haz clic en **Continuar**.

Esto restaurará todas las tablas con el prefijo **vg\_**.

------------------------------------------------------------------------

## 5. Revisar credenciales en wp-config.php

1.  Dentro de la carpeta del proyecto, entra a:

```{=html}
<!-- -->
```
    videogamestore/wp-config.php

2.  Verifica que estos valores coincidan:

```{=html}
<!-- -->
```
    DB_NAME: videogamestorebd
    DB_USER: root
    DB_PASSWORD: (vacío)
    DB_HOST: localhost

Si tu XAMPP usa otras credenciales, ajusta los valores.

------------------------------------------------------------------------

## 6. Acceder al sitio

Una vez que Apache y MySQL están corriendo, abre:

    http://localhost/videogamestore/

El sitio debería verse funcionando con normalidad.

------------------------------------------------------------------------

## 7. Acceder al panel de administración

Ir a:

    http://localhost/videogamestore/wp-admin/

Ingresa con las credenciales proporcionadas originalmente o las que
hayas configurado previamente.

------------------------------------------------------------------------

## 8. Errores comunes

### Error 1: Pantalla en blanco o errores de base de datos

-   Verifica que importaste correctamente la BD.
-   Confirma que el nombre de la BD coincide con wp-config.php.

### Error 2: El sitio no carga

-   Asegúrate de que Apache está corriendo.
-   Revisa que la carpeta esté **directamente** en htdocs.

### Error 3: Plugins no funcionan correctamente

-   En instalación local, algunos plugins pueden requerir reactivación.
    -   Entra a *Plugins* y reactiva los necesarios.

------------------------------------------------------------------------

## 9. Listo

Con estos pasos el proyecto debe quedar instalado y funcionando en tu
entorno local.

Si requieres migrarlo posteriormente a un servidor en línea,
necesitarás: - Exportar nuevamente la BD - Ajustar URLs con herramientas
como *WP Migrate* o *Search Replace DB*

------------------------------------------------------------------------

**Proyecto: Nintendo Shop --- WordPress + WooCommerce**\
**Entorno recomendado: XAMPP**
