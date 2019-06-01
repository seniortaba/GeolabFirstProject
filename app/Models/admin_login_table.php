<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 27 May 2019 19:59:50 +0000.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class FirstTable
 *
 * @property int $id
 * @property string $title
 * @property string $code
 * @property string $text
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class admin_login_table extends Model
{
    protected $table = 'admin_login_table';

    protected $fillable = [
        'user_id',
        'password',
    ];
}

