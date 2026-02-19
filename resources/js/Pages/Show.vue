<template>
    <Head title="Whataa - Logiciel de Gestion de Caisse pour Commerces Africains" />
    <AppLayout>
        <!-- Hero Section -->
        <section class="gradient-red text-white py-24 px-4 relative overflow-hidden">
            <div class="absolute inset-0 opacity-10">
                <div class="absolute top-10 right-10 w-32 h-32 bg-white rounded-full blur-3xl"></div>
                <div class="absolute bottom-10 left-10 w-40 h-40 bg-red-400 rounded-full blur-3xl"></div>
            </div>

            <div class="max-w-4xl mx-auto text-center relative z-10">
                <h1 class="text-5xl md:text-7xl font-black mb-6 leading-tight">
                    Gérez Votre Boutique <br />
                    <span class="text-red-200">Même Sans Internet</span>
                </h1>
                <p class="text-xl md:text-2xl mb-4 text-red-100 max-w-3xl mx-auto">
                    Whataa est un logiciel de gestion de caisse, stock et ventes conçu
                    pour les commerces africains.
                </p>
                <div class="mb-8 mt-6">
                    <h2 class="slogan">Moins de perte, Plus de contrôle</h2>
                </div>
                <div class="flex flex-col sm:flex-row gap-4 justify-center mt-12">
                    <button
                        @click="showQuoteModal = true"
                        class="btn-glow bg-white text-red-600 font-bold py-4 px-8 rounded-full text-lg hover:bg-red-50">
                        📥 Demander un Devis
                    </button>
                    <a
                        href="#features"
                        class="border-2 border-white text-white font-bold py-4 px-8 rounded-full text-lg hover:bg-white hover:text-red-600 transition"
                    >
                        📖 En Savoir Plus
                    </a>
                </div>
                <div class="mt-12 bounce-slow">
                    <svg
                        class="w-8 h-8 mx-auto text-white"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M19 14l-7 7m0 0l-7-7m7 7V3"
                        ></path>
                    </svg>
                </div>
            </div>
        </section>

        <!-- Features Section -->
        <section id="features" class="py-20 px-4 bg-gray-50">
            <div class="max-w-6xl mx-auto">
                <h2 class="text-4xl font-black text-center mb-16 text-gray-900">
                    Pourquoi <span class="text-red-600">Whataa</span> ?
                </h2>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div
                        v-for="feature in features"
                        :key="feature.id"
                        class="feature-card bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl border-t-4 border-red-600"
                    >
                        <div class="icon-box bg-red-100 mb-6">{{ feature.icon }}</div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-3">
                            {{ feature.title }}
                        </h3>
                        <p class="text-gray-600 leading-relaxed">
                            {{ feature.description }}
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Video Section -->
        <section id="video" class="py-20 px-4 bg-gray-900">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-5xl font-black text-center mb-4 text-white">
                    Découvrez <span class="text-red-500">Whataa</span> en Action
                </h2>
                <p class="text-center text-gray-300 text-lg mb-12 max-w-2xl mx-auto">
                    Regardez comment Whataa simplifie la gestion de votre boutique
                </p>

                <div class="video-container">
                    <iframe
                        width="560"
                        height="315"
                        src="https://www.youtube.com/embed/KDtssZ9YIcM?si=QRQDG_jMdsYaxe1x"
                        title="Démonstration Whataa"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen
                    ></iframe>
                </div>

                <div class="mt-8 text-center">
                    <button
                        @click="showQuoteModal = true"
                        class="btn-glow inline-block bg-red-600 text-white font-bold py-4 px-8 rounded-full text-lg hover:bg-red-700"
                    >
                        📥 Demander un Devis
                    </button>
                </div>
            </div>
        </section>

        <!-- Statistics Section -->
        <section class="gradient-red text-white py-16 px-4">
            <div class="max-w-6xl mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
                    <div>
                        <h3 class="text-5xl font-black mb-2">1 500+</h3>
                        <p class="text-xl">Installations</p>
                    </div>
                    <div>
                        <h3 class="text-5xl font-black mb-2">4.9★</h3>
                        <p class="text-xl">Note des Utilisateurs</p>
                    </div>
                    <div>
                        <h3 class="text-5xl font-black mb-2">24/7</h3>
                        <p class="text-xl">Support en Présentiel</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Pricing Section -->
        <PricingSection @open-quote="showQuoteModal = true" />

        <!-- Testimonials Section -->
        <section class="pt-5 pb-20 px-4 bg-white">
            <div class="max-w-6xl mx-auto">
                <h2 class="text-5xl font-black text-center mb-16 text-gray-900">
                    Ce que Disent <span class="text-red-600">Nos Commerçants</span>
                </h2>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div
                        v-for="testimonial in testimonials"
                        :key="testimonial.id"
                        class="bg-gray-50 p-8 rounded-2xl shadow-lg"
                    >
                        <div class="flex gap-1 mb-4">
                            <span v-for="n in 5" :key="n" class="text-2xl">⭐</span>
                        </div>
                        <p class="text-gray-700 mb-4">{{ testimonial.text }}</p>
                        <p class="font-bold text-gray-900">{{ testimonial.author }}</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Quote Section -->
        <section class="gradient-red text-white py-24 px-4">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-5xl md:text-6xl font-black mb-6">
                    Prêt à Transformer <br />Votre Boutique ?
                </h2>
                <p class="text-xl md:text-2xl mb-12 text-red-100">
                    Demandez un devis personnalisé sans engagement. Notre équipe vous
                    contactera rapidement.
                </p>

                <button
                    @click="showQuoteModal = true"
                    class="btn-glow bg-white text-red-600 font-bold py-4 px-8 rounded-full text-lg hover:bg-red-50"
                >
                    📥 Demander un Devis Gratuit
                </button>

                <div class="mt-12 p-6 bg-white bg-opacity-20 rounded-xl backdrop-blur-sm">
                    <p class="text-sm text-red-100">
                        ✨ Réponse sous 24h • Support local en présentiel
                    </p>
                    <p class="text-xs text-red-200 mt-2">
                        Nous parlons votre langue et comprenons vos besoins
                    </p>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="bg-gray-900 text-white py-20 px-4">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-4xl font-black mb-6">
                    Des Questions <span class="text-red-500">?</span>
                </h2>
                <p class="text-lg text-gray-300">
                    Contactez notre équipe de support disponible 24/7
                </p>
                <p class="italic text-bold mb-4 text-gray-300">+225 07 87 60 21 32</p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a
                        href="mailto:support@whataa.net"
                        class="gradient-red text-white font-bold py-3 px-8 rounded-full hover:shadow-lg transition"
                    >
                        📧 support@whataa.net
                    </a>
                    <a
                        href="https://wa.me/2250787602132&text=Bonjour%20Whataa%2C%20j'ai%20une%20question%20sur%20votre%20logiciel."
                        target="_blank"
                        class="border-2 border-green-500 text-green-500 font-bold py-3 px-8 rounded-full hover:bg-green-500 hover:text-white transition"
                    >
                        💬 WhatsApp
                    </a>
                </div>
            </div>
        </section>

        <!-- Quote Modal -->
        <QuoteModal :isOpen="showQuoteModal" @close="showQuoteModal = false" />
    </AppLayout>
