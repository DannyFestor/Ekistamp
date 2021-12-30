<template>
    <div class="flex flex-col flex-1">
        <div @click="open = !open" class="cursor-pointer hover:bg-gray-200 px-4 py-2">{{ line.name }}</div>
        <div v-if="open" class="grid grid-cols-1 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 border border-gray-200">
            <Link v-for="station in line.stations"
                  :key="station.id"
                  class="flex flex-col items-center justify-center py-2 px-4 hover:bg-gray-200 hover:text-black"
                  :class="{'text-gray-400' : station.id !== id}"
                  :href="route('stations.show', station.id)"
            >
                <div class="text-center break-all">{{ station.name }}</div>
                <div class="text-center break-all">({{ station.romaji }})</div>
            </Link>
        </div>
    </div>
</template>

<script setup>
import {ref} from 'vue';

defineProps({
    id: Number,
    line: Object,
});

let open = ref(false);
</script>
