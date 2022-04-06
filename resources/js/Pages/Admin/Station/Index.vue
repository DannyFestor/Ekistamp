<template>
  <Head title="Stations Index" />

  <section class="flex flex-wrap">
    <Breadcrump> 駅 Stations</Breadcrump>
  </section>

  <section class="my-4 flex justify-end">
    <Link
      :href="
        route('admin.stations.create', { _query: { station: stationName } })
      "
      class="rounded bg-green-700 px-4 py-2 text-white hover:bg-green-500"
    >
      New Station
    </Link>
  </section>

  <section class="mb-4 flex">
    <section class="flex flex-1 flex-col space-y-2" id="search">
      <div class="flex flex-wrap items-center">
        <label class="w-full w-24" for="prefecture_id">Prefecture: </label>
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
        <label class="w-full w-24" for="city_id">City: </label>
        <select
          v-model.number="cityId"
          class="flex-1 rounded border border-gray-400 px-4 py-2 capitalize outline-none focus:border-blue-400"
          id="city_id"
          name="city_id"
          type="text"
        >
          <option :value="0">---</option>
          <option v-for="city in cities" :key="city.id" :value="city.id">
            {{ city.name }} - {{ city.romaji }}
          </option>
        </select>
      </div>
      <div class="flex flex-wrap items-center">
        <label class="w-full w-24" for="station_name">Station: </label>
        <input
          v-model="stationName"
          class="outstation-none flex-1 rounded border border-gray-400 px-4 py-2 focus:border-blue-400"
          id="station_name"
          name="station_name"
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
      @click="open(station.id)"
      v-for="station in stations.data"
      :key="station.id"
      class="grid cursor-pointer grid-cols-2 rounded border-gray-200 p-4 shadow hover:bg-gray-200 md:grid-cols-4"
    >
      <div class="text-xl text-green-700">{{ station.name }}</div>
      <div class="text-xl text-green-700">
        {{ station.hiragana ?? 'N/A' }}
      </div>
      <div class="text-xl text-green-700">{{ station.romaji ?? 'N/A' }}</div>
      <div class="text-xl text-green-700">
        {{ station.prefecture.name }} ({{ station.prefecture.romaji }})
      </div>
      <div class="text-xl text-green-700">
        {{ station.city.name }} ({{ station.city.romaji }})
      </div>
      <div class="text-xl text-green-700">
        {{ station.street?.name }} ({{ station.street?.romaji }})
      </div>
    </div>
  </section>

  <Pagination :links="stations.links" />
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
  stations: Object,
  prefectures: Object,
  cities: Object,
  filters: Object,
});

let stationName = ref(props.filters.station);
let cityId = ref(props.filters.city || 0);
let prefectureId = ref(props.filters.prefecture || 0);

watch(prefectureId, () => {
  cityId.value = 0;
});

watch(
  [stationName, cityId, prefectureId],
  debounce(function (values) {
    Inertia.get(
      route('admin.stations.index'),
      {
        station: values[0],
        city: values[1] > 0 ? values[1] : null,
        prefecture: values[2] > 0 ? values[2] : null,
      },
      {
        only: ['stations', 'cities'],
        preserveState: true,
        replace: true,
      },
    );
  }, 300)
);

let open = (id) => {
  Inertia.get(
    route('admin.stations.edit', {
      station: id,
      _query: {
        station: stationName.value,
      },
    })
  );
};

let clearForm = () => {
  prefectureId.value = 0;
  cityId.value = 0;
  stationName.value = null;
};
</script>
