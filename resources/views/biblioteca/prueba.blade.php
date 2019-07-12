<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <style>
        :root {
            --color-inactivo: #5f5050;
            --color-hover: #ffa400;
        }
        .valoracion {
            display: flex;
            flex-direction: row-reverse;
        }
        .valoracion button {
            background-color: initial;
            border: 0;
            color: var(--color-inactivo);
            transition: 1s all;
        }
        .valoracion button:hover {
            cursor: pointer;
            color: var(--color-hover);
            transform: rotate(360deg);
        }
        button:nth-child(1):hover ~ button {
            color: var(--color-hover);
            transform: rotate(360deg);
        }
        button:nth-child(2):hover ~ button {
            color: var(--color-hover);
            transform: rotate(360deg);
        }
        button:nth-child(3):hover ~ button {
            color: var(--color-hover);
            transform: rotate(360deg);
        }
        button:nth-child(4):hover ~ button {
            color: var(--color-hover);
            transform: rotate(360deg);
        }
        button:nth-child(5):hover ~ button {
            color: var(--color-hover);
            transform: rotate(360deg);
        }
    </style>
</head>
<body>
    <div class="valoracion">

        <!-- Estrella 1 -->
        <button>
            <i class="fas fa-star"></i>
        </button>

        <!-- Estrella 2 -->
        <button>
            <i class="fas fa-star"></i>
        </button>

        <!-- Estrella 3 -->
        <button>
            <i class="fas fa-star"></i>
        </button>

        <!-- Estrella 4 -->
        <button>
            <i class="fas fa-star"></i>
        </button>

        <!-- Estrella 5 -->
        <button>
            <i class="fas fa-star"></i>
        </button>

    </div>
</body>
</html>