<?php

namespace App\Http\Livewire\Frontend\User;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Account extends Component
{
    public $name, $old_password, $password, $password_confirmation;

    protected $rules = [
        'name' => 'required',
        'old_password' => 'required_with:password',
        'password' => 'required_with:old_password|confirmed'
    ];

    public function mount()
    {
        $this->name = Auth::user()->name;
    }

    public function render()
    {
        return view('livewire.frontend.user.account')->layout('layouts.frontend', [
            'title' => 'Akun'
        ]);
    }

    public function update()
    {
        $this->validate();
        if( $this->old_password ) $this->validate(['old_password' => 'current_password']);

        $user = Auth::user();
        $user->update([
            'name' => $this->name,
            'password' => $this->password ? Hash::make($this->password) : $user->password
        ]);

        session()->flash('message', 'Account successfully updated');
    
        return redirect()->route('account');
    }

    public function acceptApproval(User $user)
    {
        $user->update([
            'approved_at' => now()
        ]);

        return redirect()->route('login');
    }
}
