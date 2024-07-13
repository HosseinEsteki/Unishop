<?php

namespace App\View\Components\Modules;

use App\Models\Modules\MarketAddress;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;


class Contact extends Component
{
    public function render(): View
    {
        $contacts = \App\Models\Modules\Contact::all();
        $addresses = MarketAddress::all();
        return view('components.modules.contact', compact('contacts', 'addresses'));
    }
}
