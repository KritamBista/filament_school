<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    /**
     * Get all of the roles for the Member
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
  /**
   * Get the member that owns the Member
   *
   * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
   */
 /**
  * Get all of the roles for the Member
  *
  * @return \Illuminate\Database\Eloquent\Relations\HasMany
  */
 public function role()
 {
     return $this->belongsTo(Role::class);
 }
}
