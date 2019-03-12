<template>
<div class="col-lg-5 grid-margin stretch-card">
  <div class="row flex-grow">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title"> </h4>
          <p class="card-description">
            New Product
          </p>
          <form class="forms-sample"  method="post" @submit.prevent="addProduct">
          <input type="hidden" name="_token" :value="csrf">
            
            <div class="form-group">
              <label for="exampleInputEmail1">Name</label>
              <input type="" class="form-control" v-model="name" placeholder="Product Name">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Price</label>
              <input type="" class="form-control" v-model="price" placeholder="Price">
            </div>
            <div class="form-group">
              <label for="exampleTextarea1">Discription</label>
              <textarea class="form-control" v-model="discription" rows="6"></textarea>
            </div>
            <button type="submit" class="btn btn-success mr-2">Udate</button>
            
            </form>
        </div>
      </div>
    </div>
  </div>
</div>

</template>

<script>
  export default {
    data(){
        return {

              name:"",
              price:"",
              csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
              discription:""


        }
    },
    
    props:[''],
    mounted() {


      
  // console.log(this.like);

  },
  methods:{
      addProduct(){
         // alert (5);
        
        axios.post('/api/newProduct',this.$data);

        
        


    }
  }
};

</script>