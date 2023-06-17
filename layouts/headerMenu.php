<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/menu.css" rel="stylesheet">
        <link href="" rel="stylesheet">
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
        <title>Menu</title>
        <!-- Custom CSS -->
        <style>
        .menu-item {
            padding: 20px;
            border: 1px solid #ddd;
            margin-bottom: 20px;
            background-color: #f8f9fa;
            border-radius: 5px;
        }
        .menu-item img {
            max-width: 100%;
            height: auto;
        }
        .menu-item h5 {
            margin-top: 10px;
            font-weight: bold;
        }
        .menu-item p {
            margin-bottom: 5px;
        }
        .add-to-cart-btn {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            text-decoration: none;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .add-to-cart-btn:hover {
            background-color: #0056b3;
            color: #fff;
        }

        body {
            position: relative;
        }
        body::before {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            background-image: url("assets/MenuBackground.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            filter: blur(5px);
        }
        body {
            font-family: "Arial", sans-serif; /* Example: Change the font to Arial */
        }

        h1 {
            font-family: "Input Mono", monospace; /* Example: Change the font for the menu header */
            font-size: 50px; /* Example: Adjust the font size */
            font-weight: bold;
            margin-top: -5px;
            color: #FFDE59;
        }

        .menu-item h5 {
            font-family: "Georgia", serif; /* Example: Change the font for the item title */
            font-size: 18px; /* Example: Adjust the font size */
            font-weight: bold;
            color: #FF914D;
        }

        .menu-item p {
            font-family: "Verdana", sans-serif; /* Example: Change the font for the item description */
            font-size: 14px; /* Example: Adjust the font size */
        }

        </style>
    </head>