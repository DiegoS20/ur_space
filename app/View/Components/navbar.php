<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class navbar extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public bool $transparent = false
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $isUserLoggedIn = Auth::check();
        return view('components.navbar', [
            'isUserLoggedIn' => $isUserLoggedIn
        ]);
    }
}
