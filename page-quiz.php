<?php
/**
 Template Name: Quiz
*/

get_header();
?>
<section class="page-top quiz-top" style="background-image: url(<?php the_field('bg_img'); ?>);">
  <div class="container">
    <h1 class="page-title"><?php the_title(); ?></h1>
    <p class="subtitle"><?php the_field('subtitle'); ?></p>
  </div>
</section>

<section class="quiz container" id="topQuiz">
  <div class="quiz-start">
    <?php if (have_rows('quiz_start')) : while(have_rows('quiz_start')) : the_row(); ?>
    <div class="item">
      <div class="left">
        <img src="<?php the_sub_field('icon'); ?>" alt="<?php the_sub_field('name'); ?>">
      </div>
      <div class="right">
        <b><?php the_sub_field('name'); ?></b>
        <p><?php the_sub_field('text'); ?></p>
      </div>
    </div>
    <?php endwhile; endif; ?>
    <div class="button button-accent start-btn mt50">
      Next
    </div>
  </div>
  <div class="quiz-wrap 1">
    <div class="quiz-wrap-step step-features">
      <b class="title title-sub"><?php the_field('1_2_title'); ?></b>
      <p class="subtitle"><?php the_field('1_2_subtitle'); ?></p>
      <?php if (have_rows('quiz_features_step_2')) : while(have_rows('quiz_features_step_2')) : the_row(); ?>
      <div class="item">
        <div class="front">
          <img src="<?php the_sub_field('icon'); ?>" alt="<?php the_sub_field('name'); ?>">
          <b><?php the_sub_field('name'); ?></b>
        </div>
        <div class="back">
          <p><?php the_sub_field('text'); ?></p>
        </div>
      </div>
      <?php endwhile; endif; ?>
    </div>

    <div class="quiz-wrap-step step-checkboxes items-to-move">
      <b class="title title-sub"><?php the_field('1_3_title'); ?></b>
      <p class="subtitle"><?php the_field('1_3_subtitle'); ?></p>
      <?php $id_input = 1; if (have_rows('quiz_1_3_row')) : while(have_rows('quiz_1_3_row')) : the_row(); ?>
      <div class="item">
       <input name="quiz_1_3_row" id="<?php echo 'quz_1_3_'.$id_input; ?>" value="<?php the_sub_field('name'); ?>" type="checkbox" style="display: none">
       <label for="<?php echo 'quz_1_3_'.$id_input; ?>">
        <?php the_sub_field('name'); ?>
       </label>
      </div>
      <?php $id_input++; endwhile; endif; ?>
    </div>

    <div class="quiz-wrap-step step-date ">
      <b class="title">When will you be moving?</b>
      <?php echo do_shortcode('[contact-form-7 id="c15e5bb" title="date form (unsubmit)"]'); ?>
    </div>

    <div class="quiz-wrap-step step-address ">
      <b class="title">Tell us the starting and ending locations of your move</b>
      <p class="subtitle">By providing the full addresses of your move, we can present you with the moving options available for your journey.</p>
      <div class="row">
        <div class="input start">
          <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
              <path d="M13.6177 21.367C13.1841 21.773 12.6044 22 12.0011 22C11.3978 22 10.8182 21.773 10.3845 21.367C6.41302 17.626 1.09076 13.4469 3.68627 7.37966C5.08963 4.09916 8.45834 2 12.0011 2C15.5439 2 18.9126 4.09916 20.316 7.37966C22.9082 13.4393 17.599 17.6389 13.6177 21.367Z" stroke="#FE7300" stroke-width="1.5"/>
              <path d="M15.5 11C15.5 12.933 13.933 14.5 12 14.5C10.067 14.5 8.5 12.933 8.5 11C8.5 9.067 10.067 7.5 12 7.5C13.933 7.5 15.5 9.067 15.5 11Z" stroke="#FE7300" stroke-width="1.5"/>
            </svg>
          </div>
          <input class="input-from" placeholder="Moving From" type="text" name="Moving_from" autocomplete="off">
          <p>Moving From</p>
        </div>
        <div class="input stop noadded">
          <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
              <path d="M12 4V20M20 12H4" stroke="#FE7300" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
          <input class="input-from" placeholder="Add Stop" type="text" name="add_stop" autocomplete="off">
          <p>Add Stop</p>
        </div>
        <div class="input end">
          <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
              <path d="M4 7V21" stroke="#FE7300" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M11.7576 3.90865C8.45236 2.22497 5.85125 3.21144 4.55426 4.2192C4.32048 4.40085 4.20358 4.49167 4.10179 4.69967C4 4.90767 4 5.10138 4 5.4888V14.7319C4.9697 13.6342 7.87879 11.9328 11.7576 13.9086C15.224 15.6744 18.1741 14.9424 19.5697 14.1795C19.7633 14.0737 19.8601 14.0207 19.9301 13.9028C20 13.7849 20 13.6569 20 13.4009V5.87389C20 5.04538 20 4.63113 19.8027 4.48106C19.6053 4.33099 19.1436 4.459 18.2202 4.71504C16.64 5.15319 14.3423 5.22532 11.7576 3.90865Z" stroke="#FE7300" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
          <input class="input-to" placeholder="Moving To" type="text" name="Moving_to" autocomplete="off">
          <p>Moving To</p>
        </div>
      </div>
      
    </div>

    <div class="quiz-wrap-step step-price crew">
      <b class="title"><?php the_field('quiz_1_4_price_title'); ?></b>
      <p class="subtitle"><?php the_field('quiz_1_4_price_subtitle'); ?></p>
      <div class="left">
        <div class="item-toggle">
          <?php $i = 1; if (have_rows('quz_1_4_price')) : while(have_rows('quz_1_4_price')) : the_row(); ?>
          <div class="item toggle <?php if ($i == 2) { echo 'active'; } ?>">
            <div class="item-top">
              <div class="meta">
                <div class="icon">
                  <img src="<?php the_sub_field('icon'); ?>" alt="<?php the_sub_field('name'); ?>">
                </div>
                <b><?php the_sub_field('name'); ?></b>
              </div>
              <div class="meta-price">
                $ <?php the_sub_field('price_hour'); ?> / hour
              </div>
            </div>
            <div class="item-content">
              <b>Things to keep in mind</b>
              <div class="row">
                <b>Minimum cost</b>
                <div class="line"></div>
                <p><?php the_sub_field('min_price'); ?></p>
              </div>
              <div class="row">
                <b>Arrival fee</b>
                <div class="line"></div>
                <p><?php the_sub_field('price_hour'); ?></p>
              </div>
              <div class="row">
                <b>Certificate of insurance</b>
                <div class="line"></div>
                <p><?php the_sub_field('sert_of_insurance'); ?></p>
              </div>
              <div class="row">
                <b>Insurance</b>
                <div class="line"></div>
                <p><?php the_sub_field('insurance'); ?></p>
              </div>
              <div class="row">
                <b>Cancellation policy</b>
                <div class="line"></div>
                <p><?php the_sub_field('cancel_policy'); ?></p>
              </div>
            </div>
          </div>
          <?php $i++; endwhile; endif; ?>
        </div>
        <b class="title mt50">Questions?</b>
        <div class="item-toggle">
          <?php  if (have_rows('questions')) : while(have_rows('questions')) : the_row(); ?>
          <div class="question toggle">
            <b class="q-title">
              <?php the_sub_field('title'); ?>
              <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M18.5303 8.96967C18.2374 8.67678 17.7626 8.67678 17.4697 8.96967L12 14.4393L6.53033 8.96967C6.23744 8.67678 5.76256 8.67678 5.46967 8.96967C5.17678 9.26256 5.17678 9.73744 5.46967 10.0303L11.4697 16.0303C11.7626 16.3232 12.2374 16.3232 12.5303 16.0303L18.5303 10.0303C18.8232 9.73744 18.8232 9.26256 18.5303 8.96967Z" fill="white"/>
                </svg>
              </div>
            </b>
            <p class="qanswer"><?php the_sub_field('answer'); ?></p>
          </div>
          <?php endwhile; endif; ?>
        </div>
      </div>
      <div class="right">
        <b>What is Elate Moving?</b>
        <div class="row">
          <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
              <g clip-path="url(#clip0_678_17373)">
                <path d="M8.10092 11.6679C8.33614 12.1292 8.15286 12.6938 7.69161 12.929C7.23027 13.1642 6.66576 12.9809 6.43054 12.5197L5.83791 11.3575C5.19919 10.1988 4.57862 9.74705 3.62749 9.74705C2.53062 9.74705 1.87512 10.6304 1.87512 11.4845V15.6865C2.25781 16.393 3.21396 18.4935 3.23449 21.8748C3.23552 22.0477 3.44805 22.125 3.65824 22.125H4.66913C4.80479 22.125 4.92015 22.0076 4.92202 21.8682L4.92005 16.5942C4.91987 16.0764 5.33944 15.6565 5.85722 15.6563H5.85755C6.37518 15.6563 6.79485 16.0758 6.79504 16.5935C6.79504 16.5935 6.79701 21.8752 6.79696 21.8772C6.79016 23.0477 5.83566 24 4.66913 24H3.65824C2.35512 24 1.36691 23.0913 1.35955 21.8862C1.33841 18.403 0.2002 16.5267 0.152388 16.4496C0.0489822 16.2953 0.000185719 16.1234 0.000185719 15.9375V11.4844C-0.0202516 9.53297 1.64886 7.82936 3.62753 7.87206C5.81086 7.87201 6.87651 9.35316 7.48822 10.4673C7.49282 10.4756 8.10092 11.6679 8.10092 11.6679ZM23.0086 8.99457C22.3271 8.27068 21.391 7.87201 20.3727 7.87201C18.1894 7.87201 17.1237 9.35316 16.512 10.4672C16.5074 10.4756 15.8993 11.6679 15.8993 11.6679C15.6641 12.1291 15.8474 12.6937 16.3086 12.9289C16.7699 13.1642 17.3345 12.9809 17.5697 12.5196L18.1623 11.3574C18.801 10.1988 19.4216 9.747 20.3727 9.747C21.4696 9.747 22.1251 10.6304 22.1251 11.4844V15.6865C21.7424 16.393 20.7863 18.4935 20.7657 21.8748C20.7647 22.0477 20.5522 22.125 20.342 22.125H19.3311C19.1954 22.125 19.0801 22.0076 19.0782 21.8681L19.0802 16.5941C19.0804 16.0764 18.6608 15.6565 18.143 15.6563H18.1427C17.6251 15.6563 17.2054 16.0758 17.2052 16.5935C17.2052 16.5935 17.2032 21.8752 17.2033 21.8772C17.2101 23.0477 18.1646 24 19.3311 24H20.342C21.6452 24 22.6334 23.0912 22.6407 21.8862C22.6619 18.4031 23.8 16.5267 23.8479 16.4496C23.9513 16.2954 24.0001 16.1235 24.0001 15.9375V11.4845C24 10.5712 23.6386 9.6637 23.0086 8.99457ZM1.21893 3.1876C1.21893 1.43003 2.64884 0.00012207 4.4064 0.00012207C8.63501 0.175246 8.63379 6.2006 4.40635 6.37507C2.64884 6.37507 1.21893 4.94516 1.21893 3.1876ZM3.09391 3.1876C3.09391 3.91129 3.6827 4.50009 4.4064 4.50009C6.14761 4.42799 6.14709 1.94692 4.4064 1.87511C3.6827 1.87511 3.09391 2.4639 3.09391 3.1876ZM16.3126 3.1876C16.3126 1.43003 17.7425 0.00012207 19.5 0.00012207C23.7286 0.175246 23.7274 6.2006 19.5 6.37507C17.7425 6.37507 16.3126 4.94516 16.3126 3.1876ZM18.1875 3.1876C18.1875 3.91129 18.7763 4.50009 19.5 4.50009C21.2412 4.42799 21.2407 1.94692 19.5 1.87511C18.7763 1.87511 18.1875 2.4639 18.1875 3.1876Z" fill="white"/>
                <path d="M13.1639 18.2812H10.8361C9.66857 18.2812 8.71875 17.3314 8.71875 16.1639V14.4923C8.71875 13.3248 9.66857 12.375 10.8361 12.375H13.1639C14.3314 12.375 15.2812 13.3248 15.2812 14.4923V16.1639C15.2812 17.3314 14.3314 18.2812 13.1639 18.2812ZM10.8361 14.25C10.7718 14.2501 10.7102 14.2756 10.6648 14.321C10.6194 14.3665 10.5938 14.4281 10.5937 14.4923V16.1639C10.5938 16.2281 10.6194 16.2897 10.6648 16.3352C10.7102 16.3806 10.7718 16.4061 10.8361 16.4062H13.1639C13.2281 16.4061 13.2897 16.3806 13.3352 16.3352C13.3806 16.2897 13.4061 16.2281 13.4062 16.1639V14.4923C13.4061 14.4281 13.3806 14.3665 13.3352 14.321C13.2897 14.2756 13.2281 14.2501 13.1639 14.25H10.8361Z" fill="#FE7300"/>
              </g>
              <defs>
                <clipPath id="clip0_678_17373">
                  <rect width="24" height="24" fill="white"/>
                </clipPath>
              </defs>
            </svg>
          </div>
          <p>Professional and Experienced Staff</p>
        </div>
        <div class="row">
          <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <g clip-path="url(#clip0_678_17379)">
                  <path d="M10.2587 23.0625H3.75C2.1967 23.0625 0.9375 21.8033 0.9375 20.25V3.75C0.9375 2.1967 2.1967 0.9375 3.75 0.9375H14.625C16.1783 0.9375 17.4375 2.1967 17.4375 3.75V6.2543" stroke="white" stroke-width="1.8" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M6.5625 19.3125C7.59803 19.3125 8.4375 18.473 8.4375 17.4375C8.4375 16.402 7.59803 15.5625 6.5625 15.5625C5.52697 15.5625 4.6875 16.402 4.6875 17.4375C4.6875 18.473 5.52697 19.3125 6.5625 19.3125Z" stroke="#FE7300" stroke-width="1.8" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M10.3125 4.6875H13.6875M4.6875 8.25H13.6875M4.6875 11.8125H11.8125M16.5 19.3125L15.5928 13.1641C15.5726 13.027 15.5624 12.8886 15.5625 12.75C15.5625 11.1967 16.8217 9.9375 18.375 9.9375C19.9283 9.9375 21.1875 11.1967 21.1875 12.75C21.1875 12.8907 21.1772 13.029 21.1572 13.1641L20.25 19.3125H21.1875C22.223 19.3125 23.0625 20.152 23.0625 21.1875C23.0625 22.223 22.223 23.0625 21.1875 23.0625H15.5625C14.527 23.0625 13.6875 22.223 13.6875 21.1875C13.6875 20.152 14.527 19.3125 15.5625 19.3125H16.5Z" stroke="white" stroke-width="1.8" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                </g>
                <defs>
                  <clipPath id="clip0_678_17379">
                    <rect width="24" height="24" fill="white"/>
                  </clipPath>
                </defs>
            </svg>
          </div>
          <p>Fully insured and licensed</p>
        </div>
        <div class="row">
          <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
              <g clip-path="url(#clip0_678_17386)">
              <path d="M19.5 13.875V20.25C19.5 21.8033 18.2408 23.0625 16.6875 23.0625H7.3125C5.7592 23.0625 4.5 21.8033 4.5 20.25V10.125M4.5 10.125H19.5L23.0625 4.5M4.5 10.125L0.9375 4.5M10.125 4.5L12 6.375M12 6.375L13.875 4.5M12 6.375V0.9375" stroke="white" stroke-width="1.8" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M10.125 13.875H13.875" stroke="#FE7300" stroke-width="1.8" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
              </g>
              <defs>
              <clipPath id="clip0_678_17386">
              <rect width="24" height="24" fill="white"/>
              </clipPath>
              </defs>
            </svg>
          </div>
          <p>Expert packing and unpacking services</p>
        </div>
        <div class="row">
          <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
              <path d="M19.5 23.0625H15.75C14.7145 23.0625 13.875 22.223 13.875 21.1875V17.4375C13.875 16.402 14.7145 15.5625 15.75 15.5625H19.5C20.5355 15.5625 21.375 16.402 21.375 17.4375V21.1875C21.375 22.223 20.5355 23.0625 19.5 23.0625Z" stroke="#FE7300" stroke-width="1.8" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M17.625 11.8125V2.8125C17.625 1.77698 16.7855 0.9375 15.75 0.9375H4.5C3.46448 0.9375 2.625 1.77698 2.625 2.8125V21.1875C2.625 22.223 3.46448 23.0625 4.5 23.0625H10.4462" stroke="white" stroke-width="1.8" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M3.375 1.31238L9.08864 4.16917C9.40008 4.3249 9.66201 4.56428 9.84507 4.86048C10.0281 5.15669 10.1251 5.49801 10.1251 5.84622V18.1536C10.1251 18.5018 10.0281 18.8431 9.84507 19.1393C9.66201 19.4355 9.40008 19.6749 9.08864 19.8306L3.375 22.6875" stroke="white" stroke-width="1.8" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M17.625 17.4375V15.5625" stroke="#FE7300" stroke-width="1.8" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
          <p>Customized moving solutions</p>
        </div>
        <div class="google">
          <img src="<?php echo get_template_directory_uri(); ?>/img/google-2.svg" alt="Google.com">
        </div>
      </div>
    </div>

    <div class="quiz-wrap-step step-price">
      <b class="title mb50"><?php the_field('quiz_1_5_title'); ?></b>
      <div class="left item-toggle">
        <?php $i = 1;  if (have_rows('quiz_1_5')) : while(have_rows('quiz_1_5')) : the_row(); ?>
        <div class="question toggle <?php if ($i == 1) { echo 'active terms checked'; } ?>">
          <b class="q-title">
            <?php the_sub_field('title'); ?>
            <div class="icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M18.5303 8.96967C18.2374 8.67678 17.7626 8.67678 17.4697 8.96967L12 14.4393L6.53033 8.96967C6.23744 8.67678 5.76256 8.67678 5.46967 8.96967C5.17678 9.26256 5.17678 9.73744 5.46967 10.0303L11.4697 16.0303C11.7626 16.3232 12.2374 16.3232 12.5303 16.0303L18.5303 10.0303C18.8232 9.73744 18.8232 9.26256 18.5303 8.96967Z" fill="white"/>
              </svg>
            </div>
          </b>
          <p class="qanswer"><?php the_sub_field('answer'); ?></p>
        </div>
        <?php $i++; endwhile; endif; ?>
      </div>
      
    </div>

    <div class="quiz-wrap-step result-step ">
      <b class="title mb50"><?php the_field('quiz_1_6_title'); ?></b>
      <div class="left">
        <div class="summary">
          <b class="title">Summary</b>
          <div class="summary-row">
            <div class="summary-from row-item">
              <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                  <path d="M13.6177 21.367C13.1841 21.773 12.6044 22 12.0011 22C11.3978 22 10.8182 21.773 10.3845 21.367C6.41302 17.626 1.09076 13.4469 3.68627 7.37966C5.08963 4.09916 8.45834 2 12.0011 2C15.5439 2 18.9126 4.09916 20.316 7.37966C22.9082 13.4393 17.599 17.6389 13.6177 21.367Z" stroke="#FE7300" stroke-width="1.5"/>
                  <path d="M15.5 11C15.5 12.933 13.933 14.5 12 14.5C10.067 14.5 8.5 12.933 8.5 11C8.5 9.067 10.067 7.5 12 7.5C13.933 7.5 15.5 9.067 15.5 11Z" stroke="#FE7300" stroke-width="1.5"/>
                </svg>
              </div>
              <div class="row-meta">
                <p>Origin</p>
                <b>2 River Terrace, 10J, New York, NY 10282</b>
              </div>
            </div>
            <div class="summary-date row-item">
              <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                  <path d="M18 2V4M6 2V4" stroke="#FE7300" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M11.9955 13H12.0045M11.9955 17H12.0045M15.991 13H16M8 13H8.00897M8 17H8.00897" stroke="#FE7300" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M3.5 8H20.5" stroke="#FE7300" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M2.5 12.2432C2.5 7.88594 2.5 5.70728 3.75212 4.35364C5.00424 3 7.01949 3 11.05 3H12.95C16.9805 3 18.9958 3 20.2479 4.35364C21.5 5.70728 21.5 7.88594 21.5 12.2432V12.7568C21.5 17.1141 21.5 19.2927 20.2479 20.6464C18.9958 22 16.9805 22 12.95 22H11.05C7.01949 22 5.00424 22 3.75212 20.6464C2.5 19.2927 2.5 17.1141 2.5 12.7568V12.2432Z" stroke="#FE7300" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M3 8H21" stroke="#FE7300" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </div>
              <div class="row-meta">
                <p>Move date</p>
                <b class="main-date">January 17th, 2024</b>
              </div>
            </div>
            <div class="summary-to row-item">
              <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                  <path d="M4 7V21" stroke="#FE7300" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M11.7576 3.90865C8.45236 2.22497 5.85125 3.21144 4.55426 4.2192C4.32048 4.40085 4.20358 4.49167 4.10179 4.69967C4 4.90767 4 5.10138 4 5.4888V14.7319C4.9697 13.6342 7.87879 11.9328 11.7576 13.9086C15.224 15.6744 18.1741 14.9424 19.5697 14.1795C19.7633 14.0737 19.8601 14.0207 19.9301 13.9028C20 13.7849 20 13.6569 20 13.4009V5.87389C20 5.04538 20 4.63113 19.8027 4.48106C19.6053 4.33099 19.1436 4.459 18.2202 4.71504C16.64 5.15319 14.3423 5.22532 11.7576 3.90865Z" stroke="#FE7300" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </div>
              <div class="row-meta">
                <p>Destination</p>
                <b>8 Spruce St, 41F, New York, NY 10038</b>
              </div>
            </div>
            <div class="summary-type row-item">
              <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                  <path d="M14.5 12C14.5 13.3807 13.3807 14.5 12 14.5C10.6193 14.5 9.5 13.3807 9.5 12C9.5 10.6193 10.6193 9.5 12 9.5C13.3807 9.5 14.5 10.6193 14.5 12Z" stroke="#FE7300" stroke-width="1.5"/>
                  <path d="M19 11.1415C18.6749 11.0944 18.341 11.0586 18 11.0347M6 12.9653C5.65897 12.9415 5.32511 12.9056 5 12.8585" stroke="#FE7300" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M12 19.5C10.6675 20.1224 8.91707 20.5 7 20.5C5.93408 20.5 4.91969 20.3833 4 20.1726C2.49957 19.8289 2 18.9264 2 17.386V6.61397C2 5.62914 3.04003 4.95273 4 5.1726C4.91969 5.38325 5.93408 5.5 7 5.5C8.91707 5.5 10.6675 5.12236 12 4.5C13.3325 3.87764 15.0829 3.5 17 3.5C18.0659 3.5 19.0803 3.61675 20 3.8274C21.5817 4.18968 22 5.12036 22 6.61397V17.386C22 18.3709 20.96 19.0473 20 18.8274C19.0803 18.6167 18.0659 18.5 17 18.5C15.0829 18.5 13.3325 18.8776 12 19.5Z" stroke="#FE7300" stroke-width="1.5"/>
                </svg>
              </div>
              <div class="row-meta">
                <p>Rate type</p>
                <b>Hourly</b>
              </div>
            </div>
            <div class="summary-stop row-item">
              <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                  <path d="M9 1V17M17 9H1" stroke="#FE7300" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </div>
              <div class="row-meta">
                <p>Stop point</p>
                <b>8 Spruce St, 41F, New York, NY 10038</b>
              </div>
            </div>
          </div>
          
        </div>
        <div class="main-form form">
          <b class="title">Payment information</b>
          <?php echo do_shortcode('[contact-form-7 id="9da0b08" title="Quiz form - stripe"]'); ?>
        </div>
      </div>
      <div class="right">
        <b>Quote summary</b>
        <div class="row hourly-rate">
          <span>Hourly rate</span>
          <p>$220.00</p>
        </div>
        <div class="row min-cost-rate">
          <span>Minimum cost</span>
          <p>$660.00</p>
        </div>
        <div class="row coupon" style="display: none">
          <span>Coupon</span>
          <p class="coupon-amount">- $50.00</p>
        </div>
        <div class="row">
          <span>Certificate of insurance</span>
          <p>Free of charge</p>
        </div>
        <div class="auth">
          <div class="row">
            <b>Authorization amount</b>
            <strong>$660.00</strong>
          </div>
          <p>
            Elate will authorize your card for this amount 48 hours before moving day. If your move takes longer than the minimum hours, you will be billed for the difference. Coupon(s) will be applied to the final price.
          </p>
          <div class="consumed">
            <input name="consumed" id="consumed-1" type="checkbox" style="display: none" checked>
            <label for="consumed-1">
              I consent to receive SMS and email communications for updates, promotions, and relevant information from Elate Moving.
            </label>
          </div>
        </div>
        <div class="cancel">
          <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
              <path d="M8.37563 3C8.16172 3.07993 7.95135 3.16712 7.74481 3.26126M20.7176 16.3011C20.8198 16.0799 20.914 15.8542 20.9999 15.6245M18.4987 19.3647C18.6704 19.2044 18.8364 19.0381 18.9962 18.866M15.2688 21.3723C15.4629 21.2991 15.654 21.22 15.842 21.1351M12.1559 21.9939C11.925 22.0019 11.6925 22.0019 11.4615 21.9939M7.7872 21.1404C7.968 21.2217 8.15172 21.2978 8.33814 21.3683M4.67244 18.9208C4.80913 19.0657 4.95018 19.2064 5.09539 19.3428M2.63259 15.6645C2.70747 15.8622 2.78856 16.0569 2.87561 16.2483M2.00486 12.5053C1.99837 12.2972 1.99839 12.0878 2.00486 11.8794M2.62534 8.73714C2.6989 8.54165 2.77853 8.34913 2.86399 8.1598M4.65591 5.47923C4.80057 5.32514 4.95014 5.17573 5.10439 5.03124" stroke="#FE7300" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M13.5 12C13.5 12.8284 12.8284 13.5 12 13.5C11.1716 13.5 10.5 12.8284 10.5 12C10.5 11.1716 11.1716 10.5 12 10.5M13.5 12C13.5 11.1716 12.8284 10.5 12 10.5M13.5 12H16M12 10.5V6" stroke="#FE7300" stroke-width="1.5" stroke-linecap="round"/>
              <path d="M22 12C22 6.47715 17.5228 2 12 2" stroke="#FE7300" stroke-width="1.5" stroke-linecap="round"/>
            </svg>
          </div>
          <b>Free cancellation</b>
          <p>
            You can cancel free of charge until 11:59 PM on Jan 14 (48hrs) before move date.
          </p>
        </div>
        <div class="pay-img">
          <img src="/wp-content/themes/main/img/icons/payments.svg" alt="Payments">
        </div>
      </div>
      <div class="success" style="display: none">
        <b>Your payment was successful!</b>
        <p>We have received your application and will contact you as soon as possible</p>
      </div>
    </div>

    <!-- <div class="quiz-wrap-step step-checkboxes add-services">
      <b class="title title-sub"><?php the_field('1_6_title'); ?></b>
      <p class="subtitle"><?php the_field('1_6_subtitle'); ?></p>
      <?php $id_input = 1; if (have_rows('quiz_1_6_row')) : while(have_rows('quiz_1_6_row')) : the_row(); ?>
      <div class="item">
       <input name="quiz_1_6_row" id="<?php echo 'quz_1_6_'.$id_input; ?>" value="<?php the_sub_field('name'); ?>" type="checkbox" style="display: none">
       <label for="<?php echo 'quz_1_6_'.$id_input; ?>">
        <?php the_sub_field('name'); ?>
       </label>
      </div>
      <?php $id_input++; endwhile; endif; ?>
    </div> -->

    
  </div>
  <div class="quiz-wrap 2">
    <div class="quiz-wrap-step step-features">
      <b class="title title-sub"><?php the_field('2_2_title'); ?></b>
      <p class="subtitle"><?php the_field('2_2_subtitle'); ?></p>
      <?php if (have_rows('2_quiz_features_step_2')) : while(have_rows('2_quiz_features_step_2')) : the_row(); ?>
      <div class="item">
        <div class="front">
          <img src="<?php the_sub_field('icon'); ?>" alt="<?php the_sub_field('name'); ?>">
          <b><?php the_sub_field('name'); ?></b>
        </div>
        <div class="back">
          <p><?php the_sub_field('text'); ?></p>
        </div>
      </div>
      <?php endwhile; endif; ?>
    </div>

    <div class="quiz-wrap-step step-checkboxes items-to-move">
      <b class="title title-sub"><?php the_field('2_3_title'); ?></b>
      <p class="subtitle"><?php the_field('2_3_subtitle'); ?></p>
      <?php $id_input = 1; if (have_rows('quiz_2_3_row')) : while(have_rows('quiz_2_3_row')) : the_row(); ?>
      <div class="item">
       <input name="quiz_2_3_row" id="<?php echo 'quz_2_3_'.$id_input; ?>" value="<?php the_sub_field('name'); ?>" type="checkbox" style="display: none">
       <label for="<?php echo 'quz_2_3_'.$id_input; ?>">
        <?php the_sub_field('name'); ?>
       </label>
      </div>
      <?php $id_input++; endwhile; endif; ?>
    </div>

    <div class="quiz-wrap-step step-address">
      <b class="title">Tell us the starting and ending locations of your move</b>
      <p class="subtitle">By providing the full addresses of your move, we can present you with the moving options available for your journey.</p>
      <div class="row">
        <div class="input start">
          <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
              <path d="M13.6177 21.367C13.1841 21.773 12.6044 22 12.0011 22C11.3978 22 10.8182 21.773 10.3845 21.367C6.41302 17.626 1.09076 13.4469 3.68627 7.37966C5.08963 4.09916 8.45834 2 12.0011 2C15.5439 2 18.9126 4.09916 20.316 7.37966C22.9082 13.4393 17.599 17.6389 13.6177 21.367Z" stroke="#FE7300" stroke-width="1.5"/>
              <path d="M15.5 11C15.5 12.933 13.933 14.5 12 14.5C10.067 14.5 8.5 12.933 8.5 11C8.5 9.067 10.067 7.5 12 7.5C13.933 7.5 15.5 9.067 15.5 11Z" stroke="#FE7300" stroke-width="1.5"/>
            </svg>
          </div>
          <input class="input-from" placeholder="Moving From" type="text" name="Moving_from" autocomplete="off">
          <p>Moving From</p>
        </div>
        <div class="input stop noadded">
          <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
              <path d="M12 4V20M20 12H4" stroke="#FE7300" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
          <input class="input-from" placeholder="Add Stop" type="text" name="add_stop" autocomplete="off">
          <p>Add Stop</p>
        </div>
        <div class="input end">
          <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
              <path d="M4 7V21" stroke="#FE7300" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M11.7576 3.90865C8.45236 2.22497 5.85125 3.21144 4.55426 4.2192C4.32048 4.40085 4.20358 4.49167 4.10179 4.69967C4 4.90767 4 5.10138 4 5.4888V14.7319C4.9697 13.6342 7.87879 11.9328 11.7576 13.9086C15.224 15.6744 18.1741 14.9424 19.5697 14.1795C19.7633 14.0737 19.8601 14.0207 19.9301 13.9028C20 13.7849 20 13.6569 20 13.4009V5.87389C20 5.04538 20 4.63113 19.8027 4.48106C19.6053 4.33099 19.1436 4.459 18.2202 4.71504C16.64 5.15319 14.3423 5.22532 11.7576 3.90865Z" stroke="#FE7300" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
          <input class="input-to" placeholder="Moving To" type="text" name="Moving_to" autocomplete="off">
          <p>Moving To</p>
        </div>
      </div>
      
    </div>

   

    <div class="quiz-wrap-step step-price step-date crew">
      <b class="title title-sub">Onsite estimate</b>
      <p class="subtitle" style="max-width: 700px">With our White Glove Services, we offer personalized onsite estimates free of charge to ensure accuracy and meet your specific needs</p>
      <div class="left">
        <?php echo do_shortcode('[contact-form-7 id="c15e5bb" title="date form (unsubmit)"]'); ?>
        <b class="title mt50">Questions?</b>
        <div class="item-toggle">
          <?php  if (have_rows('2_questions')) : while(have_rows('2_questions')) : the_row(); ?>
          <div class="question toggle">
            <b class="q-title">
              <?php the_sub_field('title'); ?>
              <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M18.5303 8.96967C18.2374 8.67678 17.7626 8.67678 17.4697 8.96967L12 14.4393L6.53033 8.96967C6.23744 8.67678 5.76256 8.67678 5.46967 8.96967C5.17678 9.26256 5.17678 9.73744 5.46967 10.0303L11.4697 16.0303C11.7626 16.3232 12.2374 16.3232 12.5303 16.0303L18.5303 10.0303C18.8232 9.73744 18.8232 9.26256 18.5303 8.96967Z" fill="white"/>
                </svg>
              </div>
            </b>
            <p class="qanswer"><?php the_sub_field('answer'); ?></p>
          </div>
          <?php endwhile; endif; ?>
        </div>
      </div>
      <div class="right">
        <b>What is Elate Moving?</b>
        <div class="row">
          <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
              <g clip-path="url(#clip0_678_17373)">
                <path d="M8.10092 11.6679C8.33614 12.1292 8.15286 12.6938 7.69161 12.929C7.23027 13.1642 6.66576 12.9809 6.43054 12.5197L5.83791 11.3575C5.19919 10.1988 4.57862 9.74705 3.62749 9.74705C2.53062 9.74705 1.87512 10.6304 1.87512 11.4845V15.6865C2.25781 16.393 3.21396 18.4935 3.23449 21.8748C3.23552 22.0477 3.44805 22.125 3.65824 22.125H4.66913C4.80479 22.125 4.92015 22.0076 4.92202 21.8682L4.92005 16.5942C4.91987 16.0764 5.33944 15.6565 5.85722 15.6563H5.85755C6.37518 15.6563 6.79485 16.0758 6.79504 16.5935C6.79504 16.5935 6.79701 21.8752 6.79696 21.8772C6.79016 23.0477 5.83566 24 4.66913 24H3.65824C2.35512 24 1.36691 23.0913 1.35955 21.8862C1.33841 18.403 0.2002 16.5267 0.152388 16.4496C0.0489822 16.2953 0.000185719 16.1234 0.000185719 15.9375V11.4844C-0.0202516 9.53297 1.64886 7.82936 3.62753 7.87206C5.81086 7.87201 6.87651 9.35316 7.48822 10.4673C7.49282 10.4756 8.10092 11.6679 8.10092 11.6679ZM23.0086 8.99457C22.3271 8.27068 21.391 7.87201 20.3727 7.87201C18.1894 7.87201 17.1237 9.35316 16.512 10.4672C16.5074 10.4756 15.8993 11.6679 15.8993 11.6679C15.6641 12.1291 15.8474 12.6937 16.3086 12.9289C16.7699 13.1642 17.3345 12.9809 17.5697 12.5196L18.1623 11.3574C18.801 10.1988 19.4216 9.747 20.3727 9.747C21.4696 9.747 22.1251 10.6304 22.1251 11.4844V15.6865C21.7424 16.393 20.7863 18.4935 20.7657 21.8748C20.7647 22.0477 20.5522 22.125 20.342 22.125H19.3311C19.1954 22.125 19.0801 22.0076 19.0782 21.8681L19.0802 16.5941C19.0804 16.0764 18.6608 15.6565 18.143 15.6563H18.1427C17.6251 15.6563 17.2054 16.0758 17.2052 16.5935C17.2052 16.5935 17.2032 21.8752 17.2033 21.8772C17.2101 23.0477 18.1646 24 19.3311 24H20.342C21.6452 24 22.6334 23.0912 22.6407 21.8862C22.6619 18.4031 23.8 16.5267 23.8479 16.4496C23.9513 16.2954 24.0001 16.1235 24.0001 15.9375V11.4845C24 10.5712 23.6386 9.6637 23.0086 8.99457ZM1.21893 3.1876C1.21893 1.43003 2.64884 0.00012207 4.4064 0.00012207C8.63501 0.175246 8.63379 6.2006 4.40635 6.37507C2.64884 6.37507 1.21893 4.94516 1.21893 3.1876ZM3.09391 3.1876C3.09391 3.91129 3.6827 4.50009 4.4064 4.50009C6.14761 4.42799 6.14709 1.94692 4.4064 1.87511C3.6827 1.87511 3.09391 2.4639 3.09391 3.1876ZM16.3126 3.1876C16.3126 1.43003 17.7425 0.00012207 19.5 0.00012207C23.7286 0.175246 23.7274 6.2006 19.5 6.37507C17.7425 6.37507 16.3126 4.94516 16.3126 3.1876ZM18.1875 3.1876C18.1875 3.91129 18.7763 4.50009 19.5 4.50009C21.2412 4.42799 21.2407 1.94692 19.5 1.87511C18.7763 1.87511 18.1875 2.4639 18.1875 3.1876Z" fill="white"/>
                <path d="M13.1639 18.2812H10.8361C9.66857 18.2812 8.71875 17.3314 8.71875 16.1639V14.4923C8.71875 13.3248 9.66857 12.375 10.8361 12.375H13.1639C14.3314 12.375 15.2812 13.3248 15.2812 14.4923V16.1639C15.2812 17.3314 14.3314 18.2812 13.1639 18.2812ZM10.8361 14.25C10.7718 14.2501 10.7102 14.2756 10.6648 14.321C10.6194 14.3665 10.5938 14.4281 10.5937 14.4923V16.1639C10.5938 16.2281 10.6194 16.2897 10.6648 16.3352C10.7102 16.3806 10.7718 16.4061 10.8361 16.4062H13.1639C13.2281 16.4061 13.2897 16.3806 13.3352 16.3352C13.3806 16.2897 13.4061 16.2281 13.4062 16.1639V14.4923C13.4061 14.4281 13.3806 14.3665 13.3352 14.321C13.2897 14.2756 13.2281 14.2501 13.1639 14.25H10.8361Z" fill="#FE7300"/>
              </g>
              <defs>
                <clipPath id="clip0_678_17373">
                  <rect width="24" height="24" fill="white"/>
                </clipPath>
              </defs>
            </svg>
          </div>
          <p>Professional and Experienced Staff</p>
        </div>
        <div class="row">
          <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <g clip-path="url(#clip0_678_17379)">
                  <path d="M10.2587 23.0625H3.75C2.1967 23.0625 0.9375 21.8033 0.9375 20.25V3.75C0.9375 2.1967 2.1967 0.9375 3.75 0.9375H14.625C16.1783 0.9375 17.4375 2.1967 17.4375 3.75V6.2543" stroke="white" stroke-width="1.8" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M6.5625 19.3125C7.59803 19.3125 8.4375 18.473 8.4375 17.4375C8.4375 16.402 7.59803 15.5625 6.5625 15.5625C5.52697 15.5625 4.6875 16.402 4.6875 17.4375C4.6875 18.473 5.52697 19.3125 6.5625 19.3125Z" stroke="#FE7300" stroke-width="1.8" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M10.3125 4.6875H13.6875M4.6875 8.25H13.6875M4.6875 11.8125H11.8125M16.5 19.3125L15.5928 13.1641C15.5726 13.027 15.5624 12.8886 15.5625 12.75C15.5625 11.1967 16.8217 9.9375 18.375 9.9375C19.9283 9.9375 21.1875 11.1967 21.1875 12.75C21.1875 12.8907 21.1772 13.029 21.1572 13.1641L20.25 19.3125H21.1875C22.223 19.3125 23.0625 20.152 23.0625 21.1875C23.0625 22.223 22.223 23.0625 21.1875 23.0625H15.5625C14.527 23.0625 13.6875 22.223 13.6875 21.1875C13.6875 20.152 14.527 19.3125 15.5625 19.3125H16.5Z" stroke="white" stroke-width="1.8" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                </g>
                <defs>
                  <clipPath id="clip0_678_17379">
                    <rect width="24" height="24" fill="white"/>
                  </clipPath>
                </defs>
            </svg>
          </div>
          <p>Fully insured and licensed</p>
        </div>
        <div class="row">
          <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
              <g clip-path="url(#clip0_678_17386)">
              <path d="M19.5 13.875V20.25C19.5 21.8033 18.2408 23.0625 16.6875 23.0625H7.3125C5.7592 23.0625 4.5 21.8033 4.5 20.25V10.125M4.5 10.125H19.5L23.0625 4.5M4.5 10.125L0.9375 4.5M10.125 4.5L12 6.375M12 6.375L13.875 4.5M12 6.375V0.9375" stroke="white" stroke-width="1.8" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M10.125 13.875H13.875" stroke="#FE7300" stroke-width="1.8" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
              </g>
              <defs>
              <clipPath id="clip0_678_17386">
              <rect width="24" height="24" fill="white"/>
              </clipPath>
              </defs>
            </svg>
          </div>
          <p>Expert packing and unpacking services</p>
        </div>
        <div class="row">
          <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
              <path d="M19.5 23.0625H15.75C14.7145 23.0625 13.875 22.223 13.875 21.1875V17.4375C13.875 16.402 14.7145 15.5625 15.75 15.5625H19.5C20.5355 15.5625 21.375 16.402 21.375 17.4375V21.1875C21.375 22.223 20.5355 23.0625 19.5 23.0625Z" stroke="#FE7300" stroke-width="1.8" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M17.625 11.8125V2.8125C17.625 1.77698 16.7855 0.9375 15.75 0.9375H4.5C3.46448 0.9375 2.625 1.77698 2.625 2.8125V21.1875C2.625 22.223 3.46448 23.0625 4.5 23.0625H10.4462" stroke="white" stroke-width="1.8" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M3.375 1.31238L9.08864 4.16917C9.40008 4.3249 9.66201 4.56428 9.84507 4.86048C10.0281 5.15669 10.1251 5.49801 10.1251 5.84622V18.1536C10.1251 18.5018 10.0281 18.8431 9.84507 19.1393C9.66201 19.4355 9.40008 19.6749 9.08864 19.8306L3.375 22.6875" stroke="white" stroke-width="1.8" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M17.625 17.4375V15.5625" stroke="#FE7300" stroke-width="1.8" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
          <p>Customized moving solutions</p>
        </div>
        <div class="google">
          <img src="<?php echo get_template_directory_uri(); ?>/img/google-2.svg" alt="Google.com">
        </div>
      </div>
    </div>
   
    
  </div>
  <div class="quiz-wrap 3">
    <div class="quiz-wrap-step step-features">
      <b class="title title-sub"><?php the_field('3_2_title'); ?></b>
      <p class="subtitle"><?php the_field('3_2_subtitle'); ?></p>
      <?php if (have_rows('3_quiz_features_step_2')) : while(have_rows('3_quiz_features_step_2')) : the_row(); ?>
      <div class="item">
        <div class="front">
          <img src="<?php the_sub_field('icon'); ?>" alt="<?php the_sub_field('name'); ?>">
          <b><?php the_sub_field('name'); ?></b>
        </div>
        <div class="back">
          <p><?php the_sub_field('text'); ?></p>
        </div>
      </div>
      <?php endwhile; endif; ?>
    </div>

    <div class="quiz-wrap-step step-checkboxes items-to-move">
      <b class="title title-sub"><?php the_field('3_3_title'); ?></b>
      <p class="subtitle"><?php the_field('3_3_subtitle'); ?></p>
      <?php $id_input = 1; if (have_rows('quiz_3_3_row')) : while(have_rows('quiz_3_3_row')) : the_row(); ?>
      <div class="item">
       <input name="quiz_3_3_row" id="<?php echo 'quz_3_3_'.$id_input; ?>" value="<?php the_sub_field('name'); ?>" type="checkbox" style="display: none">
       <label for="<?php echo 'quz_3_3_'.$id_input; ?>">
        <?php the_sub_field('name'); ?>
       </label>
      </div>
      <?php $id_input++; endwhile; endif; ?>
    </div>

    <div class="quiz-wrap-step step-date">
      <b class="title">When will you be moving?</b>
      <?php echo do_shortcode('[contact-form-7 id="c15e5bb" title="date form (unsubmit)"]'); ?>
    </div>

    <div class="quiz-wrap-step step-address">
      <b class="title">Tell us the starting and ending locations of your move</b>
      <p class="subtitle">By providing the full addresses of your move, we can present you with the moving options available for your journey.</p>
      <div class="row">
        <div class="input start">
          <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
              <path d="M13.6177 21.367C13.1841 21.773 12.6044 22 12.0011 22C11.3978 22 10.8182 21.773 10.3845 21.367C6.41302 17.626 1.09076 13.4469 3.68627 7.37966C5.08963 4.09916 8.45834 2 12.0011 2C15.5439 2 18.9126 4.09916 20.316 7.37966C22.9082 13.4393 17.599 17.6389 13.6177 21.367Z" stroke="#FE7300" stroke-width="1.5"/>
              <path d="M15.5 11C15.5 12.933 13.933 14.5 12 14.5C10.067 14.5 8.5 12.933 8.5 11C8.5 9.067 10.067 7.5 12 7.5C13.933 7.5 15.5 9.067 15.5 11Z" stroke="#FE7300" stroke-width="1.5"/>
            </svg>
          </div>
          <input class="input-from" placeholder="Moving From" type="text" name="Moving_from" autocomplete="off">
          <p>Moving From</p>
        </div>
        <div class="input stop noadded">
          <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
              <path d="M12 4V20M20 12H4" stroke="#FE7300" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
          <input class="input-from" placeholder="Add Stop" type="text" name="add_stop" autocomplete="off">
          <p>Add Stop</p>
        </div>
        <div class="input end">
          <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
              <path d="M4 7V21" stroke="#FE7300" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M11.7576 3.90865C8.45236 2.22497 5.85125 3.21144 4.55426 4.2192C4.32048 4.40085 4.20358 4.49167 4.10179 4.69967C4 4.90767 4 5.10138 4 5.4888V14.7319C4.9697 13.6342 7.87879 11.9328 11.7576 13.9086C15.224 15.6744 18.1741 14.9424 19.5697 14.1795C19.7633 14.0737 19.8601 14.0207 19.9301 13.9028C20 13.7849 20 13.6569 20 13.4009V5.87389C20 5.04538 20 4.63113 19.8027 4.48106C19.6053 4.33099 19.1436 4.459 18.2202 4.71504C16.64 5.15319 14.3423 5.22532 11.7576 3.90865Z" stroke="#FE7300" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
          <input class="input-to" placeholder="Moving To" type="text" name="Moving_to" autocomplete="off">
          <p>Moving To</p>
        </div>
      </div>
      
    </div>

    <div class="quiz-wrap-step step-price crew">
      <b class="title"><?php the_field('quiz_3_4_price_title'); ?></b>
      <p class="subtitle"><?php the_field('quiz_3_4_price_subtitle'); ?></p>
      <div class="left">
        <div class="item-toggle">
          <?php $i = 1; if (have_rows('quz_3_4_price')) : while(have_rows('quz_3_4_price')) : the_row(); ?>
          <div class="item toggle <?php if ($i == 2) { echo 'active'; } ?>">
            <div class="item-top">
              <div class="meta">
                <div class="icon">
                  <img src="<?php the_sub_field('icon'); ?>" alt="<?php the_sub_field('name'); ?>">
                </div>
                <b><?php the_sub_field('name'); ?></b>
              </div>
              <div class="meta-price">
                $ <?php the_sub_field('price_hour'); ?> / hour
              </div>
            </div>
            <div class="item-content">
              <b>Things to keep in mind</b>
              <div class="row">
                <b>Minimum cost</b>
                <div class="line"></div>
                <p><?php the_sub_field('min_price'); ?></p>
              </div>
              <div class="row">
                <b>Arrival fee</b>
                <div class="line"></div>
                <p><?php the_sub_field('price_hour'); ?></p>
              </div>
              <div class="row">
                <b>Certificate of insurance</b>
                <div class="line"></div>
                <p><?php the_sub_field('sert_of_insurance'); ?></p>
              </div>
              <div class="row">
                <b>Insurance</b>
                <div class="line"></div>
                <p><?php the_sub_field('insurance'); ?></p>
              </div>
              <div class="row">
                <b>Cancellation policy</b>
                <div class="line"></div>
                <p><?php the_sub_field('cancel_policy'); ?></p>
              </div>
            </div>
          </div>
          <?php $i++; endwhile; endif; ?>
        </div>
        <b class="title mt50">Questions?</b>
        <div class="item-toggle">
          <?php  if (have_rows('3_questions')) : while(have_rows('3_questions')) : the_row(); ?>
          <div class="question toggle">
            <b class="q-title">
              <?php the_sub_field('title'); ?>
              <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M18.5303 8.96967C18.2374 8.67678 17.7626 8.67678 17.4697 8.96967L12 14.4393L6.53033 8.96967C6.23744 8.67678 5.76256 8.67678 5.46967 8.96967C5.17678 9.26256 5.17678 9.73744 5.46967 10.0303L11.4697 16.0303C11.7626 16.3232 12.2374 16.3232 12.5303 16.0303L18.5303 10.0303C18.8232 9.73744 18.8232 9.26256 18.5303 8.96967Z" fill="white"/>
                </svg>
              </div>
            </b>
            <p class="qanswer"><?php the_sub_field('answer'); ?></p>
          </div>
          <?php endwhile; endif; ?>
        </div>
      </div>
      <div class="right">
        <b>What is Elate Moving?</b>
        <div class="row">
          <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
              <g clip-path="url(#clip0_678_17373)">
                <path d="M8.10092 11.6679C8.33614 12.1292 8.15286 12.6938 7.69161 12.929C7.23027 13.1642 6.66576 12.9809 6.43054 12.5197L5.83791 11.3575C5.19919 10.1988 4.57862 9.74705 3.62749 9.74705C2.53062 9.74705 1.87512 10.6304 1.87512 11.4845V15.6865C2.25781 16.393 3.21396 18.4935 3.23449 21.8748C3.23552 22.0477 3.44805 22.125 3.65824 22.125H4.66913C4.80479 22.125 4.92015 22.0076 4.92202 21.8682L4.92005 16.5942C4.91987 16.0764 5.33944 15.6565 5.85722 15.6563H5.85755C6.37518 15.6563 6.79485 16.0758 6.79504 16.5935C6.79504 16.5935 6.79701 21.8752 6.79696 21.8772C6.79016 23.0477 5.83566 24 4.66913 24H3.65824C2.35512 24 1.36691 23.0913 1.35955 21.8862C1.33841 18.403 0.2002 16.5267 0.152388 16.4496C0.0489822 16.2953 0.000185719 16.1234 0.000185719 15.9375V11.4844C-0.0202516 9.53297 1.64886 7.82936 3.62753 7.87206C5.81086 7.87201 6.87651 9.35316 7.48822 10.4673C7.49282 10.4756 8.10092 11.6679 8.10092 11.6679ZM23.0086 8.99457C22.3271 8.27068 21.391 7.87201 20.3727 7.87201C18.1894 7.87201 17.1237 9.35316 16.512 10.4672C16.5074 10.4756 15.8993 11.6679 15.8993 11.6679C15.6641 12.1291 15.8474 12.6937 16.3086 12.9289C16.7699 13.1642 17.3345 12.9809 17.5697 12.5196L18.1623 11.3574C18.801 10.1988 19.4216 9.747 20.3727 9.747C21.4696 9.747 22.1251 10.6304 22.1251 11.4844V15.6865C21.7424 16.393 20.7863 18.4935 20.7657 21.8748C20.7647 22.0477 20.5522 22.125 20.342 22.125H19.3311C19.1954 22.125 19.0801 22.0076 19.0782 21.8681L19.0802 16.5941C19.0804 16.0764 18.6608 15.6565 18.143 15.6563H18.1427C17.6251 15.6563 17.2054 16.0758 17.2052 16.5935C17.2052 16.5935 17.2032 21.8752 17.2033 21.8772C17.2101 23.0477 18.1646 24 19.3311 24H20.342C21.6452 24 22.6334 23.0912 22.6407 21.8862C22.6619 18.4031 23.8 16.5267 23.8479 16.4496C23.9513 16.2954 24.0001 16.1235 24.0001 15.9375V11.4845C24 10.5712 23.6386 9.6637 23.0086 8.99457ZM1.21893 3.1876C1.21893 1.43003 2.64884 0.00012207 4.4064 0.00012207C8.63501 0.175246 8.63379 6.2006 4.40635 6.37507C2.64884 6.37507 1.21893 4.94516 1.21893 3.1876ZM3.09391 3.1876C3.09391 3.91129 3.6827 4.50009 4.4064 4.50009C6.14761 4.42799 6.14709 1.94692 4.4064 1.87511C3.6827 1.87511 3.09391 2.4639 3.09391 3.1876ZM16.3126 3.1876C16.3126 1.43003 17.7425 0.00012207 19.5 0.00012207C23.7286 0.175246 23.7274 6.2006 19.5 6.37507C17.7425 6.37507 16.3126 4.94516 16.3126 3.1876ZM18.1875 3.1876C18.1875 3.91129 18.7763 4.50009 19.5 4.50009C21.2412 4.42799 21.2407 1.94692 19.5 1.87511C18.7763 1.87511 18.1875 2.4639 18.1875 3.1876Z" fill="white"/>
                <path d="M13.1639 18.2812H10.8361C9.66857 18.2812 8.71875 17.3314 8.71875 16.1639V14.4923C8.71875 13.3248 9.66857 12.375 10.8361 12.375H13.1639C14.3314 12.375 15.2812 13.3248 15.2812 14.4923V16.1639C15.2812 17.3314 14.3314 18.2812 13.1639 18.2812ZM10.8361 14.25C10.7718 14.2501 10.7102 14.2756 10.6648 14.321C10.6194 14.3665 10.5938 14.4281 10.5937 14.4923V16.1639C10.5938 16.2281 10.6194 16.2897 10.6648 16.3352C10.7102 16.3806 10.7718 16.4061 10.8361 16.4062H13.1639C13.2281 16.4061 13.2897 16.3806 13.3352 16.3352C13.3806 16.2897 13.4061 16.2281 13.4062 16.1639V14.4923C13.4061 14.4281 13.3806 14.3665 13.3352 14.321C13.2897 14.2756 13.2281 14.2501 13.1639 14.25H10.8361Z" fill="#FE7300"/>
              </g>
              <defs>
                <clipPath id="clip0_678_17373">
                  <rect width="24" height="24" fill="white"/>
                </clipPath>
              </defs>
            </svg>
          </div>
          <p>Professional and Experienced Staff</p>
        </div>
        <div class="row">
          <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <g clip-path="url(#clip0_678_17379)">
                  <path d="M10.2587 23.0625H3.75C2.1967 23.0625 0.9375 21.8033 0.9375 20.25V3.75C0.9375 2.1967 2.1967 0.9375 3.75 0.9375H14.625C16.1783 0.9375 17.4375 2.1967 17.4375 3.75V6.2543" stroke="white" stroke-width="1.8" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M6.5625 19.3125C7.59803 19.3125 8.4375 18.473 8.4375 17.4375C8.4375 16.402 7.59803 15.5625 6.5625 15.5625C5.52697 15.5625 4.6875 16.402 4.6875 17.4375C4.6875 18.473 5.52697 19.3125 6.5625 19.3125Z" stroke="#FE7300" stroke-width="1.8" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M10.3125 4.6875H13.6875M4.6875 8.25H13.6875M4.6875 11.8125H11.8125M16.5 19.3125L15.5928 13.1641C15.5726 13.027 15.5624 12.8886 15.5625 12.75C15.5625 11.1967 16.8217 9.9375 18.375 9.9375C19.9283 9.9375 21.1875 11.1967 21.1875 12.75C21.1875 12.8907 21.1772 13.029 21.1572 13.1641L20.25 19.3125H21.1875C22.223 19.3125 23.0625 20.152 23.0625 21.1875C23.0625 22.223 22.223 23.0625 21.1875 23.0625H15.5625C14.527 23.0625 13.6875 22.223 13.6875 21.1875C13.6875 20.152 14.527 19.3125 15.5625 19.3125H16.5Z" stroke="white" stroke-width="1.8" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                </g>
                <defs>
                  <clipPath id="clip0_678_17379">
                    <rect width="24" height="24" fill="white"/>
                  </clipPath>
                </defs>
            </svg>
          </div>
          <p>Fully insured and licensed</p>
        </div>
        <div class="row">
          <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
              <g clip-path="url(#clip0_678_17386)">
              <path d="M19.5 13.875V20.25C19.5 21.8033 18.2408 23.0625 16.6875 23.0625H7.3125C5.7592 23.0625 4.5 21.8033 4.5 20.25V10.125M4.5 10.125H19.5L23.0625 4.5M4.5 10.125L0.9375 4.5M10.125 4.5L12 6.375M12 6.375L13.875 4.5M12 6.375V0.9375" stroke="white" stroke-width="1.8" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M10.125 13.875H13.875" stroke="#FE7300" stroke-width="1.8" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
              </g>
              <defs>
              <clipPath id="clip0_678_17386">
              <rect width="24" height="24" fill="white"/>
              </clipPath>
              </defs>
            </svg>
          </div>
          <p>Expert packing and unpacking services</p>
        </div>
        <div class="row">
          <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
              <path d="M19.5 23.0625H15.75C14.7145 23.0625 13.875 22.223 13.875 21.1875V17.4375C13.875 16.402 14.7145 15.5625 15.75 15.5625H19.5C20.5355 15.5625 21.375 16.402 21.375 17.4375V21.1875C21.375 22.223 20.5355 23.0625 19.5 23.0625Z" stroke="#FE7300" stroke-width="1.8" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M17.625 11.8125V2.8125C17.625 1.77698 16.7855 0.9375 15.75 0.9375H4.5C3.46448 0.9375 2.625 1.77698 2.625 2.8125V21.1875C2.625 22.223 3.46448 23.0625 4.5 23.0625H10.4462" stroke="white" stroke-width="1.8" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M3.375 1.31238L9.08864 4.16917C9.40008 4.3249 9.66201 4.56428 9.84507 4.86048C10.0281 5.15669 10.1251 5.49801 10.1251 5.84622V18.1536C10.1251 18.5018 10.0281 18.8431 9.84507 19.1393C9.66201 19.4355 9.40008 19.6749 9.08864 19.8306L3.375 22.6875" stroke="white" stroke-width="1.8" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M17.625 17.4375V15.5625" stroke="#FE7300" stroke-width="1.8" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
          <p>Customized moving solutions</p>
        </div>
        <div class="google">
          <img src="<?php echo get_template_directory_uri(); ?>/img/google-2.svg" alt="Google.com">
        </div>
      </div>
    </div>

    <div class="quiz-wrap-step step-price">
      <b class="title mb50"><?php the_field('quiz_3_5_title'); ?></b>
      <div class="left item-toggle">
        <?php $i = 1;  if (have_rows('quiz_1_5')) : while(have_rows('quiz_3_5')) : the_row(); ?>
        <div class="question toggle <?php if ($i == 1) { echo 'active terms checked'; } ?>">
          <b class="q-title">
            <?php the_sub_field('title'); ?>
            <div class="icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M18.5303 8.96967C18.2374 8.67678 17.7626 8.67678 17.4697 8.96967L12 14.4393L6.53033 8.96967C6.23744 8.67678 5.76256 8.67678 5.46967 8.96967C5.17678 9.26256 5.17678 9.73744 5.46967 10.0303L11.4697 16.0303C11.7626 16.3232 12.2374 16.3232 12.5303 16.0303L18.5303 10.0303C18.8232 9.73744 18.8232 9.26256 18.5303 8.96967Z" fill="white"/>
              </svg>
            </div>
          </b>
          <p class="qanswer"><?php the_sub_field('answer'); ?></p>
        </div>
        <?php $i++; endwhile; endif; ?>
      </div>
      
    </div>

    <div class="quiz-wrap-step result-step ">
      <b class="title mb50"><?php the_field('quiz_3_6_title'); ?></b>
      <div class="left">
        <div class="summary">
          <b class="title">Summary</b>
          <div class="summary-row">
            <div class="summary-from row-item">
              <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                  <path d="M13.6177 21.367C13.1841 21.773 12.6044 22 12.0011 22C11.3978 22 10.8182 21.773 10.3845 21.367C6.41302 17.626 1.09076 13.4469 3.68627 7.37966C5.08963 4.09916 8.45834 2 12.0011 2C15.5439 2 18.9126 4.09916 20.316 7.37966C22.9082 13.4393 17.599 17.6389 13.6177 21.367Z" stroke="#FE7300" stroke-width="1.5"/>
                  <path d="M15.5 11C15.5 12.933 13.933 14.5 12 14.5C10.067 14.5 8.5 12.933 8.5 11C8.5 9.067 10.067 7.5 12 7.5C13.933 7.5 15.5 9.067 15.5 11Z" stroke="#FE7300" stroke-width="1.5"/>
                </svg>
              </div>
              <div class="row-meta">
                <p>Origin</p>
                <b>2 River Terrace, 10J, New York, NY 10282</b>
              </div>
            </div>
            <div class="summary-date row-item">
              <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                  <path d="M18 2V4M6 2V4" stroke="#FE7300" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M11.9955 13H12.0045M11.9955 17H12.0045M15.991 13H16M8 13H8.00897M8 17H8.00897" stroke="#FE7300" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M3.5 8H20.5" stroke="#FE7300" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M2.5 12.2432C2.5 7.88594 2.5 5.70728 3.75212 4.35364C5.00424 3 7.01949 3 11.05 3H12.95C16.9805 3 18.9958 3 20.2479 4.35364C21.5 5.70728 21.5 7.88594 21.5 12.2432V12.7568C21.5 17.1141 21.5 19.2927 20.2479 20.6464C18.9958 22 16.9805 22 12.95 22H11.05C7.01949 22 5.00424 22 3.75212 20.6464C2.5 19.2927 2.5 17.1141 2.5 12.7568V12.2432Z" stroke="#FE7300" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M3 8H21" stroke="#FE7300" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </div>
              <div class="row-meta">
                <p>Move date</p>
                <b class="main-date">January 17th, 2024</b>
              </div>
            </div>
            <div class="summary-to row-item">
              <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                  <path d="M4 7V21" stroke="#FE7300" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M11.7576 3.90865C8.45236 2.22497 5.85125 3.21144 4.55426 4.2192C4.32048 4.40085 4.20358 4.49167 4.10179 4.69967C4 4.90767 4 5.10138 4 5.4888V14.7319C4.9697 13.6342 7.87879 11.9328 11.7576 13.9086C15.224 15.6744 18.1741 14.9424 19.5697 14.1795C19.7633 14.0737 19.8601 14.0207 19.9301 13.9028C20 13.7849 20 13.6569 20 13.4009V5.87389C20 5.04538 20 4.63113 19.8027 4.48106C19.6053 4.33099 19.1436 4.459 18.2202 4.71504C16.64 5.15319 14.3423 5.22532 11.7576 3.90865Z" stroke="#FE7300" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </div>
              <div class="row-meta">
                <p>Destination</p>
                <b>8 Spruce St, 41F, New York, NY 10038</b>
              </div>
            </div>
            <div class="summary-type row-item">
              <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                  <path d="M14.5 12C14.5 13.3807 13.3807 14.5 12 14.5C10.6193 14.5 9.5 13.3807 9.5 12C9.5 10.6193 10.6193 9.5 12 9.5C13.3807 9.5 14.5 10.6193 14.5 12Z" stroke="#FE7300" stroke-width="1.5"/>
                  <path d="M19 11.1415C18.6749 11.0944 18.341 11.0586 18 11.0347M6 12.9653C5.65897 12.9415 5.32511 12.9056 5 12.8585" stroke="#FE7300" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M12 19.5C10.6675 20.1224 8.91707 20.5 7 20.5C5.93408 20.5 4.91969 20.3833 4 20.1726C2.49957 19.8289 2 18.9264 2 17.386V6.61397C2 5.62914 3.04003 4.95273 4 5.1726C4.91969 5.38325 5.93408 5.5 7 5.5C8.91707 5.5 10.6675 5.12236 12 4.5C13.3325 3.87764 15.0829 3.5 17 3.5C18.0659 3.5 19.0803 3.61675 20 3.8274C21.5817 4.18968 22 5.12036 22 6.61397V17.386C22 18.3709 20.96 19.0473 20 18.8274C19.0803 18.6167 18.0659 18.5 17 18.5C15.0829 18.5 13.3325 18.8776 12 19.5Z" stroke="#FE7300" stroke-width="1.5"/>
                </svg>
              </div>
              <div class="row-meta">
                <p>Rate type</p>
                <b>Hourly</b>
              </div>
            </div>
            <div class="summary-stop row-item">
              <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                  <path d="M9 1V17M17 9H1" stroke="#FE7300" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </div>
              <div class="row-meta">
                <p>Stop point</p>
                <b>8 Spruce St, 41F, New York, NY 10038</b>
              </div>
            </div>
          </div>
          
        </div>
        <div class="main-form form">
          <b class="title">Payment information</b>
          <?php echo do_shortcode('[contact-form-7 id="9da0b08" title="Quiz form - stripe"]'); ?>
        </div>
      </div>
      <div class="right">
        <b>Quote summary</b>
        <div class="row hourly-rate">
          <span>Hourly rate</span>
          <p>$220.00</p>
        </div>
        <div class="row min-cost-rate">
          <span>Minimum cost</span>
          <p>$660.00</p>
        </div>
        <div class="row coupon" style="display: none">
          <span>Coupon</span>
          <p class="coupon-amount">- $50.00</p>
        </div>
        <div class="row">
          <span>Certificate of insurance</span>
          <p>Free of charge</p>
        </div>
        <div class="auth">
          <div class="row">
            <b>Authorization amount</b>
            <strong>$660.00</strong>
          </div>
          <p>
            Elate will authorize your card for this amount 48 hours before moving day. If your move takes longer than the minimum hours, you will be billed for the difference. Coupon(s) will be applied to the final price.
          </p>
          <div class="consumed">
            <input name="consumed" id="consumed-3" type="checkbox" style="display: none" checked>
            <label for="consumed-3">
              I consent to receive SMS and email communications for updates, promotions, and relevant information from Elate Moving.
            </label>
          </div>
        </div>
        <div class="cancel">
          <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
              <path d="M8.37563 3C8.16172 3.07993 7.95135 3.16712 7.74481 3.26126M20.7176 16.3011C20.8198 16.0799 20.914 15.8542 20.9999 15.6245M18.4987 19.3647C18.6704 19.2044 18.8364 19.0381 18.9962 18.866M15.2688 21.3723C15.4629 21.2991 15.654 21.22 15.842 21.1351M12.1559 21.9939C11.925 22.0019 11.6925 22.0019 11.4615 21.9939M7.7872 21.1404C7.968 21.2217 8.15172 21.2978 8.33814 21.3683M4.67244 18.9208C4.80913 19.0657 4.95018 19.2064 5.09539 19.3428M2.63259 15.6645C2.70747 15.8622 2.78856 16.0569 2.87561 16.2483M2.00486 12.5053C1.99837 12.2972 1.99839 12.0878 2.00486 11.8794M2.62534 8.73714C2.6989 8.54165 2.77853 8.34913 2.86399 8.1598M4.65591 5.47923C4.80057 5.32514 4.95014 5.17573 5.10439 5.03124" stroke="#FE7300" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M13.5 12C13.5 12.8284 12.8284 13.5 12 13.5C11.1716 13.5 10.5 12.8284 10.5 12C10.5 11.1716 11.1716 10.5 12 10.5M13.5 12C13.5 11.1716 12.8284 10.5 12 10.5M13.5 12H16M12 10.5V6" stroke="#FE7300" stroke-width="1.5" stroke-linecap="round"/>
              <path d="M22 12C22 6.47715 17.5228 2 12 2" stroke="#FE7300" stroke-width="1.5" stroke-linecap="round"/>
            </svg>
          </div>
          <b>Free cancellation</b>
          <p>
            You can cancel free of charge until 11:59 PM on Jan 14 (48hrs) before move date.
          </p>
        </div>
        <div class="pay-img">
          <img src="/wp-content/themes/main/img/icons/payments.svg" alt="Payments">
        </div>
      </div>
      <div class="success" style="display: none">
        <b>Your payment was successful!</b>
        <p>We have received your application and will contact you as soon as possible</p>
      </div>
    </div>

    <!-- <div class="quiz-wrap-step step-checkboxes add-services">
      <b class="title title-sub"><?php the_field('1_6_title'); ?></b>
      <p class="subtitle"><?php the_field('1_6_subtitle'); ?></p>
      <?php $id_input = 1; if (have_rows('quiz_1_6_row')) : while(have_rows('quiz_1_6_row')) : the_row(); ?>
      <div class="item">
       <input name="quiz_1_6_row" id="<?php echo 'quz_1_6_'.$id_input; ?>" value="<?php the_sub_field('name'); ?>" type="checkbox" style="display: none">
       <label for="<?php echo 'quz_1_6_'.$id_input; ?>">
        <?php the_sub_field('name'); ?>
       </label>
      </div>
      <?php $id_input++; endwhile; endif; ?>
    </div> -->

    
  </div>
  <div class="quiz-wrap 4">
    <div class="quiz-wrap-step step-features">
      <b class="title title-sub"><?php the_field('4_2_title'); ?></b>
      <p class="subtitle"><?php the_field('4_2_subtitle'); ?></p>
      <?php if (have_rows('4_quiz_features_step_2')) : while(have_rows('4_quiz_features_step_2')) : the_row(); ?>
      <div class="item">
        <div class="front">
          <img src="<?php the_sub_field('icon'); ?>" alt="<?php the_sub_field('name'); ?>">
          <b><?php the_sub_field('name'); ?></b>
        </div>
        <div class="back">
          <p><?php the_sub_field('text'); ?></p>
        </div>
      </div>
      <?php endwhile; endif; ?>
    </div>

    <div class="quiz-wrap-step step-checkboxes items-to-move">
      <b class="title title-sub"><?php the_field('4_3_title'); ?></b>
      <p class="subtitle"><?php the_field('4_3_subtitle'); ?></p>
      <?php $id_input = 1; if (have_rows('quiz_4_3_row')) : while(have_rows('quiz_4_3_row')) : the_row(); ?>
      <div class="item">
       <input name="quiz_4_3_row" id="<?php echo 'quz_4_3_'.$id_input; ?>" value="<?php the_sub_field('name'); ?>" type="checkbox" style="display: none">
       <label for="<?php echo 'quz_4_3_'.$id_input; ?>">
        <?php the_sub_field('name'); ?>
       </label>
      </div>
      <?php $id_input++; endwhile; endif; ?>
    </div>

    <div class="quiz-wrap-step step-address">
      <b class="title">Tell us the starting and ending locations of your move</b>
      <p class="subtitle">By providing the full addresses of your move, we can present you with the moving options available for your journey.</p>
      <div class="row">
        <div class="input start">
          <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
              <path d="M13.6177 21.367C13.1841 21.773 12.6044 22 12.0011 22C11.3978 22 10.8182 21.773 10.3845 21.367C6.41302 17.626 1.09076 13.4469 3.68627 7.37966C5.08963 4.09916 8.45834 2 12.0011 2C15.5439 2 18.9126 4.09916 20.316 7.37966C22.9082 13.4393 17.599 17.6389 13.6177 21.367Z" stroke="#FE7300" stroke-width="1.5"/>
              <path d="M15.5 11C15.5 12.933 13.933 14.5 12 14.5C10.067 14.5 8.5 12.933 8.5 11C8.5 9.067 10.067 7.5 12 7.5C13.933 7.5 15.5 9.067 15.5 11Z" stroke="#FE7300" stroke-width="1.5"/>
            </svg>
          </div>
          <input class="input-from" placeholder="Moving From" type="text" name="Moving_from" autocomplete="off">
          <p>Moving From</p>
        </div>
        <div class="input stop noadded">
          <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
              <path d="M12 4V20M20 12H4" stroke="#FE7300" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
          <input class="input-from" placeholder="Add Stop" type="text" name="add_stop" autocomplete="off">
          <p>Add Stop</p>
        </div>
        <div class="input end">
          <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
              <path d="M4 7V21" stroke="#FE7300" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M11.7576 3.90865C8.45236 2.22497 5.85125 3.21144 4.55426 4.2192C4.32048 4.40085 4.20358 4.49167 4.10179 4.69967C4 4.90767 4 5.10138 4 5.4888V14.7319C4.9697 13.6342 7.87879 11.9328 11.7576 13.9086C15.224 15.6744 18.1741 14.9424 19.5697 14.1795C19.7633 14.0737 19.8601 14.0207 19.9301 13.9028C20 13.7849 20 13.6569 20 13.4009V5.87389C20 5.04538 20 4.63113 19.8027 4.48106C19.6053 4.33099 19.1436 4.459 18.2202 4.71504C16.64 5.15319 14.3423 5.22532 11.7576 3.90865Z" stroke="#FE7300" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
          <input class="input-to" placeholder="Moving To" type="text" name="Moving_to" autocomplete="off">
          <p>Moving To</p>
        </div>
      </div>
      
    </div>

   

    <div class="quiz-wrap-step step-price step-date crew">
      <b class="title title-sub">Onsite estimate</b>
      <p class="subtitle" style="max-width: 700px">With our White Glove Services, we offer personalized onsite estimates free of charge to ensure accuracy and meet your specific needs</p>
      <div class="left">
        <?php echo do_shortcode('[contact-form-7 id="c15e5bb" title="date form (unsubmit)"]'); ?>
        <b class="title mt50">Questions?</b>
        <div class="item-toggle">
          <?php  if (have_rows('4_questions')) : while(have_rows('4_questions')) : the_row(); ?>
          <div class="question toggle">
            <b class="q-title">
              <?php the_sub_field('title'); ?>
              <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M18.5303 8.96967C18.2374 8.67678 17.7626 8.67678 17.4697 8.96967L12 14.4393L6.53033 8.96967C6.23744 8.67678 5.76256 8.67678 5.46967 8.96967C5.17678 9.26256 5.17678 9.73744 5.46967 10.0303L11.4697 16.0303C11.7626 16.3232 12.2374 16.3232 12.5303 16.0303L18.5303 10.0303C18.8232 9.73744 18.8232 9.26256 18.5303 8.96967Z" fill="white"/>
                </svg>
              </div>
            </b>
            <p class="qanswer"><?php the_sub_field('answer'); ?></p>
          </div>
          <?php endwhile; endif; ?>
        </div>
      </div>
      <div class="right">
        <b>What is Elate Moving?</b>
        <div class="row">
          <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
              <g clip-path="url(#clip0_678_17373)">
                <path d="M8.10092 11.6679C8.33614 12.1292 8.15286 12.6938 7.69161 12.929C7.23027 13.1642 6.66576 12.9809 6.43054 12.5197L5.83791 11.3575C5.19919 10.1988 4.57862 9.74705 3.62749 9.74705C2.53062 9.74705 1.87512 10.6304 1.87512 11.4845V15.6865C2.25781 16.393 3.21396 18.4935 3.23449 21.8748C3.23552 22.0477 3.44805 22.125 3.65824 22.125H4.66913C4.80479 22.125 4.92015 22.0076 4.92202 21.8682L4.92005 16.5942C4.91987 16.0764 5.33944 15.6565 5.85722 15.6563H5.85755C6.37518 15.6563 6.79485 16.0758 6.79504 16.5935C6.79504 16.5935 6.79701 21.8752 6.79696 21.8772C6.79016 23.0477 5.83566 24 4.66913 24H3.65824C2.35512 24 1.36691 23.0913 1.35955 21.8862C1.33841 18.403 0.2002 16.5267 0.152388 16.4496C0.0489822 16.2953 0.000185719 16.1234 0.000185719 15.9375V11.4844C-0.0202516 9.53297 1.64886 7.82936 3.62753 7.87206C5.81086 7.87201 6.87651 9.35316 7.48822 10.4673C7.49282 10.4756 8.10092 11.6679 8.10092 11.6679ZM23.0086 8.99457C22.3271 8.27068 21.391 7.87201 20.3727 7.87201C18.1894 7.87201 17.1237 9.35316 16.512 10.4672C16.5074 10.4756 15.8993 11.6679 15.8993 11.6679C15.6641 12.1291 15.8474 12.6937 16.3086 12.9289C16.7699 13.1642 17.3345 12.9809 17.5697 12.5196L18.1623 11.3574C18.801 10.1988 19.4216 9.747 20.3727 9.747C21.4696 9.747 22.1251 10.6304 22.1251 11.4844V15.6865C21.7424 16.393 20.7863 18.4935 20.7657 21.8748C20.7647 22.0477 20.5522 22.125 20.342 22.125H19.3311C19.1954 22.125 19.0801 22.0076 19.0782 21.8681L19.0802 16.5941C19.0804 16.0764 18.6608 15.6565 18.143 15.6563H18.1427C17.6251 15.6563 17.2054 16.0758 17.2052 16.5935C17.2052 16.5935 17.2032 21.8752 17.2033 21.8772C17.2101 23.0477 18.1646 24 19.3311 24H20.342C21.6452 24 22.6334 23.0912 22.6407 21.8862C22.6619 18.4031 23.8 16.5267 23.8479 16.4496C23.9513 16.2954 24.0001 16.1235 24.0001 15.9375V11.4845C24 10.5712 23.6386 9.6637 23.0086 8.99457ZM1.21893 3.1876C1.21893 1.43003 2.64884 0.00012207 4.4064 0.00012207C8.63501 0.175246 8.63379 6.2006 4.40635 6.37507C2.64884 6.37507 1.21893 4.94516 1.21893 3.1876ZM3.09391 3.1876C3.09391 3.91129 3.6827 4.50009 4.4064 4.50009C6.14761 4.42799 6.14709 1.94692 4.4064 1.87511C3.6827 1.87511 3.09391 2.4639 3.09391 3.1876ZM16.3126 3.1876C16.3126 1.43003 17.7425 0.00012207 19.5 0.00012207C23.7286 0.175246 23.7274 6.2006 19.5 6.37507C17.7425 6.37507 16.3126 4.94516 16.3126 3.1876ZM18.1875 3.1876C18.1875 3.91129 18.7763 4.50009 19.5 4.50009C21.2412 4.42799 21.2407 1.94692 19.5 1.87511C18.7763 1.87511 18.1875 2.4639 18.1875 3.1876Z" fill="white"/>
                <path d="M13.1639 18.2812H10.8361C9.66857 18.2812 8.71875 17.3314 8.71875 16.1639V14.4923C8.71875 13.3248 9.66857 12.375 10.8361 12.375H13.1639C14.3314 12.375 15.2812 13.3248 15.2812 14.4923V16.1639C15.2812 17.3314 14.3314 18.2812 13.1639 18.2812ZM10.8361 14.25C10.7718 14.2501 10.7102 14.2756 10.6648 14.321C10.6194 14.3665 10.5938 14.4281 10.5937 14.4923V16.1639C10.5938 16.2281 10.6194 16.2897 10.6648 16.3352C10.7102 16.3806 10.7718 16.4061 10.8361 16.4062H13.1639C13.2281 16.4061 13.2897 16.3806 13.3352 16.3352C13.3806 16.2897 13.4061 16.2281 13.4062 16.1639V14.4923C13.4061 14.4281 13.3806 14.3665 13.3352 14.321C13.2897 14.2756 13.2281 14.2501 13.1639 14.25H10.8361Z" fill="#FE7300"/>
              </g>
              <defs>
                <clipPath id="clip0_678_17373">
                  <rect width="24" height="24" fill="white"/>
                </clipPath>
              </defs>
            </svg>
          </div>
          <p>Professional and Experienced Staff</p>
        </div>
        <div class="row">
          <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <g clip-path="url(#clip0_678_17379)">
                  <path d="M10.2587 23.0625H3.75C2.1967 23.0625 0.9375 21.8033 0.9375 20.25V3.75C0.9375 2.1967 2.1967 0.9375 3.75 0.9375H14.625C16.1783 0.9375 17.4375 2.1967 17.4375 3.75V6.2543" stroke="white" stroke-width="1.8" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M6.5625 19.3125C7.59803 19.3125 8.4375 18.473 8.4375 17.4375C8.4375 16.402 7.59803 15.5625 6.5625 15.5625C5.52697 15.5625 4.6875 16.402 4.6875 17.4375C4.6875 18.473 5.52697 19.3125 6.5625 19.3125Z" stroke="#FE7300" stroke-width="1.8" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M10.3125 4.6875H13.6875M4.6875 8.25H13.6875M4.6875 11.8125H11.8125M16.5 19.3125L15.5928 13.1641C15.5726 13.027 15.5624 12.8886 15.5625 12.75C15.5625 11.1967 16.8217 9.9375 18.375 9.9375C19.9283 9.9375 21.1875 11.1967 21.1875 12.75C21.1875 12.8907 21.1772 13.029 21.1572 13.1641L20.25 19.3125H21.1875C22.223 19.3125 23.0625 20.152 23.0625 21.1875C23.0625 22.223 22.223 23.0625 21.1875 23.0625H15.5625C14.527 23.0625 13.6875 22.223 13.6875 21.1875C13.6875 20.152 14.527 19.3125 15.5625 19.3125H16.5Z" stroke="white" stroke-width="1.8" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                </g>
                <defs>
                  <clipPath id="clip0_678_17379">
                    <rect width="24" height="24" fill="white"/>
                  </clipPath>
                </defs>
            </svg>
          </div>
          <p>Fully insured and licensed</p>
        </div>
        <div class="row">
          <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
              <g clip-path="url(#clip0_678_17386)">
              <path d="M19.5 13.875V20.25C19.5 21.8033 18.2408 23.0625 16.6875 23.0625H7.3125C5.7592 23.0625 4.5 21.8033 4.5 20.25V10.125M4.5 10.125H19.5L23.0625 4.5M4.5 10.125L0.9375 4.5M10.125 4.5L12 6.375M12 6.375L13.875 4.5M12 6.375V0.9375" stroke="white" stroke-width="1.8" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M10.125 13.875H13.875" stroke="#FE7300" stroke-width="1.8" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
              </g>
              <defs>
              <clipPath id="clip0_678_17386">
              <rect width="24" height="24" fill="white"/>
              </clipPath>
              </defs>
            </svg>
          </div>
          <p>Expert packing and unpacking services</p>
        </div>
        <div class="row">
          <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
              <path d="M19.5 23.0625H15.75C14.7145 23.0625 13.875 22.223 13.875 21.1875V17.4375C13.875 16.402 14.7145 15.5625 15.75 15.5625H19.5C20.5355 15.5625 21.375 16.402 21.375 17.4375V21.1875C21.375 22.223 20.5355 23.0625 19.5 23.0625Z" stroke="#FE7300" stroke-width="1.8" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M17.625 11.8125V2.8125C17.625 1.77698 16.7855 0.9375 15.75 0.9375H4.5C3.46448 0.9375 2.625 1.77698 2.625 2.8125V21.1875C2.625 22.223 3.46448 23.0625 4.5 23.0625H10.4462" stroke="white" stroke-width="1.8" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M3.375 1.31238L9.08864 4.16917C9.40008 4.3249 9.66201 4.56428 9.84507 4.86048C10.0281 5.15669 10.1251 5.49801 10.1251 5.84622V18.1536C10.1251 18.5018 10.0281 18.8431 9.84507 19.1393C9.66201 19.4355 9.40008 19.6749 9.08864 19.8306L3.375 22.6875" stroke="white" stroke-width="1.8" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M17.625 17.4375V15.5625" stroke="#FE7300" stroke-width="1.8" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
          <p>Customized moving solutions</p>
        </div>
        <div class="google">
          <img src="<?php echo get_template_directory_uri(); ?>/img/google-2.svg" alt="Google.com">
        </div>
      </div>
    </div>
   
    
  </div>
  <div class="quiz-steps" style="display: none">
    <div class="btns">
      <div class="button back ">
        Back
      </div>
      <div class="button button-accent next ">
        Next
      </div>
      <div class="button button-accent subm" style="display: none">
        Submit
      </div>
    </div>
    <div class="steps">
      <div class="steps-count">
        Step <span class="now">1</span> / <span class="all">11</span>
      </div>
      <div class="steps-list">
       
      </div>
    </div>
  </div>
