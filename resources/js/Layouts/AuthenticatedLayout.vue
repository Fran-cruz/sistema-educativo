<script setup>
import { ref } from 'vue'
import ApplicationLogo from '@/Components/ApplicationLogo.vue'
import Dropdown from '@/Components/Dropdown.vue'
import DropdownLink from '@/Components/DropdownLink.vue'
import NavLink from '@/Components/NavLink.vue'
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue'
import { Link } from '@inertiajs/vue3'

const showingNavigationDropdown = ref(false)
</script>

<template>
    <v-app>

        <!-- NAVBAR SUPERIOR -->
        <v-app-bar elevation="1" color="white" app>
            <div class="flex items-center justify-between w-full px-4">

                <!-- Logo -->
                <div class="flex items-center space-x-6">
                    <Link :href="route('dashboard')">
                        <ApplicationLogo
                            class="block h-9 w-auto fill-current text-gray-800"
                        />
                    </Link>

                    <NavLink
                        :href="route('dashboard')"
                        :active="route().current('dashboard')"
                        class="hidden sm:flex"
                    >
                        Dashboard
                    </NavLink>
                </div>

                <!-- Usuario -->
                <div class="hidden sm:flex sm:items-center">
                    <Dropdown align="right" width="48">
                        <template #trigger>
                            <span class="inline-flex rounded-md">
                                <button
                                    type="button"
                                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-gray-600 bg-white rounded-md hover:text-gray-800"
                                >
                                    {{ $page.props.auth.user.name }}

                                    <svg
                                        class="ms-2 h-4 w-4"
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20"
                                        fill="currentColor"
                                    >
                                        <path
                                            fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd"
                                        />
                                    </svg>
                                </button>
                            </span>
                        </template>

                        <template #content>
                            <DropdownLink :href="route('profile.edit')">
                                Profile
                            </DropdownLink>
                            <DropdownLink
                                :href="route('logout')"
                                method="post"
                                as="button"
                            >
                                Log Out
                            </DropdownLink>
                        </template>
                    </Dropdown>
                </div>

            </div>
        </v-app-bar>


        <!--  MENÚ LATERAL -->
        <v-navigation-drawer
            expand-on-hover
            rail
            permanent
            app
        >
            <v-list>
                <v-list-item
                    prepend-avatar="https://randomuser.me/api/portraits/women/85.jpg"
                    :title="$page.props.auth.user.name"
                    :subtitle="$page.props.auth.user.email"
                />
            </v-list>

            <v-divider />

            <v-list density="compact" nav>
                <v-list-item
                    prepend-icon="mdi-view-dashboard"
                    title="Dashboard"
                    :to="route('dashboard')"
                />
                <v-list-item
                    prepend-icon="mdi-folder"
                    title="My Files"
                    :to="route('dashboard')"
                />
                <v-list-item
                    prepend-icon="mdi-account-multiple"
                    title="Shared"
                    :to="route('dashboard')"
                />
                <v-list-item
                    prepend-icon="mdi-star"
                    title="Starred"
                    :to="route('dashboard')"
                />
            </v-list>
        </v-navigation-drawer>


<!--        en el v-main se va a sustituir en cada archivo donde importemos -->
        <v-main>
            <div class="p-6 bg-gray-100 min-h-screen">

                <!-- Header opcional -->
                <div v-if="$slots.header" class="mb-6">
                    <slot name="header" />
                </div>

                <!-- Contenido principal -->
                <slot />

            </div>
        </v-main>

    </v-app>
</template>
