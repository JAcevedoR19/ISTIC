const todoapp = new Vue ({
    el: '#app',
    data: {
        nuevaTarea: '',
        tareasPendientes: [
            {
                nombre: 'Presentar exámen de Programación 3'
            }
        ],
        tareasRealizadas: [
            {
                nombre: 'Hacer ejercicio'
            }
        ]
    },
    methods: {
        crearTarea(nuevaTarea){
            if (nuevaTarea != '') {
                this.tareasPendientes.push({
                    nombre: this.nuevaTarea
                });
                this.nuevaTarea = '';
            }
        },
        cambiarTarea(tarea){
            for (let i = 0; i < this.tareasPendientes.length; i++) {
                if (this.tareasPendientes[i].nombre == tarea.nombre) {
                    this.tareasPendientes.splice(i, 1);
                    this.tareasRealizadas.push(tarea);
                    return;
                }
            }

            for (let i = 0; i < this.tareasRealizadas.length; i++) {
                if (this.tareasRealizadas[i].nombre == tarea.nombre) {
                    this.tareasRealizadas.splice(i, 1);
                    this.tareasPendientes.push(tarea);
                    return;
                }
            }

        
        },
        eliminarTarea(){

        },
        cantidadTarea(){

        }
    }
})




// const tasks = [
//     {
//         name: 'Mirar un serie',
//         completed: true
//     },
//     {
//         name: 'Ir al cine',
//         completed: false
//     },
//     {
//         name: 'Hacer ejercicios',
//         completed: true
//     }
// ]