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
  private array $todoList = [];

  public function save(TodoList $todoList) : void
  {

  }

  public function remove(int $number) : bool
  {

  }

  public function getAll() : array
  {
    return $this->todoList;
  }
}