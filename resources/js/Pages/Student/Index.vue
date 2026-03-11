<script setup>
import { Head } from '@inertiajs/vue3'
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";

const props = defineProps({
    students: Array
})

export default {
    name: 'Estudiantes',
    components: {AuthenticatedLayout, Link}
}
</script>

<template>
    <AuthenticatedLayout>
        <Head title="Students" />

        <v-container>
            <v-card elevation="3">

                <v-card-title class="text-h5">
                    Students List
                </v-card-title>

                <v-divider />

                <div class="justify-center">
                    <v-table>
                        <thead>
                        <tr>
                            <th class="text-left">ID</th>
                            <th class="text-left">Student Code</th>
                            <th class="text-left">Name</th>
                            <th class="text-left">Email</th>
                            <th class="text-left">Status</th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr
                            v-for="i in students"
                            :key="students.id"
                        >
                            <td>{{ i.id }}</td>
                            <td>{{ i.student_code }}</td>
                            <td>{{ i.name }}</td>
                            <td>{{ i.email }}</td>
                            <td>

                                <v-chip
                                    :color="student.status === 'active' ? 'green' : 'red'"
                                    size="small"
                                    variant="tonal"
                                >
                                    {{ student.status }}
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
