<template>
  <transition name="fade">
    <div v-if="show" class="flex">
      <div
        v-if="$page.props.flash.success"
        class="relative mb-4 flex w-full items-center rounded border-2 border-green-700 bg-green-600 p-4 text-xl font-bold text-white shadow-lg shadow-green-700/30"
      >
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="h-8 w-8"
          fill="none"
          viewBox="0 0 24 24"
          stroke="currentColor"
        >
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
          />
        </svg>
        Text
        {{ $page.props.flash.success }}
        <div
          @click="show = false"
          class="absolute top-1/2 right-4 flex h-8 w-8 -translate-y-1/2 transform cursor-pointer items-center justify-center opacity-70 transition-opacity hover:opacity-100"
        >
          &cross;
        </div>
      </div>
      <div
        v-if="$page.props.flash.error"
        class="relative mb-4 flex w-full items-center rounded border-2 border-red-700 bg-red-600 p-4 text-xl font-bold text-white shadow-lg shadow-red-700/30"
      >
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="h-8 w-8"
          fill="none"
          viewBox="0 0 24 24"
          stroke="currentColor"
        >
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"
          />
        </svg>
        {{ $page.props.flash.error }}
        <div
          @click="show = false"
          class="absolute top-1/2 right-4 flex h-8 w-8 -translate-y-1/2 transform cursor-pointer items-center justify-center opacity-70 transition-opacity hover:opacity-100"
        >
          &cross;
        </div>
      </div>
    </div>
  </transition>
</template>

<script setup>
import { ref } from 'vue';

const show = ref(true);
</script>

<style>
.fade-enter-active,
.fade-leave-active {
  transition: opacity 0.2s ease;
}

.fade-enter-from,
.fade-leave-to {
  opacity: 0;
}
</style>
