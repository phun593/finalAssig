<template>
	<div class="col-lg-5 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h2 class="card-title text-primary mb-5">Performance History</h2>
            <div class="wrapper d-flex justify-content-between">
              <div class="side-left">
                <p class="mb-2">The best performance</p>
                <p class="display-3 mb-4 font-weight-light">${{best}}</p>
              </div>
              <div class="side-right">
                <small class="text-muted">2017</small>
              </div>
            </div>
            <div class="wrapper d-flex justify-content-between">
              <div class="side-left">
                <p class="mb-2">Worst performance</p>
                <p class="display-3 mb-5 font-weight-light">${{worst}}</p>
              </div>
              <div class="side-right">
                <small class="text-muted">2015</small>
              </div>
            </div>
            <div class="wrapper">
              <div class="d-flex justify-content-between">
                <p class="mb-2">Sales</p>
                <p class="mb-2 text-primary">88%</p>
              </div>
              <div class="progress">
                <div class="progress-bar bg-primary progress-bar-striped progress-bar-animated" role="progressbar" style="width: 88%" aria-valuenow="88"
                aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <div class="wrapper mt-4">
              <div class="d-flex justify-content-between">
                <p class="mb-2">Visits</p>
                <p class="mb-2 text-success">56%</p>
              </div>
              <div class="progress">
                <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" style="width: 56%" aria-valuenow="56"
                aria-valuemin="0" aria-valuemax="100"></div>
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

              best:"",
              worst:""


        }
    },
    
    
    mounted() {


       	axios.get('/api/best')
       	.then(responce => this.best = responce.data)
       	;
        
       	axios.get('/api/worst')
       	.then(responce => this.worst = responce.data);
        
  // console.log(this.like);

  }
}

</script>