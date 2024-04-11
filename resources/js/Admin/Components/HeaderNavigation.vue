<script setup>
import { ref } from 'vue';
import { Link as InertiaLink } from '@inertiajs/vue3';
import AppNavigation from '@/Admin/Components/AppNavigation.vue';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import ToggleTheme from '@/Components/ToggleTheme.vue';

const appNavigation = ref(false);
</script>

<template>
    <v-app-bar flat density="compact" class="border-b">
        <template #prepend>
            <inertia-link :href="route('admin.dashboard')" class="mt-auto mr-2">
                <application-logo></application-logo>
            </inertia-link>

            <v-app-bar-nav-icon
                density="comfortable"
                @click="appNavigation = ! appNavigation"
            ></v-app-bar-nav-icon>
        </template>

        <template #append>
            <toggle-theme class="mr-md-4"></toggle-theme>
        </template>
    </v-app-bar>

  <app-navigation v-model="appNavigation"></app-navigation>
</template>
