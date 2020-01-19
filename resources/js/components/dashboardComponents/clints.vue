  <template>
      <div class="container-fluid">
          <div class="content">
               <h3 class="" style="color:gray">Dashboard / Clints</h3>
               <br>
        <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">Latest Orders</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table m-0">
                    <thead>
                    <tr>
                      <th>Clint ID</th>
                      <th>Name of School</th>
                      <th>School Category</th>
                      <th>Domian Name</th>
                      <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>

                      <!-- badge-success
                            badge-warning
                            badge badge-danger
                            badge badge-info
                       -->
                      <tr v-for="order in orders" :key="order.id">
                      <td>{{order.generatedschoolID}}</td>
                      <td>{{order.nameOfSchool}}</td>
                      <td>{{order.schoolCat}}</td>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20">{{order.domain}}</div>
                      </td>
                      <td><span class="badge badge-danger">{{order.status}}</span></td>
                    </tr>
                    
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                  <!-- <pagination :data="orders" @pagination-change-page="getResults">

                  </pagination> -->
                <!-- <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New Order</a> -->
                <!-- <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Orders</a> -->
              </div>
              <!-- /.card-footer -->
            </div> 
            
          </div>       
      </div>
  </template>
  
  <script>
    export default {
     methods:{
         getResults(){
             
         }
     },
      props:['orders'],
     
    }
</script>
