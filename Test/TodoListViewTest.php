<?php 

require_once __DIR__ . "/../Entities/TodoList.php";
require_once __DIR__ . "/../Repositories/TodoListRepository.php";
require_once __DIR__ . "/../Services/TodoListService.php";
require_once __DIR__ . "/../Views/TodoListView.php";
require_once __DIR__ . "/../Helpers/InputHelper.php";

use Repositories\TodoListRepositoryImplement;
use Services\TodoListServiceImplement;
use Views\TodoListView;

function testViewShowTodolist() 
{
  $todoListRepository = new TodoListRepositoryImplement;
  $todoListService = new TodoListServiceImplement($todoListRepository);
  $todoListView = new TodoListView($todoListService);

  $todoListService->addTodoList("Belajar PHP");
  $todoListService->addTodoList("Belajar PHP OOP");
  $todoListService->addTodoList("Belajar PHP Database");

  $todoListView->showTodoList();
}

function testViewAddTodolist() 
{
  $todoListRepository = new TodoListRepositoryImplement;
  $todoListService = new TodoListServiceImplement($todoListRepository);
  $todoListView = new TodoListView($todoListService);

  $todoListService->addTodoList("Belajar PHP");
  $todoListService->addTodoList("Belajar PHP OOP");
  $todoListService->addTodoList("Belajar PHP Database");

  $todoListView->showTodoList();
}

function testViewRemoveTodolist() 
{
  $todoListRepository = new TodoListRepositoryImplement;
  $todoListService = new TodoListServiceImplement($todoListRepository);
  $todoListView = new TodoListView($todoListService);

  $todoListService->addTodoList("Belajar PHP");
  $todoListService->addTodoList("Belajar PHP OOP");
  $todoListService->addTodoList("Belajar PHP Database");

  $todoListService->showTodoList();
  
  $todoListView->removeTodoList();

  $todoListService->showTodoList();
}

testViewRemoveTodolist();