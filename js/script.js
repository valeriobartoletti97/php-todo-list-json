const { createApp } = Vue;

createApp({
  data() {
    return {
      apiUrl: 'server.php',
      todoList: [],
      newTask:'',
    };
  },
  methods: {
    getTask(){
      axios.get(this.apiUrl).then((response) =>{
        console.log(response.data);
        this.todoList = response.data
      }) 
    },
  },
  mounted(){
    this.getTask()
  }
}).mount('#app')