<?php namespace Services;
      use Entities\TodoList;
      use Repositories\TodoListRepository;

interface TodoListService
{
  public function showTodoList() : void;
  public function addTodoList(string $todo) : void;
  public function removeTodoList(int $number) : void;
}

class TodoListServiceImplement implements TodoListService
{
  private TodoListRepository $todoListRepository;

  public function __construct(TodoListRepository $todoListRepository)
  {
    $this->todoListRepository = $todoListRepository;
  }

  public function showTodoList() : void
  {
    $todoList = $this->todoListRepository->getAll();

    echo "Todo List " . PHP_EOL;
    foreach ($todoList as $number => $todo) {
      echo $number . " - " . $todo->getTodo() . PHP_EOL;
    }
  }

  public function addTodoList(string $todo) : void
  {
    $todoList = new TodoList($todo);
    $this->todoListRepository->save($todoList);
    echo "SUKSES MENAMBAH TODOLIST!" . PHP_EOL;
  }

  public function removeTodoList(int $number) : void
  {
    if ($this->todoListRepository->remove($number)) {
      echo "BERHASIL MENGHAPUS TODOLIST!" . PHP_EOL;
    } else {
      echo "GAGAL MENGHAPUS TODOLIST" . PHP_EOL;
    }
  }
}