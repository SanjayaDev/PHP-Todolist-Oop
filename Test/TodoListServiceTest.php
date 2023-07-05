<?php 

require_once __DIR__ . "/../Entities/TodoList.php";
require_once __DIR__ . "/../Repositories/TodoListRepository.php";
require_once __DIR__ . "/../Services/TodoListService.php";

use Repositories\TodoListRepositoryImplement;
use Services\TodoListServiceImplement;

function testShowTodoList()
{
  $todoListRepositoryImplement = new TodoListRepositoryImplement;
  $todoListService = new TodoListServiceImplement($todoListRepositoryImplement);

  $todoListService->showTodoList();
}

testShowTodoList();