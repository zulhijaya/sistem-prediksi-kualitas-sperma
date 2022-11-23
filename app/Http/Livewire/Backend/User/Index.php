<?php

namespace App\Http\Livewire\Backend\User;

use App\Models\User;
use Livewire\Component;
use App\Mail\AccountApproved;
use App\Mail\AkunAndaDisetujui;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class Index extends Component
{
    public function render()
    {
        $users = User::where('role', 'user')->get();
        
        return view('livewire.backend.user.index', [
            'users' => $users
        ])->layout('layouts.backend', [
            'titles' => ['User'],
            'create_link' => ''
        ]);
    }

    public function setApproval(User $user)
    {
        if( !$user->approved_at ) {
            Mail::to($user)->send(new AkunAndaDisetujui($user));

            $user->update([ 'approval_sent' => 1 ]);
        } else {
            $user->update([ 
                'approval_sent' => 0,
                'approved_at' => NULL 
            ]);
        }
    }
}
