<script setup>
import { Link } from '@inertiajs/vue3';
import { initFlowbite } from "flowbite";
import { onMounted } from 'vue'
import { Head, useForm, router, useRemember } from "@inertiajs/vue3";

const props = defineProps({
  users: {
    type: Object,
    required: true,
  },
  });

const form = useForm({
  name: "",
});

const submit = () => {
  form.post(route("smarthire.newUserUpdate", props.users?.id), {
  });
};

</script>
onMounted(() => {
  initFlowbite();
});

<template>
  <div>
    <nav class=" border-b-2 border-gold">
      <div class="max-w-7xl mx-auto px-6 md:px-14">
        <div class="flex justify-between space-x-32">
          <div>
            <a
              href="#home"
              class="block text-white text-lg font-extrabold flex items-center py-3 px-2"
            >
              <img src="@/Assets/smarthirelogo.png" class="w-30 h-24 mr-3" />
            </a>
          </div>

          <div class="hidden md:flex flex items-center space-x-2">
            <h1 class="font-bold uppercase">
              New User, Please fill up the required information to continue!
            </h1>
          </div>

          <div class="flex items-center space-x-1">
            <div>
              <Link
                :href="route('logout')"
                method="post"
                as="button"
                class="font-bold py-2 px-3 border-2 border-gold hover:bg-yellow-400 hover:text-yellow-800 rounded transition duration-300 ease-in-out"
                >Log out</Link
              >
            </div>
          </div>
        </div>
      </div>
    </nav>
       
<div class="px-20 py-10">
      <div class="mt-8">
        <form @submit.prevent="submit" class="mt-6" action="#" method="POST">
          <div class="grid grid-cols-3 gap-3 w-full">
            
          <div class="relative z-0 w-full mb-6 group">
            <input
              type="text" 
              id="name" 
              v-model="form.name"
              class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:border-blue peer"
              placeholder=" "
             
              required
              autocomplete="password_confirmation"
            />
            <label
              for="password_confirmation"
              class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1"
              >Name</label
            >
            <InputError class="mt-2"/>
          </div>

          
        

           
           
       

         
          </div>

          

        

          <button
            type="submit"
            class="mt-10 flex justify-center block w-full text-white text-sm font-semibold rounded-lg bg-gold hover:bg-gold/80 focus:bg-gold/90 focus:outline-none focus:shadow-outline focus:bg-gray-100 hover:shadow-xs p-3 my-4"
          >
            Submit
          </button>
        </form>
      </div>
    </div>

  </div>
</template>

<style>

</style>