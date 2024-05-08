<?php

namespace App\Livewire;

use App\Models\Tools;
use App\Models\Project;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;

class Projek extends Component
{
    use WithFileUploads;
    public $tools;

    public $name = '';
    public $link = '';
    public $select= '';
    #[Validate('image|max:1024')] // 1MB Max
    public $thumbnail = '';



    public function save()
    {
        $toolsJson = json_encode($this->select);
        dd($this->select);
        $projek = Project::create(
            [
                'id' => Str::uuid(),
                'name' => $this->name,
                'tools' =>  $toolsJson,
                'link' => $this->link,
                'thumbnail' => $this->thumbnail,
                'slug'=> Str::slug($this->name)
            ]
        );
        $this->reset(['name', 'link', 'select', 'thumbnail']);
    }


    public function mount()
    {
        $this->tools = Tools::orderBy('name', 'asc')->get();
    }
    public function render()
    {
        return view('livewire.projek');
    }
}
