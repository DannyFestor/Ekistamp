<template>
    <nav id="nav"
         class="flex flex-col justify-between bg-white fixed z-20 top-0 left-0 bottom-0 overflow-y-auto w-64 lg:w-auto shadow transition-all duration-200 lg:translate-x-0"
         :class="{'-translate-x-64' : !open}"
    >

        <NavLink href="/" class="p-4 flex items-center justify-center text-xl text-green-700"
        @click="open = !open">
            Ekistamp.info Admin
        </NavLink>
        <section class="flex flex-col">
            <NavLink v-if="['all', 'show_role'].some(permission => $page.props.auth.can.includes(permission))">
                Roles
            </NavLink>
            <NavLink v-if="['all', 'show_permission'].some(permission => $page.props.auth.can.includes(permission))">
                Permissions
            </NavLink>
            <NavLink :href="route('admin.prefectures.index')" v-if="['all', 'show_prefecture'].some(permission => $page.props.auth.can.includes(permission))">
                Prefectures
            </NavLink>
            <NavLink v-if="['all', 'show_city'].some(permission => $page.props.auth.can.includes(permission))">
                Cities
            </NavLink>
            <NavLink v-if="['all', 'show_street'].some(permission => $page.props.auth.can.includes(permission))">
                Streets
            </NavLink>
            <NavLink v-if="['all', 'show_postcode'].some(permission => $page.props.auth.can.includes(permission))">
                Postcodes
            </NavLink>
            <NavLink v-if="['all', 'show_company'].some(permission => $page.props.auth.can.includes(permission))">
                Companies
            </NavLink>
            <NavLink v-if="['all', 'show_line'].some(permission => $page.props.auth.can.includes(permission))">
                Lines
            </NavLink>
            <NavLink v-if="['all', 'show_station'].some(permission => $page.props.auth.can.includes(permission))">
                Stations
            </NavLink>
            <NavLink v-if="['all', 'show_stamp'].some(permission => $page.props.auth.can.includes(permission))">
                Stamps
            </NavLink>
            <NavLink v-if="['all', 'show_post'].some(permission => $page.props.auth.can.includes(permission))">
                Posts
            </NavLink>
            <NavLink v-if="['all', 'show_comment'].some(permission => $page.props.auth.can.includes(permission))">
                Comments
            </NavLink>
        </section>
    </nav>

    <div class="fixed z-10 top-0 left-0 right-0 bottom-0 opacity-50 bg-black transition-all duration-200 lg:hidden"
         :class="open ? 'translate-x-0' : '-translate-x-full'"
         @click="open = !open"></div>

    <Hamburger :open="open" @toggle-nav="open = !open" />
</template>

<script setup>
import NavLink from './NavLink';
import Hamburger from './Hamburger';

import {ref} from 'vue';

let open = ref(false);
</script>
