<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>KërJàng - Accueil</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&display=swap');
    
    :root {
      --primary: #4361ee;
      --primary-dark: #3a56d4;
      --secondary: #ff6b6b;
      --accent: #ffd166;
    }
    
    body {
      font-family: 'Nunito', sans-serif;
      scroll-behavior: smooth;
    }
    
    .gradient-bg {
      background: linear-gradient(135deg, #4361ee 0%, #3a56d4 100%);
    }
    
    .card-hover {
      transition: all 0.3s ease;
    }
    
    .card-hover:hover {
      transform: translateY(-10px);
      box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
    }
    
    .search-form {
      border-radius: 20px;
      box-shadow: 0 10px 30px rgba(67, 97, 238, 0.15);
    }
    
    .btn-primary {
      background-color: var(--primary);
      transition: all 0.3s ease;
    }
    
    .btn-primary:hover {
      background-color: var(--primary-dark);
      transform: translateY(-2px);
    }
    
    .hero-wave {
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      overflow: hidden;
      line-height: 0;
    }
  </style>
</head>

<body class="bg-gray-50 text-gray-800">
  <!-- Navigation -->
  <header class="bg-white shadow-sm sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between items-center py-4">
        <div class="flex items-center">
          <span class="text-3xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-indigo-600">KërJàng</span>
        </div>
        
        <!-- Mobile menu button -->
        <div class="md:hidden">
          <button type="button" class="text-gray-500 hover:text-gray-700 focus:outline-none" id="mobile-menu-button">
            <i class="fas fa-bars text-xl"></i>
          </button>
        </div>
        
        <!-- Desktop Navigation -->
        <nav class="hidden md:flex space-x-8 items-center">
          <a href="#" class="text-gray-700 hover:text-blue-600 font-medium">Accueil</a>
          <a href="#" class="text-gray-700 hover:text-blue-600 font-medium">Comment ça marche</a>
          <a href="#recherche" class="text-gray-700 hover:text-blue-600 font-medium">Nos enseignants</a>
          <a href="{{ route('register') }}" class="px-4 py-2 rounded-full border border-blue-600 text-blue-600 hover:bg-blue-50 transition font-medium">S'inscrire</a>
          <a href="{{ route('login') }}" class="px-4 py-2 rounded-full bg-blue-600 text-white hover:bg-blue-700 transition font-medium btn-primary">Se connecter</a>
        </nav>
      </div>
    </div>
    
    <!-- Mobile Navigation (hidden by default) -->
    <div class="hidden md:hidden bg-white border-t" id="mobile-menu">
      <div class="px-2 pt-2 pb-3 space-y-1">
        <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-blue-50 hover:text-blue-600">Accueil</a>
        <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-blue-50 hover:text-blue-600">Comment ça marche</a>
        <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-blue-50 hover:text-blue-600">Nos enseignants</a>
        <a href="{{ route('register') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-blue-50 hover:text-blue-600">S'inscrire</a>
        <a href="{{ route('login') }}" class="block px-3 py-2 rounded-md text-base font-medium bg-blue-600 text-white hover:bg-blue-700">Se connecter</a>
      </div>
    </div>
  </header>

<!-- Hero Section -->
<section class="relative overflow-hidden gradient-bg text-white pt-4">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 md:py-12">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
      <!-- Left -->
      <div class="order-2 md:order-1">
        <h1 class="text-3xl md:text-4xl lg:text-5xl font-extrabold leading-tight mb-4">
          Trouvez le <span class="text-yellow-300">parfait enseignant</span> pour votre apprentissage
        </h1>
        <p class="text-base md:text-lg text-blue-100 mb-6">
          Connectez-vous avec des enseignants qualifiés pour des cours particuliers à domicile ou en ligne. Apprenez à votre rythme, selon vos besoins.
        </p>
        <div class="flex flex-col sm:flex-row space-y-3 sm:space-y-0 sm:space-x-4">
          <a href="#recherche" class="px-5 py-2 rounded-full bg-white text-blue-600 font-bold hover:bg-blue-50 transition text-center">
            Rechercher un enseignant
          </a>
          <a href="{{ route('register') }}" class="px-5 py-2 rounded-full bg-yellow-400 text-blue-900 font-bold hover:bg-yellow-300 transition text-center">
            Devenir enseignant
          </a>
        </div>
      </div>
      
      <!-- Right -->
      <div class="order-1 md:order-2 flex justify-center">
        <img src="{{ asset('images/Education-rafiki.png') }}" alt="Illustration éducation" class="max-w-full h-auto rounded-lg shadow-xl">
      </div>
    </div>
  </div>

</section>


  <!-- Search Form -->
  <section id="recherche" class="py-16">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-10">
        <h2 class="text-3xl font-bold text-gray-800">Trouvez l'enseignant idéal</h2>
        <p class="mt-3 text-lg text-gray-600">Filtrez selon vos besoins et prenez contact rapidement</p>
      </div>
      
      <div class="search-form bg-white p-1 sm:p-2 rounded-xl shadow-lg border border-gray-100">
        <form class="flex flex-col sm:flex-row">
          <div class="flex-1 p-3">
            <label for="subject" class="block text-sm font-medium text-gray-700">Matière</label>
            <div class="mt-1 relative rounded-md">
              <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <i class="fas fa-book text-gray-400"></i>
              </div>
              <select id="subject" name="subject" class="block w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg bg-white focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                <option value="">Toutes les matières</option>
                <option value="math">Mathématiques</option>
                <option value="french">Français</option>
                <option value="physics">Physique</option>
                <option value="chemistry">Chimie</option>
                <option value="history">Histoire</option>
                <option value="geography">Géographie</option>
                <option value="english">Anglais</option>
              </select>
            </div>
          </div>
          
          <div class="flex-1 p-3">
            <label for="location" class="block text-sm font-medium text-gray-700">Lieu</label>
            <div class="mt-1 relative rounded-md">
              <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <i class="fas fa-map-marker-alt text-gray-400"></i>
              </div>
              <select id="location" name="location" class="block w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg bg-white focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                <option value="">Toutes les villes</option>
                <option value="dakar">Dakar</option>
                <option value="thies">Thiès</option>
                <option value="saintlouis">Saint-Louis</option>
                <option value="mbour">Mbour</option>
                <option value="rufisque">Rufisque</option>
                <option value="online">Cours en ligne</option>
              </select>
            </div>
          </div>
          
          <div class="flex-1 p-3">
            <label for="level" class="block text-sm font-medium text-gray-700">Niveau</label>
            <div class="mt-1 relative rounded-md">
              <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <i class="fas fa-graduation-cap text-gray-400"></i>
              </div>
              <select id="level" name="level" class="block w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg bg-white focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                <option value="">Tous les niveaux</option>
                <option value="primary">Primaire</option>
                <option value="middle">Collège</option>
                <option value="high">Lycée</option>
              </select>
            </div>
          </div>
          
          <div class="p-3 flex items-end">
            <button type="submit" class="w-full px-6 py-3 bg-blue-600 text-white font-bold rounded-lg hover:bg-blue-700 transition focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 btn-primary">
              <i class="fas fa-search mr-2"></i>Rechercher
            </button>
          </div>
        </form>
      </div>
    </div>
  </section>

  <!-- Features -->
  <section class="py-12 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-16">
        <h2 class="text-3xl font-bold text-gray-800">Pourquoi choisir KërJàng?</h2>
        <p class="mt-4 text-lg text-gray-600 max-w-3xl mx-auto">Notre plateforme vous offre une expérience d'apprentissage personnalisée avec des enseignants qualifiés et passionnés.</p>
      </div>
      
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 card-hover">
          <div class="w-12 h-12 flex items-center justify-center rounded-full bg-blue-100 text-blue-600 mb-4">
            <i class="fas fa-user-check text-xl"></i>
          </div>
          <h3 class="text-xl font-bold text-gray-800 mb-2">Enseignants vérifiés</h3>
          <p class="text-gray-600">Tous nos enseignants sont soigneusement sélectionnés et leurs qualifications sont vérifiées.</p>
        </div>
        
        <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 card-hover">
          <div class="w-12 h-12 flex items-center justify-center rounded-full bg-green-100 text-green-600 mb-4">
            <i class="fas fa-house-user text-xl"></i>
          </div>
          <h3 class="text-xl font-bold text-gray-800 mb-2">À domicile ou en ligne</h3>
          <p class="text-gray-600">Choisissez entre des cours à votre domicile ou des sessions en ligne, selon votre préférence.</p>
        </div>
        
        <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 card-hover">
          <div class="w-12 h-12 flex items-center justify-center rounded-full bg-purple-100 text-purple-600 mb-4">
            <i class="fas fa-certificate text-xl"></i>
          </div>
          <h3 class="text-xl font-bold text-gray-800 mb-2">Qualité garantie</h3>
          <p class="text-gray-600">Nous nous engageons à vous offrir une expérience d'apprentissage de qualité ou vous êtes remboursé.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonials -->
  <section class="py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-12">
        <h2 class="text-3xl font-bold text-gray-800">Ce que disent nos utilisateurs</h2>
        <p class="mt-4 text-lg text-gray-600">Découvrez les témoignages de parents et d'élèves satisfaits</p>
      </div>
      
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="bg-white p-6 rounded-xl shadow-md border border-gray-100">
          <div class="flex items-center mb-4">
            <div class="text-yellow-400 flex">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <span class="ml-2 text-gray-600">5.0</span>
          </div>
          <p class="text-gray-600 mb-6">"Grâce à KërJàng, ma fille a trouvé un excellent professeur de mathématiques. Ses notes se sont considérablement améliorées en seulement quelques mois!"</p>
          <div class="flex items-center">
            <div class="w-12 h-12 rounded-full bg-blue-100 flex items-center justify-center text-blue-600 font-bold">AM</div>
            <div class="ml-3">
              <h4 class="font-semibold text-gray-800">Aïda Mbaye</h4>
              <p class="text-sm text-gray-500">Parent d'élève, Dakar</p>
            </div>
          </div>
        </div>
        
        <div class="bg-white p-6 rounded-xl shadow-md border border-gray-100">
          <div class="flex items-center mb-4">
            <div class="text-yellow-400 flex">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
            </div>
            <span class="ml-2 text-gray-600">4.5</span>
          </div>
          <p class="text-gray-600 mb-6">"En tant qu'enseignant, KërJàng m'a permis de trouver facilement des élèves près de chez moi. La plateforme est intuitive et professionnelle."</p>
          <div class="flex items-center">
            <div class="w-12 h-12 rounded-full bg-green-100 flex items-center justify-center text-green-600 font-bold">IS</div>
            <div class="ml-3">
              <h4 class="font-semibold text-gray-800">Ibrahim Sow</h4>
              <p class="text-sm text-gray-500">Enseignant, Thiès</p>
            </div>
          </div>
        </div>
        
        <div class="bg-white p-6 rounded-xl shadow-md border border-gray-100">
          <div class="flex items-center mb-4">
            <div class="text-yellow-400 flex">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <span class="ml-2 text-gray-600">5.0</span>
          </div>
          <p class="text-gray-600 mb-6">"Les cours en ligne ont été parfaits pour ma préparation au bac. Mon professeur était disponible et patient. J'ai réussi avec mention!"</p>
          <div class="flex items-center">
            <div class="w-12 h-12 rounded-full bg-purple-100 flex items-center justify-center text-purple-600 font-bold">FD</div>
            <div class="ml-3">
              <h4 class="font-semibold text-gray-800">Fatou Diallo</h4>
              <p class="text-sm text-gray-500">Étudiante, Saint-Louis</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="py-16 bg-blue-600 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
      <h2 class="text-3xl font-bold mb-6">Prêt à commencer votre apprentissage?</h2>
      <p class="text-xl text-blue-100 mb-8 max-w-3xl mx-auto">Rejoignez notre communauté et connectez-vous avec des enseignants qualifiés dès aujourd'hui.</p>
      <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-6">
        <a href="{{ route('register') }}" class="px-8 py-4 rounded-full bg-white text-blue-600 font-bold hover:bg-blue-50 transition text-center">
          Créer un compte
        </a>
        <a href="#recherche" class="px-8 py-4 rounded-full bg-transparent border-2 border-white text-white font-bold hover:bg-white hover:text-blue-600 transition text-center">
          Rechercher un enseignant
        </a>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-gray-900 text-gray-300 py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
        <div>
          <h3 class="text-2xl font-bold text-white mb-4">KërJàng</h3>
          <p class="text-gray-400">La plateforme qui connecte les enseignants et les apprenants au Sénégal.</p>
          <div class="flex space-x-4 mt-6">
            <a href="#" class="text-gray-400 hover:text-white transition">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="text-gray-400 hover:text-white transition">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="text-gray-400 hover:text-white transition">
              <i class="fab fa-instagram"></i>
            </a>
            <a href="#" class="text-gray-400 hover:text-white transition">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
        </div>
        
        <div>
          <h4 class="text-lg font-semibold text-white mb-4">À propos</h4>
          <ul class="space-y-2">
            <li><a href="#" class="text-gray-400 hover:text-white transition">Notre mission</a></li>
            <li><a href="#" class="text-gray-400 hover:text-white transition">Comment ça marche</a></li>
            <li><a href="#" class="text-gray-400 hover:text-white transition">Témoignages</a></li>
            <li><a href="#" class="text-gray-400 hover:text-white transition">Carrières</a></li>
          </ul>
        </div>
        
        <div>
          <h4 class="text-lg font-semibold text-white mb-4">Support</h4>
          <ul class="space-y-2">
            <li><a href="#" class="text-gray-400 hover:text-white transition">Centre d'aide</a></li>
            <li><a href="#" class="text-gray-400 hover:text-white transition">FAQ</a></li>
            <li><a href="#" class="text-gray-400 hover:text-white transition">Contactez-nous</a></li>
            <li><a href="#" class="text-gray-400 hover:text-white transition">Signaler un problème</a></li>
          </ul>
        </div>
        
        <div>
          <h4 class="text-lg font-semibold text-white mb-4">Légal</h4>
          <ul class="space-y-2">
            <li><a href="#" class="text-gray-400 hover:text-white transition">Conditions d'utilisation</a></li>
            <li><a href="#" class="text-gray-400 hover:text-white transition">Politique de confidentialité</a></li>
            <li><a href="#" class="text-gray-400 hover:text-white transition">Cookies</a></li>
            <li><a href="#" class="text-gray-400 hover:text-white transition">Mentions légales</a></li>
          </ul>
        </div>
      </div>
      
      <div class="border-t border-gray-800 mt-12 pt-8 text-center">
        <p>© 2025 KërJàng. Tous droits réservés.</p>
      </div>
    </div>
  </footer>

  <script>
    // Mobile menu toggle
    document.getElementById('mobile-menu-button').addEventListener('click', function() {
      const mobileMenu = document.getElementById('mobile-menu');
      mobileMenu.classList.toggle('hidden');
    });
    
    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
        e.preventDefault();
        
        document.querySelector(this.getAttribute('href')).scrollIntoView({
          behavior: 'smooth'
        });
      });
    });
  </script>
</body>
</html>
