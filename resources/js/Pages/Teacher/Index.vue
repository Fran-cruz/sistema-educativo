<script setup>
import { Head } from '@inertiajs/vue3'
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";

const props = defineProps({
    teachers: Array
})
</script>

<template>
    <AuthenticatedLayout>
    <Head title="Teachers" />

    <v-container>
        <v-card elevation="3">

            <v-card-title class="text-h5">
                Teachers List
            </v-card-title>

            <v-divider />

            <div class="justify-center">
                <v-table>
                <thead>
                <tr>
                    <th class="text-left">ID</th>
                    <th class="text-left">Employee Code</th>
                    <th class="text-left">Specialty</th>
                    <th class="text-left">Hire Date</th>
                    <th class="text-left">Status</th>
                </tr>
                </thead>

                <tbody>
                <tr
                    v-for="teacher in teachers"
                    :key="teacher.id"
                >
                    <td>{{ teacher.id }}</td>
                    <td>{{ teacher.employee_code }}</td>
                    <td>{{ teacher.specialty }}</td>
                    <td>{{ teacher.hire_date }}</td>
                    <td>

                        <v-chip
                            :color="teacher.status === 'active' ? 'green' : 'red'"
                            size="small"
                            variant="tonal"
                        >
                            {{ teacher.status }}
                        </v-chip>

                    </td>
                </tr>
                </tbody>

            </v-table>
            </div>
        </v-card>
    </v-container>
    </AuthenticatedLayout>
</template>
