<template>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>Get in touch</h4>
                <hr>
            </div>
            <div class="col-md-6">
                <div class="address">
                    
                <h5>Address:</h5>
                <ul class="list-unstyled">
                    <li> กองนโยบายและแผน สำนักงานอธิการบดี</li>
                    <li> มหาวิทยาลัยราชภัฏเพชรบูรณ์</li>
                    <li> 83 ม.11 ถนนสระบุรี-หล่มสัก ต.สะเดียง</li>
                    <li> อ.เมือง จ.เพชรบูรณ์ 67000</li>
                </ul>
                <p></p>
                </div>
                <div class="email">
                <h5>Email:</h5>
                <ul class="list-unstyled">
                    <li> pcru_plan@hotmail.com</li>
                </ul>
                </div>
                <div class="phone">
                    <h5>Phone:</h5>
                    <ul class="list-unstyled">
                        <li> 056 717 100 ต่อ 1112</li>
                    </ul>
                </div>
                <hr>
                <div class="social">
                <ul class="list-inline list-unstyled">
                    <li class="list-inline-item">
                        <a href="https://www.facebook.com/PolicyAndPlanningPCRU/" target="_blank"><i class="fa fa-facebook-square fa-2x"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#"><i class="fa fa-youtube-play fa-2x"></i></a>
                    </li>
                </ul>
            </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                <input id="Full Name" name="Full Name" placeholder="Full Name" class="form-control" type="text">
                                </div>
                                <div class="form-group col-md-6">
                                <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input id="Mobile No." name="Mobile No." placeholder="Mobile No." class="form-control" required="required" type="text">
                                </div>
                                <div class="form-group col-md-6">
                                        
                                        <select id="inputState" class="form-control">
                                            <option selected>Choose ...</option>
                                            <option> New Buyer</option>
                                            <option> Auction</option>
                                            <option> Complaint</option>
                                            <option> Feedback</option>
                                        </select>
                                </div>
                                <div class="form-group col-md-12">
                                        <textarea id="comment" name="comment" cols="40" rows="5" placeholder="Your Message" class="form-control"></textarea>
                                </div>
                            </div>
                            
                            <div class="form-row">
                                <button type="button" class="btn btn-danger">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import { Layout } from 'bootstrap-vue/es/components';
    Vue.use(Layout);
    export default {
        
    }
</script>
