<template>
    <div class="container mx-auto px-4 py-8 bg-gray-50">
        <h2 class="lg:text-3xl font-bold text-center  font-bold mb-2">
            Découvrez tout ce que <strong class="text-red-600">Whataa</strong>  peut faire pour votre commerce </h2>
        <p class="text-center max-w-4xl mx-auto lg:text-2xl pb-12">
            Finir avec les heures de configuration et de
            parametrage fascidieux avec Whataa en un simple clic vous êtes prêt pour l'utilisation. </p>
        <div class="hidden lg:flex">
            <!-- Tabs (Left Sidebar) -->
            <div class="w-2/6 border-r border-gray-200 ">
                <div id="tab1"
                    @click="showTab('content1')"
                    class="tab-button cursor-pointer w-full text-left px-4 py-2
                    text-gray-600 hover:bg-gray-100 focus:outline-none border-l-4">
                   <h3 class="text-xl font-semibold py-2">Un tableau de bord decision</h3>
                    <p class="line-highlight">
                        Ne prenez plus de decision dans l'incertitude avec votre tableau vous s'aurez en un clin d'oeil que pion
                        poussez pour explorer vos ventes.
                    </p>
                </div>
                <div id="tab2"
                    @click="showTab('content2')"
                    class="tab-button cursor-pointer w-full text-left px-4 py-2
                    text-gray-600 hover:bg-gray-100 focus:outline-none border-l-4">
                   <h3 class="text-xl font-semibold py-2">Vendez rapidement avec notre comptoir simplifié</h3>
                    <p class="line-highlight">
                        Plus besoin de passer des heures à former vos caissières avec whataa même un illettré peut faire des ventes.
                    </p>
                </div>
                <div id="tab3"
                    @click="showTab('content3')"
                    class="tab-button cursor-pointer w-full text-left px-4 py-2
                    text-gray-600 hover:bg-gray-100 focus:outline-none border-l-4">
                   <h3 class="text-xl font-semibold py-2">Suivez tous les mouvements d'un article</h3>
                    <p class="line-highlight">
                        Whataa vous offre une traçabilité precise sur les entrées et sorties de vos articles en temps réel.
                    </p>
                </div><div id="tab4"
                    @click="showTab('content4')"
                    class="tab-button cursor-pointer w-full text-left px-4 py-2
                    text-gray-600 hover:bg-gray-100 focus:outline-none border-l-4">
                   <h3 class="text-xl font-semibold py-2">Votre boite à outil de tous vos documents commercials</h3>
                    <p class="line-highlight">
                        N'utilisez plus un logiciel à demi volet donne tous les documents commercials nécessaires
                        (Devis, Bon de commande, Bon de livraison, Facture et Règlements)
                    </p>
                </div><div id="tab5"
                    @click="showTab('content5')"
                    class="tab-button cursor-pointer w-full text-left px-4 py-2
                    text-gray-600 hover:bg-gray-100 focus:outline-none border-l-4">
                   <h3 class="text-xl font-semibold py-2">Vendez sans connexion et synchroniser vos données a tout moment</h3>
                    <p class="line-highlight">
                        Peut importe votre la situation géographique de vos points de vente suivez votre chiffre d'affaire à tout moment.
                    </p>
                </div>
            </div>
            <!-- Content (Right Panel) -->
            <div class="w-3/4 p-4">
                <div id="content1" class="tab-content">
                    <div class="p-3 bg-gray-200 rounded-lg">
                        <img src="/image/dasboard.png"
                             alt="image tableau de bord" class="h-100 object-cover" srcset="">
                    </div>
                </div>
                <div id="content2" class="tab-content hidden">
                    <div class="p-3 bg-gray-200 rounded-lg">
                        <img src="/image/comptoi.png"
                             alt="image tableau de bord" class="h-100 object-cover" srcset="">
                    </div>
                </div>
                <div id="content3" class="tab-content hidden">
                    <div class="p-3 bg-gray-200 rounded-lg">
                        <img src="/image/product.png"
                             alt="image tableau de bord" class="h-100 object-cover" srcset="">
                    </div>
                </div>
                <div id="content4" class="tab-content hidden">
                    <div class="p-3 bg-gray-200 rounded-lg">
                        <img src="/image/mvt_vente.png"
                             alt="image tableau de bord" class="h-100 object-cover" srcset="">
                    </div>
                </div>
                <div id="content5" class="tab-content hidden">
                    <div class="p-3 bg-gray-200 rounded-lg">
                        <img src="/image/panel.png"
                             alt="image tableau de bord" class="h-100 object-cover" srcset="">
                    </div>
                </div>
            </div>
        </div>
    </div>


</template>

<script setup>
const showTab = (contentId) => {
    // Hide all tab content
    document.querySelectorAll('.tab-content').forEach((tab) => {
        tab.classList.add('hidden');
    });
    // Remove active class from all buttons
    document.querySelectorAll('.tab-button').forEach((button) => {
        button.classList.remove('text-orange-500', 'border-orange-500', 'bg-gray-100');
        button.classList.add('text-gray-600');
    });
    // Show selected tab content
    document.getElementById(contentId).classList.remove('hidden');
    // Highlight the active tab button
    event.target.classList.add('text-orange-500', 'border-orange-500', 'bg-gray-100');
}
</script>


<style scoped>

</style>
