<template>
    <section id="pricing" class="py-20 px-4 bg-gray-50">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-5xl font-black text-center mb-4 text-gray-900">
                Choisissez Votre <span class="text-red-600">Plan</span>
            </h2>
            <p class="text-center text-gray-600 text-lg mb-16 max-w-2xl mx-auto">
                Des solutions adaptées à tous les types de commerces
            </p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Plan Starter -->
                <div class="pricing-card bg-white rounded-2xl shadow-lg overflow-hidden border-2 border-gray-200 hover:border-red-600">
                    <div class="p-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-2">🎯 Commerçant</h3>
                        <p class="text-gray-600 mb-6 font-semibold">Licence Unique</p>
                        <div class="mb-8">
                            <p class="text-sm text-gray-500">À partir de</p>
                            <span class="text-4xl font-black text-gray-900">50 000 FCFA</span>
                            <p class="text-gray-600 mt-2"> Par An</p>
                        </div>
                        <a href="/docs/Whataa.zip" target="_blank" @click="counterDownload('starter')"
                            class="w-full block text-center text-md bg-red-200 text-red-900 font-bold py-3 px-6 rounded-full mb-8 hover:bg-red-300 transition">
                            📥 Télécharger Gratuitement
                        </a>
                        <div class="space-y-4">
                            <div class="flex items-center gap-3">
                                <span class="text-xl text-red-600">✔️</span>
                                <p class="text-gray-700"> 7 jours d'essai gratuit</p>
                            </div>
                            <div class="flex items-center gap-3">
                                <span class="text-xl text-red-600">✔️</span>
                                <p class="text-gray-700">1 poste</p>
                            </div>
                            <div class="flex items-center gap-3">
                                <span class="text-xl text-red-600">✔️</span>
                                <p class="text-gray-700">Gestion des ventes</p>
                            </div>
                            <div class="flex items-center gap-3">
                                <span class="text-xl text-red-600">✔️</span>
                                <p class="text-gray-700">Gestion du stock</p>
                            </div>
                            <div class="flex items-center gap-3">
                                <span class="text-xl text-red-600">✔️</span>
                                <p class="text-gray-700">Fonctionne sans internet</p>
                            </div>
                            <div class="flex items-center gap-3">
                                <span class="text-xl text-red-600">✔️</span>
                                <p class="text-gray-700">Sauvegarder automatique</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Plan Business (Featured) -->
                <div class="pricing-card featured bg-white rounded-2xl shadow-2xl overflow-hidden border-2 border-red-600 relative">
                    <div class="badge-popular text-white text-center py-2 font-bold text-sm">
                        ⭐ PLUS POPULAIRE
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-2">💼 Business</h3>
                        <p class="text-gray-600 mb-6 font-semibold">Multi Postes</p>
                        <div class="mb-8">
                            <p class="text-sm text-gray-500">À partir de</p>
                            <span class="text-4xl font-black text-red-600">200 000 FCFA</span>
                            <p class="text-gray-600 mt-2 italic">50 000 FCFA/mois</p>
                        </div>

                        <button
                            @click="$emit('open-quote')"
                            class="btn-glow w-full block text-center gradient-red text-white font-bold py-3 px-6 rounded-full mb-8 hover:shadow-lg"
                        >
                            📥 Demander un Devis
                        </button>

                        <div class="space-y-4">
                            <div class="flex items-center gap-3">
                                <span class="text-xl text-red-600">✔️</span>
                                <p class="text-gray-700 font-semibold">Plusieurs caissiers</p>
                            </div>
                            <div class="flex items-center gap-3">
                                <span class="text-xl text-red-600">✔️</span>
                                <p class="text-gray-700 font-semibold">Réseau local</p>
                            </div>
                            <div class="flex items-center gap-3">
                                <span class="text-xl text-red-600">✔️</span>
                                <p class="text-gray-700 font-semibold">Multi-utilisateurs illimités</p>
                            </div>
                            <div class="flex items-center gap-3">
                                <span class="text-xl text-red-600">✔️</span>
                                <p class="text-gray-700 font-semibold">Rapports avancés</p>
                            </div>
                            <div class="flex items-center gap-3">
                                <span class="text-xl text-red-600">✔️</span>
                                <p class="text-gray-700 font-semibold">Sécurité renforcée</p>
                            </div>
                            <div class="flex items-center gap-3">
                                <span class="text-xl text-red-600">✔️</span>
                                <p class="text-gray-700 font-semibold">Support prioritaire</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Plan Web -->
                <div class="pricing-card bg-white rounded-2xl shadow-lg overflow-hidden border-2 border-gray-200 hover:border-red-600">
                    <div class="p-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-2">🌐 Version Web</h3>
                        <p class="text-gray-600 mb-6 font-semibold">Suivi Partout, A tout moment</p>
                        <div class="mb-8">
                            <p class="text-sm text-gray-500">À partir de</p>
                            <span class="text-4xl font-black text-gray-900">150 000 FCFA</span>
                            <p class="text-gray-600 mt-2">Par An</p>
                        </div>

                        <button
                            @click="$emit('open-quote')"
                            class="w-full block text-center bg-gray-900 text-white font-bold py-3 px-6 rounded-full mb-8 hover:bg-gray-800 transition"
                        >
                            📥 Demander un Devis
                        </button>

                        <div class="space-y-4">
                            <div class="flex items-center gap-3">
                                <span class="text-xl text-red-600">✔️</span>
                                <p class="text-gray-700">Accès web 24/7</p>
                            </div>
                            <div class="flex items-center gap-3">
                                <span class="text-xl text-red-600">✔️</span>
                                <p class="text-gray-700">Suivi en temps réel partout</p>
                            </div>
                            <div class="flex items-center gap-3">
                                <span class="text-xl text-red-600">✔️</span>
                                <p class="text-gray-700">Multi-utilisateurs illimités</p>
                            </div>
                            <div class="flex items-center gap-3">
                                <span class="text-xl text-red-600">✔️</span>
                                <p class="text-gray-700">Rapports avancés en cloud</p>
                            </div>
                            <div class="flex items-center gap-3">
                                <span class="text-xl text-red-600">✔️</span>
                                <p class="text-gray-700">Accès securisé utilisateur</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-12 text-center">
                <p class="text-gray-600 text-lg">
                    ✨ Essayez le plan Starter gratuitement • Installation rapide en 5
                    minutes
                </p>
            </div>
        </div>
    </section>
</template>

<script setup>
import {router} from "@inertiajs/vue3";

defineEmits(["open-quote"]);
const counterDownload = (plan)=> {
    router.post(route("counter.download"), {plan: plan}, {
        preserveScroll: true,
    });
}
</script>
