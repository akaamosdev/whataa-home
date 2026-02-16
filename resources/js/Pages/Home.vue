<template>
<div class="">
    <!-- Hero Section -->
    <section class="text-left pt-48 pb-24 bg-slate-900">
        <div class="container mx-auto lg:px-6 px-3">
            <div class="lg:flex ">
                <div class="lg:basis-3/6 lg:pr-6">
                    <h1 class="text-3xl md:text-4xl font-extrabold text-gray-50 mb-6">
                        Simplifiez la Gestion de votre commerce.
                    </h1>
                    <p class="text-lg text-gray-300 mb-4 text-gray-200 line-numbers">
                        Une solution tout-en-un pour la gestion des stocks, ventes, achats et règlements.
                        <!--                            Découvrez une nouvelle ère de gestion d'entreprise avec notre logiciel tout-en-un !<br>-->
                        <!--                            Suivez vos stocks, gérez vos ventes,-->
                        <!--                            simplifiez vos achats et gardez le contrôle sur votre comptabilité, le tout en un seul endroit pratique.-->
                    </p>
                    <p class="text-gray-300 mb-4 text-lg">
                        <strong>Suivi automatique des ventes et des stocks : </strong> Chaque vente met à jour automatiquement le stock pour éviter les ruptures.
                    </p>
                    <p class="text-gray-300 mb-4 text-lg">
                        <strong>Dashboard en temps réel :</strong> Vue instantanée des ventes, du chiffre d’affaires et des stocks.
                    </p>
                    <p class="text-gray-300 mb-10 font-bold text-lg">
                        Accès multi-utilisateurs et gestion des droits d’accès.
                    </p>
                    <div class="lg:flex justify-start">
                        <div class=" mb-10">
                            <a href="#contact" class="bg-orange-500  text-white w-full px-6 py-3 rounded-full font-bold shadow-lg hover:bg-orange-600">
                                Contactez-nous
                            </a> <br>
                        </div>
                        <div class=" mb-10">
                            <Link :href="route('download')"
                                  class="lg:ml-3
                        w-full border border-white font-semibold text-white lg:px-6 py-3
                        rounded-full shadow-lg hover:bg-gray-600">
                                Testez gratuitement pendant 15 jours
                            </Link>
                        </div>
                    </div>
                </div>
                <div class="basis-3/6">
                    <div class="bg-gray-300 w-full h-full p-3  rounded-lg">
                        <div class="video wow fadeInLeft h-auto" data-wow-duration=".5s">
                            <iframe width="100%"  class="lg:h-[450px]"
                                    src="https://www.youtube.com/embed/KDtssZ9YIcM?si=QRQDG_jMdsYaxe1x"
                                    title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write;
                        encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- Features Section -->
    <section id="features" class="py-12 container mx-auto px-6 bg-gray-100">
        <h2 class="text-3xl font-bold text-center text-4xl font-bold mb-2">Fonctionnalités Clés</h2>
        <p class="text-center max-w-4xl mx-auto text-2xl pb-12">
            Vous manquez de visibilité sur votre activité,
            ce qui vous empêche de prendre des décisions éclairées pour votre entreprise.
            <strong class="text-red-500">Whataa</strong> est la solution idéale pour vous simplifier la vie et vous aider à gérer votre activité en toute sérénité.
        </p>
        <div class="grid md:grid-cols-4 gap-4 text-lg">
            <div class="text-center border border-gray-300 p-3 rounded-md">
                <img src="/image/5166970.png" alt="Feature Icon" class="mx-auto mb-4 w-16">
                <h3 class="text-2xl font-semibold mb-2 text-red-700 ">Gestion de Stocks</h3>
                <p class="text-gray-600">
                    suivre vos entrées et sorties de stock en temps réel,
                    connaître votre niveau de stock à tout moment et définir des seuils de réapprovisionnement
                </p>
            </div>
            <div class="text-center border border-gray-300 p-3 rounded-md">
                <img src="/image/sync.png" alt="Feature Icon" class="mx-auto mb-4 w-12">
                <h3 class="font-semibold mb-2 text-2xl text-red-700">Synchronisation Multi-Magasins</h3>
                <p class="text-gray-600">
                    Synchronisez vos données en temps réel entre plusieurs magasins.
                    Plus besoin d'avoir la connexion pour travailler, effectué vos ventes sans perturbation et
                    synchroniser vos données sur en ligne à tout moment.
                </p>
            </div>
            <div class="text-center border border-gray-300 p-4 rounded-md">
                <img src="/image/sale.jpg" alt="Feature Icon" class="mx-auto mb-4 w-16">
                <h3 class="text-2xl font-semibold mb-2 font-semibold mb-2 text-2xl text-red-700">Gestion des ventes</h3>
                <p class="text-gray-600">
                    Traitement des commandes clients, création de devis et de factures,
                    suivi des ventes et des paiements, gestion des retours et des remboursements.
                </p>
            </div>
            <div class="text-center border border-gray-300 p-4 rounded-md">
                <img src="/image/users.png" alt="Feature Icon" class="mx-auto mb-4 w-16">
                <h3 class="text-2xl font-semibold mb-2 font-semibold mb-2 text-2xl text-red-700">Gestion des utilisateurs </h3>
                <p class="text-gray-600">
                    Attribution de droits d'accès personnalisés en fonction des rôles des utilisateurs, sécurisation des données sensibles.
                </p>
            </div>
        </div>
        <div class="text-center  py-5">
            <Link :href="route('download')" class="bg-red-800 text-xs lg:text-lg ml-3 hover:border hover:border-red-600 text-white px-6 py-3
                 rounded-full shadow-lg hover:text-red-800 hover:bg-white">
                Essayez gratuitement pendant 15 jours
            </Link>
        </div>
    </section>
    <Fonctionnalite />

    <!-- Pricing Section -->
    <section id="pricing" class="py-12 container mx-auto px-6 bg-gray-100">
        <h2 class="lg:text-4xl text-md font-bold text-center mb-10 ">Faites votre choix ! </h2>
        <div class="grid md:grid-cols-3 gap-8">
            <!-- Offer 1 -->
            <div class="border p-6 rounded-lg shadow-lg bg-white text-center">
                <h3 class="text-3xl font-bold mb-4">Licence Unique</h3>
                <p class="text-black mb-6 font-bold">Une seule licence pour un usage hors ligne.</p>
                <ul class="text-gray-600 mb-6 ml-10 text-left list-inside space-y-3 font-bold text-">
                    <li class=""><span class="text-green-600"><i class="fa-solid fa-check"></i></span> Licence unique (pas de paiement annuel</li>
                    <li><span class="text-green-600"><i class="fa-solid fa-check"></i></span> Gestion de 1 magasin.</li>
                    <li><span class="text-green-600"><i class="fa-solid fa-check"></i></span> Idéal pour un usage rapide, simple et abordable !</li>
                    <li> <span class="text-red-600"><i class="fa-solid fa-close"></i></span>
                        Pas de synchronisation ni de multi-utilisateurs.
                    </li>
                </ul>
                <p class="text-2xl font-bold text-orange-500 mb-4">35 000 FCFA/ 60 €</p>
                <a target="_blank" href="https://wa.me/2250787602132?text=Bonjour M, Je veux une licence d'activation de 20000FCFA" class="bg-orange-500 text-white px-4 py-2 rounded-lg w-full hover:bg-orange-600">
                    Essayez gratuitement
                </a>
            </div>
            <!-- Offer 2 -->
            <div class="border p-6 pt-0 rounded-lg shadow-lg bg-white text-center">
                <div class="mx-auto w-48">
                    <div class="bg-slate-800 text-white rounded-md  font-bold text-lg uppercase">La plus populaire</div>
                </div>
                <h3 class="text-3xl font-bold mb-4">Entreprise (3 Magasins)</h3>
                <p class="text-black mb-6 font-bold">La solution parfaite pour une entreprise avec plusieurs boutiques ou équipes.</p>
                <ul class="text-gray-600 mb-6 ml-10 text-left list-inside space-y-3 font-bold text-">
                    <li class=""><span class="text-green-600"><i class="fa-solid fa-check"></i></span>
                        Jusqu'à 3 licences pour une gestion centralisée.
                    </li>
                    <li class=""><span class="text-green-600"><i class="fa-solid fa-check"></i></span>
                        Utilisateurs illimités.
                    </li>
                    <li><span class="text-green-600"><i class="fa-solid fa-check"></i></span>
                        Synchronisation en temps réel sur le cloud.
                    </li>
                    <li><span class="text-green-600"><i class="fa-solid fa-check"></i></span> Version en ligne</li>
                    <li><span class="text-green-600"><i class="fa-solid fa-check"></i></span> Paiement Annuel</li>
                    <li> <span class="text-red-600"><i class="fa-solid fa-close"></i></span>
                        Personnalisation sur mesure
                    </li>
                </ul>
                <p class="text-2xl font-bold text-orange-500 mb-4">70 000 FCFA/ 100 €</p>
                <a target="_blank" href="https://wa.me/2250787602132?text=Bonjour M, Je veux le pack entreprise pour 3 Magasin de 50000F CFA" class="bg-orange-500 text-white px-4 py-2 rounded-lg w-full hover:bg-orange-600">
                    Essayez gratuitement
                </a>
            </div>
            <!-- Offer 3 -->
            <div class="border p-6 rounded-lg shadow-lg bg-white text-center">
                <h3 class="text-3xl font-bold mb-4">Premium Illimité</h3>
                <p class="text-black mb-6 font-bold">Pour les entreprises ambitieuses ou en croissance rapide.</p>
                <ul class="text-gray-600 mb-6 ml-10 text-left list-inside space-y-3 font-bold text-">
                    <li class=""><span class="text-green-600"><i class="fa-solid fa-check"></i></span>
                        Utilisateurs illimités.
                    </li>
                    <li><span class="text-green-600"><i class="fa-solid fa-check"></i></span>
                        Magasins illimités avec synchronisation avancée.
                    </li>
                    <li><span class="text-green-600"><i class="fa-solid fa-check"></i></span> Version en ligne</li>
                    <li><span class="text-green-600"><i class="fa-solid fa-check"></i></span> Paiement Annuel</li>
                    <li><span class="text-green-600"><i class="fa-solid fa-check"></i></span>
                        Assistance technique prioritaire offerte
                    </li>
                    <li><span class="text-green-600"><i class="fa-solid fa-check"></i></span>
                        Possibilité de mises à jour personnalisées (facturation sur demande).</li>
                </ul>
                <p class="text-2xl font-bold text-orange-500 mb-4">100 000 FCFA/ 150 € </p>
                <a target="_blank" href="https://wa.me/2250787602132?text=Bonjour M, Je veux le pack Premium illimité 80 000F CFA" class="bg-orange-500 text-white px-4 py-2 rounded-lg w-full hover:bg-orange-600">
                    Essayez gratuitement
                </a>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="py-12 container mx-auto px-6">
        <h2 class="text-3xl font-bold text-center mb-10 text-red-800">Ce Que Disent Nos Clients</h2>
        <div class="grid md:grid-cols-3 gap-8">
            <div class="text-center">
                <p class="text-gray-600 italic mb-4">"Whataa m’a permis d’optimiser ma gestion et d’augmenter mes ventes. Je recommande à 100%."</p>
                <h4 class="text-lg font-semibold text-blue-900">- Jean K., Entrepreneur</h4>
            </div>
            <div class="text-center">
                <p class="text-gray-600 italic mb-4">"La synchronisation multi-magasins est un atout majeur pour mon business."</p>
                <h4 class="text-lg font-semibold text-blue-900">- Marie D., Commerçante</h4>
            </div>
            <div class="text-center">
                <p class="text-gray-600 italic mb-4">"Un logiciel facile à utiliser et indispensable pour toute entreprise moderne."</p>
                <h4 class="text-lg font-semibold text-blue-900">- Ali B., Gérant</h4>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-12 bg-gray-100 container mx-auto px-6">
        <h2 class="text-3xl font-bold text-center">Contactez-Nous</h2>
        <div class="max-w-xl mx-auto py-2">
            <p class="text-center">
                <a href="" class="text-red-600 font-semibold">
                    WhatsApp : +225 07 87 60 21 32 / 05 55 95 45 33
                </a><br>
                <a href="mailto:support@whataa.net" class="text-red-600 font-semibold">Email : support@whataa.net</a>
            </p>
        </div>
        <form class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-lg" @submit.prevent="submit">
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-medium mb-2">Nom</label>
                <input type="text" id="name" v-model="form.name" name="name" class="w-full border-gray-300 rounded-lg shadow-sm">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
                <input type="email" id="email" name="email" placeholder="" v-model="form.email" class="w-full border-gray-300 rounded-lg shadow-sm">
            </div>
            <div class="mb-4">
                <label for="phone" class="block text-gray-700 font-medium mb-2">Numéro WhatsApp</label>
                <input type="text" placeholder="Ex: +225 07 87 60 21 32" v-model="form.phone" id="phone" name="phone" class="w-full border-gray-300 rounded-lg shadow-sm">
            </div>
            <div class="mb-4">
                <label for="message" class="block text-gray-700 font-medium mb-2">Message</label>
                <textarea id="message" name="message" placeholder="Message" rows="4" v-model="form.message" class="w-full border-gray-300 rounded-lg shadow-sm"></textarea>
            </div>
            <button type="submit" class="bg-orange-500 text-white px-6 py-2 rounded-lg shadow-lg hover:bg-orange-600">
                Envoyer
            </button>
        </form>
    </section>
</div>
</template>

<script setup>
import Fonctionnalite from "@/Layouts/Fonctionnalite.vue";
import Welcome from "@/Pages/Welcome.vue";
import {Head, Link, useForm} from '@inertiajs/vue3';

const form = useForm({
    name: null,
    email: null,
    phone: null,
    message: null,
})
const submit = () => {
    form.post(route('contact.send'), {
        onSuccess: () => form.reset(),
    });
};
defineOptions({layout:Welcome})
</script>

<style scoped>

</style>
