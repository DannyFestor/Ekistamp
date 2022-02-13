<template>
  <Head title="Prefecture Index" />

  <section class="flex flex-wrap">
    <Breadcrump> 市町村郡一覧 Cities </Breadcrump>
  </section>

  <section class="my-4 flex justify-end">
    <Link
      :href="
        route('admin.cities.create', {
          _query: { city: cityName, prefecture: prefectureId },
        })
      "
      class="rounded bg-green-700 px-4 py-2 text-white hover:bg-green-500"
    >
      New City
    </Link>
  </section>

  <section class="mb-4 flex">
    <section class="flex flex-1 flex-col space-y-2" id="search">
      <div class="flex flex-wrap items-center">
        <label class="w-full w-24" for="city_name">Prefecture: </label>
        <select
          v-model.number="prefectureId"
          class="flex-1 rounded border border-gray-400 px-4 py-2 capitalize outline-none focus:border-blue-400"
          id="prefecture_id"
          name="prefecture_id"
          type="text"
        >
          <option :value="0">---</option>
          <option
            v-for="prefecture in prefectures"
            :key="prefecture.id"
            :value="prefecture.id"
          >
            {{ prefecture.name }} - {{ prefecture.romaji }}
          </option>
        </select>
      </div>
      <div class="flex flex-wrap items-center">
        <label class="w-full w-24" for="city_name">City: </label>
        <input
          v-model="cityName"
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
      @click="open(city.id)"
      v-for="city in cities.data"
      :key="city.id"
      class="grid cursor-pointer grid-cols-2 rounded border-gray-200 p-4 shadow hover:bg-gray-200 md:grid-cols-4"
    >
      <div class="text-xl text-green-700">
        {{ city.prefecture.name }} {{ city.prefecture.romaji }}
      </div>
      <div class="text-xl text-green-700">{{ city.name }}</div>
      <div class="text-xl text-green-700">{{ city.hiragana }}</div>
      <div class="text-xl text-green-700">{{ city.katakana }}</div>
      <div class="text-xl capitalize text-green-700">
        {{ city.romaji }}
      </div>
    </div>
  </section>

  <Pagination :links="cities.links" />
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
  cities: Object,
  prefectures: Object,
  filters: Object,
});

let cityName = ref(props.filters.city);
let prefectureId = ref(props.filters.prefecture);

watch(
  [cityName, prefectureId],
  debounce(function (values) {
    Inertia.get(
      route('admin.cities.index'),
      {
        city: values[0],
        prefecture: values[1],
      },
      {
        only: ['cities'],
        preserveState: true,
        replace: true,
      }
    );
  }, 300)
);

let open = (id) => {
  Inertia.get(
    route('admin.cities.edit', {
      city: id,
      _query: {
        prefecture: prefectureId.value,
        city: cityName.value,
      },
    })
  );
};

let clearForm = () => {
  prefectureId.value = 0;
  cityName.value = null;
};
</script>
