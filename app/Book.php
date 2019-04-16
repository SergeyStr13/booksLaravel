<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $title
 * @property string $author
 * @property string $description
 */
class Book extends Model {

	protected $table = 'book';

}
