<!DOCTYPE html>
<html lang="en" class="bg-gray-950 text-white min-h-screen">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Google OAuth with Laravel App</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body class="flex items-center justify-center min-h-screen px-4">
    <div class="max-w-xl w-full bg-gradient-to-br from-gray-900 via-gray-950 to-gray-900 p-8 rounded-2xl shadow-2xl border border-blue-800/40">
      <div class="text-center">
        <h1 class="text-4xl font-bold text-blue-500 drop-shadow-sm mb-4 animate-fade-in">
          Welcome to the Main Page
        </h1>
        <p class="text-gray-300 mb-8 animate-fade-in delay-100">
          This page is only for login by using your Google Account.
        </p>
        <a href="{{ route('auth.google.redirect') }}"
          class="inline-block bg-blue-600 hover:bg-blue-700 transition-colors duration-300 text-white font-medium px-6 py-3 rounded-xl shadow-lg hover:shadow-blue-600/40 animate-fade-in delay-200">
          Login with Google
        </a>
      </div>
    </div>

    <!-- Animaciones personalizadas -->
    <style>
      @keyframes fade-in {
        from { opacity: 0; transform: translateY(10px); }
        to { opacity: 1; transform: translateY(0); }
      }
      .animate-fade-in {
        animation: fade-in 0.6s ease-out forwards;
      }
      .delay-100 {
        animation-delay: 0.1s;
      }
      .delay-200 {
        animation-delay: 0.2s;
      }
    </style>
  </body>
</html>
