<!DOCTYPE html>
<html lang="en">
<head>
    <title>Barbearia do Paulo</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f2f5;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            color: #333;
        }
        .container {
            background-color: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }
        h1 {
            text-align: center;
            margin-bottom: 1.5rem;
            font-size: 1.5rem;
            color: #2c3e50;
        }
        .galeria-container {
            column-count: 4;
            column-gap: 15px;
            max-width: 1200px;
            margin: 0 auto
        }
        .item-galeria {
            break-inside: avoid;
            margin-bottom: 15px;
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin-bottom: 0.5rem;
            font-weight: 600;
            font-size: 0.9rem;
            color: #555;
            text-transform: capitalize;
        }
        input[type="text"],
        input[type="date"],
        select {
            padding: 12px;
            margin-bottom: 1.2rem;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 1rem;
            transition: border-color 0.3s;
            width: 100%;
        }
        input[type="text"]:focus,
        input[type="date"]:focus,
        select:focus {
            border-color: #3498db;
            outline: none;
            box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.1);
        }
        input[type="submit"] {
            background-color: #27ae60;
            color: white;
            border: none;
            padding: 14px;
            border-radius: 6px;
            font-size: 1rem;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-top: 0.5rem;
        }
        input[type="submit"]:hover {
            background-color: #219150;
        }
        br {
            display: none;
        }
    </style>
</head>
<body>
<header class="navbar navbar-expand-sm bg-light navbar-light">
    <div class="container-fluid">
       <h2>Barbearia do Paulo</h2>
    </div>
</header>
