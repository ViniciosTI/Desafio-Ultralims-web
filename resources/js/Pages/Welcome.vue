<script setup>
import { Head } from "@inertiajs/inertia-vue3";
import CepForm from "@/Pages/Components/CepForm.vue";
</script>

<template>
  <Head title="Avaliação técnica" />
  <div class="container mx-auto py-6 px-4">
    <h1 class="font-bold text-gray-600 text-2xl my-6">Busca pelo CEP</h1>
    <CepForm />
  </div>
</template>
