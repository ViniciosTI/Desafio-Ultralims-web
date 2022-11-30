<script setup>
import { ref } from "vue";
import { useForm } from "@inertiajs/inertia-vue3";
import CepItems from "@/Pages/Components/CepItems.vue";
import CepList from "@/Pages/Components/CepList.vue";
import { Inertia } from "@inertiajs/inertia";

const form = useForm({
  bairro: "",
  cep: "",
  complemento: "",
  ddd: "",
  gia: "",
  ibge: "",
  localidade: "",
  logradouro: "",
  siafi: "",
  uf: "",
});

getList();

let cep = ref("");
let items = ref({});
let list = ref([]);

function src() {
  const string = cep.value.replace(/[^0-9]/g, "");
  fetch(`https://viacep.com.br/ws/${string}/json/`).then((response) => {
    response.json().then((data) => (items.value = data));
  });
}

async function save() {
  form.bairro = items.value.bairro;
  form.cep = items.value.cep;
  form.complemento = items.value.complemento;
  form.ddd = items.value.ddd;
  form.gia = items.value.gia;
  form.ibge = items.value.ibge;
  form.localidade = items.value.localidade;
  form.logradouro = items.value.logradouro;
  form.siafi = items.value.siafi;
  form.uf = items.value.uf;
  form.post(route("cep.save"), {
    preserveScroll: true,
    onSuccess: () => getList(),
  });
}

function getList() {
  fetch(route("cep.list")).then((response) => {
    response.json().then((data) => (list.value = data.list));
  });
}

function cepMask() {
  if (cep.value == "") {
    return;
  }
  cep.value = cep.value.replace(/[^0-9]/g, "");
  if (cep.value.length > 5) {
    cep.value = cep.value.replace(/([0-9]{5})/, "$1-");
  }
}
</script>
<template>
  <div class="w-full flex justify-center">
    <!-- <label for="cep">Cep:</label> -->
    <input
      class="rounded-l-md w-1/4 text-gray-600"
      type="text"
      id="cep"
      name="cep"
      v-model="cep"
      @input="cepMask"
      maxlength="9"
      placeholder="Digite um cep..."
    />
    <button
      class="
        rounded-r-md
        font-bold
        bg-cyan-500
        hover:bg-cyan-600
        text-white
        px-4
        py-2
      "
      @click="src"
    >
      Pesquisar
    </button>
  </div>

  <CepItems :data="items" :save="save" />
  <CepList :list="list" />
</template>