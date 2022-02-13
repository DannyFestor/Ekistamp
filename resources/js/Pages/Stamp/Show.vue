<template>
  <Head :title="stamp.name" />

  <Upload
    :open="open"
    @close-upload="open = false"
    :url="
      route('stamps.upload-image', {
        station: station.id,
        stamp: stamp.id,
      })
    "
  />

  <section class="flex flex-wrap">
    <Breadcrump
      :href="
        route('stations.index', {
          prefecture: filters.prefecture,
          station: filters.station,
        })
      "
    >
      駅一覧 Stations
    </Breadcrump>
    <Breadcrump
      :href="
        route('stations.show', {
          station: station.id,
          _query: {
            prefecture: filters.prefecture,
            station: filters.station,
          },
        })
      "
    >
      {{ station.name }}
      {{ station.romaji }}
    </Breadcrump>
    <Breadcrump>
      {{ stamp.name }}
      {{ stamp.name_eng }}
    </Breadcrump>
  </section>

  <section class="flex w-full justify-end">
    <button
      @click="open = true"
      class="bg-green-700 px-4 py-2 text-white hover:bg-green-500"
    >
      Upload Image
    </button>
  </section>

  <section v-if="stamp.media.length === 0">
    This stamp has no image yet. Be the first to upload one!
  </section>
  <section v-else>
    <img
      v-for="(image, index) in stamp.media"
      :key="image.id"
      :alt="`Image #${index}`"
    />
  </section>

  {{ open }}
</template>

<script setup>
import Breadcrump from '../../Shared/Breadcrump';
import Upload from './Partials/Upload';
import { ref } from 'vue';

let open = ref(false);

defineProps({
  station: Object,
  stamp: Object,
  filters: Object,
});
</script>
