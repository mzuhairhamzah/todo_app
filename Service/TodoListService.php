<?php 
    namespace Service {
        use Entity\TodoList;
        use Repository\TodoListRepository;

        interface TodoListService {
            function showTodoList() : void;
            function addTodoList(string $todo) : void;
            function removeTodoList(int $number) : void;
        }
        class TodoListServiceImpl implements TodoListService {
            private TodoListRepository $todoRepository; //property 

            public function __construct(TodoListRepository $todoRepository) //constructor
            {
                $this->todoRepository = $todoRepository;
            }
            function showTodoList(): void
            {
                echo "THE SIMPLE TODOLIST" . PHP_EOL;
                $todolist = $this->todoRepository->findAll();
                foreach ($todolist as $number => $value) {
                    echo "$number. " . $value->getTodo() . PHP_EOL;
                }
            }
            function addTodoList(string $todo): void{
                $todolist = new TodoList($todo);
                $this->todoRepository->save($todolist);
                echo "Succesfully added: $todo" . PHP_EOL;
            }
            function removeTodoList(int $number): void{
                if ($this->todoRepository->remove($number)) {
                    echo "Succesfully removed: $number" . PHP_EOL;
                } else {
                    echo "Failed to remove number $number" . PHP_EOL;
                }

            }
        }
    }
?>