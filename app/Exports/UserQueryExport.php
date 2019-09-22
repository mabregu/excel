<?php

namespace App\Exports;

use App\User;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;

class UserQueryExport implements FromQuery
{
	use Exportable;

	private $year;
	private $date;

    public function forYear($year)
    {
    	$this->year = $year;
    	return $this;
    }

    public function forDate($date)
    {
    	$this->date = $date;
    	return $this;
    }

    /**
    * @return \Illuminate\Database\Query\Builder
    */

    public function query()
    {
    	return User::query()
	    	->whereDate('created_at', $this->date);
	    	//->whereYear('created_at', $this->year);
    }
}
