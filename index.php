<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chef Extraordinaire - Expérience Gastronomique Unique</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Montserrat:wght@300;400;600&display=swap">
    <style>
        .font-playfair { font-family: 'Playfair Display', serif; }
        .font-montserrat { font-family: 'Montserrat', sans-serif; }
    </style>
</head>
<body class="bg-white font-montserrat">
    <!-- NAv -->
    <nav class="fixed w-full bg-white/90 backdrop-blur-sm z-50 shadow-sm">
        <div class="container mx-auto px-4 py-4">
            <div class="flex justify-between items-center">
                <h1 class="text-2xl font-playfair font-bold">Chef Michel</h1>
                <div class="hidden md:flex space-x-8">
                    <a href="#accueil" class="hover:text-amber-600 transition">Accueil</a>
                    <a href="#menus" class="hover:text-amber-600 transition">Menus</a>
                    <a href="#experience" class="hover:text-amber-600 transition">Expérience</a>
                    <a href="#reservation" class="hover:text-amber-600 transition">Réservation</a>
                </div>
                <div class="flex space-x-4">
                    <button id="loginBtn" class="px-4 py-2 text-amber-600 hover:text-amber-700 transition">Connexion</button>
                    <button id="registerBtn" class="px-4 py-2 bg-amber-600 text-white rounded hover:bg-amber-700 transition">Inscription</button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="accueil" class="min-h-screen flex items-center justify-center bg-cover bg-center" style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('https://images.unsplash.com/photo-1414235077428-338989a2e8c0?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80')">
        <div class="text-center text-white">
            <h1 class="text-5xl md:text-7xl font-playfair mb-6">Une Expérience Culinaire Unique</h1>
            <p class="text-xl md:text-2xl mb-8">Découvrez la haute gastronomie à domicile</p>
            <button class="bg-amber-600 text-white px-8 py-3 rounded-full text-lg hover:bg-amber-700 transition">
                Réserver une expérience
            </button>
        </div>
    </section>

    <!-- Menus Section -->
    <section id="menus" class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-playfair text-center mb-16">Nos Menus d'Exception</h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Menu Card 1 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1544025162-d76694265947?ixlib=rb-1.2.1&auto=format&fit=crop&w=1349&q=80" alt="Menu Découverte" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="font-playfair text-2xl mb-4">Menu Découverte</h3>
                        <p class="text-gray-600 mb-4">Une introduction à notre cuisine avec 5 services</p>
                        <p class="text-amber-600 text-xl font-semibold">180€ par personne</p>
                    </div>
                </div>
                <!-- Menu Card 2 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1514326640560-7d063ef2aed5?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Menu Signature" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="font-playfair text-2xl mb-4">Menu Signature</h3>
                        <p class="text-gray-600 mb-4">Notre menu emblématique en 7 services</p>
                        <p class="text-amber-600 text-xl font-semibold">250€ par personne</p>
                    </div>
                </div>
                <!-- Menu Card 3 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1559925393-8be0ec4767c8?ixlib=rb-1.2.1&auto=format&fit=crop&w=1351&q=80" alt="Menu Excellence" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="font-playfair text-2xl mb-4">Menu Excellence</h3>
                        <p class="text-gray-600 mb-4">Une expérience gastronomique ultime en 9 services</p>
                        <p class="text-amber-600 text-xl font-semibold">350€ par personne</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Experience Section -->
    <section id="experience" class="py-20">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-4xl font-playfair mb-6">L'Excellence à Domicile</h2>
                    <p class="text-gray-600 mb-8">Vivez une expérience gastronomique unique dans le confort de votre domicile. Notre chef étoilé transformera votre cuisine en un restaurant gastronomique le temps d'une soirée.</p>
                    <ul class="space-y-4">
                        <li class="flex items-center">
                            <svg class="w-6 h-6 text-amber-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Menu personnalisé selon vos préférences
                        </li>
                        <li class="flex items-center">
                            <svg class="w-6 h-6 text-amber-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Service professionnel inclus
                        </li>
                        <li class="flex items-center">
                            <svg class="w-6 h-6 text-amber-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Harmonie parfaite entre les mets
                        </li>
                    </ul>
                </div>
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1577219491135-ce391730fb2c?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Chef en action" class="rounded-lg shadow-xl">
                </div>
            </div>
        </div>
    </section>

    <!-- Reservation Section -->
    <section id="reservation" class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-playfair text-center mb-16">Réserver votre Expérience</h2>
            <div class="max-w-2xl mx-auto bg-white rounded-lg shadow-lg p-8">
                <form id="reservationForm" class="space-y-6">
                    <div>
                        <label class="block text-gray-700 mb-2">Date souhaitée</label>
                        <input type="date" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-amber-600">
                    </div>
                    <div>
                        <label class="block text-gray-700 mb-2">Nombre de convives</label>
                        <select class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-amber-600">
                            <option>1 personne</option>
                            <option>2 personnes</option>
                            <option>4 personnes</option>
                            <option>6 personnes</option>
                            <option>8 personnes</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-gray-700 mb-2">Menu choisi</label>
                        <select class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-amber-600">
                            <option>Menu Découverte</option>
                            <option>Menu Signature</option>
                            <option>Menu Excellence</option>
                        </select>
                    </div>
                    <button type="submit" class="w-full bg-amber-600 text-white py-3 rounded hover:bg-amber-700 transition">
                        Réserver
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-3 gap-8">
                <div>
                    <h3 class="text-xl font-playfair mb-4">Contact</h3>
                    <p>Email: contact@chefmichel.com</p>
                    <p>Téléphone: +33 1 23 45 67 89</p>
                </div>
                <div>
                    <h3 class="text-xl font-playfair mb-4">Horaires</h3>
                    <p>Du Mardi au Samedi</p>
                    <p>19:00 - 23:00</p>
                </div>
                <div>
                    <h3 class="text-xl font-playfair mb-4">Suivez-nous</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="hover:text-amber-600 transition">Instagram</a>
                        <a href="#" class="hover:text-amber-600 transition">Facebook</a>
                        <a href="#" class="hover:text-amber-600 transition">Twitter</a>
                    </div>
                </div>
            </div>
            <div class="mt-8 pt-8 border-t border-gray-800 text-center">
                <p>&copy; 2024 Chef Michel. Tous droits réservés.</p>
            </div>
        </div>
    </footer>

    <script>
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Form submission handler
        document.getElementById('reservationForm').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Votre demande de réservation a été envoyée. Nous vous contacterons rapidement pour la confirmation.');
        });

        // Mobile menu toggle (you can expand this for a proper mobile menu)
        const mobileMenuBtn = document.createElement('button');
        mobileMenuBtn.className = 'md:hidden';
        mobileMenuBtn.innerHTML = `
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-16 6h16"></path>
            </svg>
        `;
    </script>
</body>
</html>