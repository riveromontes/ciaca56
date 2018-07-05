<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
  protected $fillable = [
    'id_piloto','horas_compradas','fecha_compra','monto',
  ];

  public function scopenombre($query, $id_piloto)
  {
    if($id_piloto)
      return $query->where('id_piloto', 'LIKE', "%$id_piloto%");
  }
  public function scopeapellido($query, $horas_compradas)
  {
    if($horas_compradas)
      return $query->where('horas_compradas', 'LIKE', "%$horas_compradas%");
  }
  public function scopecedula($query, $fecha_compra)
  {
    if($fecha_compra)
      return $query->where('fecha_compra', 'LIKE', "%$fecha_compra%");
  }
  public function scopepasaporte($query, $monto)
  {
    if($monto)
      return $query->where('monto', 'LIKE', "%$monto%");
  }

  public function user()
  {
    return $this->hasOne(User::class);
  }
}
