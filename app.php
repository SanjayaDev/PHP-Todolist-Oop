<?php

require_once __DIR__ . "/Entities/TodoList.php";
require_once __DIR__ . "/Repositories/TodoListRepository.php";
require_once __DIR__ . "/Services/TodoListService.php";
require_once __DIR__ . "/Views/TodoListView.php";
require_once __DIR__ . "/Helpers/InputHelper.php";

use Repositories\TodoListRepositoryImplement;
use Services\TodoListServiceImplement;
use Views\TodoListView;

$todoListRepository = new TodoListRepositoryImplement;
$todoListService = new TodoListServiceImplement($todoListRepository);
$todoListView = new TodoListView($todoListService);

$todoListView->showTodoList();