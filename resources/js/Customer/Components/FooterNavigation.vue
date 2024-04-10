<script setup>
import { Link as InertiaLink } from '@inertiajs/vue3';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
</script>

<template>
    <v-footer class="border-t px-0 mt-8">
        <v-container>
            <v-row dense>
                <v-col cols="12">
                    <div class="d-flex flex-column flex-md-row">
                        <div class="d-flex justify-space-between justify-md-start align-center">
                            <inertia-link :href="route('customer.home')">
                                <v-btn
                                    variant="text"
                                    rounded="lg"
                                    size="x-small"
                                >
                                    Início
                                </v-btn>
                            </inertia-link>

                            <!-- <inertia-link :href="route('customer.home')"> -->
                                <v-btn
                                    variant="text"
                                    rounded="lg"
                                    size="x-small"
                                    class="ms-md-6"
                                >
                                    Produtos
                                </v-btn>
                            <!-- </inertia-link> -->
                        </div>

                        <div class="d-flex justify-space-between justify-md-start align-center">
                            <!-- <inertia-link :href="route('customer.home')"> -->
                                <v-btn
                                    variant="text"
                                    rounded="lg"
                                    size="x-small"
                                    class="ms-md-6"
                                >
                                    Carrinho
                                </v-btn>
                            <!-- </inertia-link> -->
                        </div>
                    </div>
                </v-col>

                <v-col cols="12">
                    <div class="d-flex justify-space-between align-center mt-2">
                        <div class="d-flex align-center">
                            <div>
                                <application-logo></application-logo>
                            </div>

                            <p class="text-caption text-center ms-4">© {{ new Date().getFullYear() }}</p>
                        </div>
                        <div>
                            <v-btn
                                icon="mdi-whatsapp"
                                variant="text"
                                size="small"
                                density="comfortable"
                                href="https://api.whatsapp.com/send?phone=5585981887454"
                                target="_blank"
                            ></v-btn>

                            <v-btn
                                icon="mdi-instagram"
                                variant="text"
                                size="small"
                                density="comfortable"
                                href="https://www.instagram.com/razantesesh"
                                target="_blank"
                            ></v-btn>
                        </div>
                    </div>
                </v-col>
            </v-row>
        </v-container>
    </v-footer>
</template>

<style scoped>
.v-footer {
  max-height: min-content;
  flex: 0 1 auto;
}
</style>
