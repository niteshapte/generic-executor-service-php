<?php
include 'GenericExecutorService.php';
// List of URLs to call
$urls = [
    "https://jsonplaceholder.typicode.com/posts/1",
    "https://jsonplaceholder.typicode.com/posts/2",
    "https://jsonplaceholder.typicode.com/posts/3",
    "https://jsonplaceholder.typicode.com/posts/4",
    "https://jsonplaceholder.typicode.com/posts/5",
    "https://jsonplaceholder.typicode.com/posts/6",
];

// Instantiate the service with a max of 3 workers
$executor = new GenericExecutorService(3);

foreach ($urls as $url) {
    $executor->submit(function() use ($url) {
        // Each task fetches the URL content
        $content = file_get_contents($url);
        echo "Fetched from $url: " . substr($content, 0, 100) . "\n"; // Display a snippet of the response
    });
}

// Wait for all workers to complete
$executor->shutdown();
?>
