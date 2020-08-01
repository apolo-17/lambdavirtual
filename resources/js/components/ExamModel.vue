<template>
    <div>
        <span v-if="!show_question_exam">
            <section class="examenContent__respuestas">
                <h1>¡Llegó el gran dia!</h1>
                <p>
                    Este 1er Concurso Internacional de conocimiento tiene finalidad de retarte. Tendras 20 preguntas por responder y un cronometro a tu disposición para optimizar tu tiempo.
                </p>
                <div>
                    <div class="examenContent__btn" @click="startExam">
                        ¡Empezar!
                    </div>
                </div>
            </section>
        </span>
        <div v-if="show_question_exam">
            <div >Tiempo del examen: 00:{{ displayMinutes }}:{{displaySeconds}}</div>
            <questions-exam v-if="show_question_exam"
                :question="question"
                :question_solved="question_solved"
                :total_questions="total_questions"
                @updateQuestionSolved="updateQuestionary"
            ></questions-exam>
        </div>
    </div>
</template>
<script src="https://cdn.jsdelivr.net/npm/lodash@4.13.1/lodash.min.js"></script>
<script>

export default {
    props:['exam_id'],

    data() {
        return {
            question_solved: 0,
            total_questions: 0,
            show_question_exam: false,
            end_time_exam: null,
            question: null,
            displayDays:0,
            displayHours:0,
            displayMinutes:0,
            displaySeconds:0
        }
    },

    mounted() {

        /* let start = new Date();
        axios.get(`/get-exam-created/${this.exam_id}/${start}`).then(response => {

            this.question = JSON.parse(response.data.questions);
            this.end_time_exam = response.data.finish;
            this.show_question_exam = true;
            this.showRemaining()
        }); */

    },
    computed: {
        _seconds: () => 1000,
        _minutes() {
            return this._seconds * 60;
        },
        _hours() {
            return this._minutes * 60;
        },
        _days() {
            return this._hours * 24;
        }
    },

    methods: {
        startExam(){
            let start = new Date();

            axios.get(`/get-exam-created/${this.exam_id}/${start}`).then(response => {

                this.question = JSON.parse(response.data.questions);
                this.end_time_exam = response.data.finish;
                this.show_question_exam = true;
                this.question_solved = response.data.question_solved;
                this.total_questions = response.data.total_questions;
                this.showRemaining()
            });
        },
        formatNum: num  => (num < 10 ? '0' + num : num),
        showRemaining(){
            const timer = setInterval(() => {
                const now = new Date();
                const end = new Date(this.end_time_exam)

                const distance = end.getTime() - now.getTime();

                if (distance < 0) {
                    clearInterval(timer);
                    axios.get(`/over-time/${this.exam_id}`).then(response => {
                        this.$router.replace({name:'home'});
                        location.reload();
                    })
                    return
                }

                const days = Math.floor((distance / this._days));
                const hours = Math.floor((distance % this._days) / this.hours);
                const minutes = Math.floor((distance % this._hours) / this._minutes);
                const seconds = Math.floor((distance % this._minutes) / this._seconds);

                this.displayMinutes = this.formatNum(minutes);
                this.displaySeconds = this.formatNum(seconds);
                this.displayHours = this.formatNum(hours);
                this.displayDays = this.formatNum(days);

            },1000);
        },
        updateQuestionary(){

            let params = {
                exam_id: this.exam_id,
                question_solved: this.question
            };

            axios.post('/exam-student-update', {...params}).then(response => {
                if (response.data.route_finish == true) {

                    this.$router.replace({name:'home'});
                    location.reload();
                }

                this.question = JSON.parse(response.data.questions)
                this.question_solved =response.data.question_solved

            });
        }
    },
}
</script>
