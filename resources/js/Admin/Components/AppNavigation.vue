<script setup>
import { Link as InertiaLink } from '@inertiajs/vue3';

defineProps({
    modelValue: {
        type: Boolean,
        required: true
    }
});

defineEmits(['update:model-value']);
</script>

<template>
    <v-navigation-drawer
        permanent
        touchless
        disable-resize-watcher
        :model-value="modelValue"
        @update:model-value="value => $emit('update:model-value', value)"
        elevation="0"
        class="border-r"
    >
        <v-list density="compact" :lines="false" nav>
            <inertia-link :href="route('admin.dashboard')">
                <v-list-item title="Dashboard" to="/"></v-list-item>
            </inertia-link>
        </v-list>
    </v-navigation-drawer>
</template>
