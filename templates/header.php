<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <title>Vuja pizza</title>

    <style>
        .brand{
            background: #003459 !important;
        }

        .brand-text{
            color: #003459 !important;
        }
        form{
            max-width: 460px;
            margin: 20px auto;
            padding: 20px;
        }

        .pizza{
            width: 100px;
            margin: 30px auto;
            display: block;
            transform: translateY(35%);
        }

        footer{
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>

<body class="grey lighten-4">
    <nav class="white z-depth-0">
        <div class="container">
            <a href="index.php" class="brand-logo brand-text">Vuja Pizza</a>
            <ul id="nav-mobile" class="right hide-on-small-and-down">
                <li><a href="add.php" class="btn brand z-depth-0">Add a Pizza</a></li>
            </ul>
        </div>
    </nav>