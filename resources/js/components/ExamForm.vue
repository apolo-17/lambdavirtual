<template>
    <div>
        <div class="flex justify-center">
            <div class="text-3xl">Creacion de examen</div>
        </div>
        <div class="flex-none">
            <form v-on:submit.prevent="createExam()">
                <div class="flex justify-center px-2 py-2">
                    <div class="w-1/3 px-2 py-2">
                        <label for="">Nombre del examen:</label>
                        <input v-model="name" class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 block w-full appearance-none leading-normal"  type="text" placeholder="Nombre del examen">
                        <span class="text-xs text-red-600">
                            <span>El nombre es obligatorio</span>
                      </span>
                    </div>

                    <div class="w-1/3 px-2 py-2">
                        <label for="">Fecha de inicio:</label>
                        <input v-model="deploy_exam" class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 block w-full appearance-none leading-normal"  type="datetime-local" placeholder="Fecha inicio">
                    </div>
                    <div class="w-1/3 px-2 py-2">
                        <label for="">Fecha fin:</label>
                        <input v-model="finish_exam" class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 block w-full appearance-none leading-normal"  type="datetime-local" placeholder="Fecha fin">
                    </div>
                </div>
                <div class="flex justify-center px-2 py-2">
                    <div class="w-2/3 px-2 py-2">
                        <label for="">Descripcion:</label>
                        <textarea v-model="description" class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 block w-full appearance-none leading-normal" name="description" rows="1" cols="50"></textarea>
                    </div>
                    <div class="w-1/3 px-2 py-2">
                        <label for="">Duracion del examen:</label>
                        <input v-model="duration" class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 block w-full appearance-none leading-normal"  type="time" placeholder="Duracion del examen">
                    </div>
                </div>
                <div class="flex justify-center">
                    <button class="bg-red-700 hover:bg-red-600 text-white font-bold py-2 px-4 rounded-full">
                        Crear examen
                    </button>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                name: null,
                deploy_exam:null,
                finish_exam: null,
                description: null,
                duration: null
            }
        },
        mounted() {
            //
        },
        methods: {
            createExam() {
                console.log(this.name, this.deploy_exam, this.finish_exam, this.description,this.duration)
                //axios.post()

            }
        },
    }
</script>
