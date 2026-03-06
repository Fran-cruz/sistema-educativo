<script setup>
import { Head } from '@inertiajs/vue3'
import { ref } from 'vue'

const props = defineProps({
    teachers: Array
})

const search = ref('')

const headers = [
    { title: 'ID', key: 'id' },
    { title: 'Employee Code', key: 'employee_code' },
    { title: 'Specialty', key: 'specialty' },
    { title: 'Hire Date', key: 'hire_date' },
    { title: 'Status', key: 'status' },
    { title: 'Actions', key: 'actions', sortable: false },
]
</script>

<template>
    <Head title="Teachers" />

    <v-container>
        <v-card elevation="3">

            <v-card-title class="d-flex justify-space-between align-center">
                <span class="text-h5">Teachers List</span>

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
            <pre>{{ teachers }}</pre>
        </v-card>
    </v-container>
</template>
