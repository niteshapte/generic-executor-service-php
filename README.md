# Generic Executor Service in PHP
A Generic Executor Service in PHP for asynchronous calls. 
This repository demonstrates a basic implementation of a Generic Executor Service in PHP 8 using the ```pcntl``` extension to handle concurrency. It mimics the behavior of Java's ExecutorService by managing a pool of "workers" (processes) that execute tasks asynchronously.

**generic-executor-service-php** a language port from Java to PHP from the repository which I created a while ago called **generic-executor-service-java** (https://github.com/niteshapte/generic-executor-service-java)

## Features
- Task Submission: Submit tasks (callables) to be executed asynchronously by the worker pool.
- Worker Pool Management: Limit the number of concurrent workers (processes) executing tasks.
- Graceful Shutdown: Waits for all tasks to complete before shutting down.

## Requirements
- PHP 8.0+
- ```pcntl``` extension enabled (usually available by default in most PHP installations, but needs to be enabled in some environments like Windows).

## Installation
Clone the repository:
```
git clone https://github.com/your-username/generic-executor-service-php.git
cd generic-executor-service-php
```
Ensure you have ```pcntl``` enabled in your PHP environment.

Run the script using the PHP CLI:
```
php executor.php
```

## Handling Concurrency with ```pcntl```
The ```GenericExecutorService``` relies on the ```pcntl_fork()``` function to create separate processes for each task. This provides concurrency in environments where PHP doesn't natively support multi-threading. However, ```pcntl``` is only available in CLI and POSIX-compliant environments (Linux/macOS).

## Compatibility
```pcntl``` is not available on Windows, so this solution works best in Unix-like environments.


## Customization
You can modify the following aspects of the service:
- Max Workers: Control the maximum number of concurrent workers by passing an integer to the GenericExecutorService constructor.
- Task Length: Simulate longer or shorter tasks by adjusting the sleep duration inside the tasks.


## Contribution
Contributions are welcome! If you'd like to improve this project, feel free to fork the repository and submit a pull request.


### Steps to Contribute:
1. Fork this repository by clicking the **Fork** button at the top right.
2. Clone your fork locally:
```
git clone https://github.com/your-username/generic-executor-service-php.git
```
3. Create a new branch for your feature or fix:
```
git checkout -b feature-branch
```
4. Make your changes and commit them:
```
git commit -m "Description of your changes"
```
5. Push to your fork:
```
git push origin feature-branch
```
6. Open a pull request on the original repository.


Feel free to suggest improvements, refactorings, or new features! All contributions, no matter how small, are greatly appreciated.
