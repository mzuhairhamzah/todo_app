<?php

namespace helper {
    class inputHelper
    {
        static function input (string $info) : string {
            echo $info;
            $input = trim(fgets(STDIN));
            return $input;
        }
    }
}
?>