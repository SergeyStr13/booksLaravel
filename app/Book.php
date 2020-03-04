<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Http\File;

/**
 * App\Book
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $authors
 * @property int $createId
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $link
 * @property string $originNameLink
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Query\Builder|\App\Book whereAuthors($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Book whereCreateId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Book whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Book whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Book whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Book whereLink($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Book whereOriginNameLink($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Book whereTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Book whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Book extends Model {

	protected $table = 'book';

	protected $fillable = ['title', 'authors', 'description', 'link'];

	//public $timestamps = false;

	public function user() {
		return $this->belongsTo(User::class, 'createId');
	}
}
