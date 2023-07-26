<?php

require_once __DIR__ . '/../Entity/Todolist.php';
require_once __DIR__ . '/../Repository/TodolistRepository.php';
require_once __DIR__ . '/../Service/TodolistService.php';
require_once __DIR__ . '/../View/TodolistView.php';
require_once __DIR__ . '/../Helper/InputHelper.php';

use \Repository\TodolistRepositoryImpl;
use \Service\TodolistServiceImpl;
use \View\TodolistView;

function testViewShowTodolist(): void
{

    $todoRepository = new TodolistRepositoryImpl();
    $todoService = new TodolistServiceImpl($todoRepository);
    $todoView = new TodolistView($todoService);

    $todoService->addTodolist("Bersih-bersih rumah");
    $todoService->addTodolist("Belajar PHP");
    $todoService->addTodolist("Belajar PHP Database");

    $todoView->showTodolist();
}

function testViewAddTodolist(): void
{

    $todoRepository = new TodolistRepositoryImpl();
    $todoService = new TodolistServiceImpl($todoRepository);
    $todoView = new TodolistView($todoService);

    $todoService->addTodolist("Bersih-bersih rumah");
    $todoService->addTodolist("Belajar PHP");
    $todoService->addTodolist("Belajar PHP Database");

    $todoService->showTodolist();

    $todoView->addTodolist();

    $todoService->showTodolist();

    $todoView->addTodolist();

    $todoService->showTodolist();
}

function testViewRemoveTodolist(): void
{

    $todoRepository = new TodolistRepositoryImpl();
    $todoService = new TodolistServiceImpl($todoRepository);
    $todoView = new TodolistView($todoService);

    $todoService->addTodolist("Bersih-bersih rumah");
    $todoService->addTodolist("Belajar PHP");
    $todoService->addTodolist("Belajar PHP Database");

    $todoService->showTodolist();

    $todoView->removeTodolist();

    $todoService->showTodolist();

    $todoView->removeTodolist();

    $todoService->showTodolist();
}

testViewRemoveTodolist();
