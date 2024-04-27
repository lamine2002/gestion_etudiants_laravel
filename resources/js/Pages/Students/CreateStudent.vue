<script setup>
import { reactive } from 'vue'
import { router, useForm } from '@inertiajs/vue3'
import Navbar from "@/Pages/Components/Navbar.vue";
const props = defineProps(['classes'])

const form = reactive(
    {
            firstname:'',
            lastname:'',
            birthday:'',
            birthplace:'',
            phone:'',
            email:'',
            classes:'',
            schoolingYear:'',
            // image: null
    })
// console.log(props.classes)
function submit() {

        console.log(form)
        router.post('/schooling/students', form)

}
</script>
<template>


    <!-- Modal toggle -->
    <button data-modal-target="crud-modal" data-modal-toggle="crud-modal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
        Ajouter un étudiant
    </button>

    <!-- Main modal -->
    <div id="crud-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        Ajouter un étudiant
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <form @submit.prevent="submit" class="space-y-3 pt-4" >
                    <div class="p-4">
                        <label for="firstname" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Prenom</label>
                        <input v-model="form.firstname" type="text" id="firstname" name="firstname" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm dark:bg-gray-800 dark:border-gray-600 dark:text-gray-300">
                    </div>
                    <div class="p-4">
                        <label for="lastname" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Nom</label>
                        <input v-model="form.lastname" type="text" id="lastname" name="lastname" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm dark:bg-gray-800 dark:border-gray-600 dark:text-gray-300">
                    </div>
                    <div class="p-4">
                        <label for="birthday" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Date de naissance</label>
                        <input v-model="form.birthday" type="date" id="birthday" name="birthday" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm dark:bg-gray-800 dark:border-gray-600 dark:text-gray-300">
                    </div>
                    <div class="p-4">
                        <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Email</label>
                        <input v-model="form.email" type="email" id="email" name="email" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm dark:bg-gray-800 dark:border-gray-600 dark:text-gray-300">
                    </div>
                    <div class="p-4">
                        <label for="birthplace" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Lieu de naissance</label>
                        <input v-model="form.birthplace" type="text" id="birthplace" name="birthplace" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm dark:bg-gray-800 dark:border-gray-600 dark:text-gray-300">
                    </div>
                    <div class="p-4">
                        <label for="phone" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Telphone</label>
                        <input v-model="form.phone" type="text" id="phone" name="phone" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm dark:bg-gray-800 dark:border-gray-600 dark:text-gray-300">
                    </div>
                    <div class="p-4">
                        <label for="class" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Classe</label>
                        <select v-model="form.classes" id="class" name="classes" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm dark:bg-gray-800 dark:border-gray-600 dark:text-gray-300">
                            <option value="null">Choisir une classe</option>
                            <option v-for="(v, k) in props.classes" :value="k" >{{ v }}</option>
                        </select>
                    </div>

                    <div class="p-4">
                        <label for="schoolingYear" class="block text sm font-medium text-gray-700 dark:text-gray-200">Année scolaire</label>
                        <input v-model="form.schoolingYear" type="text" id="schoolingYear" name="schoolingYear" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm dark:bg-gray-800 dark:border-gray-600 dark:text-gray-300">
                    </div>
                    <div class="p-4">
                        <button type="submit" class="block w-full px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Ajouter un étudiant</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


</template>
