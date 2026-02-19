<template>
    <div class="smooth-scroll bg-white">
        <!-- WhatsApp Floating Button -->
        <a
            href="https://wa.me/2250787602132"
            target="_blank"
            class="whatsapp-float"
            title="Contactez-nous sur WhatsApp"
        >
            <div class="whatsapp-btn">💬</div>
        </a>

        <!-- Navigation -->
        <nav class="gradient-red sticky top-0 z-50 shadow-lg">
            <div
                class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex justify-between items-center"
            >
                <a href="/" class="flex items-center gap-2 text-white font-bold text-2xl">
                    <img src="/image/logo-white-2.png" alt="" style="height: 35px" />
                </a>
                <div class="hidden md:flex gap-8 text-white">
                    <a href="#features" class="hover:text-red-200 transition">
                        Fonctionnalités
                    </a>
                    <a href="#video" class="hover:text-red-200 transition">
                        Démonstration
                    </a>
                    <a href="#pricing" class="hover:text-red-200 transition">
                        Tarifs
                    </a>
                    <a href="#contact" class="hover:text-red-200 transition">
                        Contact
                    </a>
                </div>
            </div>
        </nav>

        <!-- Slot pour le contenu -->
        <slot />

        <!-- Footer -->
        <footer class="bg-gray-800 text-gray-300 py-12 px-4">
            <div class="max-w-6xl mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
                    <div>
                        <h3 class="text-white font-bold text-lg mb-4">Whataa</h3>
                        <p> Moins de perte, plus de contrôle. 🇨🇮
                        </p>
                    </div>
                    <div>
                        <h3 class="text-white font-bold text-lg mb-4">Produit</h3>
                        <ul class="space-y-2">
                            <li>
                                <a href="#features" class="hover:text-white transition">
                                    Fonctionnalités
                                </a>
                            </li>
                            <li>
                                <a href="#video" class="hover:text-white transition">
                                    Démonstration
                                </a>
                            </li>
                            <li>
                                <a href="#pricing" class="hover:text-white transition">
                                    Tarifs
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-white font-bold text-lg mb-4">Support</h3>
                        <ul class="space-y-2">
                            <li>
                                <a href="mailto:support@whataa.net" class="hover:text-white transition">
                                    Email
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="hover:text-white transition">FAQ</a>
                            </li>
                            <li>
                                <a
                                    href="https://wa.me/2250787602132&text=Bonjour%20Whataa%2C%20j'ai%20besoin%20d'aide%20pour%20..."
                                    target="_blank"
                                    class="hover:text-white transition">
                                    WhatsApp
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-white font-bold text-lg mb-4">Légal</h3>
                        <ul class="space-y-2">
                            <li>
                                <a href="javascript:void(0)" class="hover:text-white transition">
                                    Politique de Confidentialité
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="hover:text-white transition">
                                    Conditions d'Utilisation
                                </a>
                            </li>
                            <li>
                                <a href="#" class="hover:text-white transition">Cookies</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="border-t border-gray-700 pt-8">
                    <div class="flex flex-col md:flex-row justify-between items-center">
                        <p>&copy; 2026 Whataa. Tous droits réservés.</p>
                        <div class="flex gap-6 mt-4 md:mt-0">
                            <a target="_blank" href="https://www.facebook.com/a7signal" class="hover:text-white transition">Facebook</a>
                            <a target="_blank" href="https://www.linkedin.com/company/a7signal" class="hover:text-white transition">LinkedIn</a>
                        </div>
                    </div>
                    <p class="text-center mt-6 text-sm">
                        Fait avec ❤️ pour les Africains 🇨🇮
                    </p>
                </div>
            </div>
        </footer>
    </div>
</template>

<script setup>
// Pas d'import du composant ici pour éviter la récursion
</script>
