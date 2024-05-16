<template>
    <Head title="Data Mahasiswa" />
    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Data Mahasiswa
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-end m-2 p-2">
                    <Link
                        href="/mahasiswa/create"
                        class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 text-white rounded-md"
                        >Tambahkan Data</Link
                    >
                </div>

                <div class="overflow-x-auto relative">
                    <table class="w-full text-sm text-left text-gray-500">
                        <thead
                            class="text-xs text-gray-700 uppercase bg-gray-50"
                        >
                            <tr>
                                <th scope="col" class="py-3 px-6">ID</th>
                                <th scope="col" class="py-3 px-6">NPM</th>
                                <th scope="col" class="py-3 px-6">
                                    Nama Mahasiswa
                                </th>
                                <th scope="col" class="py-3 px-6">Jurusan</th>
                                <th scope="col" class="py-3 px-6">Semester</th>
                                <th scope="col" class="py-3 px-6"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr
                                v-for="mahasiswa in mahasiswa.data"
                                :key="mahasiswa.id"
                                class="bg-white border-b"
                            >
                                <th
                                    scope="row"
                                    class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap"
                                >
                                    {{ mahasiswa.id }}
                                </th>
                                <td class="py-4 px-6">{{ mahasiswa.npm }}</td>
                                <td class="py-4 px-6">{{ mahasiswa.nama }}</td>
                                <td class="py-4 px-6">
                                    {{ mahasiswa.jurusan }}
                                </td>
                                <td class="py-4 px-6">
                                    {{ mahasiswa.semester }}
                                </td>

                                <td class="py-4 px-6">
                                    <Link
                                        :href="
                                            route(
                                                'mahasiswa.edit',
                                                mahasiswa.id
                                            )
                                        "
                                        class="font-medium text-blue-500 hover:text-blue-700 mr-2"
                                        >Edit</Link
                                    >
                                    <Link
                                        :href="
                                            route(
                                                'mahasiswa.destroy',
                                                mahasiswa.id
                                            )
                                        "
                                        method="delete"
                                        as="button"
                                        type="button"
                                        class="font-medium text-red-500 hover:text-red-700 mr-2"
                                        >Delete</Link
                                    >
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, Link } from "@inertiajs/vue3";

defineProps({
    mahasiswa: Object,
});
</script>
