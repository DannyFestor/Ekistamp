<template>
  <Link
    :href="
      route('stamps.show', {
        station: station,
        stamp: id,
        _query: {
          prefecture: filters.prefecture,
          station: filters.station,
        },
      })
    "
    class="py-2 px-4 hover:bg-gray-200"
  >
    {{ stamp.name }} - {{ stamp.name_eng }}
  </Link>
</template>

<script setup>
defineProps({
  id: Number,
  station: Number,
  stamp: Object,
  filters: Object,
});
</script>
