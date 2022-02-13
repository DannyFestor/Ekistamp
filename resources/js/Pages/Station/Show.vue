<template>
  <Head :title="station.name" />

  <section class="flex">
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
    <Breadcrump>
      {{ station.name }}
      {{ station.romaji }}
    </Breadcrump>
  </section>

  <section
    class="my-4 grid w-full grid-cols-1 items-stretch gap-4 sm:grid-cols-4"
  >
    <h1
      class="flex flex-col items-center justify-center break-all rounded border border-gray-400 px-4 py-2"
    >
      <ruby class="break-all text-2xl">
        <span>{{ station.name }}</span>
        <rp>(</rp>
        <rt v-text="station.hiragana" />
        <rp>)</rp>
      </ruby>
      <span class="ml-2 break-all capitalize" v-text="station.romaji" />
    </h1>

    <section
      v-if="station.prefecture"
      class="flex flex-col space-y-4 rounded border border-gray-400 p-4 sm:col-span-3"
    >
      <article class="flex items-center">
        <div class="w-24">Prefecture</div>
        <div class="flex items-end">
          <ruby>
            <span v-text="station.prefecture.name" />
            <rp>(</rp>
            <rt v-text="station.prefecture.hiragana" />
            <rp>)</rp>
          </ruby>
          <div class="ml-2 capitalize">
            {{ station.prefecture.romaji }}
          </div>
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
          <span
            >〒{{ station.street.postcode.postcode.slice(0, 3) }}-{{
              station.street.postcode.postcode.slice(3)
            }}</span
          >
          <ruby class="ml-2">
            <span v-text="station.street.name" />
            <rp>(</rp>
            <rt v-text="station.street.hiragana"></rt>
            <rp>)</rp>
          </ruby>
          <div class="ml-2 capitalize">
            {{ station.street.romaji }}
          </div>
        </div>
      </article>
    </section>

    <section class="rounded border border-gray-400 sm:col-span-4">
      <div class="py-2 px-4 text-lg font-bold">
        スタンプ情報 - Stamp Information
      </div>
      <div class="flex flex-col space-y-2 capitalize">
        <Stamp
          v-for="stamp in station.stamps"
          :key="stamp.id"
          :stamp="stamp"
          :id="stamp.id"
          :station="station.id"
          :filters="filters"
        />
      </div>
    </section>

    <section class="flex flex-col rounded border border-gray-400 sm:col-span-4">
      <div class="py-2 px-4 text-lg font-bold">路線情報 - Lines</div>
      <div class="flex flex-col space-y-2 capitalize">
        <Line
          v-for="line in station.lines"
          :key="station.id"
          :id="station.id"
          :line="line"
        />
      </div>
    </section>
  </section>
</template>

<script setup>
import Line from './Partials/Line';
import Stamp from './Partials/Stamp';
import Breadcrump from '../../Shared/Breadcrump';

let props = defineProps({
  station: Object,
  filters: Object,
});
</script>
