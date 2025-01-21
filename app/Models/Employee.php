<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    // Protegge i campi che possono essere assegnati in massa
    protected $fillable = ['first_name', 'last_name', 'company_id', 'phone', 'email'];

    // Relazione con la tabella 'companies'
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
