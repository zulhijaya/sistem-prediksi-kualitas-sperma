<?php

namespace App\Http\Livewire\Backend\Admin;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Edit extends Component
{
    public $avatar, $name, $old_password, $password, $password_confirmation;

    protected $rules = [
        'avatar' => 'required',
        'name' => 'required',
        'old_password' => 'required_with:password',
        'password' => 'required_with:old_password|confirmed'
    ];

    public function mount() 
    {
        $admin = Auth::user();
        $this->avatar = $admin->avatar;
        $this->name = $admin->name;
    }

    public function render()
    {
        return view('livewire.backend.admin.edit')->layout('layouts.backend', [
            'titles' => ['Admin', 'Edit Admin'],
            'create_link' => ''
        ]);
    }

    public function update()
    {
        $this->validate();
        if( $this->old_password ) $this->validate(['old_password' => 'current_password']);

        $user = Auth::user();
        $user->update([
            'avatar' => $this->avatar,
            'name' => $this->name,
            'password' => $this->password ? Hash::make($this->password) : $user->password
        ]);
        
        session()->flash('message', 'Admin successfully updated.');
    
        return redirect()->route('admin.admin.edit', Auth::user());
    }
}
