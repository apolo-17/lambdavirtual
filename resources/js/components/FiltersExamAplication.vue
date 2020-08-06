<template>
    <div>
        <div>
            <label for="">Pais</label>
            <select @change="updateCountrySelected">
                <option value="">Seleccione un Pais</option>
                <option v-for="country in country"
                        :value="country.id"
                        :key="country.id"
                >{{ country.name }}</option>
            </select>
        </div>
        <div>
            <label for="">Departamento</label>
            <input
                type="text"
                placeholder="Buscar departamento"
                v-model="department"
                @input="updateDepartmentFilter"
            >
        </div>
    </div>
</template>

<script>
export default {
    props:['country'],
    data() {
        return {
            department:"",
        }
    },
    methods: {
        updateCountrySelected(event){
            this.$emit('updateCountrySelected',event.target.value)
        },
        updateDepartmentFilter(){
            this.$emit('updateDepartmentFilter',this.department)
        }
    },
}
</script>
