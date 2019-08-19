<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Http\File;

/**
 * @property int $id
 * @property string $title
 * @property string $author
 * @property string $description
 * @property string $link
 *
 */
//  @property string $createId
class Book extends Model {

	protected $table = 'book';

	protected $fillable = ['title', 'author', 'description', 'link'];

	//public $timestamps = false;

	/*public function createId() {
		return $this->hasOne('App\User');
	}*/
}
