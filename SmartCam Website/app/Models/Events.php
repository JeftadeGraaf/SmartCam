<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    use HasFactory;

    private int $id;
    private string $name;
    private string $path;

    protected $table = 'events';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Indicates if the model's ID is auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = true;

    /**
     * @var string[]
     */
    protected $fillable = [
        'id',
        'name',
        'path',
    ];

    /**
     * @var array
     */
    protected $casts = [
        'id' => 'int',
        'name' => 'string',
        'path' => 'string',
    ];
}
