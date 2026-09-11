<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Callood Delivery</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans antialiased">
    <nav class="bg-emerald-600 text-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 py-3 flex justify-between items-center">
            <a href="#" class="text-xl font-bold">🛒 Callood</a>
            <div class="space-x-4">
                <a href="{{ route('products.index') }}" class="hover:underline">Produtos</a>
                <a href="{{ route('customers.index') }}" class="hover:underline">Clientes</a>
                <a href="{{ route('addresses.index') }}" class="hover:underline">Endereços</a>
                <a href="{{ route('orders.index') }}" class="hover:underline">Pedidos</a>
            </div>
        </div>
    </nav>

    <main class="max-w-7xl mx-auto px-4 py-6">
        @if(session('success'))
            <div class="mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative">
                {{ session('success') }}
            </div>
        @endif

        @yield('content')
    </main>
</body>
</html>