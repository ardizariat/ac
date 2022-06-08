<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AppFooter extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $navmenu = [
            'Beranda' => route('beranda'),
            'Kontak' => route('kontak'),
            'Layanan' => route('layanan'),
        ];

        $services = [
            'Sewa AC Standing',
            'Sewa Misty Fan',
            'Jasa Service AC'
        ];
        return view('layouts.client.footer', compact('navmenu', 'services'));
    }
}
