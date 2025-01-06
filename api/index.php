<?php
header('content-type: application/json');
echo json_encode(['message' => 'Hello from Vercel!', 'path' => $_SERVER['REQUEST_URI']]);
