<script setup>
import { Head } from '@inertiajs/vue3'
import { ref } from 'vue'

const props = defineProps({
    grades: Array
})

const search = ref('')

const headers = [
    { title: 'ID', key: 'id' },
    { title: 'Title', key: 'title' },
    { title: 'Score', key: 'score' },
    { title: 'Weight', key: 'weight' },
    { title: 'Date', key: 'evaluation_date' },
    { title: 'Enrollment', key: 'enrollment_id' },
]
</script>

<template>

    <Head title="Grades"/>

    <v-container>

        <v-card elevation="3">

            <v-card-title class="d-flex justify-space-between align-center">

                <span class="text-h5">Grades</span>

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
            <pre>{{ grades }}</pre>
        </v-card>

    </v-container>

</template>
