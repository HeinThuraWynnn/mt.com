<?php include 'header.php';?>
<div class="contatiner section" id="form">
    <div class="flex-row">
        <div class="col-md-6 text-center offset-md-3 my-5">
            <h1 class="my-3">Agent Registration</h1>
    <form method="POST" action="http://localhost:8000/contact-us" accept-charset="UTF-8" id="form-id"><input name="_token" type="hidden" value="YLVkE91fcaIdsM2IpOjWv2WViV3Reh9dDzy99prr">
        <div class="form-group wrap ">
        <input class="form-control" placeholder="Your Name" name="name" type="text">
            <div class="empty_notice">
                <span class="text-danger"></span>
            </div>
        </div>
        <div class="form-group wrap ">
        <input class="form-control" placeholder="Your NRC" name="name" type="text">
            <div class="empty_notice">
                <span class="text-danger"></span>
            </div>
        </div>
        <div class="form-group wrap ">
        <input class="form-control" placeholder="Your Address" name="name" type="text">
            <div class="empty_notice">
                <span class="text-danger"></span>
            </div>
        </div>
        <div class="form-group wrap ">
        <input class="form-control" placeholder="Your Email" name="email" type="text">
            <div class="empty_notice">
                <span class="text-danger"></span>
            </div>
        </div>
        <div class="form-group wrap ">
        <input class="form-control" type="password" placeholder="Your Password" name="password">
            <div class="empty_notice">
                <span class="text-danger"></span>
            </div>
        </div>
        <div class="form-group wrap ">
        <input class="form-control" type="password" placeholder="Confirm Password" name="password">
            <div class="empty_notice">
                <span class="text-danger"></span>
            </div>
        </div>
        <div class="form-group arlo_tm_button">
         <a class="btn btn-primary" id="send_message" onclick="document.getElementById('form-id').submit();"> <span>Register</span></a>
       
    </div>
        </form>
        </div>
    </div>
</div>
</body>
</html>