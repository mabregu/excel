<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\UserQueryExport;

class ExportExcelQueryController extends Controller
{
    public function forYearExcel() 
	{
	    return (new UserQueryExport)->forYear( request('year') )->download('year.xlsx');
	}

	public function forDateExcel() 
	{
	    return (new UserQueryExport)->forDate( request('date') )->download('year.xlsx');
	}
}
