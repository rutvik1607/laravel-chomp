<?php

namespace App\View\Components;

use Illuminate\View\Component;

class pageBanner extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $slug = '';
    public $bannerBg = '';
    public $title = '';
    public $description = '';
    public $bannerBtnBg = '';
    public $bannerImg = '';

    public function __construct($slug, $bannerBg, $title, $description, $bannerBtnBg, $bannerImg)
    {
        //
        $this->slug = $slug;
        $this->bannerBg = $bannerBg;
        $this->title = $title;
        $this->description = $description;
        $this->bannerBtnBg = $bannerBtnBg;
        $this->bannerImg = $bannerImg;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.page-banner');
    }
}
