<template>
  <Head title="Postcode Index" />

  <section class="flex flex-wrap">
    <Breadcrump> 路線会社 Companies </Breadcrump>
  </section>

  <section class="my-4 flex justify-end">
    <Link
      :href="
        route('admin.companies.create', {
          _query: { company: companyName },
        })
      "
      class="rounded bg-green-700 px-4 py-2 text-white hover:bg-green-500"
    >
      New Company
    </Link>
  </section>

  <section class="mb-4 flex">
    <section class="flex flex-1 flex-col space-y-2" id="search">
      <div class="flex flex-wrap items-center">
        <label class="w-full w-24" for="city_name">Company: </label>
        <input
          v-model="companyName"
          class="flex-1 rounded border border-gray-400 px-4 py-2 outline-none focus:border-blue-400"
          id="city_name"
          name="city_name"
          type="text"
        />
      </div>
    </section>
    <button
      @click="clearForm"
      class="ml-4 w-16 rounded bg-green-700 text-white hover:bg-green-500"
    >
      Clear
    </button>
  </section>

  <section class="grid grid-cols-1 gap-2">
    <div
      @click="open(company.id)"
      v-for="company in companies.data"
      :key="company.id"
      class="grid cursor-pointer grid-cols-2 rounded border-gray-200 p-4 shadow hover:bg-gray-200 md:grid-cols-4"
    >
      <div class="text-xl text-green-700">{{ company.name }}</div>
      <div class="text-xl text-green-700">{{ company.lines_count }} Lines</div>
      <div class="text-xl text-green-700">{{ company.hiragana }}</div>
      <div class="text-xl text-green-700">{{ company.romaji }}</div>
    </div>
  </section>

  <Pagination :links="companies.links" />
</template>

<script>
import Admin from '@/Layouts/Admin';

export default {
  layout: Admin,
};
</script>

<script setup>
import Breadcrump from '../../../Shared/Breadcrump';
import Pagination from '../../../Shared/Pagination';
import { ref, watch } from 'vue';
import { debounce } from 'lodash';
import { Inertia } from '@inertiajs/inertia';

let props = defineProps({
  companies: Object,
  filters: Object,
});

let companyName = ref(props.filters.company);

watch(
  companyName,
  debounce(function (value) {
    Inertia.get(
      route('admin.companies.index'),
      {
        company: value,
      },
      {
        only: ['companies'],
        preserveState: true,
        replace: true,
      }
    );
  }, 300)
);

let open = (id) => {
  Inertia.get(
    route('admin.companies.edit', {
      company: id,
      _query: {
        company: companyName.value,
      },
    })
  );
};

let clearForm = () => {
  companyName.value = null;
};
</script>
