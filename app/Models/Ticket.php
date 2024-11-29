<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $table = 'ticket';
    protected $primaryKey = 'idticket';
    protected $fillable = ['idcategory', 'iddepartment', 'username', 'phonenumber', 'trouble'];

    /**
     * Relasi ke model Category.
     */
    public function category()
    {
        return $this->belongsTo(Category::class, 'idcategory', 'idcategory');
    }

    /**
     * Relasi ke model Department.
     */
    public function department()
    {
        return $this->belongsTo(Department::class, 'iddepartment', 'iddepartment');
    }
}
