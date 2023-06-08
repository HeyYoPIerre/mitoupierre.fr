<div class="container-fluid image-container d-flex justify-content-center col-12 p-5 mt-3">
    <img src="{{ asset($image->filepath) }}" alt="{{ $image->alt }}" class="">
    <form wire:submit.prevent="submit">
    <button type="submit" class="btn randombtn"></button>    
    </form> 
</div>
