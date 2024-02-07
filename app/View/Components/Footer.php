<?php

namespace App\View\Components;

use App\Models\Settings\SiteApp;
use App\Models\Settings\SocialMedia;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Footer extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $socialMedias = SocialMedia::all();
        $siteApps = SiteApp::all();
        return view('components.footer', compact('socialMedias', 'siteApps'));
    }
}
