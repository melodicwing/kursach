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
				// dd(\File::directories('assets/img'));
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

	public function my_update($request)
	{
		$fullPath = '';
		if ($request->hasFile('img')) {
			$old_file = substr($this->img_path,1);
			\File::delete($old_file);
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
		$this->update($arr);
	}
}
