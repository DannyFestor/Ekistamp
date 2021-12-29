<template>
    <nav id="nav" class="z-10 fixed top-0 left-0 right-0 bg-white shadow h-16 flex justify-between">
        <section class="flex text-3xl text-green-600 flex items-center justify-center px-4">
            <Link href="/">Ekistamp.info</Link>
        </section>

        <section class="flex">
            <NavLink href="/login"
                     :active="$page.component === 'Auth/Login'"
            >
                Login
            </NavLink>
            <NavLink href="/register"
                     :active="$page.component === 'Auth/Register'"
            >
                Register
            </NavLink>
        </section>
    </nav>

    <main class="relative w-full h-px min-h-screen bg-green-50 p-8 pt-16">
        <slot />
    </main>
</template>

<script setup>
import NavLink from './Partials/Navigation/NavLink';
</script>
