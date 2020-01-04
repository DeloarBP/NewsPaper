<template>
    <b-card class="shadow-style">
        <b-form @submit.prevent="submit">
            <!-- <h5 class="mb-n2" v-if="settings.name">{{ settings.name }}</h5> -->
            <h5 class="mb-n2">Personal Information</h5>
            <hr/>
            <b-row>
                <b-col cols="12" sm="12">
                    <b-form-group label="Label"
                                    label-for="label">
                        <b-form-input id="label"
                                        name="label"
                                        type="text"
                                        :state="Boolean(settings.label)"
                                        v-validate.continues="'required|min:2|max:100'"
                                        v-model="settings.label">
                        </b-form-input>
                        <ul class="text-danger">
                            <li v-for="error in errors.collect('label')">{{ error }}</li>
                        </ul>
                    </b-form-group>
                </b-col>
                <b-col cols="12" sm="12">
                    <b-form-group label="Name"
                                    label-for="name">
                        <b-form-input id="name"
                                        name="name"
                                        type="text"
                                        :state="Boolean(settings.name)"
                                        v-validate.continues="'min:3|max:30'"
                                        v-model="settings.name">
                        </b-form-input>
                        <ul class="text-danger">
                            <li v-for="error in errors.collect('name')">{{ error }}</li>
                        </ul>
                    </b-form-group>
                </b-col>
                <b-col cols="12" sm="12">
                    <b-form-group label="Value"
                                    label-for="value">
                        <b-form-input id="value"
                                        name="value"
                                        type="text"
                                        :state="Boolean(settings.value)"
                                        v-validate.continues="'required|min:3|max:30'"
                                        v-model="settings.value">
                        </b-form-input>
                        <ul class="text-danger">
                            <li v-for="error in errors.collect('value')">{{ error }}</li>
                        </ul>
                    </b-form-group>
                </b-col>
                <b-col>
                    <b-form-group label="Description"
                                    label-for="description">
                        <b-form-textarea
                            id="textarea-state"
                            name="description"
                            v-model="settings.description"
                            placeholder="Description"
                            rows="5"
                        ></b-form-textarea>
                    </b-form-group>
                </b-col>
                <b-col cols="12" sm="12">
                    <b-form-group label="Group"
                                    label-for="group">
                        <b-form-input id="group"
                                        name="group"
                                        type="text"
                                        v-model="settings.group">
                        </b-form-input>
                        <ul class="text-danger">
                            <li v-for="error in errors.collect('group')">{{ error }}</li>
                        </ul>
                    </b-form-group>
                </b-col>
                <b-col cols="12"  class="d-flex">
                    <b-form-group class="w-25">
                        <b-form-checkbox v-model="settings.is_api_accessibility" size="lg">Api accessibility</b-form-checkbox>
                    </b-form-group>
                    <b-form-group>
                        <b-form-checkbox v-model="settings.is_active" size="lg">Active</b-form-checkbox>
                    </b-form-group>
                </b-col>
            </b-row>

            <b-row>
                <b-col cols="12" class="mt-2">
                    <b-button type="submit" variant="primary submit ladda-button mt-3" data-style="zoom-out">Submit</b-button>
                </b-col>
            </b-row>
        </b-form>
    </b-card>
</template>

<script>
    export default {
        name: 'Settings-Form',
        props: {
            url: { type: String, required: true },
            method: { type: String, required: true },
            setting: { type: Object, required: false },
        },

        data() {
            return {
                settings: {
                    label: this.setting ? this.setting.label : '',
                    name: this.setting ? this.setting.name : '',
                    value: this.setting ? this.setting.value : '',
                    group: this.setting ? this.setting.group : '',
                    is_active: false,
                    is_api_accessibility: false,
                    description: this.setting ? this.setting.description : '',
                }
            }
        },

        methods: {
            submit() {
                this.$validator.validate().then(result => {
                    if (result) {
                        Action.store(this.url, this.settings, this.method, this.data)
                    }
                });
            }
        },

        computed: {
            is_active(){
              return  this.settings.is_active = this.setting.is_active ? true : false;
            },

            is_activeis_api_accessibility(){
              return  this.settings.is_api_accessibility = this.setting.is_api_accessibility ? true : false;
            }
        }
    }
</script>

