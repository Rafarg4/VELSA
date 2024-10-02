<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Prestamos
 * @package App\Models
 * @version October 2, 2024
 *
 * @property string $id_cliente
 * @property string $monto
 * @property string $fecha_inicio
 * @property string $fecha_pago
 * @property string $fecha_vencimiento
 * @property string $cantidad_cuota
 * @property string $tipo_prestamo
 * @property string $dias_mora
 */
class Prestamos extends Model
{
    use SoftDeletes, HasFactory;

    public $table = 'prestamos';
    protected $dates = ['deleted_at'];

    public $fillable = [
        'id_cliente',
        'monto',
        'fecha_inicio',
        'fecha_pago',
        'fecha_vencimiento',
        'cantidad_cuota',
        'tipo_prestamo',
        'dias_mora'
    ];

    protected $casts = [
        'id_cliente' => 'string',
        'monto' => 'string',
        'fecha_inicio' => 'date',
        'fecha_pago' => 'date',
        'fecha_vencimiento' => 'date',
        'cantidad_cuota' => 'string',
        'tipo_prestamo' => 'string',
        'dias_mora' => 'integer'
    ];

    public static $rules = [
        'id_cliente' => 'required',
        'monto' => 'required',
        'fecha_inicio' => 'required|date',
        'fecha_pago' => 'required|date',
        'fecha_vencimiento' => 'required|date',
        'cantidad_cuota' => 'required|integer',
        'tipo_prestamo' => 'required',
        'dias_mora' => 'nullable|integer'
    ];
}
