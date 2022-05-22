<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TablesController extends Controller
{
    public function index()
    {
        $data = [
            "title" => "Tables"
        ];

        return view("tables", $data);
    }

    public function dataTables()
    {
        $data = [
            "title" => "Data Tables"
        ];

        return view("data-tables", $data);
    }
}
