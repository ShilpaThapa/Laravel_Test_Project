<?php

namespace App\View\Components;

use Illuminate\View\Component;

class VerticalCard extends Component
{
    public $title, $description, $imagePath, $author;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $description, $imagePath, $author)
    {
        $this->title = $title;
        $this->description = $description;
        $this->imagePath = $imagePath;
        $this->author = $author;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.vertical-card',['title'=>$this->title,'description'=>$this->description,'imagePath'=>$this->imagePath,'author'=>$this->author]);
    }
}
