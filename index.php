<?php
require_once 'api/todos.php';

$todos = fetchTodos();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Learn</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gray-100 min-h-screen">
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-6 text-center text-gray-800">Todo List</h1>
        
        <?php 
        $todos = fetchTodos();
        
        if (is_array($todos) && !isset($todos['error'])): 
        ?>
            <div class="grid gap-4 md:grid-cols-2 lg:grid-cols-3">
                <?php foreach (array_slice($todos, 0, 20) as $todo): ?>
                    <div class="<?php 
                        echo $todo['completed'] 
                            ? 'bg-green-50 border-l-4 border-green-500' 
                            : 'bg-white border-l-4 border-red-500'; 
                    ?> 
                    shadow-md rounded-lg p-4 transition duration-300 ease-in-out transform hover:scale-105">
                        <h2 class="<?php 
                            echo $todo['completed'] 
                                ? 'text-lg font-semibold mb-2 line-through text-gray-500' 
                                : 'text-lg font-semibold mb-2 text-gray-800'; 
                        ?>">
                            <?php echo htmlspecialchars($todo['title']); ?>
                        </h2>
                        
                        <div class="flex justify-between items-center mt-4">
                            <div class="flex items-center space-x-2">
                                <span class="text-sm text-gray-600">User ID: <?php echo htmlspecialchars($todo['userId']); ?></span>
                                <span class="<?php 
                                    echo $todo['completed'] 
                                        ? 'bg-green-100 text-green-800 px-2 py-1 rounded-full text-xs' 
                                        : 'bg-red-100 text-red-800 px-2 py-1 rounded-full text-xs'; 
                                ?>">
                                    <?php echo $todo['completed'] ? 'Completed' : 'Pending'; ?>
                                </span>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">Error: </strong>
                <span class="block sm:inline">
                    <?php echo isset($todos['error']) ? htmlspecialchars($todos['error']) : 'Unable to fetch todos'; ?>
                </span>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>