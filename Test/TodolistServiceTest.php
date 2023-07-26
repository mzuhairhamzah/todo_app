<?php

require_once __DIR__ . "/../Entity/Todolist.php";
require_once __DIR__ . "/../Repository/TodolistRepository.php";
require_once __DIR__ . "/../Service/TodolistService.php";

use Entity\Todolist;
use Service\TodolistServiceImpl;
use Repository\TodolistRepositoryImpl;

function testShowTodolist(): void
{
    $todoRepository = new TodolistRepositoryImpl();
    $todoRepository->todolist[1] = new Todolist("Bersih-bersih rumah");
    $todoRepository->todolist[2] = new Todolist("Belajar PHP");
    $todoRepository->todolist[3] = new Todolist("Belajar PHP Database");

    $todoService = new TodolistServiceImpl($todoRepository);

    $todoService->showTodolist();
}

function testAddTodolist(): void
{
    $todoRepository = new TodolistRepositoryImpl();

    $todoService = new TodolistServiceImpl($todoRepository);
    $todoService->addTodolist("Bersih-bersih rumah");
    $todoService->addTodolist("Belajar PHP");
    $todoService->addTodolist("Belajar PHP Database");

    $todoService->showTodolist();
}

function testRemoveTodolist(): void
{
    $todoRepository = new TodolistRepositoryImpl();

    $todoService = new TodolistServiceImpl($todoRepository);
    $todoService->addTodolist("Bersih-bersih rumah");
    $todoService->addTodolist("Belajar PHP");
    $todoService->addTodolist("Belajar PHP Database");

    $todoService->showTodolist();

    $todoService->removeTodolist(1);
    $todoService->showTodolist();

    $todoService->removeTodolist(5);
    $todoService->showTodolist();

    $todoService->removeTodolist(2);
    $todoService->showTodolist();

    $todoService->removeTodolist(1);
    $todoService->showTodolist();
}

testRemoveTodolist();
