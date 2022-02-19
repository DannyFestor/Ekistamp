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
  filters: Object,
});

let stationName = ref(props.filters.station);

watch(
  stationName,
  debounce(function (value) {
    Inertia.get(
      route('admin.stations.index'),
      {
        station: value,
      },
      {
        only: ['stations'],
        preserveState: true,
        replace: true,
      }
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
  stationName.value = null;
};
</script>
