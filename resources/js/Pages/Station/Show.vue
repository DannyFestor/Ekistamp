<template>
    <Head :title="station.name" />

    <section class="flex">
        <Link :href="route('stations.index', { prefecture: filters.prefecture, station: filters.station })" class="flex items-center p-2 hover:bg-gray-200">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12.066 11.2a1 1 0 000 1.6l5.334 4A1 1 0 0019 16V8a1 1 0 00-1.6-.8l-5.333 4zM4.066 11.2a1 1 0 000 1.6l5.334 4A1 1 0 0011 16V8a1 1 0 00-1.6-.8l-5.334 4z" />
            </svg>
            駅一覧 Stations
        </Link>
        <div class="p-2 flex">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12.066 11.2a1 1 0 000 1.6l5.334 4A1 1 0 0019 16V8a1 1 0 00-1.6-.8l-5.333 4zM4.066 11.2a1 1 0 000 1.6l5.334 4A1 1 0 0011 16V8a1 1 0 00-1.6-.8l-5.334 4z" />
            </svg>
            {{ station.name }}
            {{ station.romaji }}
        </div>
    </section>

    <section class="my-4 grid grid-cols-1 sm:grid-cols-4 w-full items-stretch gap-4">
        <h1 class="break-all border border-gray-400 rounded flex flex-col items-center justify-center px-4 py-2">
            <ruby class="break-all text-2xl">
                <span>{{ station.name }}</span>
                <rp>(</rp>
                <rt v-text="station.hiragana" />
                <rp>)</rp>
            </ruby>
            <span class="ml-2 capitalize break-all" v-text="station.romaji" />
        </h1>

        <section v-if="station.prefecture" class="sm:col-span-3 border rounded border-gray-400 p-4 flex flex-col space-y-4">
            <article class="flex items-center">
                <div class="w-24">Prefecture</div>
                <div class="flex items-end">
                    <ruby>
                        <span v-text="station.prefecture.name" />
                        <rp>(</rp>
                        <rt v-text="station.prefecture.hiragana" />
                        <rp>)</rp>
                    </ruby>
                    <div class="ml-2 capitalize">{{ station.prefecture.romaji }}</div>
                </div>
            </article>

            <article v-if="station.city" class="flex items-center">
                <div class="w-24">City</div>
                <div class="flex items-end">
                    <ruby>
                        <span v-text="station.city.name" />
                        <rp>(</rp>
                        <rt v-text="station.city.hiragana"></rt>
                        <rp>)</rp>
                    </ruby>
                    <div class="ml-2 capitalize">{{ station.city.romaji }}</div>
                </div>
            </article>

            <article v-if="station.street" class="flex items-center">
                <div class="w-24">Address</div>
                <div class="flex items-end">
                    <span>〒{{station.street.postcode.postcode.slice(0,3)}}-{{station.street.postcode.postcode.slice(3)}}</span>
                    <ruby class="ml-2">
                        <span v-text="station.street.name" />
                        <rp>(</rp>
                        <rt v-text="station.street.hiragana"></rt>
                        <rp>)</rp>
                    </ruby>
                    <div class="ml-2 capitalize">{{ station.street.romaji }}</div>
                </div>
            </article>
        </section>

        <section class="sm:col-span-4 border border-gray-400 rounded">
            <div class="text-lg font-bold py-2 px-4">スタンプ情報 - Stamp Information</div>
            <div class="capitalize flex flex-col space-y-2">
                <Stamp v-for="stamp in station.stamps" :key="stamp.id" :stamp="stamp" :id="stamp.id" :station="station.id" :filters="filters" />
            </div>
        </section>

        <section class="sm:col-span-4 flex flex-col border border-gray-400 rounded">
            <div class="text-lg font-bold py-2 px-4">路線情報 - Lines</div>
            <div class="capitalize flex flex-col space-y-2">
                <Line v-for="line in station.lines" :key="station.id" :id="station.id" :line="line" />
            </div>
        </section>
    </section>
</template>

<script setup>
import Line from './Partials/Line';
import Stamp from './Partials/Stamp';

let props = defineProps({
    station: Object,
    filters: Object,
});
</script>
