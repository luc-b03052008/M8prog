<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Shoe Shop</title>
    <style>
        body{font-family:Arial,Helvetica,sans-serif;margin:0;padding:0;background:#f5f5f5}
        .container{max-width:1000px;margin:0 auto;padding:16px}
        header,footer{background:#fff;padding:12px 0;box-shadow:0 1px 0 rgba(0,0,0,.05)}
        nav a{display:inline-block;padding:8px 12px;border-radius:4px;margin-right:6px;color:#333;text-decoration:none}
        nav a.active{background:#007bff;color:#fff}
        .grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:12px}
        .card{background:#fff;padding:12px;border-radius:6px;box-shadow:0 1px 3px rgba(0,0,0,.06)}
        .logo{font-weight:700;font-size:1.2rem}
        .header-top{display:flex;align-items:center;justify-content:space-between}
    </style>
</head>
<body>
    <header>
        <div class="container header-top">
            <div style="display:flex;gap:12px;align-items:center">
                <x-header-logo />
                <x-header-nav :active="$active" />
            </div>
            <x-header-search />
        </div>
    </header>

    <main class="container" style="padding:18px 16px">
        {{ $slot }}
    </main>

    <footer>
        <div class="container" style="display:flex;justify-content:space-between;gap:12px">
            <x-footer-contact />
            <x-footer-newsletter />
        </div>
    </footer>
</body>
</html>
