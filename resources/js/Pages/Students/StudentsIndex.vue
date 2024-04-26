<script setup>
import { initFlowbite } from 'flowbite'
import Navbar from "@/Pages/Components/Navbar.vue";
import {onMounted} from "vue";
import { Link } from "@inertiajs/vue3";

// initialize components based on data attribute selectors
onMounted(() => {
    initFlowbite();
})

    const props = defineProps(['students']);
    /*const deleteStudent = (studentId) => {
        if (confirm('Are you sure you want to delete this student?')) {
            axios.delete(route('students.destroy', studentId))
                .then(() => {
                    // Refresh the page
                    location.reload();
                });
        }
    }*/

    console.log(props.students.data[0].firstname);
</script>

<template>
    <Navbar />

    <div class="px-12 py-8">


        <div>
            <h1 class="text-2xl font-semibold text-gray-800 dark:text-white">Liste des étudiants</h1>
            <div class="mt-4">
                <a href="/schooling/students/create" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Ajouter un étudiant</a>
            </div>
    <!--        <StudentsTable :props="props" />-->
        </div>

    <!--    Parcourir le props.students.data -->
        <div class="relative overflow-x-auto mt-8">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead  class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">Prenom</th>
                        <th scope="col" class="px-6 py-3">Nom</th>
                        <th scope="col" class="px-6 py-3">Email</th>
                        <th scope="col" class="px-6 py-3">Telphone</th>
                        <th scope="col" class="px-6 py-3">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700" v-for="student in props.students.data" :key="student.id">
                        <td class="px-6 py-4">{{ student.firstname }}</td>
                        <td class="px-6 py-4">{{ student.lastname }}</td>
                        <td class="px-6 py-4">{{ student.email }}</td>
                        <td class="px-6 py-4">{{ student.phone }}</td>
                        <td class="px-6 py-4">
                            <Link class="font-medium text-blue-600 dark:text-blue-500 hover:underline pr-2" :href="`/schooling/students/${student.id}`">Show</Link>
                            <Link class="font-medium text-blue-600 dark:text-blue-500 hover:underline pr-2" :href="`/schooling/students/${student.id}/edit`">Edit</Link>
                            <Link class="font-medium text-red-600 dark:text-blue-500 hover:underline pr-2" href="#">Delete</Link>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<style>
a {
    cursor: pointer;
    text-decoration: none;
}
</style>
