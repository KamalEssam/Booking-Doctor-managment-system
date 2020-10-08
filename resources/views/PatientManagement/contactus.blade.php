@extends('main.layout.mainlayoutcontact')

@section('content')



<div class="contact-section">
        <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">

  <h1>Contact Us</h1>
  <div class="border"></div>
                <form class="contact-form" action="{{url('contact')}}" method="post">
                    {{ csrf_field() }}
    <input type="text" class="contact-form-text" placeholder="Your name" id="name" name="name">
    <input type="email" class="contact-form-text" placeholder="Your email" id="email" name="email">
    <input type="text" class="contact-form-text" placeholder="Your phone" id="phone" name="phone">
    <textarea class="contact-form-text" placeholder="Your message" id="message" name="message"></textarea>
    <input type="submit" class="contact-form-btn" value="Send">
  </form></div>


  
  <div class="col-md-4 col-sm-12 col-xs-12">
<div >
        <div class="footer-widget" >
            <div class="fw-timetable" style="left: 20%">
                <div class="fw-title">Location</div>
                <div class="timetable-content">
                    <table>
                        <tr>
                            <td>Address</td>
                            <td>Dammam, Saudi Arabia</td>
                        </tr>
                        <tr>
                                <td>Phone</td>
                            <td>+966-054354544545</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>Aoustudent@gmail.com</td>
                        </tr>
                       <tr>
                           <td>Follow
                           </td>
                           <td>
                           <div class="fw-social">
                                   
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                    <a onclick="myFunction()"><i class="fa fa-linkedin"></i></a>
                                <div></td>
                        </tr>
                       
                    </table>
                    
                </div>
                <div >
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d457586.43828527594!2d49.71234917532936!3d26.36228866772697!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e361d32276b3403%3A0xefd901ec7a5e5676!2sDammam%20Saudi%20Arabia!5e0!3m2!1sen!2seg!4v1602145481102!5m2!1sen!2seg" width="350" height="250" frameborder="0" style="border:0;" allowfullscreen=""></iframe>    </div>
                </div>
</div>


</div>
</div>
</div>
<script>
        function myFunction() {
        document.getElementById("name").value = "Vidula Dantanarayana";
        document.getElementById("email").value = "viduladakshitha@gmail.com";
        document.getElementById("phone").value = "0779819207";
        document.getElementById("message").value = "This is a sample test message for demo purposs";
        }
    </script>

@endsection
