<?php
namespace App\Models;

class Task extends Model
{
    use HasFactory, PaginateTrait;

    protected $fillable = ['name', 'status'];
}
