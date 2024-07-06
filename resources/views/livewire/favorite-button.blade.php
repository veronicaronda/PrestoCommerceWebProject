<div>
    <button wire:click="toggleFavorite" class=" z-3 position-absolute btn shadow-none mt-md-2 mt-3 me-2 top-0 end-0 border-0" style="outline: none;">
        @if ($favorited)
            <i class="fa-solid fa-heart fa-2x" style="color: #e60505;"></i>
        @else
            <i class="fa-regular fa-heart fa-2x" style="color: #e60505;"></i>
        @endif
    </button>
</div>