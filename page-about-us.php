<?php /* Template Name: About Us Page */ ?>
<?php get_header();?>

<section class="relative table w-full py-36 lg:py-44 bg-[url('../../fdpi/images/services1.jpg')] bg-blue-900/70 bg-no-repeat bg-center">
            <div class="absolute inset-0 bg-blue-800/30"></div>
            <div class="container">
                <div class="grid grid-cols-1 pb-8 text-center mt-10 ">
                    <h3 class="mb-6 md:text-4xl text-3xl md:leading-normal leading-normal font-medium text-white opacity-100"></h3>

                    <p class="text-slate-300 text-lg max-w-xl mx-auto text-white-700"></p>
                </div><!--end grid-->
            </div><!--end container-->
            
          
        </section><!--end section-->
      
        

        <!-- Start -->
        <section class="relative md:py-10 py-16  bg-gray-50 dark:bg-slate-800">
            <div class="container ">
                <div class="grid grid-cols-1 pb-8 text-center">
                    <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">About Us</h3>

                    <p class=" text-slate-600 md:leading-normal leading-normal font-semibold">fdpi Spares &amp; Maintenance is an emerging Australian owned &amp; Managed independent supplier of Preventive Maintenance Programs, Spare Parts along with Professional installation and Maintenance Service to the Dairy, Food, Beverage and Chemical Processing Industries.</p>
                    <p class="text-slate-600 md:leading-normal leading-normal font-semibold">We aim to provide a high level of service and technical expertise to help assist our customers in reducing their total operating costs.</p>
                    <p class="text-slate-600 md:leading-normal leading-normal font-semibold">   FDPI combines the strengths of world-class suppliers and experienced knowledgeable staff to provide our customers with cost effective solutions. We offer our customers a "one source" solution for all liquid processing requirements.</p>
                    <p class="text-slate-600 md:leading-normal leading-normal font-semibold">   Our head office is located in Warrnambool with fully trained service technicians based in Sydney, Melbourne, Central Victoria, and Gippsland thus enabling us to respond to our customers rapidly.</p>
                </div><!--end grid-->

               
                    <h3 class="mb-6 md:text-1xl text-1xl md:leading-normal leading-normal font-semibold"><?php the_field('title_list'); ?></h3>
                     

                    
                    <ul class="list-none text-slate-400 mt-4">
                        <?php if( have_rows('listed_content') ): ?>
								
                         
                                                        
                                        <?php while ( have_rows('listed_content') ) : the_row(); ?>
                                                        
                                        <li class="mb-1 flex text-red-600"><?php the_sub_field('list_offers'); ?></li>
                                           
                                     <?php endwhile; ?> 
                                                                               
                                </div> 
                                <?php endif; ?>
                            
                       
                          </ul>
                          <div class="grid grid-cols-1 pb-8 text-center">
                        <p class=" text-slate-600 md:leading-normal leading-normal font-semibold"><span lang="EN-AU">FDPI spare  parts are sourced from genuine spare parts suppliers: "QUALITY COMES FIRST”</span></p>
<p class=" text-slate-600 md:leading-normal leading-normal font-semibold"><span lang="EN-AU">FDPI via email; </span><span lang="EN-AU"><a href="mailto:fdpiorders@fdpi.com.au%20">fdpiorders@fdpi.com.au</a></span></p>
<p class=" text-slate-600 md:leading-normal leading-normal font-semibold"><span lang="EN-AU">ph. 1300 559 353.</span></p>
<p class=" text-slate-600 md:leading-normal leading-normal font-semibold"><i><span lang="EN-AU">Professional references are available on request.</span></i></p>
                
            </div><!--end container-->
                </div><!--end grid-->

                
            </div><!--end contanier-->
        </section><!--end section-->
        <!-- End -->

      
            
            </div><!--end container-->
        </section><!--end section-->
        <?php get_footer();?>