</section>

<div class="coupons-hidden container" style="display: none">
  <?php if (have_rows('coupons')) : while(have_rows('coupons')) : the_row(); ?>
  <span data-amount="<?php the_sub_field('amount'); ?>"><?php the_sub_field('name'); ?></span>
  <?php endwhile; endif; ?>
</div>
<div class="hidden-quiz-form container" style="display: none">
  <?php echo do_shortcode('[contact-form-7 id="3019a14" title="Quiz - New Form Submission"]'); ?>
  <?php //echo do_shortcode('[contact-form-7 id="8bd5ad3" title="Quiz - get quote last step submit"]'); ?>
</div>

<?php
get_footer();
?>


<!--Microdata organisation-->
<div itemscope itemtype="http://schema.org/Organization">
  <meta itemprop="name" content="Elate Moving | Professional Moving Services">
	<!-- <meta itemprop="priceRange" content="от 60 000 ₽"> -->
	<meta itemprop="description" content="Elate Moving is a professional moving and storage company with the most trustworthy, dedicated, expert and white glove NYC movers.">
  <meta itemprop="telephone" content="<?php the_field('phone', 'options'); ?>">
	<meta itemprop="email" content="<?php the_field('email', 'options'); ?>">
  <link itemprop="url" href="<?php echo get_permalink(); ?>">
	<link itemprop="logo image" href="<?php echo get_template_directory_uri(); ?>/img/logo.svg">
  <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
    <meta itemprop="addressCountry" content="US">
    <meta itemprop="addressLocality" content="New York">
    <meta itemprop="streetAddress" content="305 Broadway Floor 7 New York, NY 10007">
  </div>
</div>
