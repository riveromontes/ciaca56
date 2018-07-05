<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
  protected $fillable = [
    'user_id','horas_compradas','fecha_compra','monto',
  ];

  public function scopenombre($query, $user_id)
  {
    if($user_id)
      return $query->where('user_id', 'LIKE', "%$user_id%");
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
