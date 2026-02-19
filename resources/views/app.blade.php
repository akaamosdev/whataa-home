<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
              integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
              crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- Meta description -->
        <meta name="description"
              content="Whataa est le logiciel révolutionnaire de gestion pour les commerçants d’Afrique francophone.
              Gérez facilement vos ventes, stocks et clients simplement avec votre ordinateur.">
        <!-- Meta keywords -->
        <meta name="keywords"
              content="Logiciel de gestion commerce Africain, app commerçants africains,
              outil de gestion petit commerce, logiciel caisse ivoirien,
              gestion stock et vente Afrique, Logiciel entrepreneur africain,
              Whataa, app business local francophone, solution numérique pour commerçants,
              logiciel commerce Afrique, gestion boutique Côte d'Ivoire, appli pour vendeurs africains">
        <!-- Meta author (optionnel) -->
        <meta name="author" content="Équipe Whataa">
        <!-- Meta robots -->
        <meta name="robots" content="index, follow">

        <link rel="apple-touch-icon" sizes="57x57" href="/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="/favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="/favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
        <link rel="manifest" href="/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">

        @routes
        @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
        @inertiaHead
        <style>
            body{
                font-family: "Sage Headline", "Helvetica Neue", Roboto, Segoe UI, Arial;
            }
        </style>
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-2CQZCHZ18J"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-2CQZCHZ18J');
        </script>

    </head>
    <body class=" bg-gray-50 text-gray-800 lg:text-lg text-md">
        @inertia
    </body>
</html>
