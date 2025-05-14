<?php

namespace App\Livewire\Admin;

use App\Models\Rating;
use Livewire\Component;

class FeedbackList extends Component
{
    public function render()
    {
        $feedbacks = Rating::latest()->get();
        return view('livewire.admin.feedback-list', compact('feedbacks'));
    }
}