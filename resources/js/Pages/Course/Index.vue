<script setup>
import {Head, Link} from '@inertiajs/vue3'
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";

const props = defineProps({
    courses: Array
})

const teachers = [
    {name:'Leo'},
    {name:'Tomas'},
    {name:'Mateo'},
    {name:'Francisco'},
    {name:'Juan'},
    {name:'Gabriel'},
    {name:'Daniel'},
    {name:'Ernesto'},
    {name:'Alex'}
]
</script>

<template>
    <AuthenticatedLayout>
        <Head title="Courses" />

        <v-container>
            <v-card elevation="3">

                <v-card-title class="text-h5">
                    Lista de Cursos
                </v-card-title>

                <v-divider />

                <div class="justify-center">
                    <v-table>
                        <thead>
                        <tr>
                            <th class="text-left">CODIGO</th>
                            <th class="text-left">NOMBRE</th>
                            <th class="text-left">DESCRIPCION</th>
                            <th class="text-left">CREDITOS</th>
                            <th class="text-left">DOCENTE</th>
                            <th class="text-left">PERIODO</th>
                            <th class="text-left">CAPACIDAD</th>
                            <th class="text-left">ESTADO</th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr
                            v-for="i in courses"
                            :key="courses.id"
                        >
                            <td>{{ i.code }}</td>
                            <td>{{ i.name }}</td>
                            <td>{{ i.description }}</td>
                            <td>{{ i.credits }}</td>
                            <td>{{ teachers[i.id % teachers.length].name }}</td>
                            <td>{{ i.academic_period_id }}</td>
                            <td>{{ i.capacity }}</td>
                            <td>

                                <v-chip
                                    :color="courses.status === 'active' ? 'green' : 'red'"
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
                    <Link :href="route('courses.create')">
                        <v-col cols="12" md="4" sm="6">
                            <v-btn rounded="lg" size="x-large" block>Agregar Cursos</v-btn>
                        </v-col>
                    </Link>
                </div>
            </v-card>
        </v-container>
    </AuthenticatedLayout>
</template>
