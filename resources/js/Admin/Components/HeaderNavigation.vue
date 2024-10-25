<script setup>
import { ref, watch } from 'vue';
import { Link as InertiaLink } from '@inertiajs/vue3';
import { useDisplay } from 'vuetify';
import AppNavigation from '@/Admin/Components/AppNavigation.vue';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import ToggleTheme from '@/Components/ToggleTheme.vue';

const { mdAndDown } = useDisplay();

const appNavigation = ref(mdAndDown.value ? false : true);

watch(
    mdAndDown,
    mdAndDown => {
        appNavigation.value = mdAndDown ? appNavigation.value : true;
    }
);
</script>

<template>
    <v-app-bar
        flat
        density="compact"
        class="border-b px-4"
    >
        <template #prepend>
            <inertia-link :href="route('admin.dashboard')" class="mt-auto mr-2">
                <application-logo></application-logo>
            </inertia-link>

            <v-app-bar-nav-icon
                v-if="mdAndDown"
                density="comfortable"
                @click="appNavigation = ! appNavigation"
            ></v-app-bar-nav-icon>
        </template>

        <template #append>
            <toggle-theme class="mr-md-4"></toggle-theme>

            <inertia-link :href="route('admin.logout')" method="post" as="button">
                Sair
            </inertia-link>
        </template>
    </v-app-bar>

  <app-navigation v-model="appNavigation"></app-navigation>
</template>
