<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restauraunt extends Model
{
    protected $fillable = [ 'name', 'description', 'img_path' ];

    protected static $path = 'assets/img/restauraunts/';
	
	public static function insert($request)
	{
		$fullPath = '';
		if ($request->hasFile('img')) {
			$file = $request->file('img');
			if ($file->isValid()) {
				$originalName = $file->getClientOriginalName();
				$fullPath = '/'.Restauraunt::$path.$originalName;
				$file->move(Restauraunt::$path, $originalName);
			}
		}
		$arr = [
			'name' => $request->input('name'),
			'description' => $request->input('description'),
			'img_path' => $fullPath,
		];
		Restauraunt::create($arr);
	}
}
