<?php

namespace App\Http\Livewire;

use Filament\Forms;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class CreatePost extends Component implements Forms\Contracts\HasForms 
{
    use Forms\Concerns\InteractsWithForms;
    
    public $title;
    public $markdown;
    public $rich;

    protected function getFormSchema(): array 
    {
        return [
            Forms\Components\TextInput::make('title')->required(),
            Forms\Components\MarkdownEditor::make('markdown'),
            Forms\Components\RichEditor::make('rich'),
        ];
    }

    // public function submit()
    // {
    //     dd($this->title);
    // }

    public function render()
    {
        return view('livewire.create-post');
    }
}
