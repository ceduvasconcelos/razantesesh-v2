<script setup>
import { Head as InertiaHead } from '@inertiajs/vue3';
import BaseLayout from '@/Customer/Layouts/BaseLayout.vue';

defineOptions({ layout: BaseLayout });
</script>

<template>
    <inertia-head title="Início"></inertia-head>

    <v-container fluid>
        <v-row>
            <v-col cols="12">
                <v-img class="rounded-lg">
                    <v-img
                        src="https://cdn.vuetifyjs.com/images/parallax/material.jpg"
                        :height="400"
                        cover
                    ></v-img>
                </v-img>
            </v-col>
        </v-row>
    </v-container>
</template>
