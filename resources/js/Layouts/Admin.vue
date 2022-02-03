<template>
    <Head>
        <meta type="description" content="Collect all your stamps at one place!" head-key="description">
    </Head>

    <Navbar />

    <main class="relative z-0 h-px min-h-screen max-w-6xl lg:ml-64 p-4">
        <FlashMessage />
        <slot />
    </main>
</template>

<script setup>
import Navbar from './Partials/Admin/Navbar';
import FlashMessage from '../Shared/Admin/FlashMessage';
</script>
