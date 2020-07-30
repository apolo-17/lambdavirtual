<template>
    <div>
        <questions-exam v-if="show_question_exam"
            :question="questionsUpdated"
            @question_solved="updateQuestionary"
        ></questions-exam>

    </div>
</template>
<script src="https://cdn.jsdelivr.net/npm/lodash@4.13.1/lodash.min.js"></script>
<script>
export default {
    props:['exam_id'],

    data() {
        return {
            question_solved_count: 0,
            question_exam: null,
            show_question_exam: false,
            questionary: null
        }
    },

    mounted() {

        axios.get(`/get-exam-created/${this.exam_id}`).then(response => {
            this.questionary = JSON.parse(response.data.questionary)

            /* let answer_solved = null;
            let question_solved = null;
            let question_solved_count = 0;
            questions.forEach(question => {
                question.answers.forEach(answer => {
                    if (answer.value == true) {
                        answer_solved = question.id
                        question_solved = questions.indexOf(questions.find(questionId => questionId.id === question.id));
                        questions.splice(question_solved);
                        console.log(questions)
                        question_solved_count += question_solved
                    }
                })
            }); */
            /* let question_solved = questions.indexOf(questions.find(question => question.id === answer_solved));
            questions.splice(question_solved,1); */

            console.log(this.questionary)
            /* let question_aleatorio = Math.floor(Math.random()*questions.length);

            this.question_exam = questions[question_aleatorio]; */
            this.show_question_exam = true
        });

    },
    computed: {
        questionsUpdated(){
            let questions = this.questionary

            let answer_solved = null;
            let question_solved = null;

            questions.forEach(question => {
                question.answers.forEach(answer => {
                    if (answer.value == true) {
                        answer_solved = question.id
                    }

                    this.question_solved_count += question_solved
                })
            });

            question_solved = questions.indexOf(questions.find(questionId => questionId.id === answer_solved));
            questions.splice(question_solved);

            console.log('numero de preguntas',questions)

            let question_aleatorio = Math.floor(Math.random()*questions.length);


            return questions[question_aleatorio];
        }
    },

    methods: {
        updateQuestions(question_updated){

            let questions = JSON.parse(question_updated.questionary)

            let answer_solved = null;
            let question_solved = null;
            let question_solved_count = 0
            questions.forEach(question => {
                question.answers.forEach(answer => {
                    if (answer.value == true) {
                        answer_solved = question.id
                        question_solved = questions.indexOf(questions.find(questionId => questionId.id === question.id));
                        questions.splice(question_solved);
                        question_solved_count += question_solved
                    }
                })
            });

            /* let question_solved = questions.indexOf(questions.find(question => question.id === answer_solved));
            questions.splice(question_solved,1); */

            let question_aleatorio = Math.floor(Math.random()*questions.length);
            console.log(questions)
            return this.question_exam = questions[question_aleatorio];
        },
        updateQuestionary(question_solved){
            let params = {
                exam_id: this.exam_id,
                question_solved: question_solved
            }

            axios.post('/exam-student-update', {...params}).then(response => {
                console.log('This updated: ',response.data)
                this.questionary = JSON.parse(response.data.questionary)
            });
        }
    },
}
</script>
