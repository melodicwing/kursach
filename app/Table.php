<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
	protected $fillable = [ 'from', 'to', 'table', 'info', 'phone' ];

    public static function insert($input)
    {
    	// dd($input);
    	$date_from = date('Y-m-d',strtotime($input['date_from']));
    	$date_to = date('Y-m-d',strtotime($input['date_to']));
    	$from = $date_from.' '.$input['from_h'].':'.$input['from_m'];
    	$to = $date_to.' '.$input['to_h'].':'.$input['to_m'];
    	$cond1 = Table::where('from', '<=', $to)
    				->where('to', '>=', $to)
    				->where('table', $input['table']);
    	$cond2 = Table::where('from', '<=', $from)
    				->where('to', '>=', $from)
    				->where('table', $input['table']);
    	$res = Table::where('from', '>=', $from)
    				->where('to', '<=', $to)
    				->union($cond1)
    				->union($cond2)
    				->where('table', $input['table'])
    				->get();
    	if($res->count()) {
    		return false;
    	} else {
    		Table::create([
    			'from' => $from,
    			'to' => $to,
    			'table' => $input['table'],
    			'info' => $input['info'],
    			'phone' => $input['phone'],
    		]);
    		return true;
    	}
    }
}
