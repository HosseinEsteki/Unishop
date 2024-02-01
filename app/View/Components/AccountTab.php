<?php

namespace App\View\Components;

use App\Http\Middleware\Authenticate;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class AccountTab extends Component
{
    public function __construct()
    {
    }

    public function render(): View
    {
        $user = Auth::user();
        return view('components.account-tab', compact('user'));
    }
}
