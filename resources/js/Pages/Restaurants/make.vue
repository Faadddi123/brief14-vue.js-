<template>
    
    <div>
        <AuthenticatedLayout>
            <GuestLayout>
            <h2>Create a Restaurant</h2>
            <form @submit.prevent="submitForm" action="{{ route('restaurants.store') }}" method="post">
                <div>
                <label for="name">Name:</label>
                <input name = "name" type="text" id="name" v-model="formData.name" required />
                </div>
                <div>
                <label for="open">Opening Hours:</label>
                <input name="open_at" type="time" id="open" v-model="formData.openingHours" required />
                </div>
                
                <div>
                <label for="close">Closing Hours:</label>
                <input name="close_at" type="time" id="close" v-model="formData.closingHours" required />
                </div>
                <select name="owner_id" id="">
                  
                </select>
                <PrimaryButton type="submit">Submit</PrimaryButton>
            </form>
        </GuestLayout>
        </AuthenticatedLayout>
    </div>
  </template>
  
  <script setup>
  import { ref } from 'vue';
  import { Inertia } from '@inertiajs/inertia';
  import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
  import GuestLayout from '@/Layouts/GuestLayout.vue';
  import InputLabel from '@/Components/InputLabel.vue';
  import PrimaryButton from '@/Components/PrimaryButton.vue';
  
  // Define a reactive reference for the form data
  const formData = ref({
    name: '',
    openingHours: '',
    closingHours: '',
  });
  
  // Define a function to submit the form data
  const submitForm = () => {
    // Send a POST request to the backend using Inertia
    Inertia.post(route('restaurants.store'), formData.value);
  };
  </script>
  