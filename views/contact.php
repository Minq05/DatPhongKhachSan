<?php
require_once 'layout/header.php';
require_once 'layout/menu.php';
?>

<main>
    <div class="contact-area section-padding pt-0">
        <div class="ml-2 my-3">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.868088396549!2d105.74435187508114!3d21.037963480613605!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313455305afd834b%3A0x17268e09af37081e!2sT%C3%B2a%20nh%C3%A0%20FPT%20Polytechnic.!5e0!3m2!1svi!2s!4v1732784067614!5m2!1svi!2s"
                width="1500" height="600" style="border:0;"
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="mb-5"></iframe>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-message">
                        <form id="contact-form" action="#" method="post" class="contact-form">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <input name="name" placeholder="Name *" type="text" required>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <input name="phone" placeholder="Phone *" type="text" required>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <input name="email" placeholder="Email *" type="text" required>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <input name="subject" placeholder="Subject *" type="text">
                                </div>
                                <div class="col-12">
                                    <div class="contact2-textarea text-center">
                                        <textarea placeholder="Message *" name="message" class="form-control2" required=""></textarea>
                                    </div>
                                    <div class="contact-btn">
                                        <button class="btn btn-sqr" onclick="contact()" type="submit">Send Message</button>
                                    </div>
                                </div>
                                <div class="col-12 d-flex justify-content-center">
                                    <p class="form-messege"></p>
                                </div>
                            </div>
                            <script>
                                function contact() {
                                    const name = document.getElementsByName("name")[0].value;
                                    const phone = document.getElementsByName("phone")[0].value;
                                    const email = document.getElementsByName("email")[0].value;
                                    const subject = document.getElementsByName("subject")[0].value;
                                    const message = document.getElementsByName("message")[0].value;

                                    if (name || phone || email || subject || message) {
                                        alert("Chúng tôi đã nhận được các thông tin yêu cầu hỗ trợ và các góp ý từ bạn. Trân thành cảm ơn !");
                                    }
                                }
                            </script>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-info">
                        <h4 class="contact-title">Liên hệ với chúng tôi</h4>
                        <p>Chúng tôi luôn sẵn sàng lắng nghe bạn! Hãy liên hệ với chúng tôi nếu bạn có bất kỳ câu hỏi, góp ý hoặc yêu cầu hỗ trợ nào...</p>
                        <ul>
                            <li><i class="fa fa-fax"></i> Address : Trinh-Van-Bo Street</li>
                            <li><i class="fa fa-phone"></i> E-mail: triphouse@gmail.com</li>
                            <li><i class="fa fa-envelope-o"></i>(098) 668 6868</li>
                        </ul>
                        <div class="working-time">
                            <h6>Working Hours</h6>
                            <p><span>Monday – Saturday:</span>06AM – 24PM</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
require_once 'layout/footer.php';
?>