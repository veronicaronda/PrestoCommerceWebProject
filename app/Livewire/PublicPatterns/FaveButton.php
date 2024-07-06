<?php

namespace App\Livewire\PublicPatterns;

use App\Models\Pattern;
use Livewire\Component;
use Maize\Markable\Models\Favorite;
use Illuminate\Support\Facades\Auth;

class FaveButton extends Component
{
    public $pattern;
    public bool $is_favorite;

    public function mount($pattern)
    {
        $this->is_favorite = Favorite::has($pattern, Auth::user());
    }
    public function toggleFav($pattern)
    {
        $pattern = Pattern::findOrFail($pattern);
        Favorite::toggle($pattern, Auth::user());
        $this->mount($pattern);
    }

    public function render()
    {
        return view('livewire.public-patterns.fave-button', [
            'is_favorite' => $this->is_favorite
        ]);
    }
}
