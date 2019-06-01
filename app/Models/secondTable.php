<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
 * Class FirstTable
 *
 * @property int $id
 * @property string $title
 * @property string $desc
 * @property string $text
 * @property \Carbon\Carbon $created_date
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class secondTable extends Model
{
    protected $table = 'secondtable';

    protected $fillable = [
        'title',
        'desc',
        'created_date'
    ];
}
