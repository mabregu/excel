<?php

namespace App\Exports;

use App\User;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;

class UsersExport implements FromCollection, FromQuery
{
	use Exportable;

	private $date;
	private $year;

    public function forDate($date)
    {
    	$this->date = $date;
    	return $this;
    }

    public function forYear($year)
    {
    	$this->year = $year;
    	return $this;
    }	    

    public function query()
    {
    	return User::query()->whereYear('created_at', $this->year);
    	//return User::query()->whereDate('created_at', $this->date);
    }

    public function collection()
    {
        return User::all();
    }
}
