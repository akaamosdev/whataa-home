<template>
    <div
        v-if="isOpen"
        class="fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center p-4"
        @click.self="closeModal"
    >
        <div class="bg-yellow-50 rounded-2xl shadow-2xl max-w-xl w-full p-8 md:p-10">
            <!-- Close Button -->
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-3xl font-black text-gray-900">Demander un Devis</h2>
                <button
                    @click="closeModal"
                    class="text-gray-500 hover:text-gray-700 text-3xl font-bold"
                >
                    ×
                </button>
            </div>

            <!-- Form -->
            <form @submit.prevent="submitForm" class="space-y-4">
                <!-- Nom -->
                <div>
                    <label class="block text-gray-700 font-semibold mb-2">
                        Nom Complet
                    </label>
                    <input
                        v-model="form.name"
                        type="text"
                        required
                        class="w-full px-4 py-2 border-2 border-red-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500 transition"
                        placeholder="Votre nom"
                    />
                    <span v-if="form.errors.name" class="text-red-600 text-sm mt-1">
            {{ form.errors.name }}
          </span>
                </div>

                <!-- Commerce -->
                <div>
                    <label class="block text-gray-700 font-semibold mb-2">
                        Nom du Commerce
                    </label>
                    <input
                        v-model="form.business_name"
                        type="text"
                        required
                        class="w-full px-4 py-2 border-2 border-red-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500 transition"
                        placeholder="Votre boutique"
                    />
                    <span v-if="form.errors.business_name" class="text-red-600 text-sm mt-1">
            {{ form.errors.business_name }}
          </span>
                </div>

                <!-- Téléphone -->
                <div>
                    <label class="block text-gray-700 font-semibold mb-2">
                        Téléphone
                    </label>
                    <input
                        v-model="form.phone"
                        type="tel"
                        required
                        class="w-full px-4 py-2 border-2 border-red-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500 transition"
                        placeholder="+225 XXXXXXXXXX"
                    />
                    <span v-if="form.errors.phone" class="text-red-600 text-sm mt-1">
            {{ form.errors.phone }}
          </span>
                </div>

                <!-- Email -->
                <div>
                    <label class="block text-gray-700 font-semibold mb-2">
                        Email
                    </label>
                    <input
                        v-model="form.email"
                        type="email"
                        required
                        class="w-full px-4 py-2 border-2 border-red-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500 transition"
                        placeholder="votre@email.com"
                    />
                    <span v-if="form.errors.email" class="text-red-600 text-sm mt-1">
            {{ form.errors.email }}
          </span>
                </div>

                <!-- Plan -->
                <div>
                    <label class="block text-gray-700 font-semibold mb-2">
                        Plan Intéressé
                    </label>
                    <select
                        v-model="form.plan"
                        required
                        class="w-full px-4 py-2 border-2 border-red-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500 transition"
                    >
                        <option value="">Choisir un plan</option>
                        <option value="starter">Plan Starter</option>
                        <option value="business">Plan Business</option>
                        <option value="web">Version Web</option>
                        <option value="both">Les deux (Business + Web)</option>
                    </select>
                    <span v-if="form.errors.plan" class="text-red-600 text-sm mt-1">
            {{ form.errors.plan }}
          </span>
                </div>

                <!-- Message -->
                <div>
                    <label class="block text-gray-700 font-semibold mb-2">
                        Message (Optionnel)
                    </label>
                    <textarea
                        v-model="form.message"
                        class="w-full px-4 py-2 border-2 border-red-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500 transition"
                        rows="3"
                        placeholder="Vos questions..."
                    ></textarea>
                </div>

                <!-- Error Messages -->
                <div
                    v-if="Object.keys(form.errors).length > 0"
                    class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 rounded"
                >
                    <p class="font-semibold">Erreurs de validation:</p>
                    <ul class="list-disc list-inside">
                        <li v-for="(error, field) in form.errors" :key="field">
                            {{ error }}
                        </li>
                    </ul>
                </div>

                <!-- Success Message -->
                <div
                    v-if="successMessage"
                    class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 rounded"
                >
                    {{ successMessage }}
                </div>

                <!-- Submit Button -->
                <button
                    type="submit"
                    :disabled="form.processing"
                    class="w-full gradient-red text-white font-bold py-3 rounded-full hover:shadow-lg transition disabled:opacity-50"
                >
                    <span v-if="!form.processing">📧 Envoyer le Devis</span>
                    <span v-else>Envoi en cours...</span>
                </button>
            </form>
        </div>
    </div>
</template>

<script setup>
import { ref, watch } from "vue";
import { useForm } from "@inertiajs/vue3";

const props = defineProps({
    isOpen: {
        type: Boolean,
        required: true,
    },
});

const emit = defineEmits(["close", "success"]);

const successMessage = ref("");
const form = useForm({
    name: "",
    business_name: "",
    phone: "",
    email: "",
    plan: "",
    message: "",
});

// Réinitialiser le formulaire quand le modal s'ouvre
watch(
    () => props.isOpen,
    (newVal) => {
        if (newVal) {
            successMessage.value = "";
            form.clearErrors();
        }
    }
);

const closeModal = () => {
    emit("close");
    resetForm();
};

const resetForm = () => {
    form.reset();
    successMessage.value = "";
};

const submitForm = () => {
    form.post(route("quotes.store"), {
        onSuccess: () => {
            successMessage.value =
                "✅ Merci! Votre demande de devis a été envoyée. Nous vous recontacterons sous 24h.";
            setTimeout(() => {
                closeModal();
            }, 2000);
        },
        onError: (errors) => {
            console.error("Erreurs:", errors);
        },
    });
};
</script>
