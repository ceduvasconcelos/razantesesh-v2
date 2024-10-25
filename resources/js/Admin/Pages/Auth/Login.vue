<script setup>
import { ref } from 'vue';
import { Head as InertiaHead, Link as InertiaLink, useForm } from '@inertiajs/vue3';
import GuestLayout from '@/Admin/Layouts/GuestLayout.vue';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';

defineProps({
    canResetPassword: {
        type: Boolean,
    },
    status: {
        type: String,
    },
    warning: {
        type: String,
    },
});

const form = useForm({
    email: '',
    password: '',
    remember: false,
});

const submit = () => {
    form.post(route('admin.login'), {
        onFinish: () => form.reset('password'),
    });
};

const visible = ref(false);

const required = (v) => !!v || 'Preencha este campo'

defineOptions({ layout: GuestLayout });
</script>

<template>
    <inertia-head title="Entrar"></inertia-head>

    <v-container class="fill-height">
        <v-row
            align="center"
            justify="center"
        >
            <v-col
                cols="12"
                sm="6"
            >
                <div class="d-flex justify-center mb-4">
                    <application-logo></application-logo>
                </div>

                <form @submit.prevent="submit">
                    <v-card
                        class="pa-4 pa-sm-6 pa-md-8"
                        rounded="lg"
                        border
                        flat
                    >
                        <div v-if="status" class="font-weight-medium text-sm text-green-lighten-1 mb-4">
                            {{ status }}
                        </div>

                        <v-text-field
                            v-model="form.email"
                            type="email"
                            class="mb-3"
                            label="Email"
                            density="comfortable"
                            variant="outlined"
                            :rules="[required]"
                        ></v-text-field>

                        <v-text-field
                            v-model="form.password"
                            label="Senha"
                            class="mb-3"
                            :append-inner-icon="visible ? 'mdi-eye-off' : 'mdi-eye'"
                            :type="visible ? 'text' : 'password'"
                            density="comfortable"
                            variant="outlined"
                            :rules="[required]"
                            @click:append-inner="visible = !visible"
                        ></v-text-field>

                        <v-card
                            v-if="warning"
                            class="mb-8"
                            color="surface-variant"
                            variant="tonal"
                        >
                            <v-card-text class="text-medium-emphasis text-caption">
                                Aviso: Após 3 tentativas consecutivas de login falhadas, sua conta será temporariamente bloqueada por três horas.
                                Se você precisar fazer login agora, também pode clicar em "Esqueceu sua senha?" abaixo para redefinir a senha de login.
                            </v-card-text>
                        </v-card>

                        <v-btn
                            type="submit"
                            :class="{ 'opacity-25': form.processing }" :disabled="form.processing"
                            size="large"
                            variant="tonal"
                            block
                        >
                            Entrar
                        </v-btn>

                        <v-card-text class="pb-0">
                            <inertia-link
                                v-if="canResetPassword"
                                :href="route('admin.password.request')"
                                class="text-decoration-none text-blue"
                            >
                                Esqueceu sua senha?
                            </inertia-link>
                        </v-card-text>
                    </v-card>
                </form>
            </v-col>
        </v-row>
    </v-container>
</template>
