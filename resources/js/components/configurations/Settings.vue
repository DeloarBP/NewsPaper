<template>
    <div class="flex justify-start pt-20">
        <div class="w-2/4 bg-white  border shadow p-6 rounded-lg">
        <form @submit.prevent="submit">
            <base-input v-model="gender" label="Gender"/>
            <base-button class="py-2" buttonClass="bg-green-500 text-white">Submit</base-button>
        </form>
        </div>
    </div>
</template>

<script>
import BaseInput from '../lib/form/BaseInput'
import BaseButton from '../lib/buttons/BaseButton'
export default {
    name: 'Settings',
    components: { BaseInput, BaseButton },
    data() {
        return {
            name: '',
            age: '',
            gender: ''
        }
    },
    methods: {
        submit() {
            console.log(55)
            alert('hi')
        }
    }

}
</script>
