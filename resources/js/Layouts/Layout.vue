<template>
    <Head>
        <meta type="description" content="Collect all your stamps at one place!" head-key="description">
    </Head>

    <Navbar />

    <main class="h-px min-h-screen pt-16">
        <slot />
    </main>
</template>

<script setup>
import Navbar from './Partials/Navigation/Navbar'
</script>
