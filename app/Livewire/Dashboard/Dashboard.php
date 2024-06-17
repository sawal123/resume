<?php

namespace App\Livewire\Dashboard;

use App\Models\Tools;
use App\Models\Project;
use Livewire\Component;
use Livewire\WithPagination;
use Yajra\DataTables\DataTables;

class Dashboard extends Component
{
    use WithPagination;
    // use WithEvents ;
    public $projects;

    public function mount()
    {
        $this->projects = Project::all();
    }
    public function delete($id)
    {
        $project = Project::where('uuid', $id)->first();
        if ($project) {
            $project->delete();
            session()->flash('message', 'Project successfully deleted.');
            // $this->emit('projectDeleted');
            $this->redirect('/dashboard');
        }
    }
    public function render() 
    {
        return view('livewire.dashboard.dashboard');
    }

    
    public function getProjects()
    {
        $projects = Project::all();
        return DataTables::of($projects)
            ->addColumn('edit', function ($project) {
                return view('components.button-action', ['uuid' => $project->uuid]);
            })
            ->addColumn('tools', function ($project) {
                $tools = json_decode($project->tools);
                $toolNames = Tools::whereIn('uuid', $tools)->pluck('name')->toArray();
                return implode(', ', $toolNames);
            })
            ->addColumn('thumbnail', function($project) {
                return view('components.img', ['thumbnail' => $project->thumbnail]);
            })
            ->rawColumns(['edit', 'tools', 'thumbnail'])
            ->toJson();
    }
}
