<template>
    <transition name="fade">
        <div v-if="show" class="flex">
            <div v-if="$page.props.flash.success"
                 class="relative flex items-center rounded p-4 border-2 border-green-700 bg-green-600 text-white text-xl font-bold w-full mb-4 shadow-lg shadow-green-700/30">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                Text
                {{ $page.props.flash.success }}
                <div @click="show = false"
                     class="absolute flex justify-center items-center top-1/2 right-4 w-8 h-8 transform -translate-y-1/2 transition-opacity opacity-70 hover:opacity-100 cursor-pointer">
                    &cross;
                </div>
            </div>
            <div v-if="$page.props.flash.error"
                 class="relative flex items-center rounded p-4 border-2 border-red-700 bg-red-600 text-white text-xl font-bold w-full mb-4 shadow-lg shadow-red-700/30">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                {{ $page.props.flash.error }}
                <div @click="show = false"
                     class="absolute flex justify-center items-center top-1/2 right-4 w-8 h-8 transform -translate-y-1/2 transition-opacity opacity-70 hover:opacity-100 cursor-pointer">
                    &cross;
                </div>
            </div>
        </div>
    </transition>
</template>

<script setup>
import {ref} from 'vue';

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