</template>

<script setup>
import { ref } from "vue";
import AppLayout from "@/Components/HomeLayout.vue";
import QuoteModal from "@/Components/QuoteModal.vue";
import PricingSection from "@/Components/Pricing.vue";
import {Head} from "@inertiajs/vue3";

const showQuoteModal = ref(false);

const features = [
    {
        id: 1,
        icon: "📡",
        title: "Fonctionne Sans Internet",
        description:
            "Gérez votre boutique 24/7, même en cas de coupure internet. Vos données sont synchronisées automatiquement dès que la connexion revient.",
    },
    {
        id: 2,
        icon: "💰",
        title: "Gestion de Caisse",
        description:
            "Enregistrez toutes vos transactions, gérez les remises et contrôlez votre trésorerie en temps réel.",
    },
    {
        id: 3,
        icon: "📦",
        title: "Gestion du Stock",
        description:
            "Suivez vos stocks en temps réel, recevez des alertes de rupture et optimisez vos commandes.",
    },
    {
        id: 4,
        icon: "📊",
        title: "Rapports Détaillés",
        description:
            "Analysez vos ventes, vérifiez vos marges et prenez des décisions basées sur des données réelles.",
    },
    {
        id: 5,
        icon: "🔒",
        title: "Sécurité Complète",
        description:
            "Protégez vos données avec des sauvegardes automatiques et un système d'authentification sécurisé.",
    },
    {
        id: 6,
        icon: "🇨🇮",
        title: "Support Local en Présentiel",
        description:
            "Notre équipe est disponible pour vous aider et former votre personnel sur place, en français.",
    },
];

const testimonials = [
    {
        id: 1,
        text: "Whataa a transformé ma boutique. Avant j'avais des pertes énormes, maintenant je contrôle tout!",
        author: "Yves K. - Abidjan (Supermarché)",
    },
    {
        id: 2,
        text: "Fonctionne sans internet c'est génial! Même quand le courant saute, ma caisse continue de tourner.",
        author: "Fatima M. - Yamoussoukro (Boutique)",
    },
    {
        id: 3,
        text: "Avec la version web je suis à jour partout! Je peux vérifier mes ventes de chez moi, c'est fantastique.",
        author: "Kofi D. - Bouaké (Épicerie)",
    },
];
</script>
