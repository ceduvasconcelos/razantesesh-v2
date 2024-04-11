<script setup>
import { Head as InertiaHead } from '@inertiajs/vue3';
import BaseLayout from '@/Admin/Layouts/AuthenticatedLayout.vue';

defineOptions({ layout: BaseLayout });
</script>

<template>
    <inertia-head title="Dashboard"></inertia-head>

    <v-container fluid>
        <v-row>
            <v-col cols="12"></v-col>
        </v-row>
    </v-container>
</template>
