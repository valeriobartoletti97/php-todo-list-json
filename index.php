<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://unpkg.com/axios@1.1.2/dist/axios.min.js"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="js/script.js" type="module"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
    <title>To Do List</title>
</head>

<body>

    <div id="app" class="pt-3 p-relative">
        <div class="container">
            <header class="text-center mx-auto">
                <h1 class="text-uppercase pt-2">Come diventare grossi</h1>
                <div class="input-group mb-3 mx-auto pt-5">
                    <input type="text" v-model="newTask" class="form-control" placeholder="Inserisci una nuova task" >
                    <button class="btn " type="button">New Task</button>
                </div>
            </header>
            <main>
                <ul class="list-group mt-4">
                    <li v-for="(task,index) in todoList" :key="index" class="list-group-item list-group-item-action d-flex justify-content-between">
                        <span class="fw-bold">{{task.text}}</span>
                        <span class="align-middle">
                            <i class="fa-solid fa-trash"></i>
                        </span>
                    </li>
                </ul>
                <audio class="d-block mx-auto mt-5" controls autoplay muted>
                    <source src="audio/file.mp3" type="audio/mpeg">
                </audio>
            </main>
        </div>
    </div>

</body>

</html>