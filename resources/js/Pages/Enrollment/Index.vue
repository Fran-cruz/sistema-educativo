<script setup>
import { Head } from '@inertiajs/vue3'
import { ref, computed } from 'vue'

const props = defineProps({
    enrollments: Array
})

const search = ref('')

const headers = [
    { title: 'ID', key: 'id' },
    { title: 'Student', key: 'student.name' },
    { title: 'Course', key: 'course.name' },
    { title: 'Enrollment Date', key: 'enrollment_date' },
    { title: 'Final Avg', key: 'final_average' },
    { title: 'Status', key: 'status' },
]

const items = computed(() =>
    props.enrollments.map(e => ({
        ...e,
        student: e.student ?? { name: 'N/A' },
        course: e.course ?? { name: 'N/A' }
    }))
)
</script>

<template>

    <Head title="Enrollments"/>

    <v-container>
        <v-card elevation="3">

            <v-card-title class="d-flex justify-space-between align-center">

                <span class="text-h5">Enrollments</span>

                <v-text-field
                    v-model="search"
                    label="Search"
                    density="compact"
                    variant="outlined"
                    hide-details
                    clearable
                    style="max-width:250px"
                />

            </v-card-title>

            <v-divider/>

            <pre>{{ enrollments }}</pre>
        </v-card>

    </v-container>

</template>
