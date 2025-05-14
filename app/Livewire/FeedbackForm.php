<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Rating;

class FeedbackForm extends Component
{
    public int $rating = 0;
    public string $comment = '';

    public function setRating($value)
    {
        $this->rating = $value;
    }

    public function submit()
    {
        $this->validate([
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'nullable|string|max:500',
        ]);

        Rating::create([
            'rating' => $this->rating,
            'comment' => $this->comment,
        ]);

        $this->rating = 0; // clear form
        $this->comment = ''; // clear form
        session()->flash('message', 'Thanks for your feedback!');
    }

    public function render()
    {
        return view('livewire.feedback-form');
    }
}