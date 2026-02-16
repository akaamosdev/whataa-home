<script setup>
import { Head, Link } from '@inertiajs/vue3';


</script>

<template>
    <Head title="Logiciel de gestion de vente, Achata, Stock, Reglement et Comptabilité Africain" />
    <header class="bg-slate-800 text-white shadow fixed top-0 w-full z-50">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <Link :href=" route('home') " class="flex items-center space-x-2">
                <img src="/logo-white-2.png" alt="Whataa Logo" class="w-full h-12">
<!--                <span class="text-2xl font-bold text-orange-500">Whataa</span>-->
            </Link>
            <nav>
                <ul class="flex space-x-6 font-bold text-xl">
                    <li><Link :href="route('home')+'#features'" class="hover:text-orange-500">Fonctionnalités</Link></li>
                    <li><Link :href="route('home')+'#pricing'" class="hover:text-orange-500">Tarifs</Link></li>
                    <li><Link :href="route('home')+'#testimonials'" class="hover:text-orange-500">Avis</Link></li>
                    <li><Link :href="route('home')+'#contact'" class="hover:text-orange-500">Contact</Link></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class=" ">
        <slot />
    </main>

    <footer class="bg-gray-900 text-gray-300 text-center py-6">
        <p>© 2025 Whataa. Tous droits réservés.</p>
    </footer>
</template>

<style>

.bg-dots-darker {
    background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E");
}
@media (prefers-color-scheme: dark) {
    .dark\:bg-dots-lighter {
        background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E");
    }
}
</style>
