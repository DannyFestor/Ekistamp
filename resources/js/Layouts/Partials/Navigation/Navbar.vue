<template>
    <nav id="nav" class="flex justify-between fixed top-0 left-0 right-0 h-16 shadow">
        <section class="flex items-center justify-center text-3xl text-green-500">
            Ekistamp.info
        </section>
        <section class="flex">
            <NavLink href="/dashboard"
                     :active="$page.component === 'Dashboard'"
            >
                Dashboard
            </NavLink>
            <NavLink href="/stations"
                     :active="$page.component === 'Station/Index'"
            >
                Stations
            </NavLink>
            <NavLink as="button" method="post" href="/logout">Logout</NavLink>
        </section>
    </nav>
</template>

<script setup>
import NavLink from './NavLink';
</script>
