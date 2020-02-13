<template>
  <div class="main-container">

    <div class="row profit-status">
      <div class="col one" ref="one">SUICIDE! <br>less than 10</div>
      <div class="col two" ref="two">NO! <br>b/w 10 & 40</div>
      <div class="col three" ref="three">Profit if Quantity <br>b/w 40 & 100</div>
      <div class="col four" ref="four">Profitable ✔ <br>b/w 100 & 200</div>
      <div class="col five" ref="five">Very Good✌ <br>b/w 200 & 300</div>
      <div class="col six" ref="six">Excellent ★ <br>b/w 300 & 500</div>
      <div class="col seven" ref="seven">Top of the world!⚡ <br>500+</div>
    </div>
    <!-- form data -->
    <form @submit="formSubmit">
      <div class="row">
        <div class="col">
            <div class="card">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">Question?</th>
                      <th scope="col">Answer</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Selling Price</td>
                      <td><input v-model="sellingprice"></td>
                    </tr>
                    <tr>
                      <td>Product Cost</td>
                      <td><input v-model="productcost"></td>
                    </tr>
                    <tr>
                      <td>Orders</td>
                      <td><input v-model="orders"></td>
                    </tr>
                    <tr>
                      <td>ROAS</td>
                      <td><input v-model="roas"></td>
                    </tr>
                    <tr>
                      <td>Delivery %</td>
                      <td><input v-model="delivery"></td>
                    </tr>
                  </tbody>
                </table>
            </div>
        </div>
        <div class="col">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                      <th scope="row">Sale Value</th>
                      <td><label>{{ salevalue }}</label></td>
                      <td><label>Order x Selling Price</label></td>
                    </tr>
                    <tr>
                      <th scope="row">CPP</th>
                      <td><label>{{ cpp }}</label></td>
                      <td><label>Ad Cost / Orders</label></td>
                    </tr>
                    <tr>
                      <th scope="row">Delivered</th>
                      <td><label>{{ delivered }}</label></td>
                      <td><label>Orders x Delivery %</label></td>
                    </tr>
                </tbody>
            </table>
            <div class="alert alert-success" role="alert">
              <i class="fa fa-sliders mr-3"></i>Profit Result
            </div>
            <table class="table table-bordered">
                <tbody>
                    <tr>
                      <th scope="row">Profit per Delivered*</th>
                      <td ref="bgChange">{{ profitperdelivered }}</td>
                    </tr>
                    <tr>
                      <th class="text-left">Total Profit*</th>
                      <td class="text-left"><label>{{ totalprofit }}</label></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col">
            <table class="table table-striped">
                <tbody>
                    <tr>
                      <th>Remittance</th>
                      <td>{{remittance}}</td>
                    </tr>
                    <tr>
                      <th class="text-left">Ad Cost</th>
                      <td class="text-left">{{ adcost }}</td>
                    </tr>
                    <tr>
                      <th class="text-left">Product</th>
                      <td class="text-left">{{product}}</td>
                    </tr>
                    <tr>
                      <th class="text-left">GST</th>
                      <td class="text-left">{{gst}}</td>
                    </tr>
                    <tr>
                      <th class="text-left">Packaging</th>
                      <td class="text-left">{{packaging}}</td>
                    </tr>
                    <tr>
                      <th class="text-left">Shipping</th>
                      <td class="text-left">{{shipping}}</td>
                    </tr>
                    <tr>
                      <th class="text-left">Total Expense</th>
                      <td class="text-left">{{totalexpense}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
      </div>

      <!-- <div class="alert alert-success text-center" role="alert" v-show="success">
        <i class="fa fa-check-circle fa-lg mr-2"></i>
        Report Generate Successufully!
      </div> -->
      <div class="row">
        <div class="col">
          <input class="form-control form-control-lg" v-model="title" placeholder="Enter Report Title..." required>
        </div>
        <div class="col">
          <button class="btn btn-outline-secondary btn-block btn-lg">
            <i class="fa fa-floppy-o mr-3"></i>Save Report
          </button>
        </div>
      </div>
    </form>
  </div>
</template>

<script>
  import axios from 'axios'

  export default {
    name: 'Index',

    data: () => ({
      title: '',
      sellingprice: '',
      productcost:'',
      orders: '',
      roas: '',
      delivery:'',
      success: false,
    }),
    computed:{
      salevalue(){
        return this.sellingprice * this.orders;
      },
      adcost(){
        return this.salevalue / this.roas;
      },
      cpp(){
        return this.adcost / this.orders;
      },
      delivered(){
        return this.delivery * this.orders / 100;
      },
      product(){
        return this.productcost * this.delivered;
      },
      gst(){
        return this.remittance * 15.254 / 100;
      },
      packaging(){
        return this.orders * 10;
      },
      shipping(){
        return (this.delivered * 112) + (this.orders - this.delivered) * 142;
      },
      totalexpense(){
        return this.adcost + this.product + this.gst + this.packaging + this.shipping;
      },
      remittance(){
        return this.salevalue * this.delivery / 100;
      },
      totalprofit(){
        var tp = this.remittance - this.totalexpense;
        return tp.toFixed(0);
      },
      profitperdelivered(){
        return this.totalprofit / this.delivered;
      },
    },

    methods: {
      formSubmit(e) {
        e.preventDefault();
        axios.post('http://127.0.0.1:8000/api/reports', {
            title: this.title,
            sellingprice: this.sellingprice,
            productcost: this.productcost,
            orders: this.orders,
            roas: this.roas,
            delivery: this.delivery,
            salevalue: this.salevalue,
            adcost: this.adcost,
            cpp: this.cpp,
            delivered: this.delivered,
            product: this.product,
            gst: this.gst,
            packaging: this.packaging,
            shipping: this.shipping,
            totalexpense: this.totalexpense,
            remittance: this.remittance,
            totalprofit: this.totalprofit,
            profitperdelivered: this.profitperdelivered
        })
        .then(function (response) {
            alert('Successfully Save Report');
        })
        .catch(function (error) {
            console.log('Error !! Check Again')
        });
      }
    },

    updated(){
      var aprofit =  this.$refs.bgChange.textContent;
        this.$refs.bgChange.style.backgroundColor = "transparent";
        this.$refs.one.style.opacity = "0.1";
        this.$refs.two.style.opacity = "0.1";
        this.$refs.three.style.opacity = "0.1";
        this.$refs.four.style.opacity = "0.1";
        this.$refs.five.style.opacity = "0.1";
        this.$refs.six.style.opacity = "0.1";
        this.$refs.seven.style.opacity = "0.1";

      if (aprofit < '10'){
        this.$refs.bgChange.style.backgroundColor = "#CC0101";
        this.$refs.one.style.opacity = "1";
      }
      else if (aprofit >= '10' && aprofit <= '40'){
        this.$refs.bgChange.style.backgroundColor = "#C9DAF8";
        this.$refs.two.style.opacity = "1";
      }
      else if (aprofit >= '40' && aprofit <= '100'){
        this.$refs.bgChange.style.backgroundColor = "#D5A6BD";
        this.$refs.three.style.opacity = "1";
      }
      else if (aprofit >= '100' && aprofit <= '200'){
        this.$refs.bgChange.style.backgroundColor = "#FFD966";
        this.$refs.four.style.opacity = "1";
      }
      else if (aprofit >= '200' && aprofit <= '300'){
        this.$refs.bgChange.style.backgroundColor = "#8E7CC3";
        this.$refs.five.style.opacity = "1";
      }
      else if (aprofit >= '300' && aprofit <= '500'){
        this.$refs.bgChange.style.backgroundColor = "#61CF30";
        this.$refs.six.style.opacity = "1";
      }
      else if (aprofit > '500'){
        this.$refs.bgChange.style.backgroundColor = "#FF00FF";
        this.$refs.seven.style.opacity = "1";
      }
      else{
        this.$refs.bgChange.style.backgroundColor = "transparent";
        this.$refs.one.style.opacity = "0.1";
        this.$refs.two.style.opacity = "0.1";
        this.$refs.three.style.opacity = "0.1";
        this.$refs.four.style.opacity = "0.1";
        this.$refs.five.style.opacity = "0.1";
        this.$refs.six.style.opacity = "0.1";
        this.$refs.seven.style.opacity = "0.1";
      }
    },
  }
</script>

<style scoped lang="scss">
  .top-text{
      padding-top: 10%;
  }
  .top-text p{font-size: 1.2rem}
  .profit-status{
    text-align: center;
    font-size: 13px;
    margin-bottom: 6em;
    background: #efefef;
    .one{background: #CC0101;color: #fff;padding: 4px;opacity: 0.1}
    .two{background: #C9DAF8;color: #000;padding: 4px;opacity: 0.1}
    .three{background: #D5A6BD;color: #fff;padding: 4px;opacity: 0.1}
    .four{background: #FFD966;color: #fff;padding: 4px;opacity: 0.1}
    .five{background: #8E7CC3;color: #fff;padding: 4px;opacity: 0.1}
    .six{background: #61CF30;color: #fff;padding: 4px;opacity: 0.1}
    .seven{background: #FF00FF;color: #fff;padding: 4px;opacity: 0.1}
  }
</style>
