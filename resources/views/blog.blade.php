<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link href="/dist/output.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito&family=Raleway:wght@500&display=swap" rel="stylesheet">
@vite('resources/css/app.css')
</head>
<body>

    <header>
        <nav class="fixed z-30 top-0 w-screen bg-white px-10 " id="navbar ">
          <div class="relative w-full flex items-center  justify-between">    
            <a href="#">
              <img class="mb-[6px]" src="./images/blinc.svg" alt="">
            </a>
            <div class="lg:block hidden max-md:absolute max-md:right-0 max-md:translate-y-[135px]
             max-md:bg-white max-md:p-5 max-md:drop-shadow-[0_2px_5px_rgba(0,0,0,0.25)] rounded-md
             mx-auto"
              id="nav-menu">
                <ul class="md:gap-8 gap-2.5 md:items-center flex md:justify-center justify-start
                 md:flex-row flex-col mb-3 mt-2 font-Nunito ">
                    <li><a href="#" class="nav-link-item relative">Home</a></li>
                    <li>
                        <div class="relative inline-block">
                            <select class="nav-link-item  bg-transparent border-none  " onchange="location = this.value;">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" 
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                </svg>
                                <option value="#">News</option>
                                <option value="#">AI</option>
                                <option value="#">Blockchain</option>
                                <option value="#">Crypto</option>
                            </select>              
                        </div>
                    </li>
                    <li><a href="#" class="nav-link-item relative">Events</a></li>
                    <li><a href="#" class="nav-link-item relative">Achievements</a></li>
                </ul>
            
            </div>
            <div >
                <form>
                    
                    <div class="relative md:flex hidden">
                      <input type="text" name="query" class="md:inline-block py-2 px-4 pr-10 
                      font-medium text-sm rounded-full text-black border border-black border-full"  
                      placeholder="Search for an article...🔍" />
                      
                    </div>
                    
                  </form>
            </div>
            <!--toggle button when in small devices-->    
            <div class="md:hidden block ml-auto">
              <button id="btn-collapse" onclick="toggleMenu()">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke-width="1.8"
                  stroke="currentColor"
                  class="w-8 h-8 stroke-neutral-700"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"
                  />
                </svg>
              </button>
            </div>
          </div>
          <hr class="w-full" style="margin-top: 3px;">
        </nav>
    </header>

    <main class="grid grid-cols-1 md:grid-cols-5 mt-[20%] md:mt-[10%] lg:mt-[5%]">
    <!--Content Section-->
    <div class="col-span-4">
         <section>
        <div class=" border-pink-500 border-2 mx-[5%]  pt-[5%] px-[5%] font-Nunito" style="border-radius: 50px;">
            <!--category-->
            <div class="flex ">
                <div class="bg-[#4C519F] rounded-full px-[2%] py-[5px]">
                    <p class="text-white"><a href="#">Category</a>
                    </p>
                </div>
            </div>    
            <!--Title-->
            <div class="mt-[2%]">
                <h1 class="font-Raleway text-xl md:text-3xl lg:text-5xl">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</h1>
            </div>
            <!--creator-->
            
            <div class="grid grid-cols-1 lg:grid-cols-2 items-center lg:justify-between w-full mt-[2%]">
                <div class="flex items-center"> 
                    <div class="flex h-[35px] w-[35px] md:h-[45px] md:w-[45px] lg:h-[60px] lg:w-[60px] ">
                        <img class="w-full h-full object-cover rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8cHJvZmlsZSUyMHBpY3xlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=400&q=60" alt="">
                        
                    </div>
                    <div class=" ml-[2%] ">
                        <div class="inline-flex gap-3 justify-center items-center">
                            <!-- Ok lang na lagyan ung span ng ID hahaha-->
                            <span class="flex gap-2 text-xs md:text-sm lg:text-lg">
                                Posted 
                                <span>
                                    Aug 1, 2023
                                </span>
                                in
                                <span>
                                    Category
                                </span>
                            </span>
                        </div>
                        <div class="flex gap-2 items-center text-xs md:text-sm lg:text-lg">
                            <span>
                                by
                                <span>
                                    Juan Dela Cruz
                                </span>
                            </span>
                        </div>
                    </div>
                </div>
                <!--icons-->
                <div class="flex mt-[5%] mx-auto lg:mx-0 lg:ml-auto gap-8">
                    <div class="flex gap-2">
                     <div id="my-icon" class="w-5 h-5 md:w-6 md:h-6 text-gray-500 cursor-pointer transition-colors duration-300">
                        <svg id="mySvg" viewBox="0 0 14 14" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path d="M12.6411 0.911479C11.1427 -0.478062 8.91423 -0.228123 7.53886 1.31614L7.0002 1.92016L6.46154 1.31614C5.08891 -0.228123 2.8577 -0.478062 1.35929 0.911479C-0.357861 2.50633 -0.448093 5.36872 1.0886 7.09747L6.37951 13.0424C6.7213 13.4263 7.27637 13.4263 7.61816 13.0424L12.9091 7.09747C14.4485 5.36872 14.3583 2.50633 12.6411 0.911479Z"/>
                        </svg>
                     </div>
                           <span id="counter">0</span>
                    </div>
                    
                    <div class="flex gap-2">
                        <svg class="w-5 h-5 md:w-6 md:h-6" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7 0C3.13359 0 0 2.77021 0 6.18907C0 7.66493 0.585156 9.01582 1.55859 10.0781C1.2168 11.5777 0.0738281 12.9137 0.0601563 12.9286C0 12.9971 -0.0164062 13.0982 0.0191406 13.1875C0.0546875 13.2768 0.13125 13.3303 0.21875 13.3303C2.03164 13.3303 3.39063 12.3841 4.06328 11.8009C4.95742 12.1669 5.95 12.3781 7 12.3781C10.8664 12.3781 14 9.60794 14 6.18907C14 2.77021 10.8664 0 7 0Z" fill="#878787"/>
                            </svg>
                          <span>0</span>
                    </div>
                      
                    <div class="flex gap-2">
                        <svg class="w-5 h-5 md:w-6 md:h-6" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11 8.33145C10.2935 8.33145 9.64416 8.53502 9.13156 8.87546L5.92887 7.20777C6.02372 6.85033 6.02372 6.47995 5.92887 6.12252L9.13156 4.45482C9.64416 4.79529 10.2935 4.99887 11 4.99887C12.6568 4.99887 14 3.87982 14 2.49943C14 1.11904 12.6568 0 11 0C9.34316 0 8 1.11904 8 2.49943C8 2.6858 8.02469 2.86732 8.07113 3.04205L4.86844 4.70974C4.35584 4.3693 3.7065 4.16572 3 4.16572C1.34316 4.16572 0 5.28477 0 6.66516C0 8.04555 1.34316 9.16459 3 9.16459C3.7065 9.16459 4.35584 8.96102 4.86844 8.62057L8.07113 10.2883C8.02379 10.4664 7.99994 10.6484 8 10.8309C8 12.2113 9.34316 13.3303 11 13.3303C12.6568 13.3303 14 12.2113 14 10.8309C14 9.45049 12.6568 8.33145 11 8.33145Z" fill="#878787"/>
                            </svg>
                            
                          <span>0</span>
                    </div>
                </div>
                
            </div>
            <!--picture-->
            <div class="h-[400px] w-full mt-[2%] drop-shadow-[0_5px_6px_rgba(151,114,255,0.3)]">
                <img class="w-full h-full object-cover rounded-3xl" src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8dGVjaG5vbG9neXxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=400&q=60" alt="">
            </div>
            <!--h2 content-->
            <div class="mt-[10%] md:mt-[5%] lg:mt-[2%]">
                <h2 class="font-Nunito text-lg md:text-xl lg:text-2xl font-medium lg:leading-10">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia quaerat facilis magnam labore commodi, recusandae provident tenetur? Saepe qui ducimus ipsum vel eos officiis doloribus provident fugiat, corrupti vero natus? Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe quibusdam impedit voluptatem maiores vero deleniti tempora placeat. Dolorem natus quasi animi. Maiores provident ab facere excepturi voluptatibus deleniti! Reprehenderit, ab.</h2>
            </div>
            <!--p content-->
            <div class="mt-[10%] md:mt-[5%] lg:mt-[2%] text-[#212529] font-Nunito text-base md:text-lg lg:text-xl">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae quos accusantium reprehenderit minus! Eaque exercitationem dignissimos autem! Itaque optio tempore earum reiciendis sit nam harum animi, quibusdam consequatur et recusandae. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi eligendi amet deserunt odit inventore! Veniam, magni ab nam velit neque asperiores cumque alias quis dolore laudantium aliquam laboriosam at blanditiis? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit cumque quaerat modi laudantium obcaecati quos accusantium quasi dolores ullam tenetur? Illo suscipit esse incidunt culpa hic. Quos et doloremque libero! Lorem ipsum dolor sit amet consectetur adipisicing elit. Et ipsam dolor dolorem, sequi error deleniti magni totam animi perspiciatis corporis, quae autem quis accusantium commodi soluta laboriosam quod assumenda illo.</p>
            </div>

            <!--in this article section-->
            <div class="bg-[#F5F5F5] my-[5%] border rounded-2xl">
                <div class="p-[5%] ">
                    <h2 class="font-Raleway font-bold text-lg md:text-xl lg:text-2xl">
                        In this article
                    </h2>
                    <ol class="flex flex-col list-decimal gap-4 ml-[7%] py-[2%] md:ml-[3%] md:py-[2%] lg:ml-[2%] lg:py-[2%]">
                        <li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. </li>
                        <li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. </li>
                        <li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. </li>
                    </ol>
                </div>
            </div>
            <!--Another content-->
            <div>
                <h3 class="text-xl lg:leading-8">
                    Amet aliquet at a aliquam ac suspendisse euismod. Lectus sit in ut erat in. Et nulla a magna amet, amet. Sodales malesuada laoreet bibendum neque amet turpis non. Ac arcu lacus turpis elementum imperdiet. Euismod purus, libero scelerisque vitae, libero fermentum urna, nunc.
                </h3>
            </div>

            <!--Another content-->
            <div class="my-[4%]">
                <h2 class="font-Nunito text-3xl lg:leading-8">
                    Lorem, ipsum dolor sit amet consectetur adipisicing 
                </h2>
            </div>

            <!--h2 content-->
            <div class="mt-[10%] md:mt-[5%] lg:mt-[2%]">
                <h2 class="font-Nunito text-base md:text-lg lg:text-xl font-medium lg:leading-10">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia quaerat facilis magnam labore commodi, recusandae provident tenetur? Saepe qui ducimus ipsum vel eos officiis doloribus provident fugiat, corrupti vero natus? Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe quibusdam impedit voluptatem maiores vero deleniti tempora placeat. Dolorem natus quasi animi. Maiores provident ab facere excepturi voluptatibus deleniti! Reprehenderit, ab.</h2>
            </div>
            <!--p content-->
            <div class="mt-[10%] md:mt-[5%] lg:mt-[2%] text-[#212529] font-Nunito text-sm md:text-base lg:text-lg">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae quos accusantium reprehenderit minus! Eaque exercitationem dignissimos autem! Itaque optio tempore earum reiciendis sit nam harum animi, quibusdam consequatur et recusandae. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi eligendi amet deserunt odit inventore! Veniam, magni ab nam velit neque asperiores cumque alias quis dolore laudantium aliquam laboriosam at blanditiis? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit cumque quaerat modi laudantium obcaecati quos accusantium quasi dolores ullam tenetur? Illo suscipit esse incidunt culpa hic. Quos et doloremque libero! Lorem ipsum dolor sit amet consectetur adipisicing elit. Et ipsam dolor dolorem, sequi error deleniti magni totam animi perspiciatis corporis, quae autem quis accusantium commodi soluta laboriosam quod assumenda illo.</p>
            </div>

            <!--Another content-->
            <div class="my-[4%]">
                <h2 class="font-Nunito text-3xl lg:leading-8">
                    Lorem, ipsum dolor sit amet consectetur adipisicing 
                </h2>
            </div>

            <!--h2 content-->
            <div class="mt-[10%] md:mt-[5%] lg:mt-[2%]">
                <h2 class="font-Nunito text-base md:text-lg lg:text-xl font-medium lg:leading-10">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia quaerat facilis magnam labore commodi, recusandae provident tenetur? Saepe qui ducimus ipsum vel eos officiis doloribus provident fugiat, corrupti vero natus? Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe quibusdam impedit voluptatem maiores vero deleniti tempora placeat. Dolorem natus quasi animi. Maiores provident ab facere excepturi voluptatibus deleniti! Reprehenderit, ab.</h2>
            </div>
            <!--p content-->
            <div class="mt-[10%] md:mt-[5%] lg:mt-[2%] text-[#212529] font-Nunito text-sm md:text-base lg:text-lg">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae quos accusantium reprehenderit minus! Eaque exercitationem dignissimos autem! Itaque optio tempore earum reiciendis sit nam harum animi, quibusdam consequatur et recusandae. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi eligendi amet deserunt odit inventore! Veniam, magni ab nam velit neque asperiores cumque alias quis dolore laudantium aliquam laboriosam at blanditiis? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit cumque quaerat modi laudantium obcaecati quos accusantium quasi dolores ullam tenetur? Illo suscipit esse incidunt culpa hic. Quos et doloremque libero! Lorem ipsum dolor sit amet consectetur adipisicing elit. Et ipsam dolor dolorem, sequi error deleniti magni totam animi perspiciatis corporis, quae autem quis accusantium commodi soluta laboriosam quod assumenda illo.</p>
            </div>

            <!--last content inside the box-->
            <div class="mt-[5%]">
                <div>
                    <p class="italic text-[#878787] text-xs md:text-sm lg:text-base">This article was about:</p>
                </div>
                <div class="flex gap-4 w-full my-[3%] md:my-[%] lg:my-[1%]">
                    <!--tag1-->
                    <div class="flex items-center justify-center px-[2%] py-[3px] bg-[#d2d4f5] rounded-full font-Nunito text-xs md:text-sm lg:text-base">
                        <span>Tag1</span>
                    </div>
                    <!--tag2-->
                    <div class="flex items-center justify-center px-[2%] py-[3px] bg-[#d2d4f5] rounded-full font-Nunito text-xs md:text-sm lg:text-base">
                        <span>Tag2</span>
                    </div>
                    <!--tag3-->
                    <div class="flex items-center justify-center px-[2%] py-[3px] bg-[#d2d4f5] rounded-full font-Nunito text-xs md:text-sm lg:text-base">
                        <span>Tag3</span>
                    </div>
                </div>
                <!--Updated-->
                <div class="flex gap-2 italic text-[#878787] mb-[10%] md:my-[3%] lg:my-[3%] text-xs md:text-sm lg:text-base">
                    <p>Last updated:</p>
                    <p>July 19, 2023</p>
                </div>
            </div>
        </div>
    </section>
    <!--comments section-->
    <section>
        <div class="max-w-[90%]">
            <div class="ml-[15%] my-[5%]">
                <h2 class="font-Raleway font-bold text-xl md:text-2xl lg;text-3xl">Comments</h2>
            </div>
            <!--comments-->
            <div>
                <!--first comment-->
                <div class="bg-[#EEEEF6] rounded-3xl ml-[15%] my-[3%] p-[5%]">
                    <div class="flex items-center gap-2 font-Nunito font-bold text-lg md:text-xl lg:text-2xl">
                        <p>Crisostomo Ibbara</p>
                        <span>.</span>
                        <p>6/15/2023</p>
                    </div>
                    <div class="pt-4 text-[#4d4d52]">
                        Massa, libero morbi morbi sed non sed. In et neque lectus ultricies leo eros.
                        Auctor in elementum accumsan malesuada gravida neque cursus pellentesque nunc.
                    </div>
                </div>

                <!--Second comment-->
                <div class="bg-[#EEEEF6] rounded-3xl ml-[15%] my-[3%] p-[5%]">
                    <div class="flex items-center gap-2 font-Nunito font-bold text-lg md:text-xl lg;text-2xl">
                        <p>Maria Clara</p>
                        <span>.</span>
                        <p>6/15/2023</p>
                    </div>
                    <div class="pt-4 text-[#4d4d52]">
                        In et neque lectus ultricies leo eros.
                        Auctor in elementum accumsan malesuada gravida neque cursus pellentesque nunc.
                    </div>
                </div>

                <!--third comment-->
                <div class="bg-[#EEEEF6] rounded-3xl ml-[15%] my-[3%] p-[5%]">
                    <div class="flex items-center gap-2 font-Nunito font-bold text-lg md:text-xl lg;text-2xl">
                        <p>Padre Salvi</p>
                        <span>.</span>
                        <p>6/15/2023</p>
                    </div>
                    <div class="pt-4 text-[#4d4d52]">
                        Massa, libero morbi morbi sed non sed. 
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Write a comment Section-->
    <section class="mb-[10%]">
        <div>
            <div>
                <div class="ml-[15%] mt-[5%] ">
                    <h2 class="font-Raleway font-bold text-xl md:text-2xl lg;text-3xl">Write a comment</h2>
                </div>
            </div>
            <div class="ml-[15%] my-[2%] max-w-[75%]">
                <p class="after:content-['*'] text-[#878787]">Your email address will not be published. Required fields are marked </p>
            </div>
            <div>
                <p class="ml-[15%] after:content-['*'] font-bold font-Nunito text-lg">Comment </p>
                <div class="ml-[15%] relative mb-3 max-w-[75%] mt-[2%]" data-te-input-wrapper-init>
                    <textarea
                      class="peer block min-h-[200px] w-full rounded-2xl border-0 bg-[#F5F5F5] px-3 py-[0.32rem] leading-[1.6] outline-none 
                      transition-all duration-200 ease-linear focus:placeholder:opacity-0 peer-focus:text-primary 
                      data-[te-input-state-active]:placeholder:opacity-0 motion-reduce:transition-none
                      [&:not([data-te-input-placeholder-active])]:placeholder:opacity-100"
                      id="exampleFormControlTextarea1"
                      rows="4"
                      placeholder="Type Your Comment"
                      required></textarea>
                </div>

            </div>
            <div class="px-[15%]">
                <div class="grid grid-cols-1 lg:grid-cols-3 max-w-full gap-3 md:gap-5 lg:gap-10">
                    <div>
                        <p class="after:content-['*'] font-bold font-Nunito text-lg">Name </p>
                        <div class="relative mb-3 mt-[5%]" data-te-input-wrapper-init>
                            <input
                              type="text"
                              class="peer block min-h-[15px] w-full rounded-2xl border-0 bg-[#F5F5F5] px-3 py-[0.32rem] leading-[1.6] outline-none 
                              transition-all duration-200 ease-linear focus:placeholder:opacity-0 peer-focus:text-primary 
                              data-[te-input-state-active]:placeholder:opacity-0 motion-reduce:transition-none
                              [&:not([data-te-input-placeholder-active])]:placeholder:opacity-100"
                              id="exampleFormControlInputText"
                              placeholder="Enter Name" />
                            
                          </div>
                    </div>
                    <div class="mt-[2%]">
                        <p class="after:content-['*'] font-bold font-Nunito text-lg">Email </p>
                        <div class="relative mb-3 mt-[5%]" data-te-input-wrapper-init>
                            <input
                              type="email"
                              class="peer block min-h-[15px] w-full rounded-2xl border-0 bg-[#F5F5F5] px-3 py-[0.32rem] leading-[1.6] outline-none 
                              transition-all duration-200 ease-linear focus:placeholder:opacity-0 peer-focus:text-primary 
                              data-[te-input-state-active]:placeholder:opacity-0 motion-reduce:transition-none
                              [&:not([data-te-input-placeholder-active])]:placeholder:opacity-100"
                              id="exampleFormControlInputEmail"
                              placeholder="Enter Email" />
                           
                          </div>
                    </div>
                    <div class="flex lg:ml-auto mt-auto mb-3">
                        <button class="bg-[#4C519F] rounded-full px-[5%] py-[3px] lg:w-[250px] h-[50%] text-white">Post Comment</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
   <!--Related Post--> 
   <aside>
    <div class="  mt-8 mx-[5%] lg:pr-10 lg:mt-24 ">
      <div>
          <h3 class="text-2xl font-extrabold text-[#212529] mb-3 font-Raleway">Related Posts</h3>
      </div>
      <div class="space-y-8">
        <!-- 1st pic -->
        <div>
          <a href="#" class="">
              <div class="w-full h-[150px] ">
                  <img class="w-full h-full object-cover rounded-xl" src="
                  https://images.unsplash.com/photo-1592093474530-86874167e896?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTh8fG91dGVyJTIwc3BhY2V8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=400&q=60
                   ">
              </div>
              <div class=" mt-[3%]" >
                <h5 class="leading-5 block font-medium text-lg md:text-xl lg:text-2xl">
                    Lorem ipsum dolor sit amet, consectetur adipiscing
                </h5>
                <div class=" gap-3 justify-center items-center">
                  <!-- Ok lang na lagyan ung span ng ID hahaha-->
                  <span class="mt-3 flex font-Nunito gap-1 text-xs md:text-sm lg:text-lg">
                      by
                      <span>
                          Anghelo M. Ramos
                      </span>
                      
                  </span>
                  <span class="flex font-Nunito gap-1 text-xs md:text-sm lg:text-lg">
                      on
                      <span>July 25, 2023</span>
                  </span>
              </div>
            </div>
          </a>
        </div>
        <div>
          <a href="#" class="">
              <div class="w-full h-[150px] ">
                  <img class="w-full h-full object-cover rounded-xl" src="
                  https://images.unsplash.com/photo-1559028012-481c04fa702d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8d2ViJTIwZGVzaWdufGVufDB8fDB8fHww&auto=format&fit=crop&w=400&q=60"
                   >
              </div>
              <div class=" mt-[3%]" >
                <h5 class="leading-5 block font-medium text-lg md:text-xl lg:text-2xl">
                    Lorem ipsum dolor sit amet, consectetur adipiscing
                </h5>
                <div class=" gap-3 justify-center items-center">
                  <!-- Ok lang na lagyan ung span ng ID hahaha-->
                  <span class="mt-3 flex font-Nunito gap-1 text-xs md:text-sm lg:text-lg">
                      by
                      <span>
                          Anghelo M. Ramos
                      </span>
                      
                  </span>
                  <span class="flex font-Nunito gap-1 text-xs md:text-sm lg:text-lg">
                      on
                      <span>July 25, 2023</span>
                  </span>
              </div>
            </div>
          </a>
        </div>

        <div>
          <a href="#" class="">
              <div class="w-full h-[150px] ">
                  <img class="w-full h-full object-cover rounded-xl" src="
                  https://images.unsplash.com/photo-1454789548928-9efd52dc4031?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8b3V0ZXIlMjBzcGFjZXxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=400&q=60"
                   >
              </div>
              <div class="mt-[3%]" >
                <h5 class="leading-5 block font-medium text-lg md:text-xl lg:text-2xl">
                    Lorem ipsum dolor sit amet, consectetur adipiscing
                </h5>
                <div class=" gap-3 justify-center items-center">
                  <!-- Ok lang na lagyan ung span ng ID hahaha-->
                  <span class="mt-3 flex font-Nunito gap-1 text-xs md:text-sm lg:text-lg">
                      by
                      <span>
                          Anghelo M. Ramos
                      </span>
                      
                  </span>
                  <span class="flex font-Nunito gap-1 text-xs md:text-sm lg:text-lg">
                      on
                      <span>July 25, 2023</span>
                  </span>
              </div>
            </div>
          </a>
        </div>

        <!--popular posts-->
        <div>
          <div>
              <h2 class="font-Nunito font-medium text-sm md:text-base lg:text-lg">
                  POPULAR POSTS
              </h2>
          </div>
          <div class="mb-[10%]">
              <div class="underline font-Nunito text-sm md:text-base lg:text-lg">
                  <h2 class="mt-2"><a href="#">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</a></h2>
                  <h2 class="mt-2"><a href="#">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</a></h2>
                  <h2 class="mt-2"><a href="#">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</a></h2>
              </div>
          </div>
        </div>
      </div>
   </div>

  </aside>
    
    </main>
    <!--Footer-->
    <footer  class=" w-full min-h-[150px] bottom-0" style="background-image: linear-gradient(241.87deg,rgb(76, 81, 159) 13.55%,rgb(120, 91, 185) 29.94%,rgb(104, 51, 138) 50.54%,rgb(189, 70, 139) 79.56%,rgb(247, 5, 63) 103.43%);">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 items-center  h-full ml-[7%] py-[10%]">
            <!--First Item-->
            <div class="flex flex-col lg:pl-[10%]">
                <div class="flex">
                    <img src="./images/BLINC-05-white 1.svg" alt="">
                </div>
                <div class="flex pt-[5%]">
                    <div class="pl-[2%]">
                        <a href="#">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16.8725 8.31375C16.7684 8.04406 16.6089 7.79917 16.4044 7.59486C16.1999 7.39055 15.9548 7.23134 15.685 7.1275C15.3135 6.98991 14.9211 6.91718 14.525 6.9125C13.8663 6.8825 13.6688 6.875 12 6.875C10.3313 6.875 10.1338 6.8825 9.475 6.9125C9.07845 6.91704 8.68564 6.98976 8.31375 7.1275C8.04407 7.23163 7.79918 7.39109 7.59487 7.59562C7.39055 7.80015 7.23135 8.0452 7.1275 8.315C6.98991 8.68649 6.91719 9.07887 6.9125 9.475C6.8825 10.1337 6.875 10.3312 6.875 12C6.875 13.6687 6.8825 13.8662 6.9125 14.525C6.91704 14.9215 6.98977 15.3144 7.1275 15.6862C7.23163 15.9559 7.3911 16.2008 7.59562 16.4051C7.80015 16.6094 8.04521 16.7687 8.315 16.8725C8.6865 17.0101 9.07887 17.0828 9.475 17.0875C10.1338 17.1175 10.3313 17.1237 12 17.1237C13.6688 17.1237 13.8663 17.1175 14.525 17.0862C14.9215 17.0821 15.3143 17.0098 15.6863 16.8725C15.9559 16.7684 16.2008 16.6089 16.4051 16.4044C16.6095 16.1999 16.7687 15.9548 16.8725 15.685C17.0101 15.3135 17.0828 14.9211 17.0875 14.525C17.1175 13.8662 17.1238 13.6687 17.1238 12C17.1238 10.3312 17.1175 10.1337 17.0863 9.475C17.0821 9.07852 17.0098 8.68571 16.8725 8.31375ZM12 15.21C11.3651 15.21 10.7445 15.0217 10.2166 14.669C9.68874 14.3163 9.27731 13.815 9.03435 13.2284C8.79139 12.6419 8.72782 11.9964 8.85168 11.3738C8.97554 10.7511 9.28126 10.1791 9.73019 9.73019C10.1791 9.28126 10.7511 8.97554 11.3738 8.85168C11.9964 8.72782 12.6419 8.79139 13.2284 9.03435C13.815 9.2773 14.3163 9.68874 14.669 10.2166C15.0217 10.7445 15.21 11.3651 15.21 12C15.21 12.8513 14.8718 13.6678 14.2698 14.2698C13.6678 14.8718 12.8513 15.21 12 15.21ZM15.3363 9.41375C15.1879 9.41375 15.0429 9.36976 14.9196 9.28735C14.7962 9.20494 14.7001 9.08781 14.6433 8.95076C14.5866 8.81372 14.5717 8.66292 14.6007 8.51743C14.6296 8.37194 14.701 8.23831 14.8059 8.13342C14.9108 8.02853 15.0444 7.9571 15.1899 7.92816C15.3354 7.89922 15.4862 7.91407 15.6233 7.97084C15.7603 8.0276 15.8774 8.12373 15.9599 8.24707C16.0423 8.37041 16.0863 8.51541 16.0863 8.66375C16.0863 8.86266 16.0072 9.05343 15.8666 9.19408C15.7259 9.33473 15.5352 9.41375 15.3363 9.41375ZM14.0838 12C14.0838 12.4121 13.9615 12.815 13.7326 13.1577C13.5036 13.5003 13.1782 13.7674 12.7974 13.9251C12.4167 14.0828 11.9977 14.1241 11.5935 14.0437C11.1893 13.9633 10.818 13.7648 10.5266 13.4734C10.2352 13.182 10.0367 12.8107 9.95629 12.4065C9.87589 12.0023 9.91716 11.5833 10.0749 11.2026C10.2326 10.8218 10.4997 10.4964 10.8423 10.2674C11.185 10.0385 11.5879 9.91625 12 9.91625C12.5526 9.91625 13.0827 10.1358 13.4734 10.5266C13.8642 10.9173 14.0838 11.4474 14.0838 12ZM12 0C9.62663 0 7.30655 0.703788 5.33316 2.02236C3.35977 3.34094 1.8217 5.21508 0.913451 7.4078C0.00519939 9.60051 -0.232441 12.0133 0.230582 14.3411C0.693605 16.6689 1.83649 18.807 3.51472 20.4853C5.19295 22.1635 7.33115 23.3064 9.65892 23.7694C11.9867 24.2324 14.3995 23.9948 16.5922 23.0865C18.7849 22.1783 20.6591 20.6402 21.9776 18.6668C23.2962 16.6935 24 14.3734 24 12C24 8.8174 22.7357 5.76515 20.4853 3.51472C18.2348 1.26428 15.1826 0 12 0ZM18.2125 14.5762C18.2019 15.0949 18.1034 15.608 17.9213 16.0937C17.7607 16.5088 17.5152 16.8858 17.2005 17.2005C16.8858 17.5152 16.5089 17.7607 16.0938 17.9212C15.6084 18.1033 15.0957 18.2018 14.5775 18.2125C13.91 18.2425 13.6975 18.25 12 18.25C10.3025 18.25 10.09 18.2425 9.4225 18.2125C8.90426 18.2018 8.39159 18.1033 7.90625 17.9212C7.49116 17.7607 7.11417 17.5152 6.79947 17.2005C6.48477 16.8858 6.23928 16.5088 6.07875 16.0937C5.89671 15.6084 5.79823 15.0957 5.7875 14.5775C5.7575 13.91 5.75 13.6975 5.75 12C5.75 10.3025 5.7575 10.09 5.7875 9.4225C5.79783 8.90433 5.89588 8.39165 6.0775 7.90625C6.23803 7.4908 6.48364 7.1135 6.79857 6.79856C7.1135 6.48363 7.4908 6.23802 7.90625 6.0775C8.39166 5.89588 8.90433 5.79782 9.4225 5.7875C10.09 5.7575 10.3025 5.75 12 5.75C13.6975 5.75 13.91 5.7575 14.5775 5.7875C15.0957 5.79782 15.6083 5.89588 16.0938 6.0775C16.509 6.23817 16.886 6.48384 17.2007 6.79877C17.5155 7.1137 17.7609 7.49092 17.9213 7.90625C18.1033 8.39158 18.2018 8.90426 18.2125 9.4225C18.2425 10.09 18.25 10.3025 18.25 12C18.25 13.6975 18.2425 13.9087 18.2125 14.5762Z" fill="white"/>
                            </svg>
                        </a>
                    </div>
                    <div class="pl-[2%]">
                        <a href="#">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M24 12.0301C24 5.38947 18.624 0 12 0C5.376 0 0 5.38947 0 12.0301C0 17.8526 4.128 22.7008 9.6 23.8195V15.6391H7.2V12.0301H9.6V9.02256C9.6 6.70075 11.484 4.81203 13.8 4.81203H16.8V8.42105H14.4C13.74 8.42105 13.2 8.96241 13.2 9.62406V12.0301H16.8V15.6391H13.2V24C19.26 23.3985 24 18.2737 24 12.0301Z" fill="white"/>
                            </svg>
                        </a>
                    </div>
                    <div class="pl-[2%]">
                        <a href="#">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 0C5.3725 0 0 5.3725 0 12C0 18.6275 5.3725 24 12 24C18.6275 24 24 18.6275 24 12C24 5.3725 18.6275 0 12 0ZM9.0625 16.9738H6.6325V9.15375H9.0625V16.9738ZM7.8325 8.19375C7.065 8.19375 6.56875 7.65 6.56875 6.9775C6.56875 6.29125 7.08 5.76375 7.86375 5.76375C8.6475 5.76375 9.1275 6.29125 9.1425 6.9775C9.1425 7.65 8.6475 8.19375 7.8325 8.19375ZM17.9375 16.9738H15.5075V12.64C15.5075 11.6313 15.155 10.9462 14.2763 10.9462C13.605 10.9462 13.2063 11.41 13.03 11.8563C12.965 12.015 12.9488 12.24 12.9488 12.4638V16.9725H10.5175V11.6475C10.5175 10.6713 10.4862 9.855 10.4537 9.1525H12.565L12.6763 10.2388H12.725C13.045 9.72875 13.8288 8.97625 15.14 8.97625C16.7388 8.97625 17.9375 10.0475 17.9375 12.35V16.9738Z" fill="white"/>
                            </svg>
                        </a>
                    </div>
                    <div class="pl-[2%]">
                        <a href="#">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 0C18.6343 0 24 5.36571 24 12C24 18.6343 18.6343 24 12 24C5.36571 24 0 18.6343 0 12C0 5.36571 5.36571 0 12 0ZM9.80571 18.3257C15.12 18.3257 18.0343 13.92 18.0343 10.0971V9.72C18.6 9.30857 19.0971 8.79429 19.4743 8.21143C18.96 8.43429 18.3943 8.58857 17.8114 8.67429C18.4114 8.31429 18.8743 7.74857 19.08 7.08C18.5143 7.40571 17.8971 7.64571 17.2457 7.78286C16.7143 7.21714 15.96 6.87429 15.1371 6.87429C13.5429 6.87429 12.24 8.17714 12.24 9.77143C12.24 9.99429 12.2571 10.2171 12.3257 10.4229C9.92571 10.3029 7.78286 9.15429 6.36 7.40571C6.12 7.83429 5.96571 8.33143 5.96571 8.86286C5.96571 9.85714 6.48 10.7486 7.25143 11.2629C6.77143 11.2629 6.32571 11.1257 5.94857 10.9029V10.9371C5.94857 12.3429 6.94286 13.5086 8.26286 13.7829C8.02286 13.8514 7.76571 13.8857 7.50857 13.8857C7.32 13.8857 7.14857 13.8686 6.96 13.8343C7.32 14.9829 8.4 15.8229 9.65143 15.84C8.65714 16.6114 7.40571 17.0743 6.05143 17.0743C5.81143 17.0743 5.58857 17.0743 5.36571 17.04C6.63429 17.8629 8.16 18.3429 9.78857 18.3429" fill="white"/>
                            </svg>    
                        </a>
                    </div>
                </div>
                <div class="mt-[5%]">
                    <p class="text-white text-xs">© 2023 Bitshares Labs Inc. All Rights Reserved.</p>
                </div>
            </div>
            <!--Second Item-->
            <div class="flex flex-col pt-[10%] lg:pt-0 lg:pl-[5%] ">
                <div class="text-white">
                    <h2 class=" text-xl font-bold" style="font-family:'Nunito';">Visit our office</h2>
                    <p class="text-xs " style="font-family:'Nunito';">Bitshares Labs Inc. 4/F Akada 8 Building 128 <br>Dominican Rd. Lourdes Proper Baguio City, <br>Philippines 2600</p>
                </div>
            </div>
            <!--Third Item-->
            <div class="flex flex-col pt-[10%] lg:pt-0 text-white lg:pl-[30%]">
               <div>
                <h2 class="text-xl font-bold" style="font-family:'Nunito';">News</h2>
               </div>
               <div >
                <ul>
                    <li class="text-sm hover:underline "><a href="#">Category 1</a></li>
                    <li class="text-sm hover:underline "><a href="#">Category 2</a></li>
                    <li class="text-sm hover:underline "><a href="#">Category 3</a></li>
                    <li class="text-sm hover:underline "><a href="#">Category 4</a></li>
                    <li class="text-sm hover:underline "><a href="#">Category 5</a></li>  
                </ul>
               </div>
            </div>
            <!--Fourth Item-->
            <div class="flex flex-col pt-[10%] lg:pt-0 text-white lg:pl-[20%] ">
               <div>
                <h2 class="hover:underline"><a href="#">Achievements</a></h2>
               </div>
               <div>
                <div class="mt-[5%]">
                    <h2 class="text-xl font-bold" style="font-family:'Nunito';">Events</h2>
                    <p class="text-sm hover:underline"><a href="#">Upcoming Events</a></p>
                    <p class="text-sm hover:underline"><a href="#">Past Events</a></p>
                </div>
               </div>
            </div>
        </div>
    </footer>
    <script src="main.js"></script>
    <script>
         const svg = document.getElementById("mySvg");
         const counter = document.getElementById("counter");

        let count = 0;
        let isClicked = false;

        svg.addEventListener("click", function() {
         if (isClicked) {
         count--;
        } else {
         count++;
        }

         counter.textContent = count;
         isClicked = !isClicked;

        if (isClicked) {
           svg.classList.add("red"); // Add the "red" CSS class
         } else {
           svg.classList.remove("red"); // Remove the "red" CSS class
         }

  // Make an AJAX request to update the count in the Laravel route
         fetch('/update-counter', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
         },
         body: JSON.stringify({ count: count })
        })
        .then(response => {
            if (!response.ok) {
              throw new Error('Error updating count');
         }
         return response.text();
         })
         .then(data => {
           console.log(data); // Display the response from the server
         })
         .catch(error => {
          console.error(error);
          });
        });

    </script>
</body>
</html>
