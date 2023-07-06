<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Styles -->
</head>

<style>
    .custom-button {
        padding: 20px 40px;
        font-size: 24px;
        border: none;
        border-radius: 10px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;

        background-color: #3490dc;
        color: #fff;
        transition: background-color 0.3s ease;
    }

    .custom-button:hover {
        background-color: yellow;
        color:black;
    }
</style>

<body class="antialiased">
    <div style="display: flex; justify-content: center; align-items: center; height: 100vh; ">
        <button class="custom-button" onclick="window.location.href='/evento'">
            Agendamiento de Citas
        </button>
    </div>
</body>



</html>