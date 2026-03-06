<script setup>
import { Head } from '@inertiajs/vue3'
import { ref } from 'vue'

const props = defineProps({
    periods: Array
})

const search = ref('')

const headers = [
    { title: 'ID', key: 'id' },
    { title: 'Name', key: 'name' },
    { title: 'Start Date', key: 'start_date' },
    { title: 'End Date', key: 'end_date' },
    { title: 'Status', key: 'status' },
    { title: 'Actions', key: 'actions', sortable: false },
]
</script>

<template>
    <Head title="Academic Periods"/>

    <v-container>
        <v-card elevation="3">

            <v-card-title class="d-flex justify-space-between align-center">
                <span class="text-h5">Academic Periods</span>

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

            <pre>{{ periods }}</pre>
        </v-card>
    </v-container>
</template>
