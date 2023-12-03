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
    addNewTask(){
      if(this.newTask != ''){
        const data = new FormData();
        data.append("newTask", this.newTask); 
        axios.post(this.apiUrl, data).then((response)=>{
          this.todoList = response.data;
          this.newTask= '';
        })
      }
    }
  },
  mounted(){
    this.getTask()
  }
}).mount('#app')