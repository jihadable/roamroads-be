<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RoamRoads Backend | Not Found</title>
    <link rel="icon" href="https://raw.githubusercontent.com/jihadable/roamroads/master/src/assets/roam-roads-logo.jpg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@400;700&display=swap" rel="stylesheet">
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Dosis', sans-serif;
        }

        body{
            background: radial-gradient(circle, #ff4d30 10%, transparent 11%);
            background-size: 3em 3em;
            background-color: #000000;
            opacity: 1;
            height: 100Vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 3rem;
            border-radius: 1rem;
            background-color: white;

            & .status {
                font-size: 5rem;
                color: #ff4d30;
            }

            & .title {
                font-size: 2.5rem;
            }
        }

        @media screen and (max-width: 480px) {
            body {
                padding: 0 1rem;
            }

            .container {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="status">404</div>
        <div class="title">Not Found</div>
    </div>
</body>
</html>