<?php include 'header.php';?>
<form method="POST" action="http://localhost:8000/contact-us" accept-charset="UTF-8" id="form-id"><input name="_token" type="hidden" value="YLVkE91fcaIdsM2IpOjWv2WViV3Reh9dDzy99prr">
                                <div class="form-group wrap ">
                                <input class="form-control" placeholder="Your Name" name="name" type="text">
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
                                <textarea class="form-control" placeholder="Your Message" name="message" cols="50" rows="10"></textarea>
                                    <div class="empty_notice">
                                        <span class="text-danger"></span>
                                    </div>
                                </div>
                                <div class="form-group arlo_tm_button">
                                <a class="btn btn-success" id="send_message" onclick="document.getElementById('form-id').submit();"> <span>Send Message</span></a>
                                </div>
                                </form>
</body>
</html>