<?php

namespace App\Livewire;

use App\Models\Project as ModelsProject;
use Livewire\Component;

class Project extends Component
{

    public $projects;

    public function mount()
    {
        $this->projects = Project::all();
    }
    public function delete($id)
    {
        $project = ModelsProject::where('uuid', $id)->first();
        $project->delete();
        session()->flash('message', 'Project successfully Delete.');
        $this->projects = Project::all(); 
    }

    

    // public function render()
    // {
    //     return view('livewire.project');
    // }

   
}
