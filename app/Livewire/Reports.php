<?php

namespace App\Livewire;
use Illuminate\Pagination\Paginator;
use Livewire\Component;
use App\Models\Member;

class Reports extends Component
{
    public $search;
    public $pagination = 10;

    public function render()
    {
        if (!$this->search) {
            $users = Member::simplePaginate($this->pagination);
        } else {
            $users = Member::where('first_name', 'like', '%'.$this->search.'%')->orWhere('last_name', 'like', '%'.$this->search.'%')->simplePaginate($this->pagination);
        }

        return view('livewire.reports', [
            'users' => $users
        ]);
    }
}
