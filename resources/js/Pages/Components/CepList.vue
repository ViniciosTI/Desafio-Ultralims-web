<script setup>
import ArrowUpDownIcon from "vue-material-design-icons/ArrowUpDown.vue";
import { ref } from "vue";

const props = defineProps({ list: Array });

let orderFlag = ref(true);
let memory = ref("");

function order(select) {
  if (memory != select) {
    orderFlag = true;
  }
  props.list.sort(function (a, b) {
    if (!orderFlag) {
      if (a[select] < b[select]) {
        return 1;
      }
      if (a[select] > b[select]) {
        return -1;
      }
    }

    if (a[select] > b[select]) {
      return 1;
    }
    if (a[select] < b[select]) {
      return -1;
    }
    return 0;
  });

  memory = select;
  orderFlag = !orderFlag;
}
</script>

<template>
  <table class="my-6 w-full">
    <tr class="text-gray-100 text-left font-bold border-black bg-gray-600">
      <th class="px-3 py-2">CEP</th>
      <th class="px-3 py-2">
        <div class="flex flex-row">
          Estado
          <span @click="order('uf')" class="relative top-1 text-gray-300"
            ><ArrowUpDownIcon size="18" />
          </span>
        </div>
      </th>
      <th class="px-3 py-2">
        <div class="flex flex-row">
          Cidade
          <span
            @click="order('localidade')"
            class="relative top-1 text-gray-300"
            ><ArrowUpDownIcon size="18" />
          </span>
        </div>
      </th>
      <th class="px-3 py-2">
        <div class="flex flex-row">
          Bairro
          <span @click="order('bairro')" class="relative top-1 text-gray-300"
            ><ArrowUpDownIcon size="18" />
          </span>
        </div>
      </th>
      <th class="px-3 py-2">Logradouro</th>
      <th class="px-3 py-2">Complemento</th>
      <th class="px-3 py-2">DDD</th>
      <th class="px-3 py-2">GIA</th>
      <th class="px-3 py-2">IBGE</th>
      <th class="px-3 py-2">SIAFI</th>
    </tr>
    <tr
      class="text-gray-600 hover:bg-gray-200 even:bg-gray-100"
      v-for="item in props.list"
      :key="item.id"
    >
      <td class="px-3 py-1">{{ item.cep }}</td>
      <td class="px-3 py-1">{{ item.uf }}</td>
      <td class="px-3 py-1">{{ item.localidade }}</td>
      <td class="px-3 py-1">{{ item.bairro }}</td>
      <td class="px-3 py-1">{{ item.logradouro }}</td>
      <td class="px-3 py-1">{{ item.complemento }}</td>
      <td class="px-3 py-1">{{ item.ddd }}</td>
      <td class="px-3 py-1">{{ item.gia }}</td>
      <td class="px-3 py-1">{{ item.ibge }}</td>
      <td class="px-3 py-1">{{ item.siafi }}</td>
    </tr>
    <tr v-if="props.list.length==0" class="bg-gray-100 text-gray-600 hover:bg-gray-200 text-center">
        <td colspan="10">Sem items para mostrar.</td>
    </tr>
  </table>
</template>