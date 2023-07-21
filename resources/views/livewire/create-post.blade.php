<div class="container mx-auto max-w-5xl mt-4 p-2">
    <form wire:submit.prevent="submit">
        {{ $this->form }}
     
        <div class="flex w-full h-full justify-center items-center mt-5">
            <button class="w-[200px] h-max p-3 bg-post rounded-md border border-pink-800 hover:bg-pink-100 transition-all" type="submit">
                Create post
            </button>
        </div>
    </form>
</div>
