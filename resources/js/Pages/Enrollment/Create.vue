<template>
    <AuthenticatedLayout>
        <Head title="Enrollments" />

        <v-container class="justify-center">
            <v-card-title class="justify-center">
                Creacion de Matriculas
            </v-card-title>

            <v-card>
            <div style="max-width: 500px; margin: 2rem auto; padding: 1rem; border: 1px solid #ccc; border-radius: 8px;">
                <form @submit.prevent="submit">

                    <div style="margin-bottom: 1rem;">
                        <label>ID</label>
                        <v-text-field v-model="form.id" label="ID" type="number"></v-text-field>
                    </div>

                    <div style="margin-bottom: 1rem;">
                        <label>Fecha de Matricula</label>
                        <v-text-field
                            v-model="form.enrollment_date"
                            label="Fecha de Matricula"
                            type="date"
                        ></v-text-field>
                    </div>

                    <div style="margin-bottom: 1rem;">
                        <label>Estudiante</label>
                        <v-text-field v-model="form.student" label="Estudiante" type="number"></v-text-field>
                    </div>

                    <div style="margin-bottom: 1rem;">
                        <label>Curso</label>
                        <v-select :items="cursos" label="Seleccionar"></v-select>
                    </div>

                    <div style="margin-bottom: 1rem;">
                        <label>Estado</label>
                        <v-select :items="estado" label="Seleccionar"></v-select>
                    </div>

                    <v-btn type="submit" style="margin-right: 1rem;">Guardar          </v-btn>
                    <v-btn type="button" @click="handleReset">Limpiar campos</v-btn>

                </form>
            </div>
            </v-card>
        </v-container>
    </AuthenticatedLayout>
</template>

<script setup>
import { reactive } from 'vue'
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/vue3";

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

const form = reactive({
    id: '',
    enrollment_date: '',
    student: '',
    course_id: '',
    status: ''
})

function submit() {
    console.log('Form submitted:', form)
}

function handleReset() {
    form.id = ''
    form.enrollment_date = ''
    form.student = ''
    form.course_id = ''
    form.status = ''
}
const estado = ['Activo', 'Inactivo']
const cursos = ['Programacion I', 'Base de Datos','Redes','Matematicas','Fisica']
</script>
