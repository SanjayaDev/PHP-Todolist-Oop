<?php 

require_once __DIR__ . "/../Entities/TodoList.php";
require_once __DIR__ . "/../Repositories/TodoListRepository.php";
require_once __DIR__ . "/../Services/TodoListService.php";

use Entities\TodoList;
use Repositories\TodoListRepositoryImplement;
use Services\TodoListServiceImplement;

function testShowTodoList()
{
  $todoListRepositoryImplement = new TodoListRepositoryImplement;
  $todoListRepositoryImplement->todoList[0] = new TodoList("Belajar PHP");
  $todoListRepositoryImplement->todoList[1] = new TodoList("Belajar PHP OOP");
  $todoListRepositoryImplement->todoList[2] = new TodoList("Belajar PHP Database");

  $todoListService = new TodoListServiceImplement($todoListRepositoryImplement);

  $todoListService->showTodoList();
}

function testAddTodoList()
{
  $todoListRepositoryImplement = new TodoListRepositoryImplement;
  $todoListService = new TodoListServiceImplement($todoListRepositoryImplement);

  $todoListService->addTodoList("Belajar PHP");
  $todoListService->addTodoList("Belajar PHP OOP");
  $todoListService->addTodoList("Belajar PHP Database");

  $todoListService->showTodoList();
}

function testRemoveTodoList()
{
  $todoListRepositoryImplement = new TodoListRepositoryImplement;
  $todoListService = new TodoListServiceImplement($todoListRepositoryImplement);

  $todoListService->addTodoList("Belajar PHP");
  $todoListService->addTodoList("Belajar PHP OOP");
  $todoListService->addTodoList("Belajar PHP Database");

  $todoListService->showTodoList();

  $todoListService->removeTodoList(1);
  $todoListService->showTodoList();

  $todoListService->removeTodoList(4);
  $todoListService->showTodoList();

  $todoListService->removeTodoList(2);
  $todoListService->showTodoList();

  $todoListService->removeTodoList(1);
  $todoListService->showTodoList();
}

testRemoveTodoList();