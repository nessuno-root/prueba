<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    /*/Define model for my database!*/
    use HasFactory;
    protected $table = 'camisetas'; // Reemplaza 'nombre_de_la_tabla' con el nombre real de tu tabla
    protected $fillable = ['nombre', 'precio', 'descripcion', 'imagen','pais','manga','material','marca'];
    // Si deseas utilizar asignación masiva (Mass Assignment) para crear o actualizar registros,
    // debes incluir los campos que deseas permitir en el array $fillable
    // Aquí puedes agregar relaciones, métodos personalizados u otras lógicas relacionadas con el modelo
}
