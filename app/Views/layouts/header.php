<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <style>
      
        .navbar {
            background-color: #556EE6; 
        }
        .navbar-brand {
            font-weight: 600;
            color: #FFFFFF;
        }
        .navbar-brand:hover {
            color: #D1D5F5;
        }
        .nav-link {
            color: #FFFFFF;
            transition: color 0.3s ease;
        }
        .nav-link:hover {
            color: #D1D5F5;
        }
        .navbar-toggler {
            border-color: #FFFFFF;
        }
        .navbar-toggler-icon {
            filter: invert(1);
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="/">VibeTix</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="/admin/dashboard">Dashboard Admin</a></li>
                    <li class="nav-item"><a class="nav-link" href="/artis">Daftar Artis</a></li>
                    <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-4">
      
