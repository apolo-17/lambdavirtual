<template>
    <div class="w-full">
        <filters-exam-aplication
            :country="country"
            @updateCountrySelected="updateCountrySelected"
            @updateDepartmentFilter="updateDepartmentFilter"
            @updateEmailFilter="updateEmailFilter"
        ></filters-exam-aplication>
        <table-exam-aplication
            :students="examsFiltered"
        ></table-exam-aplication>
    </div>
</template>
<script>
export default {
    props:['exam_aplication','country'],
    data() {
        return {
            selected_country_id:null,
            input_department:null,
            input_email:null
        }
    },
    mounted() {
        console.log(this.exam_aplication)
    },
    methods: {
        updateCountrySelected(event){
            this.selected_country_id = event;
        },
        updateDepartmentFilter(event){
            this.input_department = event
        },
        updateEmailFilter(event){
            this.input_email = event
        }
    },
    computed: {
        examsFiltered(){
            let students_finals_filtered = this.exam_aplication;

            if (this.selected_country_id) {
                students_finals_filtered = students_finals_filtered.filter(
                    student => student.student_profile.country_id == this.selected_country_id
                )
            }

            if (this.input_department) {
                students_finals_filtered = students_finals_filtered.filter(
                    student => student.student_profile.department.toLowerCase().includes(this.input_department.toLowerCase()) );
            }

            if (this.input_email) {
                students_finals_filtered = students_finals_filtered.filter(
                    student => student.student_profile.user.email.toLowerCase().includes(this.input_email.toLowerCase()));
            }

            return students_finals_filtered;
        }
    },
}
</script>
