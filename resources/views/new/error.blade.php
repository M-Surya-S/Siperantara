@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Page Not Found</title>
    <link rel="stylesheet" href="{{ asset('assets/css/error.css') }}">
</head>
<body>
    <div class="container">
        <div class="error-code">
            <h1>
                4<img src="{{ asset('assets/images/logo/logo_error.png') }}" alt="Logo" class="logo-placeholder">4
                <span class="oops-text">Oops! Page Not Found</span>
            </h1>
        </div>
        {{-- <p>The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.</p> --}}
        {{-- <a href="#" class="btn">Go to Homepage</a> --}}
    </div>
</body>
</html>
