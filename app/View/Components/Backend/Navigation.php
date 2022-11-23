<?php

namespace App\View\Components\Backend;

use App\Models\User;
use Illuminate\View\Component;

class Navigation extends Component
{
    public $titles, $create_link = '';
    
    public function __construct($titles = [], $createlink)
    {
        $this->titles = $titles;
        $this->create_link = $createlink;
    }

    public function render()
    {
        $users = User::where('approved_at', NULL)->latest()->get();
        return view('components.backend.navigation', [
            'users' => $users
        ]);
    }
}
