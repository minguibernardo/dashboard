<?php

namespace App\Http\Livewire\Admin\Users;

use App\Models\User;
use Livewire\Component;

class ListUsers extends Component
{
    public $name;
    public $email;
    public $password;

    public $seeEditModal = false;
    public $user;
    public $removeID = null;

    public function updated($rules) // real-time validation
    {

        if ($this->user == null) {
            $this->validateOnly($rules, [

                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required|min:6',

            ]);
        } else {
            $this->validateOnly($rules, [

                'name' => 'required',
                'email' => 'required|email|unique:users,email,' . $this->user->id,
                'password' => 'required|min:6',

            ]);
        }
    }

    public function addUserOpenModal() //open modal
    {
        //
        $this->seeEditModal = false;

        //blank
        $this->name = '';
        $this->email = '';
        $this->password = '';

        //capture event js of browser;
        $this->dispatchBrowserEvent('show-form');
    }

    public function createUser() // save user
    {
        $data = $this->validate([

            'name' => 'required', // server-time
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $data['password'] = hash('sha256', $data['password']);

        $this->dispatchBrowserEvent('hidden-form'); //close modal
        User::create($data);
        $this->dispatchBrowserEvent('alert-add'); //alert sweet 2
        redirect()->back();
    }

    public function editUserOpenModal(User $user) //open modal
    {
        //
        $this->seeEditModal = true;
        $this->name = $user->name;
        $this->email = $user->email;
        $this->user = $user;

        $this->dispatchBrowserEvent('show-form');
    }

    public function updateUser() //save edit
    {
        $data = $this->validate([
            'name' => 'required', // server-time
            'email' => 'required|email|unique:users,email,' . $this->user->id,
            'password' => 'required|min:6',
        ]);

        if (!empty($data['password'])) {
            $data['password'] = hash('sha256', $data['password']);
        }

        $this->dispatchBrowserEvent('hidden-form'); //close modal
        $this->user->update($data);
        $this->dispatchBrowserEvent('alert-update'); //alert sweet 2

        redirect()->back();
    }

    public function userDeleteOpenModal($userID) //open modal
    {
        $this->removeID = $userID;
        $this->dispatchBrowserEvent('form-deleted');
    }

    public function userDelete()
    {

        $user = User::findOrFail($this->removeID);

        $this->dispatchBrowserEvent('hidden-modal-deleted'); //close modal
        $user->delete();
        $this->dispatchBrowserEvent('alert-deleted'); //alert sweet 2
        redirect()->back();
    }

    public function render()
    {
        $users = User::latest()->paginate();
        return view('livewire.admin.users.list-users', compact('users'));
    }
}
