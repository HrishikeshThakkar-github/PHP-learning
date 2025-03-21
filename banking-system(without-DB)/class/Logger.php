<?php

trait Logger {
    public function log($message) {
        return "[LOG]: $message\n";
    }
}
