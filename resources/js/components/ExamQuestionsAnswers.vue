<template>
    <div class="mx-4 my-4" >
        <div class="flex justify-center">
            <div class="text-3xl">Preguntas</div>
        </div>
        <div class="flex-none">
            <form v-on:submit.prevent="editExam">
                <div class="flex justify-center px-2 py-2">
                    <div class="w-1/3 px-2 py-2">
                        <label for="">Nombre del examen:</label>
                        <input v-model="questionary.name" class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 block w-full appearance-none leading-normal"  type="text" placeholder="Nombre del examen">
                        <span class="text-xs text-red-600" v-if="errors">
                            <span v-if="errors.name">El nombre es obligatorio</span>
                        </span>
                    </div>

                    <div class="w-1/3 px-2 py-2">
                        <label for="">Fecha de inicio:</label>
                        <input :value="formatDateTime(questionary.deploy_exam)" @change="captchaValue" name="deploy_exam" class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 block w-full appearance-none leading-normal"  type="date" placeholder="Fecha inicio">
                        <span class="text-xs text-red-600" v-if="errors">
                            <span v-if="errors.deploy_exam">La fecha de lanzamiento es obligatoria</span>
                        </span>
                    </div>
                    <div class="w-1/3 px-2 py-2">
                        <label for="">Fecha fin:</label>
                        <input :value="formatDateTime(questionary.finish_exam)" @change="captchaValue" name="finish_exam" class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 block w-full appearance-none leading-normal"  type="date" placeholder="Fecha fin">
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

                <div class="flex px-2 py-2" v-for="(question, index) in createQuestion" :key="index.id">
                    <div class="w-full">
                        <div class="w-4/5">
                            <label for="">Pregunta numero {{ question.id }}:</label>
                            <input v-model="question.question" class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 block w-full appearance-none leading-normal"  type="text" placeholder="Ingrese pregunta ">
                        </div>
                        <answers v-for="(answer, index) in question.answers" :key="index.id"
                            :answer="answer"
                            :number_question="question.id"
                        ></answers>
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
import moment from 'moment'
export default {
    props:['questionary'],
    data() {
        return {
            name: null,
            deploy_exam: null,
            finish_exam: null,
            duration: null,
            number_questions: null,
            number_subsections: null,
            description: null,
            errors:null,
            questions: [],
            value_answer: false,
        }
    },
    computed: {
        createQuestion(){
            return _.isEmpty(this.questionary) ? null : this.questions = JSON.parse(this.questionary.questionary)
        },

    },
    mounted() {
    },
    methods: {
        parseJson(questionary){
            JSON.parse(questionary)
        },
        editExam() {

            let params = {
                questionary: this.questionary,
                deploy_exam: _.isEmpty(this.deploy_exam) ? this.questionary.deploy_exam : this.deploy_exam,
                finish_exam: _.isEmpty(this.finish_exam) ? this.questionary.finish_exam : this.finish_exam,
                questions: this.questions
            };

            axios.post('/admin-exam-update',{...params}).then(response => {

                this.$router.replace({name:'exam-index'});
                location.reload();
            });
        },
        formatDateTime(date) {
            return moment(date).format('YYYY-MM-DD');
        },
        captchaValue(event) {
            if(event.target.name == 'deploy_exam') {
                this.deploy_exam = event.target.value
            }

            if(event.target.name == 'finish_exam') {
                this.finish_exam = event.target.value
            }
        }
    },
}
</script>
