<?php

namespace App\Http\Livewire\Admin\Users;

use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class ListUsers extends Component
{

    //array of date form
   // public $state = [];

    public $name;
    public $email;
    public $password;

    public function updated($rules)
    {
        $this->validateOnly($rules,[ // real-time

            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',

        ]);
    }
    public function createUser()
    {
       $data = $this->validate([

            'name' => 'required', // server-time
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',

        ]);

        $data['password'] = hash('sha256', $data['password']);

        User::create($data);
        $this->dispatchBrowserEvent('hidden-form'); //capture event js of browser;

        redirect()->back();
    }

    public function addNew()
    {

        //capture event js of browser;
        $this->dispatchBrowserEvent('show-form');
    }

    public function render()
    {
        $users = User::latest()->paginate();
        return view('livewire.admin.users.list-users', compact('users'));
    }
}
