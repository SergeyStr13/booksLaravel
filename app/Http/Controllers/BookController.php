<?php
/**
 * Created by PhpStorm.
 * User: Sergey62
 * Date: 01.07.2019
 * Time: 10:18
 */
namespace App\Http\Controllers;


use App\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Validator;

class BookController extends Controller {

	public function _construct() {
		//$this->middleware('auth');
	}

	public function bookAll() {
		$books = Book::all();
		//dump($books->createId);
		return view('books', compact('books'));
	}

	public function add(Request $request) {
		$books = $request->all();

		if ($books) {

			$book = new Book($books);
			//dump($book);

			$book->save();
			$link =  $request->file('link');
			dump($link);

			Storage::disk('local')->put($book->link, $link);

		} else {
			throw new \LogicException("Запрос пустой");
		}

		/*dump($book);
		exit();*/


		return redirect('/books');
	}

/*	public function insertG() {
		$res = [];
		$arr = [
			850,851,852,853,854,855,856,857,858,859,860,861,862,863,864,865,866,867,868,
			869,870,871,872,873,874,875,876,877,878,879,880,881,882,883,884,885,886,887,888,
			889,890,891,892,893,894,895,896,897,898,899,900,901,902,903,904,905,906,907,908,
			909,910,911,912,913,914,915,916,917,918,919,920,921,922,923,924,925,926,927,928,
			929,930,931,932,933,934,935,936,937,938,939,940,941,942,943,944,945,946,947,948,
			949,950,951,952,953,954,955,956,957,958,959,960];

		/ * $str = "INSERT INTO `subspec` (`id`, `id_program`, `name`, `id_sub_faculty`, `common`, `id_main_program`)
				VALUES (NULL, '849', ' ', '2', '0', '0')";* /

		foreach ($arr as $ar) {
			$res =  "INSERT INTO `subspec` (`id`, `id_program`, `name`, `id_sub_faculty`, `common`, `id_main_program`) 
				VALUES (NULL, ".$arr.", ' ', '2', '0', '0')";
		}
		var_dump($res);
	} */
}