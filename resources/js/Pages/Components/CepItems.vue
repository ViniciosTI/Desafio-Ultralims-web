<script setup>
defineProps({
  data: {},
  save: Function,
});
</script>

<template>
  <div class="flex justify-center">
    <div
      class="
        flex flex-col
        border border-black
        rounded
        min-w-fit
        shadow
        w-1/3
        mt-6
        px-6
        py-4
        text-gray-600
      "
    >
      <p>
        CEP: <span class="font-bold">{{ data.cep }}</span>
      </p>
      <p>
        Estado: <span class="font-bold">{{ data.uf }}</span>
      </p>
      <p>
        Cidade: <span class="font-bold">{{ data.localidade }}</span>
      </p>
      <p>
        Bairro: <span class="font-bold">{{ data.bairro }}</span>
      </p>
      <p>
        Logradouro: <span class="font-bold">{{ data.logradouro }}</span>
      </p>
      <p>
        Complemento: <span class="font-bold">{{ data.complemento }}</span>
      </p>
      <p>
        DDD: <span class="font-bold">{{ data.ddd }}</span>
      </p>
      <p>
        GIA: <span class="font-bold">{{ data.gia }}</span>
      </p>
      <p>
        IBGE: <span class="font-bold">{{ data.ibge }}</span>
      </p>
      <p>
        SIAFI: <span class="font-bold">{{ data.siafi }}</span>
      </p>
      <div class="w-full justify-center flex">
        <button
          class="
            rounded-md
            font-bold
            bg-cyan-500
            hover:bg-cyan-600
            text-white
            px-4
            py-2
          "
          @click="save"
        >
          Salvar
        </button>
      </div>
    </div>
  </div>
</template>