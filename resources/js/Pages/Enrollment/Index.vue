<script setup>
import { Head, Link } from '@inertiajs/vue3'
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";

const props = defineProps({
    enrollments: Array
})

const students = [
    { id: 1, name: 'Carlos' },
    { id: 2, name: 'Maria' },
    { id: 3, name: 'Jose' },
    { id: 4, name: 'Ana' },
    { id: 5, name: 'Luis' },
    { id: 6, name: 'Sofia' },
    { id: 7, name: 'Miguel' },
    { id: 8, name: 'Elena' }
]

const courses = [
    { id: 1, name: 'Programacion I' },
    { id: 2, name: 'Base de Datos' },
    { id: 3, name: 'Redes' },
    { id: 4, name: 'Matematica' },
    { id: 5, name: 'Fisica' }
]

function getStudentName(studentId) {
    const student = students.find(s => s.id === studentId)
    return student ? student.name : 'No asignado'
}

function getCourseName(courseId) {
    const course = courses.find(c => c.id === courseId)
    return course ? course.name : 'No asignado'
}
</script>

<template>
    <AuthenticatedLayout>
        <Head title="Enrollments" />

        <v-container>
            <v-card elevation="3">

                <v-card-title class="text-h5">
                    Lista de Matriculas
                </v-card-title>

                <v-divider />

                <div class="justify-center">
                    <v-table>
                        <thead>
                        <tr>
                            <th class="text-left">ID</th>
                            <th class="text-left">FECHA DE MATRICULA</th>
                            <th class="text-left">ESTUDIANTE</th>
                            <th class="text-left">CURSO</th>
                            <th class="text-left">ESTADO</th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr
                            v-for="i in enrollments"
                            :key="i.id"
                        >
                            <td>{{ i.id }}</td>
                            <td>{{ i.enrollment_date }}</td>
                            <td>{{ getStudentName(i.student_id) }}</td>
                            <td>{{ getCourseName(i.course_id) }}</td>
                            <td>
                                <v-chip
                                    :color="i.status === 'active' ? 'green' : 'red'"
                                    size="small"
                                    variant="tonal"
                                >
                                    {{ i.status }}
                                </v-chip>
                            </td>
                        </tr>
                        </tbody>
                    </v-table>
                </div>

                <div class="justify-center">
                    <Link :href="route('enrollments.create')">
                        <v-col cols="12" md="4" sm="6">
                            <v-btn rounded="lg" size="x-large" block>
                                Agregar Matricula
                            </v-btn>
                        </v-col>
                    </Link>
                </div>

            </v-card>
        </v-container>
    </AuthenticatedLayout>
</template>
