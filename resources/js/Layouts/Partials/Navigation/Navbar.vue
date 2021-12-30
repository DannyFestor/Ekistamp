<template>
    <nav id="nav" class="flex justify-between fixed top-0 left-0 right-0 h-16 shadow">
        <section class="px-4 flex items-center justify-center text-3xl text-green-500">
            Ekistamp.info
        </section>
        <section class="flex">
            <NavLink href="/admin" v-if="$page.props.auth && ($page.props.auth.can.includes('all') || $page.props.auth.can.includes('access_admin'))">
                Admin
            </NavLink>
            <NavLink href="/dashboard" v-if="$page.props.auth"
                     :active="$page.component === 'Dashboard'"
            >
                Dashboard
            </NavLink>
            <NavLink href="/stations"
                     :active="$page.component === 'Station/Index'"
            >
                Stations
            </NavLink>

            <NavLink v-if="$page.props.auth" as="button" method="post" href="/logout">Logout</NavLink>
            <template v-else>
                <NavLink href="/login" :active="$page.component === 'Login'">Login</NavLink>
                <NavLink href="/register" :active="$page.component === 'Register'">Register</NavLink>
            </template>
        </section>
    </nav>
</template>

<script setup>
import NavLink from './NavLink';
</script>
