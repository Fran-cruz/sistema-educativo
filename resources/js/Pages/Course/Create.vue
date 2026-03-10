<template>
    <AuthenticatedLayout>
        <Head title="Courses" />

        <v-container class="justify-center">
            <v-card-title class="justify-center">
                Creacion de Cursos
            </v-card-title>
            <v-card>
            <div style="max-width: 500px; margin: 2rem auto; padding: 1rem; border: 1px solid #ccc; border-radius: 8px;">
                <form @submit.prevent="submit">

                    <div style="margin-bottom: 1rem;">
                        <label>Nombre del Curso</label>
                        <v-text-field v-model="form.name" label="Nombre"></v-text-field>
                    </div>

                    <div style="margin-bottom: 1rem;">
                        <label>Codigo del Curso</label>
                        <v-text-field v-model="form.code" label="Codigo"></v-text-field>
                    </div>

                    <div style="margin-bottom: 1rem;">
                        <label>Descripcion</label>
                        <v-text-field v-model="form.description" label="Descripcion"></v-text-field>
                    </div>

                    <div style="margin-bottom: 1rem;">
                        <label>Creditos</label>
                        <v-text-field v-model="form.credits" label="Creditos" type="number"></v-text-field>
                    </div>

                    <div style="margin-bottom: 1rem;">
                        <label>Docente</label>
                        <v-text-field v-model="form.teacher" label="Docente"></v-text-field>
                    </div>

                    <div style="margin-bottom: 1rem;">
                        <label>Periodo Academico</label>
                        <v-text-field v-model="form.academic_period" label="Periodo Academico"></v-text-field>
                    </div>

                    <div style="margin-bottom: 1rem;">
                        <label>Capacidad</label>
                        <v-text-field v-model="form.capacity" label="Capacidad" type="number"></v-text-field>
                    </div>

                    <div style="margin-bottom: 1rem;">
                        <label>Estado      </label>
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

const form = reactive({
    name: '',
    code: '',
    description: '',
    credits: '',
    teacher: '',
    academic_period: '',
    capacity: '',
    status: ''
})

function submit() {
    console.log('Form submitted:', form)
}

function handleReset() {
    form.name = ''
    form.code = ''
    form.description = ''
    form.credits = ''
    form.teacher = ''
    form.academic_period = ''
    form.capacity = ''
    form.status = ''
}
const estado = ['Activo', 'Inactivo']

</script>
