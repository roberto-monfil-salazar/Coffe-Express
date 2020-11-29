<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::resource('help','help');
Route::get('/home', 'HomeController@index')->name('home');
Route::resource ('categorias_pro', 'Categoria_proController');
Route::resource('Telefonos_usuarios','Telefonos_usuariosController');

Route::resource('usuarios','UsuariosController');
Route::resource('proveedores','ProveedoresController');
Route::resource('Direcciones_usuarios','Direcciones_usuariosController');
Route::resource('Telefonos_proveedores','Telefonos_proveedoresController');
Route::resource('Productos','ProductosController');

Route::resource('Direcciones_proveedores','Direcciones_proveedoresController');


Route::resource('Datos_proveedor','Datos_proveedorController');
Route::get('Datos_proveedor-pdf','Datos_proveedorController@exportPDF')->name('Datos_proveedor.pdf');
Route::get('exportarDatos_proveedor', 'Datos_proveedorController@export');
// rutas juntas
Route::resource('Datos_usua','Datos_usuaController');
Route::get('Datos_usua-pdf','Datos_usuaController@exportPDF')->name('Datos_usua.pdf');
Route::get('exportarDatos_usuarios', 'Datos_usuaController@export');
//rutas juntas
Route::resource('Productos_adquiridos','Productos_adquiridosController');
Route::get('Productos_adquiridos-pdf','Productos_adquiridosController@exportPDF')->name('Productos_adquiridos.pdf');
Route::get('exportarProductos_adquiridos', 'Productos_adquiridosController@export');
//rutas  juntas
Route::resource('Ventas_realizada','Ventas_realizadaController');
Route::get('Ventas_realizada-pdf','Ventas_realizadaController@exportPDF')->name('Ventas_realizada.pdf');
Route::get('exportarVentas_realizada', 'Ventas_realizadaController@export');
