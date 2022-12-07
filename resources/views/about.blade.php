@extends('layouts.main')
@section('main-section')

<section class="headeraboutus ">
  <div class="container text-center hearderset">
    
      <div class="header-about ">
            <h5 class="abouth text-center pb-3">Home/About</h5><br>
            
            <h1 class="abouth2">About Us...</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
<section class="middle">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <div class="mid_bolder py-5">Hi! We are <span style="color:#59a4c7"> GS Dokania & Associates</span></div>
        <div class="change">
          <p class="paraabout pt-5">
            Hi! We are GS Dokania & Assocites.<br>
            Now no appointment required from your old CA. If you are frustrated with your existing Professionals even after paying good amount, My Friend you need to change this. As it represents by name that we are your CAs here to serve you so that you can grow your business with ease. So why to delay? Let’s catch up here and discuss about our business future.</p>
    </div>
      </div>
      
      <div class="col-sm-5 pt-4 pb-4">
        <div class="  listhead">
          <ul class="li9">
            <li><b>Book Free Consultation Right Now</b></li>
          </ul>
          </div>
        <div class="formbox2">
        <div class="middle-right2">
              <form action="bootstrapform.php" method="post">
                <div class="form-group">
                  <label for="firstname" claas="text-size">Name</label>
                  <input type="text" class="form-control" id="exampleInputfirstname" placeholder="Your Full name.." name="firstname"><br>
                </div>
                <div class="form-group">
                  <label for="phoneno">Phone Number</label>
                  <input type="text" class="form-control" id="exampleInputphoneno" placeholder="Your Phone number.." name="phoneno"><br>
                </div>
                <div class="form-group">
                  <label for="Email">Email ID</label>
                  <input type="text" class="form-control" id="exampleInputEmail" placeholder="Your Email.." name="email"><br>
                </div>
                <div class="form-group">
              <label for="Support Team Category">Support Team Category</label>
              <select id="Support Team Category" name="Support Team Category">
                <option value="GST Registration">GST Registration</option>
                <option value="MSL Registration">MSL Registration</option>
                <option value="CST Registration">CST Registration</option>
              </select>
            </div>
            <div class="form-group"></div>
              <label for="Your Query">Your Query</label>
              <textarea id="Your Query" name="Your Query" placeholder="Write something.." style="height:80px"></textarea><br>
              <button type="submit" class="btn3">Submit</button>
            </div>
           </form>
          </div>
          </div>
        </div>
       </div>
    </div>
  </div>
  </div>
</section>

<section id="about3" class="about3">
  <div class="container-fluid px-0 heading">
    <div class="container mb-3">
      <div class="row">
<div class="col-sm-6 py-5 mb-3 mt-4 ">
            <img src="/images/about1.png" class="image7">
          </div>
  <div class="col-sm-6 txt py-5 ">
            <div class="about-left py-5">
              Who we really are, to understand that , you have to know a few things about us.
              <p class="aboutpara2">
                We are driven by unshakable belief that correct and on time business consultancy is the only way to lead in market. And with an armory of the best digital tools at your disposal, you can be even more relevant, useful and effective for your business process.
              </p><br>
              <a href="#" class="btn_about"><b>Contact Us</b></a>
            </div>
          </div>
          </div>
      </div>
    </div>
  </div>
</section>
<section class="about4">
    <div class="container mb-5  pb-5">
      <div class="row">
        <div class="col-sm-6 ingo mb-5 ">
          <div class="about4-left pt-5 pb-5 mt-5">
            Amazing Background and the Power of Team
            <div class="about4para  pb-5">
              <span class="spanabout2">Trusted CA</span>&nbsp;is a dedicated portal for startups and established companies for providing them business and legal related guidance for their businesses. We are exclusively focusing on Chartered Accountants assisted services in India and abroad. To cater these services, we have a strong backbone of Chartered Accountants, Company Secretaries, Advocates, Marketing Professionals, GST Consultants, etc.  Behind every great business, there is a great team. In every industry, we are serving as very strong growth partners. Our mission is to help unleash the potential of every industry
            </div>
          </div>
        </div>
        
        <div class=" d-flex justify-content-end col-sm-6 py-5 mt-4 ">
          <img src="/images/about2.png" class="image8">
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
</section>
<section class="about5">
    <div class="container pb-5">
      <div class="row">
        
        <div class="col-sm-6 py-5">
          <img src="/images/Group 2.png" class="image21">
        </div>
          <div class="col-sm-5 txt my-5">
            <div class=" about-left5 pb-5 pt-3">
              We are in Heart of every Entrepreneur. Want to know why?
              <p class="aboutpara5">
                Because of our working culture. We never say ohh.. Office timing has over. We never say ohh.. we can’t help you in this. We never say ohh.. all Professionals are busy, will guide you later. According to our practice we usually make our client vible in the basic understanding of their business practices. If the customer is dealing in GST, Company registration and its management related practices, we help our customers in understanding the basic of all theses things so that he can get an idea about the work manage by us and a transparency can be maintained.
              </p>
              
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </div>
  </div>
  </div>
</section>
@endsection