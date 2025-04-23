<!DOCTYPE html>
<html lang="en" class="bg-gray-950 text-white min-h-screen">
  <head>
    <meta charset="UTF-8" />
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/tsparticles@3/tsparticles.bundle.min.js"></script>
    <style>
      #tsparticles {
        position: fixed;
        z-index: -1;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
      }
    </style>
  </head>

  <body class="flex items-center justify-center min-h-screen px-4 relative">

    <!-- Fondo de partículas -->
    <div id="tsparticles"></div>

    <!-- Contenedor del dashboard -->
    <div class="max-w-3xl w-full bg-gradient-to-br from-gray-900 via-gray-950 to-gray-900 p-10 rounded-3xl shadow-2xl border border-blue-700/40 backdrop-blur-md bg-opacity-60 text-center">
      <h1 class="text-4xl font-extrabold text-blue-500 drop-shadow mb-4 animate-fade-in">Great, you did it!</h1>
      <p class="text-lg text-gray-300 mb-6 animate-fade-in delay-100">
        Hi <span class="text-blue-400 font-semibold">{{ auth()->user()->name }}</span>, you successfully logged in with your Google Account in this Laravel Project!
      </p>
      <div class="flex justify-center animate-fade-in delay-200">
        <img 
          src="https://media.giphy.com/media/v1.Y2lkPTc5MGI3NjExaWVlemF6cmxiMHN3aGV5aDU1NGFwNXltNzFwN3VybzltYXpvZTBoYyZlcD12MV9naWZzX3NlYXJjaCZjdD1n/HzPtbOKyBoBFsK4hyc/giphy.gif" 
          alt="Celebration" 
          class="rounded-2xl shadow-lg max-w-full w-80 hover:scale-105 transition-transform duration-300"
        />
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
      .delay-100 { animation-delay: 0.1s; }
      .delay-200 { animation-delay: 0.2s; }
    </style>

    <!-- Configuración de partículas -->
    <script>
      tsParticles.load("tsparticles", {
        background: { color: "#0f172a" },
        particles: {
          number: { value: 50, density: { enable: true, area: 800 } },
          color: { value: "#3b82f6" },
          links: { enable: true, color: "#3b82f6", distance: 130, opacity: 0.3 },
          move: { enable: true, speed: 1 },
          size: { value: 2 },
          opacity: { value: 0.5 }
        },
        fullScreen: { enable: false }
      });
    </script>
  </body>
</html>
