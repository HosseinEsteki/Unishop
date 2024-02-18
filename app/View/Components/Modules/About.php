<?php

namespace App\View\Components\Modules;

use App\Models\Settings\SiteApp;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class About extends Component
{
    public function render(): View
    {
        $abouts = \App\Models\Modules\About::all();
        $siteApps = SiteApp::all();
        return view('components.modules.about', compact('abouts', 'siteApps'));
    }
}
