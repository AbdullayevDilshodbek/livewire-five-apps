<?php

namespace App\Http\Livewire;

use App\Models\ToDoItem;
use Livewire\Component;

class ToDoList extends Component
{
    public $todos;
    public string $todoText = '';

    public function mount()
    {
        $this->selectTodos();
    }

    public function render()
    {
        return view('livewire.to-do-list');
    }

    public function selectTodos()
    {
        $this->todos = ToDoItem::orderByDesc('created_at')
            ->limit(20)
            ->get();
    }

    public function addTodo()
    {
        if($this->todoText == '')
            return;
        ToDoItem::create([
            'todo' => $this->todoText
        ]);
        $this->todoText = '';
        $this->selectTodos();
    }

    public function toggleTodo($id)
    {
        $todo = ToDoItem::find($id);
        if(!$todo)
            return;
        $todo->update([
            'is_done' => !$todo->is_done
        ]);
        $this->selectTodos();
    }

    public function deleteTodo($id)
    {
        $todo = ToDoItem::find($id);
        if(!$todo)
            return;
        $todo->delete();
        $this->selectTodos();
    }
}
