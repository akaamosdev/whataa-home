<template>
    <section id="contact" class="h-screen py-12 bg-gray-700 pt-32 mx-auto px-6 ">
        <h2 class="text-3xl font-bold text-center text-white">Télécharger gratuitement <strong class="text-blue-400">Whataa</strong> </h2>
        <div class="max-w-xl mx-auto py-2">
            <p class="text-center">
                <a href="" class="text-red-300 font-semibold">
                    WhatsApp : +225 07 87 60 21 32 / 05 55 95 45 33
                </a>
                <br>
                <a href="mailto:support@whataa.net" class="text-red-300 font-semibold">Email : support@whataa.net</a>
            </p>
        </div>
        <form class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-lg" @submit.prevent="submit">
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-medium mb-2">Nom</label>
                <input type="text" required id="name" v-model="form.name" placeholder="whataa" name="name" class="w-full border-gray-300 rounded-lg shadow-sm">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
                <input type="email" required id="email" placeholder="spport@whataa.net" v-model="form.email" name="email" class="w-full border-gray-300 rounded-lg shadow-sm">
            </div>
            <div class="mb-4">
                <label for="tel" class="block text-gray-700 font-medium mb-2">Téléphone</label>
                <input type="text" required id="tel" name="phone" placeholder="Ex: +2250787602132" v-model="form.phone" class="w-full border-gray-300 rounded-lg shadow-sm">
            </div>
            <button type="submit" class="bg-orange-500 text-white w-full px-6 py-2 rounded-lg shadow-lg hover:bg-orange-600">
                Télécharger
            </button>
        </form>
    </section>
</template>

<script setup>
import Welcome from "@/Pages/Welcome.vue";
import {useForm} from "@inertiajs/vue3";
defineOptions({layout:Welcome})

const form = useForm({
    name: null,
    email: null,
    phone: null,
});
const submit = () => {
    form.post(route('downlaod.send'), {
        //  onFinish: () => form.reset('name', 'email','phone','subject','message'),
        onSuccess:function (e) {
            window.location.href="/docs/whataa.zip"
        },
        // onError:function (){
        //     form.setError({
        //         name:"Le champs nom est obligatoire",
        //         email:"Le champs email est obligatoire",
        //         phone:"Le champs phone est obligatoire",
        //     })
        // },
        preserveScroll:true,
    });
};
</script>

<style scoped>

</style>
