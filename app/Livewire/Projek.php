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
    public $pro;

    public $name = '';
    public $link = '';
    public $select = [];
    #[Validate('image|max:5000')] 
    public $thumbnail;



    public function save()
    {


        $projek = new Project();
        $projek->uuid = Str::uuid();
        $projek->name = $this->name;
        $projek->tools = json_encode($this->select); // Encode select array to JSON
        $projek->link = $this->link;
        $projek->slug = Str::slug($this->name);

        if ($this->thumbnail) {
            // Handle file upload
            $imageName = 'sawal' . Str::random(4) . '.' . $this->thumbnail->getClientOriginalExtension();
            $this->thumbnail->storeAs('thumbnails', $imageName, 'public');
            $projek->thumbnail =  $imageName;
        }

        $projek->save();
        session()->flash('message', 'Project successfully saved.');
        $this->redirect('/dashboard');
    }   


    public function mount()
    {
        $this->tools = Tools::orderBy('name', 'asc')->get();
        
    }
    public function edit($uid){
        $this->pro = Project::where('uuid', $uid)->first();
        $this->tools = Tools::orderBy('name', 'asc')->get();
        return view('livewire.semipage.editPro',['tools'=> $this->tools, 'pro'=>$this->pro]);
    }
    public function render()
    {
        // dd($uid);
        return view('livewire.projek');
    }
}
