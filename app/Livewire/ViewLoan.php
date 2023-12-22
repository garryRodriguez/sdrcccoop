<?php

namespace App\Livewire;

use App\Models\Member;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

// class ViewLoan extends ModalComponent

class ViewLoan extends Component
{
    public Member $member;

    public function mount(Member $member){
        $this->member = $member;
    }

    public function render()
    {
        return view('livewire.view-loan');
    }
}
