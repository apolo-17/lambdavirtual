<template>
    <div>
        <div class="flex justify-center">
            <div class="text-3xl">Creacion de examen</div>
        </div>
        <div class="flex-none">
            <form v-on:submit.prevent="createExam">
                <div class="flex justify-center px-2 py-2">
                    <div class="w-1/3 px-2 py-2">
                        <label for="">Nombre del examen:</label>
                        <input v-model="name" class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 block w-full appearance-none leading-normal"  type="text" placeholder="Nombre del examen">
                        <span class="text-xs text-red-600" v-if="errors">
                            <span v-if="errors.name">El nombre es obligatorio</span>
                        </span>
                    </div>

                    <div class="w-1/3 px-2 py-2">
                        <label for="">Fecha de inicio:</label>
                        <input v-model="deploy_exam" class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 block w-full appearance-none leading-normal"  type="date" placeholder="Fecha inicio">
                        <span class="text-xs text-red-600" v-if="errors">
                            <span v-if="errors.deploy_exam">La fecha de lanzamiento es obligatoria</span>
                        </span>
                    </div>
                    <div class="w-1/3 px-2 py-2">
                        <label for="">Fecha fin:</label>
                        <input v-model="finish_exam" class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 block w-full appearance-none leading-normal"  type="date" placeholder="Fecha fin">
                        <span class="text-xs text-red-600" v-if="errors">
                            <span v-if="errors.finish_exam">La fecha final es obligatorio</span>
                        </span>
                    </div>
                </div>
                <div class="flex justify-center px-2 py-2">
                    <div class="w-1/3 px-2 py-2">
                        <label for="">Duracion del examen:</label>
                        <input v-model="duration" class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 block w-full appearance-none leading-normal"  type="time" placeholder="Duracion del examen">
                        <span class="text-xs text-red-600" v-if="errors">
                            <span v-if="errors.duration">La duracion del examen es obligatorio</span>
                        </span>
                    </div>
                    <div class="w-1/3 px-2 py-2">
                        <label for="">Numero de preguntas:</label>
                        <input v-model="number_questions" class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 block w-full appearance-none leading-normal"  type="number" placeholder="Numero de preguntas">
                        <span class="text-xs text-red-600" v-if="errors">
                            <span v-if="errors.number_questions">El numero de preguntas es obligatorio</span>
                        </span>
                    </div>
                    <div class="w-1/3 px-2 py-2">
                        <label for="">Numero de incisos:</label>
                        <input v-model="number_subsections" class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 block w-full appearance-none leading-normal"  type="number" placeholder="Numero de incisos">
                        <span class="text-xs text-red-600" v-if="errors">
                            <span v-if="errors.number_subsections">El numero de incisos obligatorio</span>
                        </span>
                    </div>
                    <div class="w-2/3 px-2 py-2">
                        <label for="">Descripcion:</label>
                        <textarea v-model="description" class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 block w-full appearance-none leading-normal" name="description" rows="1" cols="50"></textarea>
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
                duration: null,
                number_questions: null,
                number_subsections: null,
                description: null,
                errors:null
            }
        },
        mounted() {
            //
        },
        methods: {
            createExam() {
                let questionary = []

                for (let index = 0; index <= this.number_questions-1; index++) {
                    let question = {
                        id: index+1,
                        question: '',
                        answers: [],
                        question_solved: false,
                        answer_correct: '',
                        answer_selected: ''

                    }//
                    questionary.push(question);
                    for (let index = 0; index <= this.number_subsections-1; index++) {
                        let answer = {
                            id: index+1,
                            value: false,
                            answer: ''

                        }
                        question.answers.push(answer)
                    }
                }

                let params = {
                    name: this.name,
                    deploy_exam: this.deploy_exam,
                    finish_exam: this.finish_exam,
                    duration: this.duration,
                    number_questions: this.number_questions,
                    number_subsections: this.number_subsections,
                    description: this.description,
                    questionary:questionary
                }

                axios.post('/admin-exam-store', {...params}).then(response => {
                    let questionary = response.data
                    this.$emit('createQuestion', questionary)
                    this.$router.push('/admin-exam-edit/'+response.data.id);
                }).catch(error => {
                    console.log(error)
                    this.errors = error.response.data.errors;
                });
            }
        },
    }
</script>
