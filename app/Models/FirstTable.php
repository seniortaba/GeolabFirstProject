<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 27 May 2019 19:59:50 +0000.
 */

namespace App\Models;

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
class FirstTable extends Eloquent
{
	protected $table = 'first_table';

	protected $fillable = [
		'title',
		'code',
		'text'
	];
}
