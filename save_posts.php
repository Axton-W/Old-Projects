<?php
// Get the posted content
$posts = $_POST['posts'];

// Define the file path to save the posts
$filePath = 'posts.txt';

// Write the content to the file
file_put_contents($filePath, $posts);

// Return a response
echo "Posts saved successfully.";
?>
