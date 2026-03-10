<script setup>
import { reactive } from 'vue'
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";

const form = reactive({
    employee_code: '',
    specialty: '',
    hire_date: '',
    status: ''
})

function submit() {
    console.log('Form submitted:', form)
}

function handleReset() {
    form.employee_code = ''
    form.specialty = ''
    form.hire_date = ''
    form.status = ''
}
</script>

<template>
    <AuthenticatedLayout>
    <div style="max-width: 500px; margin: 2rem auto; padding: 1rem; border: 1px solid #ccc; border-radius: 8px;">
        <h2>Create Teacher</h2>
        <form @submit.prevent="submit">
            <div style="margin-bottom: 1rem;">
                <label>Employee Code</label>
                <input v-model="form.employee_code" type="text" />
            </div>

            <div style="margin-bottom: 1rem;">
                <label>Specialty</label>
                <input v-model="form.specialty" type="text" />
            </div>

            <div style="margin-bottom: 1rem;">
                <label>Hire Date</label>
                <input v-model="form.hire_date" type="date" />
            </div>

            <div style="margin-bottom: 1rem;">
                <label>Status</label>
                <select v-model="form.status">
                    <option value="">Select status</option>
                    <option value="active">Active</option>
                    <option value="inactive">Inactive</option>
                </select>
            </div>

            <button type="submit" style="margin-right: 1rem;">Save</button>
            <button type="button" @click="handleReset">Clear</button>
        </form>
    </div>
    </AuthenticatedLayout>
</template>
