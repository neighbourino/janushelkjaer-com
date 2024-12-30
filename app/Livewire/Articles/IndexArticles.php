<?php

namespace App\Livewire\Articles;

use App\Models\Article;
use Livewire\Component;

class IndexArticles extends Component
{

    public $articles;

    public function mount()
    {
        $this->articles = Article::all();
    }

    public function render()
    {
        return view('livewire.articles.index-articles');
    }
}
