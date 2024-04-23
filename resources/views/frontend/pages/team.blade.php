@extends('frontend.layouts.master')
@section('title','Ecommerce Laravel || HOME PAGE')
@section('main-content')
<section class="page-header">
    <div class="page-header__bg" style="background-image: url(assets/images/hariyali/team_img1.jpg);"></div>
    <!-- /.page-header__bg -->
    <div class="container">
        <h2 class="text-dark">Meet the Team</h2>
        <ul class="thm-breadcrumb list-unstyled">
            <li><a href="index.html">Home</a></li>
            <li>/</li>
            <li><span class="text-dark">Our Team</span></li>
        </ul><!-- /.thm-breadcrumb list-unstyled -->
    </div><!-- /.container -->
</section><!-- /.page-header -->


<div class="block-title text-center p-4">
    <div class="block-title__decor"></div><!-- /.block-title__decor -->
    <p>Professional People</p>
    <h4>Team details</h4>
    <!-- <h3>Meet the Team</h3> -->
</div><!-- /.block-title -->

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card team-card">
                <!--    <img src="assets/images/hariyali/amit_images.jpg" alt=""> -->
              <img src="assets/images/hariyali/amit_images.jpg" class="card-img-top" alt="Team Member 2">
              <div class="card-body">
                <!-- <h3 class="card-title">Amit Kumar Raj
                </h3> -->
                <div class="team-card__content">
                    <h3>Amit Kumar Raj </h3>
                    <!-- <h6>Role: Founder &amp; CEO</h6> -->
                    </div>
                <p class="card-text">
                    <!-- Position: Founder & CEO -->
                    Role: Founder & CEO
                    <br>
                    Responsibility: Provides visionary leadership and strategic direction to Hariyalikart. Drives the mission of
revolutionizing farming practices and leveraging technology for sustainable change in agriculture.
                </p>
                <p class="card-text">"Amit Kumar Raj, as the Founder & CEO, provides the visionary leadership that propels Hariyalikart
                    towards revolutionizing farming practices and driving sustainable change in the agricultural sector. His
                    commitment to leveraging technology and holistic approaches sets the foundation for uplifting farmers
                    and envisioning a brighter future for agriculture."</p>
              </div>
            </div>
          </div>
      <div class="col-md-6">
        <div class="card team-card">
            <!--     <img src="assets/images/hariyali/anjali_images.jpg" alt=""> -->
          <img src="assets/images/hariyali/anjali_images.jpg" class="card-img-top" alt="Team Member 2">
          <div class="card-body">
            <div class="team-card__content">
                <h3>Anjali Kumari  </h3>
        </div>
            <p class="card-text">Role: Co-founder & CTO <br>
                Responsibility: Leads technological innovation and implementation of cutting-edge solutions in
                agriculture. Shapes the future of farming through advanced strategies and technological advancements</p>
            <p class="card-text">"Anjali Kumari, in her role as Co-founder & CTO, spearheads technological innovation at Hariyalikart,
                shaping the future of farming with cutting-edge solutions. Her dedication to implementing advanced
                strategies and leveraging technology plays a pivotal role in Hariyalikart's success and progress."</p>
          </div>
        </div>
      </div>

    </div>


    <div class="row">
        <div class="col-md-6">
            <div class="card team-card">
                <!-- <img src="assets/images/hariyali/aman_images.jpg" alt=""> -->
              <img src="assets/images/hariyali/aman_images.jpg" class="card-img-top" alt="Team Member 2">
              <div class="card-body">
                <!-- <h3 class="card-title">Amit Kumar Raj
                </h3> -->
                <div class="team-card__content">
                    <h3>Manish Kumar </h3>
                    <!-- <h6>Role: Founder &amp; CEO</h6> -->
                    </div>
                <p class="card-text">
                    <!-- Position: Founder & CEO -->
                    Role: Co-founder & CMO

                    <br>Responsibility: Strategizes marketing efforts, enhances brand value, and advocates for farmers. Drives
                    Hariyalikart's market presence through effective marketing strategies.

                </p>
                <p class="card-text">"Manish Kumar, as the Co-founder & CMO, plays a vital role in enhancing Hariyalikart's market presence
                    and brand value. His expertise in marketing and advocacy for farmers contributes significantly to
                    Hariyalikart's growth and success" <br/>. </p>
              </div>
            </div>
          </div>
      <div class="col-md-6">
        <div class="card team-card">
            <!--     <img src="assets/images/hariyali/anjali_images.jpg" alt=""> -->
          <img src="assets/images/hariyali/ajay_imagesss.jpg" class="card-img-top" alt="Team Member 2">
          <div class="card-body">
            <div class="team-card__content">
                <h3>Ajay Kumar</h3>
        </div>
            <p class="card-text">Ajay Kumar<br>
                Responsibility: Enhances online presence, engages audiences through compelling storytelling, and
                communicates Hariyalikart's mission and values effectively.
                </p>
            <p class="card-text">"Ajay Kumar, as the content creator for Hariyalikart, plays a crucial role in enhancing the company's
                online presence and engaging with audiences. Through compelling storytelling, Ajay effectively
                communicates Hariyalikart's mission, values, and offerings, contributing to increased brand awareness
                and customer engagement."</p>
          </div>
        </div>
      </div>

    </div>

  </div>



@endsection
