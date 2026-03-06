<script setup>
import { Head } from '@inertiajs/vue3'
import { ref, computed } from 'vue'

const props = defineProps({
    students: Array
})

const search = ref('')

const headers = [
    { title: 'ID', key: 'id' },
    { title: 'Code', key: 'student_code' },
    { title: 'Name', key: 'name' },
    { title: 'Email', key: 'email' },
    { title: 'Semester', key: 'semester' },
    { title: 'Status', key: 'status' },
    { title: 'Faculty', key: 'faculty.name' },
    { title: 'Actions', key: 'actions', sortable: false },
]

const items = computed(() =>
    props.students.map(student => ({
        ...student,
        faculty: student.faculty ?? { name: 'N/A' }
    }))
)
</script>

<template>
    <Head title="Students" />

    <v-container>
        <v-card elevation="3">
            <v-card-title class="d-flex justify-space-between align-center">
                <span class="text-h5">Students List</span>

                <v-text-field
                    v-model="search"
                    label="Search"
                    density="compact"
                    variant="outlined"
                    hide-details
                    clearable
                    style="max-width: 250px"
                />
            </v-card-title>

            <v-divider />

            <pre>{{ students }}</pre>
        </v-card>
    </v-container>
</template>
