<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $table = 'department';
    protected $primaryKey = 'iddepartment';
    protected $fillable = ['departmentname'];

    /**
     * Relasi ke model User.
     */
    public function users()
    {
        return $this->hasMany(User::class, 'iddepartment', 'iddepartment');
    }

    /**
     * Relasi ke model Ticket.
     */
    public function tickets()
    {
        return $this->hasMany(Ticket::class, 'iddepartment', 'iddepartment');
    }
}
