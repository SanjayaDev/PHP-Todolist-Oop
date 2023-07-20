<?php namespace Repositories;
      use Entities\TodoList;

interface TodoListRepository
{
  public function save(TodoList $todoList) : void;
  public function remove(int $number) : bool;
  public function getAll() : array;
}

class TodoListRepositoryImplement implements TodoListRepository
{
  public array $todoList = [];

  public function save(TodoList $todoList) : void
  {
    $number = sizeof($this->todoList) + 1;
    $this->todoList[$number] = $todoList;
  }

  public function remove(int $number) : bool
  {
    if ($number > sizeof($this->todoList)) {
      return FALSE;
    }
  
    for ($i = $number; $i < sizeof($this->todoList); $i++) {
      $this->todoList[$i] = $this->todoList[$i + 1];
    }
  
    unset($this->todoList[sizeof($this->todoList)]);
    return TRUE;
  }

  public function getAll() : array
  {
    return $this->todoList;
  }
}