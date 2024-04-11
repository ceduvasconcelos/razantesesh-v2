<script setup>
import HeaderNavigation from '@/Admin/Components/HeaderNavigation.vue';
</script>

<template>
    <v-app>
        <header-navigation></header-navigation>

        <v-main>
            <slot />
        </v-main>
    </v-app>
</template>
