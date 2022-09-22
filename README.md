# Booking System with Laravel 8 and Material Dashboard

## How to use

Code for [Bookig System - Laravel 8](https://www.youtube.com/playlist?list=PLYO5TOinzgThHkDH3GYxAeidegZkuLE3_)

- Clone the repository with __git clone__
- Copy __.env.example__ file to __.env__
- Edit database credentials in __.env__
- Run __composer install__
- Run __php artisan key:generate__
- Run __php artisan migrate --seed__
- Run __npm install__
- Run __npm run dev__
- Run __php artisan serve__ (if you want to use other port add __--port=90__)
- You can __register__ by clicking on top-right

## Related

PRUEBA TECNICA BLANCO Y NEGRO MASIVO

La empresa Blanco y negro Masivo requiere una plataforma para la administración de los vehículos, por lo tanto, se solicita lo siguiente:

Opción de crear, editar, visualizar y eliminar un vehículo, los datos que se requieren en el formulario son:
Numero de vehículo
Placa
Chasis
Tipología – Debe ser un listado donde pueda seleccionar (Articulado, padrón, Complementaria, Diesel, Dual)
Fecha de matricula

Opción de agregar los documentos a los vehículos como son SOAT, Revisión Tecnicomecanica e impuesto. Los datos de los documentos a agregar son:
Nombre de documento
Fecha de expedición
Fecha de vencimiento
Valor documento
Opción de adjuntar archivo --- opcional es un plus

Agregar filtro para consultar vehículos por placa y por tipología.

Puntos para tener en cuenta

El desarrollo deberá incluir las correspondientes migraciones (No es válido entregar archivos SQL)

El listado de tipologías debe ser una tabla, realizar la inserción de las tipologías mencionadas mediante seeders

Realizar las relaciones respectivas en los modelos

Utilizar la relación de uno a muchos para (vehículos – documentos)

Realizar LOGIN – opcional

Usar Bootstrap  


## License

Feel free to use and re-use any way you want.

