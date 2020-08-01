<template>
    <div>

        <div class="examenContent__conteo">
            <div class="examenContent__number">{{question_out_solved}}/ {{question_solved}} </div><div class="examenContent__numbertext">preguntas</div>
        </div>
        <span v-if="!show_question_exam">
        <p>En cuanto des click al examen , iniciara el contador y el examen habra empezado, recuerda que tienes limite de tiempo</p>
        <button @click="startExam" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">Iniciar Exame</button>
        </span>
        <questions-exam v-if="show_question_exam"
            :question="question"
            @updateQuestionSolved="updateQuestionary"
        ></questions-exam>
        <div>tiempo del examen: 00:00:00</div>
    </div>
</template>
<script src="https://cdn.jsdelivr.net/npm/lodash@4.13.1/lodash.min.js"></script>
<script>
export default {
    props:['exam_id'],

    data() {
        return {
            question_solved: 0,
            question_out_solved: 0,
            show_question_exam: false,
            end_exam: null,
            question: null,
            displayDays:0,
            displayHours:0,
            displayMinuts:0,
            displaySeconds:0
        }
    },

    mounted() {

        /* axios.get(`/get-exam-created/${this.exam_id}`).then(response => {
            if (response.data.start != null) {
                this.question = JSON.parse(response.data.questions)
                this.show_question_exam = true
            }
        }); */

    },
    computed: {
        _seconds: () => 1000,
        _minutes() {
            return this._secods * 60;
        },
        _hours() {
            return this._minutes * 60;
        },
        _days() {
            return this._hours * 24 ;
        }
    },

    methods: {
        showRemaining(){
            const time = setInterval(() => {
                const now = new Date();
                const end = this.end_exam;
            }, interval);
        },
        startExam(){

            axios.get(`/get-exam-created/${this.exam_id}`).then(response => {
                console.log(response.data.start, JSON.parse(response.data.questions))
                this.question = JSON.parse(response.data.questions);
                this.end_exam = response.data.finish;
                console.log(this.end_exam)
                this.show_question_exam = true;
            });
        },
        updateQuestionary(){

            let params = {
                exam_id: this.exam_id,
                question_solved: this.question
            };

            axios.post('/exam-student-update', {...params}).then(response => {
                console.log(response.data)
                this.question = JSON.parse(response.data.questions)
            });
        }
    },
}
</script>
