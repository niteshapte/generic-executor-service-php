<?php
include 'GenericExecutorService.php';
// Example task to run
$service = new GenericExecutorService(3);

$task1 = function() {
    echo "Executing Task 1\n";
    sleep(2);
    echo "Task 1 Completed\n";
};

$task2 = function() {
    echo "Executing Task 2\n";
    sleep(3);
    echo "Task 2 Completed\n";
};

$service->submit($task1);
$service->submit($task2);
$service->shutdown();
?>
