
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.toastr = require('toastr');
window.Vue = require('vue');
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

 Vue.component('example-component', require('./components/ExampleComponent.vue'));

// const app = new Vue({
//     el: '#app'
// });


new Vue({
    el: "#crud",
    created: function(){
        this.getKeeps();
    },
    data: {
        keeps:[],
        newKeep: "",
        fillKeep: {id:'',keep:''},
        errors: []    
    },
    methods: {
        getKeeps: function(){
            var urlKeeps = 'tasks';
            axios.get(urlKeeps).then(response=>{
                this.keeps = response.data
            });
        },
        editKeep: function(keep){
            this.fillKeep.id = keep.id;
            this.fillKeep.keep = keep.keep;
            $('#edit').modal('show');
        },
        updateKeep: function(id){
            var url = 'tasks/' + id;
            
            axios.put(url,this.fillKeep).then(response=>{
                this.getKeeps();
                this.fillKeep = {id:'',keep:''};
                this.errors = [],
                $('#edit').modal('hide');
                toastr.success('Actualizado correctamente');
            }).catch(error=>{
                this.errors = error.response.data
            });
        },
        deleteKeep:function(keep){
            var url = 'tasks/' + keep.id;
            axios.delete(url).then(response=>{
                this.getKeeps();
                toastr.success('Eliminado correctamente');
            })
        },
        createKeep:function(){
            var url = 'tasks';
            axios.post(url,{
                keep:this.newKeep
            }).then(response=>{
                this.getKeeps();
                this.newKeep = '';
                this.errors = [];
                $('#create').modal('hide');
                toastr.success('Nueva tarea creada con éxito');
            }).catch(error=>{
                this.errors = error.response.data;
            })
        }
        
    }
});
