<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use datatables;
use Yajra\DataTables\DataTables as DataTablesDataTables;

class DashboardController extends Controller
{
    public function dashboard(Request $request)
    {
        if ($request->ajax()) {
            return DataTablesDataTables::of(User::query())
                ->addColumn('tes', 'components.button-edit')
                ->rawColumns(['tes'])
                ->toJson();
        }
        return view('dashboard');
    }
    public function data()
    {
        return DataTablesDataTables::of(User::query())->addColumn('yes', 'components.button-edit')->make(true);
    }

    public function edit($id)
    {
        dd($id);
    }
}
