<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    /**
     * Get the member that owns the Role
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
   /**
    * Get the member that owns the Role
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
   public function members()
   {
       return $this->hasMany(Member::class);
   }
}
