<script setup>
import { Head } from '@inertiajs/vue3'
import { ref, computed } from 'vue'

const props = defineProps({
    courses: Array
})

const search = ref('')

const headers = [
    { title: 'ID', key: 'id' },
    { title: 'Code', key: 'code' },
    { title: 'Name', key: 'name' },
    { title: 'Credits', key: 'credits' },
    { title: 'Teacher', key: 'teacher.specialty' },
    { title: 'Period', key: 'academic_period.name' },
    { title: 'Capacity', key: 'capacity' },
    { title: 'Status', key: 'status' },
    { title: 'Actions', key: 'actions', sortable: false },
]

const items = computed(() =>
    props.courses.map(course => ({
        ...course,
        teacher: course.teacher ?? { specialty: 'N/A' },
        academic_period: course.academic_period ?? { name: 'N/A' }
    }))
)
</script>

<template>

    <Head title="Courses"/>

    <v-container>
        <v-card elevation="3">

            <v-card-title class="d-flex justify-space-between align-center">

                <span class="text-h5">Courses</span>

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

            <pre>{{ courses }}</pre>

        </v-card>
    </v-container>

</template>
