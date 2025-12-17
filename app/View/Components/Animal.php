<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Animal extends Component
{
    public $name, $species, $age, $description, $photo;
    /**
     * Create a new component instance.
     */
    public function __construct(
        $name  = "Ia",
        $species = "",
        $age = "",
        $description = "",
        $photo = ""
    ) {
        $this->name = $name;
        $this->species = $species;
        $this->age = $age;
        $this->description = $description;
        $this->photo = $photo;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.animal');
    }
}
