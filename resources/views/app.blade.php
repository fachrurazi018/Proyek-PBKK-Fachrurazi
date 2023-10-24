<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- berisi link untuk menghubungkan ke font awesone agar icon dapat digunakan --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    {{-- berisi title pada website --}}
    <title>Welcome, Iwear Store</title>
    {{-- berisi penggunaan internal css yang akan mengelola tampilan website--}}
    <style>
        /* css pada container */
        .container{
            height: 70vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background-color: #ffffff;
            padding-top: 10%;
        }
        /* css pada container h1 */
        .container h1{
            text-align: center;
        }
        /* css pada row h2 */
        .row h2 {
            font-size: 24px;
            margin-bottom: 20px;
        }
        /* css pada mb-3 */
        .mb-3 {
            margin-bottom: 20px;
            text-align: left;
            width: 300px;
        }
        /* css pada mb-3 label */
        .mb-3 label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        /* css pada mb-3 input */
        .mb-3 input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        /* css pada mb-3 button */
        .mb-3 button {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        /* css pada mb-3 a */
        .mb-3 a {
            background-color: hsl(0, 100%, 50%);
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        /* css pada login */
        .login{
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            text-decoration: none;
        }
        /* css pada register */
        .register{
            background-color: #0fc652;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            text-decoration: none;
        }
        /* css pada nav-container */
        .nav-container{
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 10vh;
        }
        /* css pada home-container */
        .home-container{
            display: flex;
            flex-direction: column;
            height: 80vh;
            float: left;
            padding-left: 15%;
            padding-top: 5%;
        }
        /* css pada home-container p*/
        .home-container p{
            position: absolute;
            top: 50%;
            left: 66%;
            transform: translate(-50%, -50%);
            font-size: 40px;
            text-align: center;
            font-style: italic;
            line-height: 0.8;
        }
        /* css pada home-container img */
        .home-container img{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        /* css pada home-container-2 */
        .home-container-2{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            margin: 10px;
        }
        /* css pada home-container-2 h1 */
        .home-container-2 h1{
            margin-bottom: 30%;
            font-size: 42px;
        }
        /* css pada home-container-2 nav*/
        .home-container-2 nav{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: row;
            gap: 7px;
            padding: 0;
        }
        /* css pada navbar*/
        .navbar {
            background-color: #ffffff;
            overflow: hidden;
        }
        /* css pada navbar a*/
        .navbar a {
            align-items: center;
            float: left;
            display: block;
            color: #000000;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 20px;
        }
        /* css pada navbar a hover*/
        .navbar a:hover {
            background-color: #2980b9;
            color: #ffff;
        }
        /* css pada dropdown*/
        .dropdown {
            float: left;
            overflow: hidden;
        }
        /* css pada .dropdown .dropbtn */
        .dropdown .dropbtn {
            font-size: 20px;
            border: none;
            outline: none;
            color: #000000;
            background-color: inherit;
            cursor: pointer;
            padding: 14px 16px;
            text-align: center;
        }
        /* css pada dropdown content */
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #ffffff;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }
        /* css pada .dropdown a hover */
        .dropdown-content a:hover {
            background-color: #2980b9;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }
        /* css pada konten-grid */
        .konten-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr); 
            gap: 30px; 
            margin-right: 300px;
        }
        /* css pada konten */
        .konten {
            overflow: hidden;
            border-radius: 8px; 
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        /* css pada konten img */
        .konten img {
            height: 100%;
            width: 100%;;
        }
        /* css pada table */
        table {
            width: 100%;
            border-collapse: collapse;
        }
        /* css pada table, th, td */
        table, th, td {
            border: 1px solid black;
        }
        /* css pada th, td */
        th, td {
            padding: 8px;
            text-align: left;
        }
        /* css pada th */
        th {
            background-color: #f2f2f2;
            text-align: center;
        }
        /* css pada table-container */
        .table-container {
            width: 80%;
            margin: 0 auto; /* Membuat tabel terletak di tengah halaman */
        }
        /* css pada a hapus */
        a.hapus {
            background-color: red;
            color: white;
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
        }
        /* css pada a edit */
        a.edit {
            background-color: blue;
            color: white;
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
        }
        /* css pada a tambah */
        a.tambah{
            background-color: green; 
            padding: 12px 24px; 
            border-radius: 5px; 
            border: none;
            color: white;
            text-decoration: none;
        }
        /* css pada button container */
        .button-container {
            text-align: left;
            margin-bottom: 30px;
            margin-top: 40px;
        }
        /* css pada h1 */
        h1 {
            color: #000000;
            padding: 20px;
            text-align: center;
        }
        /* css pada form */
        form {
            background-color: #fff;
            width: 600px;
            margin: 0 auto;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        /* css pada label */
        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }
        /* css pada input */
        input[type="text"],
        input[type="number"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        /* css pada select */
        select {
            height: 40px;
        }
        /* css pada input */
        input[type="submit"] {
            background-color: #0c32f2;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        /* css pada input */
        input[type="submit"]:hover {
            background-color: #555;
        }
        /* css pada alert */
        .alert{
            padding: 15px;
            margin-bottom: 15px;
            border: 1px solid;
            border-radius: 5px;
            background-color: #10d13a
        }
        /* css pada close-btn */
        .close-btn {
            float: right;
            cursor: pointer;
        }
        /* css pada close-btn hover*/
        .close-btn:hover {
            font-weight: bold;
        }
    
    </style>
</head>
<body>
        @yield('content')
</body>
</html>