<?php namespace Entities;

class TodoList
{
  private string $todo;

  public function __construct($todo = "")
  {
    $this->todo = $todo;
  }

  public function getTodo() : string
  {
    return $this->todo;
  }

  public function setTodo($todo) : void
  {
    $this->todo = $todo;
  }
}