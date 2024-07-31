<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Robot Control Panel</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }
        h1 {
            color: #333;
            margin-bottom: 20px;
        }
        .control-panel {
            display: grid;
            grid-template-areas: 
                ". up ."
                "left center right"
                ". down .";
            gap: 10px;
            justify-items: center;
            align-items: center;
        }
        .direction-button {
            width: 100px;
            height: 100px;
            font-size: 20px;
            cursor: pointer;
            border: 1px solid #ccc;
            background-color: #eee;
            border-radius: 5px;
            transition: background-color 0.3s, transform 0.2s;
        }
        .direction-button:hover {
            background-color: #ddd;
            transform: scale(1.05);
        }
        .direction-button:active {
            background-color: #ccc;
        }
        .up {
            grid-area: up;
        }
        .down {
            grid-area: down;
        }
        .left {
            grid-area: left;
        }
        .right {
            grid-area: right;
        }
        .center {
            grid-area: center;
            background-color: red;
            color: white;
        }
    </style>
</head>
<body>
    <h1>Control Robot Direction</h1>
    <div class="control-panel">
        <button class="direction-button up" type="button">Forward</button>
        <button class="direction-button left" type="button">Left</button>
        <button class="direction-button center" type="button">Stop</button>
        <button class="direction-button right" type="button">Right</button>
        <button class="direction-button down" type="button">Backward</button>
    </div>
</body>
</html>