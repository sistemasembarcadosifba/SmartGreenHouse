<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Temperature and Humidity Dashboard')</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- JSC.Chart Library -->
    <script src="https://code.jscharting.com/2.9.0/jscharting.js"></script>

    <!-- Custom Styles -->
    <style>
        body, html {
            margin: 0;
            padding: 0;
            font-family: 'Trebuchet MS', sans-serif;
            background: linear-gradient(135deg, ##7a01c4, ##7a01c8, ##7a01c9, #64B5F6);
            color: #eee;
            box-sizing: border-box;
            height: 100%;
        }

        #dashboard {
            padding: 20px;
            width: 100%;
            box-sizing: border-box;
            margin-top: 60px; /* Space for navbar */
        }

        #charts {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: space-between;
        }

        #chartTempDiv, #chartHumidityDiv {
            flex: 1;
            min-width: 300px;
            height: 300px;
            border-radius: 15px;
            background-color: ##7a01c4;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #0D47A1;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        table, th, td {
            border: none;
        }

        th, td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #1565C0;
            color: #fff;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #1976D2;
        }

        tr:nth-child(odd) {
            background-color: #1E88E5;
        }

        tr:hover {
            background-color: #0D47A1;
            color: #fff;
        }

        .error {
            color: #D32F2F;
            font-weight: bold;
            margin-top: 10px;
        }
    </style>

    @stack('styles')
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src=" {{ asset('images/logo.png')}}" width="80" height="80"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active d-flex" href="#"><i class="bi bi-clipboard-data" style="margin-right: 4px"></i><p>Dashboard</p></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-thermometer"></i>Dados de Temperatura</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-thermometer"></i>Dados de Umidade</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex" href="#"><i class="bi bi-gear" style="margin-right: 4px;"></i><p>Configurações</p></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex" href="#"><i class="bi bi-person" style="margin-right: 4px"></i><p>Perfil</p></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="dashboard">
        @yield('content')
    </div>

    <!-- Bootstrap JS (with Popper.js) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

    @stack('scripts')
</body>
</html>
