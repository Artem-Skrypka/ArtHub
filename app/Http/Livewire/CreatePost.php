<?php

namespace App\Http\Livewire;

use Filament\Forms;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class CreatePost extends Component implements Forms\Contracts\HasForms 
{
    use Forms\Concerns\InteractsWithForms;
    
    public $title = '';
    public $description = '';
    public $body = '';
    public $post_bg = '';
    public $new_roles = '';
    public $roles = '';
    public $tags = '';

    public function mount(): void 
    {
        $this->form->fill();
    } 

    protected function getFormSchema(): array 
    {
        return [
            Forms\Components\TextInput::make('title')->label('title (can see all users)')->required(),
            Forms\Components\TextInput::make('description')->label('description (can see all users)')->required(),
            Forms\Components\FileUpload::make('post background')->image()->maxSize(10024)->maxFiles(1),
            Forms\Components\RichEditor::make('body')->label('body (Main post content, only for choosen roles)')->required(),
            Forms\Components\TagsInput::make('new_roles')->label('Roles (if needed)')->placeholder('New role'),
            Forms\Components\Select::make('roles')
                ->label('Roles that can read this post (All by default)')
                ->multiple()
                ->options([
                    'all' => 'All',
                    'sakura' => 'Sakura',
                    'naruto' => 'Naruto',
                    'sasuke' => 'Sasuke',
                    'itachi' => 'Itachi',
                ])
                ->default('all'),
            Forms\Components\TagsInput::make('tags')->label('tags (for better search)'),
        ];
    }

    public function submit()
    {
        dd($this->roles);
    }

    public function render()
    {
        return view('livewire.create-post');
    }
}
