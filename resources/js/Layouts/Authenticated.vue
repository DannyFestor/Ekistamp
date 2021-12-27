<template>
    <Head>
        <meta type="description" content="Collect all your stamps at one place!" head-key="description">
    </Head>

    <section id="nav">
        <Link href="/dashboard">Dashboard</Link>
        <Link href="/stations">Stations</Link>
    </section>

    <section>
        <main>
            <slot />
        </main>
    </section>
</template>

<script setup>
</script>
