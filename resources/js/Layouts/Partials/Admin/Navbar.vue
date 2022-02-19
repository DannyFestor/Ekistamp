<template>
  <nav
    id="nav"
    class="fixed top-0 left-0 bottom-0 z-20 flex w-64 flex-col justify-between overflow-y-auto bg-white shadow transition-all duration-200 lg:w-auto lg:translate-x-0"
    :class="{ '-translate-x-64': !open }"
  >
    <NavLink
      href="/"
      class="flex items-center justify-center p-4 text-xl text-green-700"
      @click="open = !open"
    >
      Ekistamp.info Admin
    </NavLink>
    <section class="flex flex-col">
      <NavLink
        v-if="
          ['all', 'show_role'].some((permission) =>
            $page.props.auth.can.includes(permission)
          )
        "
      >
        Roles
      </NavLink>
      <NavLink
        v-if="
          ['all', 'show_permission'].some((permission) =>
            $page.props.auth.can.includes(permission)
          )
        "
      >
        Permissions
      </NavLink>
      <NavLink
        :href="route('admin.prefectures.index')"
        v-if="
          ['all', 'show_prefecture'].some((permission) =>
            $page.props.auth.can.includes(permission)
          )
        "
        :active="$page.component.startsWith('Admin/Prefecture')"
      >
        Prefectures
      </NavLink>
      <NavLink
        :href="route('admin.cities.index')"
        v-if="
          ['all', 'show_city'].some((permission) =>
            $page.props.auth.can.includes(permission)
          )
        "
        :active="$page.component.startsWith('Admin/City')"
      >
        Cities
      </NavLink>
      <NavLink
        :href="route('admin.postcodes.index')"
        v-if="
          ['all', 'show_postcode'].some((permission) =>
            $page.props.auth.can.includes(permission)
          )
        "
        :active="$page.component.startsWith('Admin/Postcode')"
      >
        Postcodes
      </NavLink>
      <NavLink
        :href="route('admin.streets.index')"
        v-if="
          ['all', 'show_street'].some((permission) =>
            $page.props.auth.can.includes(permission)
          )
        "
        :active="$page.component.startsWith('Admin/Street')"
      >
        Streets
      </NavLink>
      <NavLink
        :href="route('admin.companies.index')"
        v-if="
          ['all', 'show_company'].some((permission) =>
            $page.props.auth.can.includes(permission)
          )
        "
        :active="$page.component.startsWith('Admin/Company')"
      >
        Companies
      </NavLink>
      <NavLink
        :href="route('admin.lines.index')"
        v-if="
          ['all', 'show_line'].some((permission) =>
            $page.props.auth.can.includes(permission)
          )
        "
        :active="$page.component.startsWith('Admin/Line')"
      >
        Lines
      </NavLink>
      <NavLink
        :href="route('admin.stations.index')"
        v-if="
          ['all', 'show_station'].some((permission) =>
            $page.props.auth.can.includes(permission)
          )
        "
      >
        Stations
      </NavLink>
      <NavLink
        v-if="
          ['all', 'show_stamp'].some((permission) =>
            $page.props.auth.can.includes(permission)
          )
        "
      >
        Stamps
      </NavLink>
      <NavLink
        v-if="
          ['all', 'show_post'].some((permission) =>
            $page.props.auth.can.includes(permission)
          )
        "
      >
        Posts
      </NavLink>
      <NavLink
        v-if="
          ['all', 'show_comment'].some((permission) =>
            $page.props.auth.can.includes(permission)
          )
        "
      >
        Comments
      </NavLink>
    </section>
  </nav>

  <div
    class="fixed top-0 left-0 right-0 bottom-0 z-10 bg-black opacity-50 transition-all duration-200 lg:hidden"
    :class="open ? 'translate-x-0' : '-translate-x-full'"
    @click="open = !open"
  ></div>

  <Hamburger :open="open" @toggle-nav="open = !open" />
</template>

<script setup>
import NavLink from './NavLink';
import Hamburger from './Hamburger';

import { ref } from 'vue';

let open = ref(false);
</script>
