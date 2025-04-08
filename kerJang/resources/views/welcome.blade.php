<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>KërJàng - Accueil</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap');
    body { font-family: 'Inter', sans-serif; }
  </style>
</head>
<body class="bg-white text-gray-800">

  <!-- Navigation -->
  <header class="flex justify-between items-center px-6 py-6 max-w-7xl mx-auto">
    <h1 class="text-2xl font-bold text-gray-900">KërJàng</h1>
    <nav class="space-x-6">
      <a href="{{ route('register') }}" class="text-gray-800 hover:text-blue-600">S’inscrire</a>
      <a href="{{ route('login') }}" class="text-gray-800 hover:text-blue-600">Se connecter</a>
    </nav>
  </header>

  <!-- Hero Section -->
  <section class="max-w-7xl mx-auto px-6 py-12 grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
    <!-- Left -->
    <div>
      <h2 class="text-4xl md:text-5xl font-bold leading-tight mb-6">
        Une Plateforme Locale<br>pour Soutenir l’Éducation à Domicile
      </h2>
      <p class="text-lg text-gray-600 mb-6">
        Une plateforme pour connecter les enseignants disponibles avec les parents ou étudiants
        cherchant des cours particuliers à domicile ou en ligne.
      </p>
      <a href="#" class="inline-block bg-blue-600 text-white px-6 py-3 rounded-lg text-base font-semibold hover:bg-blue-500 transition">Rechercher</a>
    </div>

    <!-- Right -->
    <div class="relative">
      <img src="{{ asset('images/Education-rafiki.png') }}" alt="Illustration éducation" class="w-full">
    </div>
  </section>

  <!-- Search Form -->
  <div class="max-w-4xl mx-auto px-6">
    <div class="flex flex-col md:flex-row items-center bg-white shadow rounded-xl overflow-hidden border border-gray-200">
      <select class="flex-1 p-4 text-gray-700 outline-none border-b md:border-b-0 md:border-r border-gray-200">
        <option>Matière</option>
        <option>Mathématiques</option>
        <option>Français</option>
        <option>Physique</option>
      </select>
      <select class="flex-1 p-4 text-gray-700 outline-none border-b md:border-b-0 md:border-r border-gray-200">
        <option>Lieu</option>
        <option>Dakar</option>
        <option>Thiès</option>
        <option>Saint-Louis</option>
      </select>
      <button class="p-4 bg-blue-600 text-white font-semibold hover:bg-blue-500 w-full md:w-auto">🔍</button>
    </div>
  </div>

  <!-- Footer -->
  <footer class="bg-gray-100 text-gray-700 py-6 mt-12">
    <div class="max-w-7xl mx-auto px-6 text-center">
      <p class="text-sm">
        © 2025 KërJàng. Tous droits réservés.
      </p>
      <p class="text-sm mt-2">
        <a href="#" class="text-blue-600 hover:underline">Mentions légales</a> |
        <a href="#" class="text-blue-600 hover:underline">Politique de confidentialité</a>
      </p>
    </div>
  </footer>

</body>
</html>
