<template>
    <div>
        <form @submit.prevent="submit">
            <div>
                 <lebel>
                 </lebel>
                 <input v-model="name" />
            </div>

            <base-input v-model="name" id="name" inputStyle="bg-green-200" label="Name" for="name"/>
            <base-input v-model="age" />
            <base-input v-model="gender" label="Gender"/>
            <button @click="submit()">Hi</button>
        </form>
    </div>
</template>

<script>
import BaseInput from '../lib/form/BaseInput'
export default {
    name: 'Settings',
    components: { BaseInput },
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
