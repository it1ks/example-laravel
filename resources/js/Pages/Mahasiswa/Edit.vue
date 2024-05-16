<template>
    <Head title="Edit Data Mahasiswa" />
    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Edit Data Mahasiswa
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-md mx-auto sm:px-6 lg:px-8 bg-white">
                <form class="p-4" @submit.prevent="submit">
                    <div>
                        <InputLabel for="npm" value="NPM" />
                        <TextInput
                            id="npm"
                            type="text"
                            class="mt-1 block w-full"
                            v-model="form.npm"
                            autofocus
                            autocomplete="username"
                        />
                        <InputError class="mt-2" :message="form.errors.npm" />
                    </div>

                    <div>
                        <InputLabel for="nama" value="Nama" />
                        <TextInput
                            id="nama"
                            type="text"
                            class="mt-1 block w-full"
                            v-model="form.nama"
                            autofocus
                            autocomplete="username"
                        />
                        <InputError class="mt-2" :message="form.errors.nama" />
                    </div>
                    <div>
                        <InputLabel for="jurusan" value="Jurusan" />
                        <TextInput
                            id="jurusan"
                            type="text"
                            class="mt-1 block w-full"
                            v-model="form.jurusan"
                            autofocus
                            autocomplete="username"
                        />
                        <InputError
                            class="mt-2"
                            :message="form.errors.jurusan"
                        />
                    </div>
                    <div>
                        <InputLabel for="semester" value="Semester" />
                        <TextInput
                            id="semester"
                            type="text"
                            class="mt-1 block w-full"
                            v-model="form.semester"
                            autofocus
                            autocomplete="username"
                        />
                        <InputError
                            class="mt-2"
                            :message="form.errors.semester"
                        />
                    </div>
                    <div class="flex items-center justify-end mt-4">
                        <PrimaryButton
                            class="ml-4"
                            :class="{ 'opacity-25': form.processing }"
                            :disabled="form.processing"
                        >
                            Store
                        </PrimaryButton>
                    </div>
                </form>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, useForm } from "@inertiajs/vue3";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import TextInput from "@/Components/TextInput.vue";
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";

const props = defineProps({
    mahasiswa: Object,
});

const form = useForm({
    npm: "",
    nama: props.mahasiswa?.nama,
    jurusan: "",
    semester: "",
});

const submit = () => {
    form.post(route("mahasiswa.index"));
};
</script>
