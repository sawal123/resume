<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Tools;
use datatables;
use Yajra\DataTables\DataTables as DataTablesDataTables;

class DashboardController extends Controller
{
    public function dashboard(Request $request)
    {


        $projects = Project::all();
        if ($request->ajax()) {

            return DataTablesDataTables::of($projects)
                ->addColumn('edit', function ($project) {
                    return view('components.button-action', ['uuid' => $project->uuid]);
                })

                ->addColumn('tools', function ($project) {
                    $tools = json_decode($project->tools);
                    $toolNames = Tools::whereIn('uuid', $tools)->pluck('name')->toArray();
                    return implode(', ', $toolNames);  // You can format this as you like
                })
                ->addColumn('thumbnail', function ($project) {
                    return view('components.img', ['thumbanail' => $project->thumbnail]);
                })
                ->rawColumns(['edit', 'tools', 'thumbnail'])
                ->toJson();
        }

        return view('dashboard');
    }

    public function addProject()
    {
        return view('livewire.semipage.addPro');
    }

    public function data()
    {
        return DataTablesDataTables::of(User::query())->addColumn('yes', 'components.button-edit')->make(true);
    }

    public function edit($id)
    {
        $pro = Project::where('uuid', $id)->first();
        return view('livewire.semipage.addPro', ['editpro' => $pro]);
    }



    public function user(Request $request)
    {
        if ($request->ajax()) {
            return DataTablesDataTables::of(User::query())
                ->addColumn('tes', 'components.button-edit')
                ->rawColumns(['tes'])
                ->toJson();
        }
    }
}
