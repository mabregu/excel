<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\UsersExport;

class ExportExcelController extends Controller
{
    public function export() 
    {
	    return (new UsersExport)->download('users.xlsx');
    }

    public function storeExcel() 
	{
	    //(new UsersExport)->store('cosas.csv', 'public');
	    //(new UsersExport)->store('cosas2.pdf', 'public');
	    (new UsersExport)->store('cosas.html', 'public');

	    return 'Archivo guardo!';
	}

	public function forYearExcel() 
	{
	    return (new UsersExport)->forYear(2018)->download('users.xlsx');
	}
}
