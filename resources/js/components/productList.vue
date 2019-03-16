<template>
  <div class="row">
    <div class="col-12 grid-margin">
      <div class="card">
        <div class="card-body" v-for = 'item in productList'>
          <h5 class="card-title mb-4">{{item.name}}</h5>
          <div class="fluid-container">
            <div class="row ticket-card mt-3 pb-2 border-bottom pb-3 mb-3">
              <div class="col-md-1">
                <!-- <img class="img-sm rounded-circle mb-4 mb-md-0" src="" alt="profile image"> -->
              </div>
              <div class="ticket-details col-md-9">
                
                  <p >{{item.discription}}
                  </p>
                
                <div class="d-flex">
                  <p class="text-dark font-weight-semibold mr-2 mb-0 no-wrap">Price :</p>
                  <p class="text-primary mr-1 mb-0">${{item.price}}</p>

                </div>
             
            </div>
            <div class="ticket-actions col-md-2">
              <div class="btn-group ">
                <button  class="btn btn-success btn-fw" :class="{'btn btn-danger btn-fw':item.buy}" @click="buyItem(item)">Buy</button>
                <!-- <button type="button" class="btn btn-success btn-fw">Success</button> -->
              </div>
            </div>
          </div>
          
          
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
      productList:[],
      buybutton:false
    }
  },
  props:[''],
  created() {
    axios.get('/api/productList')
    .then(response => this.productList = response.data);

    Event.$on('itemCreated',(name) => {
      this.productList.push(name);
      this.productList.push(price);
    }
    );
  },
  methods:{
    buyItem(item){

       // this.buybutton =false;
      item.buy = true;

      axios.post('/api/buy-item',item);
    }

  },
}
</script>