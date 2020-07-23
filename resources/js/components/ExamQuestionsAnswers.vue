<template>
    <div class="mx-4 my-4" >
        <div class="flex justify-center">
            <div class="text-3xl">Creacion de questionario</div>
        </div>
        <div class="flex-none">
            <form v-on:submit.prevent="editExam">
                <div class="flex justify-center px-2 py-2">
                    <div class="w-1/3 px-2 py-2">
                        <label for="">Nombre del examen:</label>
                        <input v-model="questionary.name"  class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 block w-full appearance-none leading-normal"  type="text" placeholder="Nombre del examen">
                        <span class="text-xs text-red-600" v-if="errors">
                            <span v-if="errors.name">El nombre es obligatorio</span>
                        </span>
                    </div>

                    <div class="w-1/3 px-2 py-2">
                        <label for="">Fecha de inicio:</label>
                        <input v-model="questionary.deploy_exam" class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 block w-full appearance-none leading-normal"  type="datetime-local" placeholder="Fecha inicio">
                        <span class="text-xs text-red-600" v-if="errors">
                            <span v-if="errors.deploy_exam">La fecha de lanzamiento es obligatoria</span>
                        </span>
                    </div>
                    <div class="w-1/3 px-2 py-2">
                        <label for="">Fecha fin:</label>
                        <input v-model="questionary.finish_exam" class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 block w-full appearance-none leading-normal"  type="datetime-local" placeholder="Fecha fin">
                        <span class="text-xs text-red-600" v-if="errors">
                            <span v-if="errors.finish_exam">La fecha final es obligatorio</span>
                        </span>
                    </div>
                </div>
                <div class="flex justify-center px-2 py-2">
                    <div class="w-1/3 px-2 py-2">
                        <label for="">Duracion del examen:</label>
                        <input v-model="questionary.duration" class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 block w-full appearance-none leading-normal"  type="time" placeholder="Duracion del examen">
                        <span class="text-xs text-red-600" v-if="errors">
                            <span v-if="errors.duration">La duracion del examen es obligatorio</span>
                        </span>
                    </div>
                    <div class="w-1/3 px-2 py-2">
                        <label for="">Numero de preguntas:</label>
                        <input v-model="questionary.number_questions" class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 block w-full appearance-none leading-normal"  type="number" placeholder="Numero de preguntas">
                        <span class="text-xs text-red-600" v-if="errors">
                            <span v-if="errors.number_questions">El numero de preguntas es obligatorio</span>
                        </span>
                    </div>
                    <div class="w-1/3 px-2 py-2">
                        <label for="">Numero de incisos:</label>
                        <input v-model="questionary.number_subsections" class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 block w-full appearance-none leading-normal"  type="number" placeholder="Numero de incisos">
                        <span class="text-xs text-red-600" v-if="errors">
                            <span v-if="errors.number_subsections">El numero de incisos obligatorio</span>
                        </span>
                    </div>
                    <div class="w-2/3 px-2 py-2">
                        <label for="">Descripcion:</label>
                        <textarea v-model="questionary.description" class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 block w-full appearance-none leading-normal" name="description" rows="1" cols="50"></textarea>
                    </div>
                </div>

                <div class="flex px-2 py-2" v-for="(question, index) in questions" :key="index.id">
                    <div class="w-full">
                        <div class="w-4/5">
                            <label for="">Pregunta numero {{ question.id }}:</label>
                            <input v-model="question.question" class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 block w-full appearance-none leading-normal"  type="text" placeholder="Ingrese pregunta ">
                        </div>
                        <div class="ml-24 my-4">
                            <ul class="" v-for="(answer, index) in question.answers" :key="index.id">
                                <li class="my-4 flex items-center" >
                                    <input class="mr-4" type="radio" name="answer" :value= answer.value >
                                    <input class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 block w-1/2 appearance-none leading-normal" type="text" placeholder="Respuesta">
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="flex justify-center">
                    <button class="bg-red-700 hover:bg-red-600 text-white font-bold py-2 px-4 rounded-full">
                        Crear examen
                    </button>
                </div>
            </form>
        </div>
        <!-- <div v-for="(question, index) in createQuestion" :key="index.id">
        <div class="mx-2 my-2">
            <input class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 block w-full appearance-none leading-normal"  type="text" placeholder="Ingrese pregunta">
        </div>
        <div class="">
            <ul>
                <li v-for="(answer, index) in question.answers" :key="index">
                    <input class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 block w-20 appearance-none leading-normal" type="text" placeholder="Respuesta">
                </li>
            </ul>
        </div>
        </div> -->
    </div>
</template>

<script>
export default {
    props:['questionary','questions'],
    data() {
        return {
            name: null,
            deploy_exam:null,
            finish_exam: null,
            duration: null,
            number_questions: null,
            number_subsections: null,
            description: null,
            errors:null
        }
    },
    computed: {
        createQuestion(){
            return _.isEmpty(this.questionary) ? null : this.questionary.question
        }
    },
    methods: {

    },
}
</script>
