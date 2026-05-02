<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&family=Google+Sans+Flex:opsz,wght@6..144,1..1000&family=Lora:ital,wght@0,400..700;1,400..700&family=Noto+Serif:ital,wght@0,100..900;1,100..900&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Saira:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css">
    
    <title>{{ $title }}</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: "Fredoka", sans-serif;
            width: 100%;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            background-color: #0f172a;
        }
        .page-container {
            display: flex;
            flex-direction: column;
            width: 100%;
            max-width: 1100px;
            background-color: #fff;
        }


    </style>
</head>
<body>
    <div class="page-container">

        <div class="header">

        </div>

        <main>
            {{ $slot }}
        </main>

    </div>
</body>
</html>