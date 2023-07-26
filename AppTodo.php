<?php
require_once __DIR__ . "/Entity/TodoList.php";
require_once __DIR__ . "/Helper/InputHelper.php";
require_once __DIR__ . "/Repository/TodoListRepository.php";
require_once __DIR__ . "/Service/TodoListService.php";
require_once __DIR__ . "/View/TodoListView.php";

use Repository\TodolistRepositoryImpl;
use Service\TodoListServiceImpl;
use View\TodoListView;

echo "App TodoList Simple" . PHP_EOL;
echo "\n";

$todoRepository = new TodolistRepositoryImpl();
$todoService = new TodoListServiceImpl($todoRepository);
$todoView = new TodoListView($todoService);

$todoView->showTodoList();
