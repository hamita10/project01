 @extends('layouts.frontend')
 @section('content')
     <!-- home section starts-->
     <section class="home" id="home">
         <div class="content">
             <h3>The Best Courses You Will Find Here</h3>
             <p>“Education is the passport to the future, for tomorrow belongs to those who prepare for it today.”</p>
             <a href="#about" class="btn">
                 <span class="text text-1">learn more</span>
                 <span class="text text-2" aria-hidden="true">learn more</span>
             </a>
         </div>
     </section>
     <!-- home section ends -->

     <!-- about section starts -->
     <section class="about" id="about">
         <h1 class="heading">about us</h1>
         <div class="container">
             <figure class="about-image">
                 <img src="{{ asset('frontendAssets/images/about.jpg') }}" alt="" height="500">
                 <img src="{{ asset('frontendAssets/images/about-1.jpg') }}" alt="" class="about-img">
             </figure>
             <div class="about-content">
                 <h3>18 years of experience</h3>
                 <p>Educational buildings are often purpose built: designed with architectural choices unique to schools,
                     such as classrooms and centralized restrooms, and other purpose built features. When the schools are
                     closed, its often hard to repurpose the buildings. For example, in the 2013 Chicago closed 50 school
                     buildings, and even in 2023, the government is having trouble identifying new tenants and use.</p>
                 <p>Different parts of the world and the different countries have gone through significant changes in
                     philosophies associated with educational institutions, influenced by trends in investment by
                     governments as well as larger changes in educational philosophy.</p>
                 <a href="#courses" class="btn">
                     <span class="text text-1">read more</span>
                     <span class="text text-2" aria-hidden="true">read more</span>
                 </a>
             </div>
         </div>
     </section>
     <!-- about section ends -->
     <!-- subjects section starts -->
     <section class="subjects" id="courses">

         <h1 class="heading">our popular courses</h1>
         <div class="box-container">
             @foreach ($course as $list)
                 <div class="box">
                     <img src="{{ asset('/adminassets/Uploads/course') . '/' . $list->image }}" alt="">
                     <h3>{{ $list->name }}</h3>
                     <p>{{ $list->description }}</p>
                 </div>
             @endforeach
         </div>
     </section>
     <!-- subject section ends -->
     <!-- courses section starts -->

     <section class="courses"  >
         <h1 class="heading">our famous subjects</h1>
         <div class="box-container">
             @foreach ($subject as $item)
                 <div class="box">

                     <div class="image shine">
                         <img src="{{ asset('/adminassets/Uploads/subject') . '/' . $item->image }}" alt="">
                         <h3>basic</h3>
                     </div>
                     <div class="content">
                         <h4>${{ $item->price }}</h4>
                         <p> updated {{ $item->created_at->format('Y-m-d') }}

                         </p>
                         <h3>{{ $item->name }}</h3>

                         <div class="icons">
                             <span><i class="far fa-bookmark"></i> {{ $item->Lessons }} lessons</span>
                             <span><i class="far fa-clock"></i> <?php
                             
                             $timestamp = strtotime($item->created_at);
                             $formatted_time = date('G\h i\m s\s', $timestamp);
                             echo $formatted_time;
                             ?>
                         </div>
                     </div>
                 </div>
             @endforeach
         </div>
     </section>
     <!-- courses section ends -->
     <!-- teacher section starts -->
     <section class="teacher" id="teacher">
         <h1 class="heading">our expert teacher</h1>
         <div class="box-container">
             @foreach ($teacher as $item)
                 <div class="box">
                     <div class="image">
                         <img src="{{ asset('/adminassets/Uploads/profile') . '/' . $item->image }}" alt="">
                     </div>
                     <div class="content">
                         <h3>{{ $item->name }}</h3>
                         <span>Teacher</span>
                     </div>
                 </div>
             @endforeach
         </div>
     </section>
     <!-- teacher section ends -->

     <!-- review section starts -->

     <section class="review" id="thoughts">

         <h1 class="heading">our students Thoughts</h1>

         <div class="swiper review-slider">

             <div class="swiper-wrapper">
                 @foreach ($thoughts as $item)
                     <div class="swiper-slide slide">
                         <p>{{ $item->description }}</p>
                         <div class="wrapper">
                             <div class="separator"></div>
                             <div class="separator"></div>
                             <div class="separator"></div>
                             <div class="separator"></div>
                             <div class="separator"></div>
                         </div>
                         {{-- <i class="fas fa-quote-right"></i> --}}
                         <div class="user">
                             @if (!$item->image)
                                 <img src="https://t4.ftcdn.net/jpg/05/65/22/41/360_F_565224180_QNRiRQkf9Fw0dKRoZGwUknmmfk51SuSS.jpg"
                                     id="wizardPicturePreview" alt="" class="img-thumbnail"
                                     style="  width: 100%;height: 100%;">
                             @else
                                 <img src="{{ asset('/adminassets/Uploads/thoughts') . '/' . $item->image }}" alt="">
                             @endif
                             <div class="user-info">
                                 <h3>{{ $item->Admission->student_name }}</h3>
                                 <h4 style="font-size: 15px;">Student</h4>
                             </div>
                         </div>
                     </div>
                 @endforeach
             </div>
         </div>
         
     </section>
     
     <!-- review section ends -->
     <!-- contact section starts -->
     <section class="contact" id="contact">
         <h1 class="heading">Send Enquiry</h1>

         <div class="row">
             <div class="image">
                 <img src="{{ asset('frontendAssets/images/contact.png') }}" alt="">
             </div>
             <form method="POST" action="{{ route('Front.enquiryForm') }}">
                 @csrf
                 @if (Session::has('error'))
                     <div class="alert alert-danger" style="font-size: 15px;font-family: 'Font Awesome 5 Free';color: red;">
                         {{ Session::get('error') }}
                     </div>
                 @endif
                 <h3>send us a message</h3>
                 <input type="text" name="name" placeholder="name" class="box" required>
                 <input type="email" name="email" placeholder="email" class="box" required>
                 <input type="number" name="number" minlength="10" maxlength="10" placeholder="phone number"
                     class="box">
                 @error('number')
                     <div class="alert alert-danger">{{ $message }}</div>
                 @enderror
                 <textarea placeholder="message" name="message" class="box" cols="30" rows="10" required></textarea>
                 <button type="submit" class="btn btn-primary w-md" aria-hidden="true" style="color: black">send
                     message</button>
             </form>
         </div>
     </section>
     <!-- contact section ends -->
 @endsection
