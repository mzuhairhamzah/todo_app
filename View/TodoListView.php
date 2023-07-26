<?php

namespace View {

    use Service\TodoListService;
    use Helper\inputHelper;

    class TodoListView
    {
        private TodoListService $todoListService;

        public function __construct(TodoListService $todoListService)
        {
            $this->todoListService = $todoListService;
        }
        function showTodoList(): void
        {
            while (true) {
                $this->todoListService->showTodoList();
                echo "MENU" . PHP_EOL;
                echo "1. Add Todo" . PHP_EOL;
                echo "2. Remove Todo" . PHP_EOL;
                echo "x. Exit" . PHP_EOL;

                $input = inputHelper::input("Choose an option : ");
                if ($input == "1") {
                    $this->addTodoList();
                } else if ($input == "2") {
                    $this->removeTodoList();
                } else if ($input == "x") {
                    break;
                } else {
                    echo "__Wrong input! Try Again__" . PHP_EOL;
                }
            }
            echo "Thank you for using this program" . PHP_EOL;
        }
        function addTodoList(): void
        {
            echo "Insert TODO" . PHP_EOL;
            $todo = inputHelper::input("Todo (x to cancel) : ");

            if ($todo == "x") {
                echo "Canceling add todo" . PHP_EOL;
            } else {
                $this->todoListService->addTodoList($todo);
            }
        }
        function removeTodoList(): void
        {
            echo "Remove TODO" . PHP_EOL;
            $number = inputHelper::input("Number (x to cancel) : ");

            if ($number == "x") {
                echo "Canceling remove todo" . PHP_EOL;
            } else {
                $this->todoListService->removeTodoList($number);
            }
        }
    }
}
