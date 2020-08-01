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
        <div>Tiempo del examen: {{ displayHours }}:{{ displayMinutes }}:{{displaySeconds}}</div>
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
        formatNum: num  => (num < 10 ? '0' + num : num),
        showRemaining(){
            const timer = setInterval(() => {
                const now = new Date();
                const end = new Date(this.end_time_exam)
                console.log(now)
                const distance = end.getTime() - now.getTime();

                if (distance < 0) {
                    clearInterval(timer);
                    return
                }

                const days = Math.floor((distance / this._days));
                const hours = Math.floor((distance % this._days) / this.hours);
                const minutes = Math.floor((distance % this._hours) / this._minutes);
                const seconds = Math.floor((distance % this._minutes) / this._seconds);
                console.log(distance, this._seconds)
                this.displayMinutes = this.formatNum(minutes);
                this.displaySeconds = this.formatNum(seconds);
                this.displayHours = this.formatNum(hours);
                this.displayDays = this.formatNum(days);

            },1000);
        },
        startExam(){
            let start = new Date();

            axios.get(`/get-exam-created/${this.exam_id}/${start}`).then(response => {

                this.question = JSON.parse(response.data.questions);
                this.end_time_exam = response.data.finish;
                this.show_question_exam = true;
                this.showRemaining()
            });
        },
        updateQuestionary(){

            let params = {
                exam_id: this.exam_id,
                question_solved: this.question
            };

            axios.post('/exam-student-update', {...params}).then(response => {

                this.question = JSON.parse(response.data.questions)

            });
        }
    },
}
</script>
