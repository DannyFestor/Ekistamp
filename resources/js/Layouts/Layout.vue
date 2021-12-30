<template>
    <Head>
        <meta type="description" content="Collect all your stamps at one place!" head-key="description">
    </Head>

    <Navbar />

    <main class="relative z-0 h-px min-h-screen max-w-6xl mx-auto p-4 sm:p-8 md:p-20">
        <slot />
    </main>
</template>

<script setup>
import Navbar from './Partials/Navigation/Navbar'
</script>
