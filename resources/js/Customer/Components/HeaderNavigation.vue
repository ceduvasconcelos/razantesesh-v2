<script setup>
import { ref } from 'vue';
import { Link as InertiaLink } from '@inertiajs/vue3';
import formatMoney from '@/utils/formatMoney';
import AppNavigation from './AppNavigation.vue';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import ToggleTheme from '@/Components/ToggleTheme.vue';

const appNavigation = ref(false);
</script>

<template>
    <v-app-bar border flat density="compact">
        <template #prepend>
            <inertia-link :href="route('customer.home')" class="mt-auto mr-2">
                <application-logo></application-logo>
            </inertia-link>

            <v-app-bar-nav-icon density="comfortable" @click="appNavigation = ! appNavigation"></v-app-bar-nav-icon>
        </template>

        <template #append>
            <toggle-theme class="mr-md-4"></toggle-theme>

            <!-- <inertia-link :href="route('customer.cart.index')" class="rounded-lg"> -->
                <v-btn rounded="lg">
                    <v-badge
                        color="error"
                        :content="0"
                        bordered
                        offset-x="-2"
                        offset-y="-2"
                    >
                        <v-icon size="large" icon="mdi-cart-outline" />
                    </v-badge>

                    <span class="ms-4">{{ formatMoney(0) }}</span>
                </v-btn>
            <!-- </inertia-link> -->
        </template>
    </v-app-bar>

  <app-navigation v-model="appNavigation"></app-navigation>
</template>
