<script setup>
import HeaderNavigation from '@/Customer/Components/HeaderNavigation.vue';
import FooterNavigation from '@/Customer/Components/FooterNavigation.vue';
</script>

<template>
    <v-app>
        <header-navigation></header-navigation>

        <v-main>
            <slot />
        </v-main>

        <footer-navigation></footer-navigation>
    </v-app>
</template>
