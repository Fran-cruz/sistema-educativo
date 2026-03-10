<script setup>
import { Head } from '@inertiajs/vue3'
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";

const props = defineProps({
    grades: Array
})
</script>

<template>
    <AuthenticatedLayout>
        <Head title="Students" />

        <v-container>
            <v-card elevation="3">

                <v-card-title class="text-h5">
                    Grades List
                </v-card-title>

                <v-divider />

                <div class="justify-center">
                    <v-table>
                        <thead>
                        <tr>
                            <th class="text-left">ID</th>
                            <th class="text-left">Title</th>
                            <th class="text-left">Description</th>
                            <th class="text-left">Score</th>
                            <th class="text-left">Weight</th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr
                            v-for="i in grades"
                            :key="grades.id"
                        >
                            <td>{{ i.id }}</td>
                            <td>{{ i.title }}</td>
                            <td>{{ i.description }}</td>
                            <td>{{ i.score }}</td>
                            <td>{{ i.weight }}</td>
                        </tr>
                        </tbody>

                    </v-table>
                </div>
            </v-card>
        </v-container>
    </AuthenticatedLayout>
</template>
