<script setup>
import { Head, Link } from "@inertiajs/vue3";
import FrontendLayout from "@/Layouts/FrontendLayout.vue";
import Hero from "@/Components/Hero.vue";
</script>

<template>
    <Head title="Welcome" />

    <FrontendLayout>
        <Hero />
    </FrontendLayout>
</template>
