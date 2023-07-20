<?php namespace Views;
      use Services\TodoListService;
      use Helpers\InputHelper;

class TodoListView
{
  private TodoListService $todoListService;

  public function __construct(TodoListService $todoListService)
  {
    $this->todoListService = $todoListService;
  }

  public function showTodoList() : void
  { 
    while (true) {
      $this->todoListService->showTodoList();
  
      echo "MENU " . PHP_EOL;
      echo "1. Tambah Todolist " . PHP_EOL;
      echo "2. Hapus Todolist " . PHP_EOL;
      echo "X. keluar App " . PHP_EOL;
    
      $pilihan = InputHelper::input("Pilih ");
  
      if ($pilihan == 1) {
        $this->addTodoList();
      } else if ($pilihan == 2) {
        $this->removeTodoList();
      } else if ($pilihan == "x") {
        break;
      } else {
        echo "Pilihan tidak ditemukan!" . PHP_EOL;
      }
    }
  
    echo "Sampai jumpa lagi!" . PHP_EOL;
  }
  public function addTodoList() : void
  {
    echo "Menambah todo " . PHP_EOL;

    $todo = InputHelper::input("Todo (x untuk batal) ");

    if ($todo == "x") {
      echo "Perintah dibatalkan!";
    } else {
      $this->todoListService->addTodoList($todo);
    }
  }
  public function removeTodoList() : void
  {
    echo "Menghapus Todo " . PHP_EOL;

    $pilihan = InputHelper::input("Nomor (x untuk batal) ");
    
    if ($pilihan == "x") {
      echo "Batal menghapus todo!" . PHP_EOL;
    } else {
      $this->todoListService->removeTodoList($pilihan);
    }
  }
}