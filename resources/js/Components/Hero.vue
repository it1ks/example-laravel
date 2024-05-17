<script setup>
import { Link } from "@inertiajs/vue3";

defineProps({
    canLogin: {
        type: Boolean,
    },
});
</script>

<template>
    <section class="min-h-screen bg-white py-16 md:py-28">
        <div class="container mx-auto px-4 md:px-8 py-16 text-center">
            <h1
                class="text-gray-700 font-bold text-4xl md:text-6xl leading-tight mb-6"
            >
                Selamat Datang <br />
            </h1>
            <p class="text-gray-700 text-lg md:text-2xl mb-12">
                Tugas Kelompok 2 Cloud Computing Bisa.AI
            </p>
            <h1
                class="items-center justify-center relative w-auto font-mono text-2xl before:absolute before:inset-0 before:animate-typewriter before:bg-white after:absolute after:inset-0 after:w-[0.125em] after:animate-caret after:bg-black"
            >
                Membuat CRUD sederhana yang dapat dijalankan di Cloud
                Menggunakan Laravel, dan Mysql
            </h1>
            <Link :href="route('login')"
                ><Button
                    class="bg-gray-600 text-white font-bold mt-12 py-2 px-8 rounded-full hover:bg-gray-800 hover:text-gray-300 transition duration-200"
                >
                    Login Sekarang
                </Button>
            </Link>
        </div>
    </section>
</template>
