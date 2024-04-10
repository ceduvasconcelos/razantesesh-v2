<script setup>
import { Link as InertiaLink } from '@inertiajs/vue3'

defineProps({
    modelValue: {
        type: Boolean,
        required: true
    }
})

defineEmits(['update:model-value'])
</script>

<template>
    <v-navigation-drawer
        temporary
        :model-value="modelValue"
        @update:model-value="value => $emit('update:model-value', value)"
    >
        <v-list density="compact" :lines="false" nav>
            <inertia-link :href="route('customer.home')">
                <v-list-item title="Início" to="/"></v-list-item>
            </inertia-link>
        </v-list>
    </v-navigation-drawer>
</template>
