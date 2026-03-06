<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import { Link } from '@inertiajs/vue3'
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Dashboard</h2>

        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">You're logged in!</div>
                </div>
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <v-row cols="12" md="4">
                            <Link :href="route('students.index')">
                                <v-btn block color="primary" prepend-icon="mdi-account-school">
                                    Students
                                </v-btn>
                            </Link>
                        </v-row>
                    </div>
                    <div class="p-6 text-gray-900">
                        <v-row cols="12" md="4">
                            <Link :href="route('teachers.index')">
                                <v-btn block color="primary" prepend-icon="mdi-account-tie">
                                    Teachers
                                </v-btn>
                            </Link>
                        </v-row>
                    </div>
                    <div class="p-6 text-gray-900">
                        <v-row cols="12" md="4">
                            <Link :href="route('periods.index')">
                                <v-btn block color="primary" prepend-icon="mdi-calendar">
                                    Academic Periods
                                </v-btn>
                            </Link>
                        </v-row>
                    </div>
                    <div class="p-6 text-gray-900">
                        <v-row cols="12" md="4">
                            <Link :href="route('courses.index')">
                                <v-btn block color="primary" prepend-icon="mdi-book-open-variant">
                                    Courses
                                </v-btn>
                            </Link>
                        </v-row>
                    </div>
                    <div class="p-6 text-gray-900">
                        <v-row cols="12" md="4">
                            <Link :href="route('enrollments.index')">
                                <v-btn block color="primary" prepend-icon="mdi-clipboard-list">
                                    Enrollments
                                </v-btn>
                            </Link>
                        </v-row>
                    </div>
                    <div class="p-6 text-gray-900">

                        <v-row cols="12" md="4">
                            <Link :href="route('grades.index')">
                                <v-btn block color="primary" prepend-icon="mdi-star">
                                    Grades
                                </v-btn>
                            </Link>
                        </v-row>
                    </div>

                    <div class="p-6 text-gray-900">
                        <v-row cols="12" md="4">
                            <Link :href="route('faculties.index')">
                                <v-btn block color="primary" prepend-icon="mdi-star">
                                    Faculty
                                </v-btn>
                            </Link>
                        </v-row>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
