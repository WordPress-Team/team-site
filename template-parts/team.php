<div class="parent">
  <h1 class="team-title"><?php the_field('team_title') ?></h1>
<div class="card">
  <div class="content">
    
    <label class="modal-open modal-label" for="modal-open-one">
           <img class="member1" src="<?php the_field('member_circle_photo_1') ?>" alt="">
     </label>
    <h1 class="member"><?php the_field('circle_name_1') ?></h1>
    <input type="radio" name="modal" value="open" id="modal-open-one" class="modal-radio" />
    <div class="modal">
      <label class="modal-label overlay">
                <input type="radio" name="modal" value="close" class="modal-radio"/>
            </label>
      <div class="content">
        <div class="top violet-bkg">
          <div class="profile-pic violet-bkg">
            <img class="picture" src="<?php the_field('open_modal_photo_1')?>" alt="">
          </div>
          <h2 class="modal-name violet-gradient"><?php the_field('open_modal_full_name_1') ?><span class="pronouns">(<?php the_field('member_pronouns_1') ?>)</span></h2>
          <h4 class="kdg-role"><?php the_field('nepts_role') ?></h4>
          <label class="modal-label close-btn">
                    <input type="radio" name="modal" value="close" class="modal-radio"/>
                </label>
        </div> <!-- end of top sec -->
        <p class="member-about">
          <?php the_field('open_modal_bio_1') ?>
        </p>
        <ul class="profile-links">
          
          <li class="link">
            <a class="link-icon" href="<?php the_field('linkedin_link_1') ?>" target="_blank"><i class="fa fa-linkedin fa-2x"></i></a>
          </li>
          
          <li class="link">
            <a class="link-icon" href="<?php the_field('portfolio_link_1') ?>" target="_blank">Portfolio</a>
          </li>
          
          <li class="link">
            <a class="link-icon" href="<?php the_field('github_link_1') ?>" target="_blank"><i class="fab fa-github fa-2x"></i></a>
          </li>       
          
        </ul> <!-- end of links ul sec -->
        
        <!-- <img class="profile-logo" src="" alt="">
        
        <ul class="profile-projects">
           
           <li class="project">
              <figure>
                <img src="" alt="">
                <figcaption>
                    <button class="view">
                        <a class="viewbtn" href="" target="_blank">View Site</a>
                    </button>
                </figcaption>
            </figure>
           </li>
             
           <li class="project">
              <figure>
                <img src="" alt="">
                <figcaption>
                    <button class="view">
                        <a class="viewbtn" href="" target="_blank">View Site</a>
                    </button>
                </figcaption>
            </figure>
           </li>
          </ul> end of projects ul sec -->
      </div> <!-- end of content sec -->
    </div>
  </div> <!-- end of main content sec -->
</div> <!-- end of card -->
<div class="card">
  <div class="content">
    
    <label class="modal-open modal-label" for="modal-open-two">
      <img class="member2" src="<?php the_field('member_circle_photo_2') ?>" alt="">
     </label>
    <h1 class="member"><?php the_field('circle_name_2') ?></h1>
    <input type="radio" name="modal" value="open" id="modal-open-two" class="modal-radio" />
    <div class="modal">
      <label class="modal-label overlay">
                <input type="radio" name="modal" value="close" class="modal-radio"/>
            </label>
      <div class="content">
        <div class="top violet-bkg">
          <div class="profile-pic violet-bkg">
            <img class="picture" src="<?php the_field('open_modal_photo_2')?>" alt="">
          </div>
          <h2 class="modal-name violet-gradient"><?php the_field('open_modal_full_name_2') ?><span class="pronouns">(<?php the_field('member_pronouns_2') ?>)</span></h2>
          <h4 class="kdg-role"><?php the_field('danus_role') ?></h4>
          <label class="modal-label close-btn">
                    <input type="radio" name="modal" value="close" class="modal-radio"/>
                </label>
        </div> <!-- end of top sec -->
        <p class="member-about"><?php the_field('open_modal_bio_2') ?></p>
        <ul class="profile-links">
          
        <li class="link">
            <a class="link-icon" href="<?php the_field('linkedin_link_2') ?>" target="_blank"><i class="fa fa-linkedin fa-2x"></i></a>
          </li>

          <li class="link">
            <a class="link-icon" href="<?php the_field('portfolio_link_2') ?>" target="_blank">Portfolio</a>
          </li>
          
          <li class="link">
            <a class="link-icon" href="<?php the_field('github_link_2') ?>" target="_blank"><i class="fab fa-github fa-2x"></i></a>
          </li>
          
        </ul> <!-- end of links ul sec -->
        
        <img class="profile-logo" src="<?php the_field('member_logo_2') ?>" alt="">
        
        <ul class="profile-projects">
           
           <li class="project">
              <figure>
                <img src="<?php the_field('member_project-a_img_2') ?>" alt="">
                <figcaption>
                    <button class="view">
                        <a class="viewbtn" href="<?php the_field('member_project-a_link_2') ?>" target="_blank">View Site</a>
                    </button>
                </figcaption>
            </figure>
           </li>
             
           <li class="project">
              <figure>
                <img src="<?php the_field('member_project-b_img_2') ?>" alt="">
                <figcaption>
                    <button class="view">
                        <a class="viewbtn" href="<?php the_field('member_project-b_link_2') ?>" target="_blank">View Site</a>
                    </button>
                </figcaption>
            </figure>
           </li>
          </ul> <!-- end of projects ul sec -->
      </div> <!-- end of content sec -->
    </div>
  </div> <!-- end of main content sec -->
</div> <!-- end of card -->
<div class="card">
  <div class="content">
    
    <label class="modal-open modal-label" for="modal-open-three">
      <img class="member3" src="<?php the_field('member_circle_photo_3') ?>" alt="">
     </label>
    <h1 class="member"><?php the_field('circle_name_3') ?></h1>
    <input type="radio" name="modal" value="open" id="modal-open-three" class="modal-radio" />
    <div class="modal">
      <label class="modal-label overlay">
                <input type="radio" name="modal" value="close" class="modal-radio"/>
            </label>
      <div class="content">
        <div class="top aqua-bkg">
          <div class="profile-pic aqua-bkg">
            <img class="picture" src="<?php the_field('open_modal_photo_3')?>" alt="">
          </div>
          <h2 class="modal-name aqua-gradient"><?php the_field('open_modal_full_name_3') ?><span class="pronouns">(<?php the_field('member_pronouns_3') ?>)</span></h2>
          <h4 class="kdg-role"><?php the_field('graces_role') ?></h4>
          <label class="modal-label close-btn">
                    <input type="radio" name="modal" value="close" class="modal-radio"/>
                </label>
        </div> <!-- end of top sec -->
        <p class="member-about"><?php the_field('open_modal_bio_3') ?></p>
        <ul class="profile-links">
          
        <li class="link">
            <a class="link-icon" href="<?php the_field('linkedin_link_3') ?>" target="_blank"><i class="fa fa-linkedin fa-2x"></i></a>
          </li>
                    
          <li class="link">
            <a class="link-icon" href="<?php the_field('portfolio_link_3') ?>" target="_blank">Portfolio</a>
          </li>
          
          <li class="link">
            <a class="link-icon" href="<?php the_field('github_link_3') ?>" target="_blank"><i class="fab fa-github fa-2x"></i></a>
          </li>
          
        </ul> <!-- end of links ul sec -->
        
        <img class="profile-logo" src="<?php the_field('member_logo_3') ?>" alt="">
        
        <ul class="profile-projects">
           
           <li class="project">
              <figure>
                <img src="<?php the_field('member_project-a_img_3') ?>" alt="">
                <figcaption>
                    <button class="view">
                        <a class="viewbtn" href="<?php the_field('member_project-a_link_3') ?>" target="_blank">View Site</a>
                    </button>
                </figcaption>
            </figure>
           </li>
             
           <li class="project">
              <figure>
                <img src="<?php the_field('member_project-b_img_3') ?>" alt="">
                <figcaption>
                    <button class="view">
                        <a class="viewbtn" href="<?php the_field('member_project-b_link_3') ?>" target="_blank">View Site</a>
                    </button>
                </figcaption>
            </figure>
           </li>
          </ul> <!-- end of projects ul sec -->
      </div> <!-- end of content sec -->
    </div>
  </div> <!-- end of main content sec -->
</div> <!-- end of card -->
<div class="card">
  <div class="content">
    
    <label class="modal-open modal-label" for="modal-open-four">
      <img class="member4" src="<?php the_field('member_circle_photo_4') ?>" alt="">
     </label>
    <h1 class="member"><?php the_field('circle_name_4') ?></h1>
    <input type="radio" name="modal" value="open" id="modal-open-four" class="modal-radio" />
    <div class="modal">
      <label class="modal-label overlay">
                <input type="radio" name="modal" value="close" class="modal-radio"/>
            </label>
      <div class="content">
        <div class="top aqua-bkg">
          <div class="profile-pic aqua-bkg">
            <img class="picture" src="<?php the_field('open_modal_photo_4')?>" alt="">
          </div>
          <h2 class="modal-name aqua-gradient"><?php the_field('open_modal_full_name_4') ?><span class="pronouns">(<?php the_field('member_pronouns_4') ?>)</span></h2>
          <h4 class="kdg-role"><?php the_field('kyles_role') ?></h4>
          <label class="modal-label close-btn">
                    <input type="radio" name="modal" value="close" class="modal-radio"/>
                </label>
        </div> <!-- end of top sec -->
        <p class="member-about"><?php the_field('open_modal_bio_4') ?></p>
        <ul class="profile-links">
          
        <li class="link">
            <a class="link-icon" href="<?php the_field('linkedin_link_4') ?>" target="_blank"><i class="fa fa-linkedin fa-2x"></i></a>
          </li>
          
          <li class="link">
            <a class="link-icon" href="<?php the_field('portfolio_link_4') ?>" target="_blank">Portfolio</a>
          </li>

          <li class="link">
            <a class="link-icon" href="<?php the_field('github_link_4') ?>" target="_blank"><i class="fab fa-github fa-2x"></i></a>
          </li>
          
          
        </ul> <!-- end of links ul sec -->
        
        <!-- <img class="profile-logo" src="<?php the_field('member_logo_4') ?>" alt=""> -->
        
        <ul class="profile-projects">
           
           <li class="project">
              <figure>
                <img src="<?php the_field('member_project-a_img_4') ?>" alt="">
                <figcaption>
                    <button class="view">
                        <a class="viewbtn" href="<?php the_field('member_project-a_link_4') ?>" target="_blank">View Site</a>
                    </button>
                </figcaption>
            </figure>
           </li>
             
           <li class="project">
              <figure>
                <img src="<?php the_field('member_project-b_img_4') ?>" alt="">
                <figcaption>
                    <button class="view">
                        <a class="viewbtn" href="<?php the_field('member_project-b_link_4') ?>" target="_blank">View Site</a>
                    </button>
                </figcaption>
            </figure>
           </li>
          </ul> <!-- end of projects ul sec -->
      </div> <!-- end of content sec -->
    </div>
  </div> <!-- end of main content sec -->
</div> <!-- end of card -->
<div class="card">
  <div class="content">
    
    <label class="modal-open modal-label" for="modal-open-five">
      <img class="member5" src="<?php the_field('member_circle_photo_5') ?>" alt="">
     </label>
    <h1 class="member"><?php the_field('circle_name_5') ?></h1>
    <input type="radio" name="modal" value="open" id="modal-open-five" class="modal-radio" />
    <div class="modal">
      <label class="modal-label overlay">
                <input type="radio" name="modal" value="close" class="modal-radio"/>
            </label>
      <div class="content">
        <div class="top violet-bkg">
          <div class="profile-pic violet-bkg">
            <img class="picture" src="<?php the_field('open_modal_photo_5')?>" alt="">
          </div>
          <h2 class="modal-name violet-gradient"><?php the_field('open_modal_full_name_5') ?><span class="pronouns">(<?php the_field('member_pronouns_5') ?>)</span></h2>
          <h4 class="kdg-role"><?php the_field('chais_role') ?></h4>
          <label class="modal-label close-btn">
                    <input type="radio" name="modal" value="close" class="modal-radio"/>
                </label>
        </div> <!-- end of top sec -->
        <p class="member-about"><?php the_field('open_modal_bio_5') ?></p>
        <ul class="profile-links">
          
        <li class="link">
            <a class="link-icon" href="<?php the_field('linkedin_link_5') ?>" target="_blank"><i class="fa fa-linkedin fa-2x"></i></a>
          </li>

          <li class="link">
            <a class="link-icon" href="<?php the_field('portfolio_link_5') ?>" target="_blank">Portfolio</a>
          </li>
          
          <li class="link">
            <a class="link-icon" href="<?php the_field('github_link_5') ?>" target="_blank"><i class="fab fa-github fa-2x"></i></a>
          </li>
          
        </ul> <!-- end of links ul sec -->
        
        <!-- <img class="profile-logo" src="<?php the_field('member_logo_5') ?>" alt=""> -->
        
        <!-- <ul class="profile-projects">
           
           <li class="project">
              <figure>
                <img src="<?php the_field('member_project-a_img_5') ?>" alt="">
                <figcaption>
                    <button class="view">
                        <a class="viewbtn" href="<?php the_field('member_project-a_link_5') ?>" target="_blank">View Site</a>
                    </button>
                </figcaption>
            </figure>
           </li>
             
           <li class="project">
              <figure>
                <img src="<?php the_field('member_project-b_img_5') ?>" alt="">
                <figcaption>
                    <button class="view">
                        <a class="viewbtn" href="<?php the_field('member_project-b_link_5') ?>" target="_blank">View Site</a>
                    </button>
                </figcaption>
            </figure>
           </li>
          </ul> end of projects ul sec -->
      </div> <!-- end of content sec -->
    </div>
  </div> <!-- end of main content sec -->
</div> <!-- end of card -->
<div class="card">
  <div class="content">
    
    <label class="modal-open modal-label" for="modal-open-six">
      <img class="member6" src="<?php the_field('member_circle_photo_6') ?>" alt="">
     </label>
    <h1 class="member"><?php the_field('circle_name_6') ?></h1>
    <input type="radio" name="modal" value="open" id="modal-open-six" class="modal-radio" />
    <div class="modal">
      <label class="modal-label overlay">
                <input type="radio" name="modal" value="close" class="modal-radio"/>
            </label>
      <div class="content">
        <div class="top aqua-bkg">
          <div class="profile-pic aqua-bkg">
            <img class="picture" src="<?php the_field('open_modal_photo_6')?>" alt="">
          </div>
          <h2 class="modal-name aqua-gradient"><?php the_field('open_modal_full_name_6') ?><span class="pronouns">(<?php the_field('member_pronouns_6') ?>)</span></h2>
          <h4 class="kdg-role"><?php the_field('miles_role') ?></h4>
          <label class="modal-label close-btn">
                    <input type="radio" name="modal" value="close" class="modal-radio"/>
                </label>
        </div> <!-- end of top sec -->
        <p class="member-about"><?php the_field('open_modal_bio_6') ?></p>
        <ul class="profile-links">
          
        <li class="link">
            <a class="link-icon" href="<?php the_field('linkedin_link_6') ?>" target="_blank"><i class="fa fa-linkedin fa-2x"></i></a>
          </li>

          <li class="link">
            <a class="link-icon" href="<?php the_field('portfolio_link_6') ?>" target="_blank">Portfolio</a>
          </li>
          
          <li class="link">
            <a class="link-icon" href="<?php the_field('github_link_6') ?>" target="_blank"><i class="fab fa-github fa-2x"></i></a>
          </li>
   
        </ul> <!-- end of links ul sec -->
        
        <img class="profile-logo" src="<?php the_field('member_logo_6') ?>" alt="">
        
        <ul class="profile-projects">
           
           <li class="project">
              <figure>
                <img src="<?php the_field('member_project-a_img_6') ?>" alt="">
                <figcaption>
                    <button class="view">
                        <a class="viewbtn" href="<?php the_field('member_project-a_link_6') ?>" target="_blank">View Site</a>
                    </button>
                </figcaption>
            </figure>
           </li>
             
           <li class="project">
              <figure>
                <img src="<?php the_field('member_project-b_img_6') ?>" alt="">
                <figcaption>
                    <button class="view">
                        <a class="viewbtn" href="<?php the_field('member_project-b_link_6') ?>" target="_blank">View Site</a>
                    </button>
                </figcaption>
            </figure>
           </li>
          </ul> <!-- end of projects ul sec -->
      </div> <!-- end of content sec -->
    </div>
  </div> <!-- end of main content sec -->
</div> <!-- end of card -->
<div class="card">
  <div class="content">
    
    <label class="modal-open modal-label" for="modal-open-seven">
      <img class="member7" src="<?php the_field('member_circle_photo_7') ?>" alt="">
     </label>
    <h1 class="member"><?php the_field('circle_name_7') ?></h1>
    <input type="radio" name="modal" value="open" id="modal-open-seven" class="modal-radio" />
    <div class="modal">
      <label class="modal-label overlay">
                <input type="radio" name="modal" value="close" class="modal-radio"/>
            </label>
      <div class="content">
        <div class="top violet-bkg">
          <div class="profile-pic violet-bkg">
            <img class="picture" src="<?php the_field('open_modal_photo_7')?>" alt="">
          </div>
          <h2 class="modal-name violet-gradient"><?php the_field('open_modal_full_name_7') ?><span class="pronouns">(<?php the_field('member_pronouns_7') ?>)</span></h2>
          <h4 class="kdg-role"><?php the_field('georges_role') ?></h4>
          <label class="modal-label close-btn">
                    <input type="radio" name="modal" value="close" class="modal-radio"/>
                </label>
        </div> <!-- end of top sec -->
        <p class="member-about"><?php the_field('open_modal_bio_7') ?></p>
        <ul class="profile-links">
          
        <li class="link">
            <a class="link-icon" href="<?php the_field('linkedin_link_7') ?>" target="_blank"><i class="fa fa-linkedin fa-2x"></i></a>
          </li>
          
          <li class="link">
            <a class="link-icon" href="<?php the_field('portfolio_link_7') ?>" target="_blank">Portfolio</a>
          </li>

          <li class="link">
            <a class="link-icon" href="<?php the_field('github_link_7') ?>" target="_blank"><i class="fab fa-github fa-2x"></i></a>
          </li>
          
          
        </ul> <!-- end of links ul sec -->
        
        <!-- <img class="profile-logo" src="<?php the_field('member_logo_7') ?>" alt=""> -->
        
        <ul class="profile-projects">
           
           <li class="project">
              <figure>
                <img src="<?php the_field('member_project-a_img_7') ?>" alt="">
                <figcaption>
                    <button class="view">
                        <a class="viewbtn" href="<?php the_field('member_project-a_link_7') ?>" target="_blank">View Site</a>
                    </button>
                </figcaption>
            </figure>
           </li>
             
           <!-- <li class="project">
              <figure>
                <img src="<?php the_field('member_project-b_img_7') ?>" alt="">
                <figcaption>
                    <button class="view">
                        <a class="viewbtn" href="<?php the_field('member_project-b_link_7') ?>" target="_blank">View Site</a>
                    </button>
                </figcaption>
            </figure>
           </li> -->
          </ul> <!-- end of projects ul sec -->
      </div> <!-- end of content sec -->
    </div>
  </div> <!-- end of main content sec -->
</div> <!-- end of card -->
<div class="card">
  <div class="content">
    
    <label class="modal-open modal-label" for="modal-open-eight">
      <img class="member8" src="<?php the_field('member_circle_photo_8') ?>" alt="">
     </label>
    <h1 class="member"><?php the_field('circle_name_8') ?></h1>
    <input type="radio" name="modal" value="open" id="modal-open-eight" class="modal-radio" />
    <div class="modal">
      <label class="modal-label overlay">
                <input type="radio" name="modal" value="close" class="modal-radio"/>
            </label>
      <div class="content">
        <div class="top violet-bkg">
          <div class="profile-pic violet-bkg">
            <img class="picture" src="<?php the_field('open_modal_photo_8')?>" alt="">
          </div>
          <h2 class="modal-name violet-gradient"><?php the_field('open_modal_full_name_8') ?><span class="pronouns">(<?php the_field('member_pronouns_8') ?>)</span></h2>
          <h4 class="kdg-role"><?php the_field('myes_role') ?></h4>
          <label class="modal-label close-btn">
                    <input type="radio" name="modal" value="close" class="modal-radio"/>
                </label>
        </div> <!-- end of top sec -->
        <p class="member-about"><?php the_field('open_modal_bio_8') ?></p>
        <ul class="profile-links">
          
        <li class="link">
            <a class="link-icon" href="<?php the_field('linkedin_link_8') ?>" target="_blank"><i class="fa fa-linkedin fa-2x"></i></a>
          </li>
          
          <li class="link">
            <a class="link-icon" href="<?php the_field('portfolio_link_8') ?>" target="_blank">Portfolio</a>
          </li>

          <li class="link">
            <a class="link-icon" href="<?php the_field('github_link_8') ?>" target="_blank"><i class="fab fa-github fa-2x"></i></a>
          </li>
          
        </ul> <!-- end of links ul sec -->
        
        <!-- <img class="profile-logo" src="<?php the_field('member_logo_8') ?>" alt=""> -->
        
        <ul class="profile-projects">
           
           <li class="project">
              <figure>
                <img src="<?php the_field('member_project-a_img_8') ?>" alt="">
                <figcaption>
                    <button class="view">
                        <a class="viewbtn" href="<?php the_field('member_project-a_link_8') ?>" target="_blank">View Site</a>
                    </button>
                </figcaption>
            </figure>
           </li>
             
           <li class="project">
              <figure>
                <img src="<?php the_field('member_project-b_img_8') ?>" alt="">
                <figcaption>
                    <button class="view">
                        <a class="viewbtn" href="<?php the_field('member_project-b_link_8') ?>" target="_blank">View Site</a>
                    </button>
                </figcaption>
            </figure>
           </li>
          </ul> <!-- end of projects ul sec -->
      </div> <!-- end of content sec -->
    </div>
  </div> <!-- end of main content sec -->
</div> <!-- end of card -->
<div class="card">
  <div class="content">
    
    <label class="modal-open modal-label" for="modal-open-nine">
      <img class="member9" src="<?php the_field('member_circle_photo_9') ?>" alt="">
     </label>
    <h1 class="member"><?php the_field('circle_name_9') ?></h1>
    <input type="radio" name="modal" value="open" id="modal-open-nine" class="modal-radio" />
    <div class="modal">
      <label class="modal-label overlay">
                <input type="radio" name="modal" value="close" class="modal-radio"/>
            </label>
      <div class="content">
        <div class="top aqua-bkg">
          <div class="profile-pic aqua-bkg">
            <img class="picture" src="<?php the_field('open_modal_photo_9')?>" alt="">
          </div>
          <h2 class="modal-name aqua-gradient"><?php the_field('open_modal_full_name_9') ?><span class="pronouns">(<?php the_field('member_pronouns_9') ?>)</span></h2>
          <h4 class="kdg-role"><?php the_field('sumans_role') ?></h4>
          <label class="modal-label close-btn">
                    <input type="radio" name="modal" value="close" class="modal-radio"/>
                </label>
        </div> <!-- end of top sec -->
        <p class="member-about"><?php the_field('open_modal_bio_9') ?></p>
        <ul class="profile-links">
          
        <li class="link">
            <a class="link-icon" href="<?php the_field('linkedin_link_9') ?>" target="_blank"><i class="fa fa-linkedin fa-2x"></i></a>
          </li>

          <li class="link">
            <a class="link-icon" href="<?php the_field('portfolio_link_9') ?>" target="_blank">Portfolio</a>
          </li>
          
          <li class="link">
            <a class="link-icon" href="<?php the_field('github_link_9') ?>" target="_blank"><i class="fab fa-github fa-2x"></i></a>
          </li>

        </ul> <!-- end of links ul sec -->
        
        <!-- <img class="profile-logo" src="<?php the_field('member_logo_9') ?>" alt=""> -->
        
        <!-- <ul class="profile-projects">
           
           <li class="project">
              <figure>
                <img src="<?php the_field('member_project-a_img_9') ?>" alt="">
                <figcaption>
                    <button class="view">
                        <a class="viewbtn" href="<?php the_field('member_project-a_link_9') ?>" target="_blank">View Site</a>
                    </button>
                </figcaption>
            </figure>
           </li>
             
           <li class="project">
              <figure>
                <img src="<?php the_field('member_project-b_img_9') ?>" alt="">
                <figcaption>
                    <button class="view">
                        <a class="viewbtn" href="<?php the_field('member_project-b_link_9') ?>" target="_blank">View Site</a>
                    </button>
                </figcaption>
            </figure>
           </li>
          </ul> end of projects ul sec -->
      </div> <!-- end of content sec -->
    </div>
  </div> <!-- end of main content sec -->
</div> <!-- end of card -->
<div class="card">
  <div class="content">
    
    <label class="modal-open modal-label" for="modal-open-ten">
      <img class="member10" src="<?php the_field('member_circle_photo_10') ?>" alt="">
     </label>
    <h1 class="member"><?php the_field('circle_name_10') ?></h1>
    <input type="radio" name="modal" value="open" id="modal-open-ten" class="modal-radio" />
    <div class="modal">
      <label class="modal-label overlay">
                <input type="radio" name="modal" value="close" class="modal-radio"/>
            </label>
      <div class="content">
        <div class="top aqua-bkg">
          <div class="profile-pic aqua-bkg">
            <img class="picture" src="<?php the_field('open_modal_photo_10')?>" alt="">
          </div>
          <h2 class="modal-name aqua-gradient"><?php the_field('open_modal_full_name_10') ?><span class="pronouns">(<?php the_field('member_pronouns_10') ?>)</span></h2>
          <h4 class="kdg-role"><?php the_field('edwins_role') ?></h4>
          <label class="modal-label close-btn">
                    <input type="radio" name="modal" value="close" class="modal-radio"/>
                </label>
        </div> <!-- end of top sec -->
        <p class="member-about"><?php the_field('open_modal_bio_10') ?></p>
        <ul class="profile-links">
          
        <li class="link">
            <a class="link-icon" href="<?php the_field('linkedin_link_10') ?>" target="_blank"><i class="fa fa-linkedin fa-2x"></i></a>
          </li>
          
          <li class="link">
            <a class="link-icon" href="<?php the_field('portfolio_link_10') ?>" target="_blank">Portfolio</a>
          </li>

          <li class="link">
            <a class="link-icon" href="<?php the_field('github_link_10') ?>" target="_blank"><i class="fab fa-github fa-2x"></i></a>
          </li>
          
      
          
        </ul> <!-- end of links ul sec -->
        
        <!-- <img class="profile-logo" src="<?php the_field('member_logo_10') ?>" alt=""> -->
        
        <!-- <ul class="profile-projects">
           
           <li class="project">
              <figure>
                <img src="<?php the_field('member_project-a_img_10') ?>" alt="">
                <figcaption>
                    <button class="view">
                        <a class="viewbtn" href="<?php the_field('member_project-a_link_10') ?>" target="_blank">View Site</a>
                    </button>
                </figcaption>
            </figure>
           </li>
             
           <li class="project">
              <figure>
                <img src="<?php the_field('member_project-b_img_10') ?>" alt="">
                <figcaption>
                    <button class="view">
                        <a class="viewbtn" href="<?php the_field('member_project-b_link_10') ?>" target="_blank">View Site</a>
                    </button>
                </figcaption>
            </figure>
           </li>
          </ul> end of projects ul sec -->
      </div> <!-- end of content sec -->
    </div>
  </div> <!-- end of main content sec -->
</div> <!-- end of card -->
<div class="card">
  <div class="content">
    
    <label class="modal-open modal-label" for="modal-open-eleven">
      <img class="member11" src="<?php the_field('member_circle_photo_11') ?>" alt="">
     </label>
    <h1 class="member"><?php the_field('circle_name_11') ?></h1>
    <input type="radio" name="modal" value="open" id="modal-open-eleven" class="modal-radio" />
    <div class="modal">
      <label class="modal-label overlay">
                <input type="radio" name="modal" value="close" class="modal-radio"/>
            </label>
      <div class="content">
        <div class="top violet-bkg">
          <div class="profile-pic violet-bkg">
            <img class="picture" src="<?php the_field('open_modal_photo_11')?>" alt="">
          </div>
          <h2 class="modal-name violet-gradient"><?php the_field('open_modal_full_name_11') ?><span class="pronouns">(<?php the_field('member_pronouns_11') ?>)</span></h2>
          <h4 class="kdg-role"><?php the_field('rukus_role') ?></h4>
          <label class="modal-label close-btn">
                    <input type="radio" name="modal" value="close" class="modal-radio"/>
                </label>
        </div> <!-- end of top sec -->
        <p class="member-about"><?php the_field('open_modal_bio_11') ?></p>
        <ul class="profile-links">
          
        <li class="link">
            <a class="link-icon" href="<?php the_field('linkedin_link_11') ?>" target="_blank"><i class="fa fa-linkedin fa-2x"></i></a>
          </li>
          
          <li class="link">
            <a class="link-icon" href="<?php the_field('portfolio_link_11') ?>" target="_blank">Portfolio</a>
          </li>

          <li class="link">
            <a class="link-icon" href="<?php the_field('github_link_11') ?>" target="_blank"><i class="fab fa-github fa-2x"></i></a>
          </li>

        </ul> <!-- end of links ul sec -->
        
        <!-- <img class="profile-logo" src="<?php the_field('member_logo_11') ?>" alt=""> -->
        
        <ul class="profile-projects">
           
           <li class="project">
              <figure>
                <img src="<?php the_field('member_project-a_img_11') ?>" alt="">
                <figcaption>
                    <button class="view">
                        <a class="viewbtn" href="<?php the_field('member_project-a_link_11') ?>" target="_blank">View Site</a>
                    </button>
                </figcaption>
            </figure>
           </li>
             
           <li class="project">
              <figure>
                <img src="<?php the_field('member_project-b_img_11') ?>" alt="">
                <figcaption>
                    <button class="view">
                        <a class="viewbtn" href="<?php the_field('member_project-b_link_11') ?>" target="_blank">View Site</a>
                    </button>
                </figcaption>
            </figure>
           </li>
          </ul> <!-- end of projects ul sec -->
      </div> <!-- end of content sec -->
    </div>
  </div> <!-- end of main content sec -->
</div> <!-- end of card -->
<div class="card">
  <div class="content">
    
    <label class="modal-open modal-label" for="modal-open-twelve">
      <img class="member12" src="<?php the_field('member_circle_photo_12') ?>" alt="">
     </label>
    <h1 class="member"><?php the_field('circle_name_12') ?></h1>
    <input type="radio" name="modal" value="open" id="modal-open-twelve" class="modal-radio" />
    <div class="modal">
      <label class="modal-label overlay">
                <input type="radio" name="modal" value="close" class="modal-radio"/>
            </label>
      <div class="content">
        <div class="top violet-bkg">
          <div class="profile-pic violet-bkg">
            <img class="picture" src="<?php the_field('open_modal_photo_12')?>" alt="">
          </div>
          <h2 class="modal-name violet-gradient"><?php the_field('open_modal_full_name_12') ?><span class="pronouns">(<?php the_field('member_pronouns_12') ?>)</span></h2>
          <h4 class="kdg-role"><?php the_field('daniels_role') ?></h4>
          <label class="modal-label close-btn">
                    <input type="radio" name="modal" value="close" class="modal-radio"/>
                </label>
        </div> <!-- end of top sec -->
        <p class="member-about"><?php the_field('open_modal_bio_12') ?></p>
        <ul class="profile-links">
          
        <li class="link">
            <a class="link-icon" href="<?php the_field('linkedin_link_12') ?>" target="_blank"><i class="fa fa-linkedin fa-2x"></i></a>
          </li>

          <li class="link">
            <a class="link-icon" href="<?php the_field('portfolio_link_12') ?>" target="_blank">Portfolio</a>
          </li>

          <li class="link">
            <a class="link-icon" href="<?php the_field('github_link_12') ?>" target="_blank"><i class="fab fa-github fa-2x"></i></a>
          </li>
          
        </ul> <!-- end of links ul sec -->
        
        <!-- <img class="profile-logo" src="<?php the_field('member_logo_12') ?>" alt=""> -->
        
        <!-- <ul class="profile-projects">
           
           <li class="project">
              <figure>
                <img src="<?php the_field('member_project-a_img_12') ?>" alt="">
                <figcaption>
                    <button class="view">
                        <a class="viewbtn" href="<?php the_field('member_project-a_link_12') ?>" target="_blank">View Site</a>
                    </button>
                </figcaption>
            </figure>
           </li>
             
           <li class="project">
              <figure>
                <img src="<?php the_field('member_project-b_img_12') ?>" alt="">
                <figcaption>
                    <button class="view">
                        <a class="viewbtn" href="<?php the_field('member_project-b_link_12') ?>" target="_blank">View Site</a>
                    </button>
                </figcaption>
            </figure>
           </li>
          </ul> end of projects ul sec -->
      </div> <!-- end of content sec -->
    </div>
  </div> <!-- end of main content sec -->
</div> <!-- end of card -->
<div class="card">
  <div class="content">
    
    <label class="modal-open modal-label" for="modal-open-thirteen">
      <img class="member13" src="<?php the_field('member_circle_photo_13') ?>" alt="">
     </label>
    <h1 class="member"><?php the_field('circle_name_13') ?></h1>
    <input type="radio" name="modal" value="open" id="modal-open-thirteen" class="modal-radio" />
    <div class="modal">
      <label class="modal-label overlay">
                <input type="radio" name="modal" value="close" class="modal-radio"/>
            </label>
      <div class="content">
        <div class="top aqua-bkg">
          <div class="profile-pic aqua-bkg">
            <img class="picture" src="<?php the_field('open_modal_photo_13')?>" alt="">
          </div>
          <h2 class="modal-name aqua-gradient"><?php the_field('open_modal_full_name_13') ?><span class="pronouns">(<?php the_field('member_pronouns_13') ?>)</span></h2>
          <h4 class="kdg-role"><?php the_field('jordans_role') ?></h4>
          <label class="modal-label close-btn">
                    <input type="radio" name="modal" value="close" class="modal-radio"/>
                </label>
        </div> <!-- end of top sec -->
        <p class="member-about"><?php the_field('open_modal_bio_13') ?></p>
        <ul class="profile-links">
          
        <li class="link">
            <a class="link-icon" href="<?php the_field('linkedin_link_13') ?>" target="_blank"><i class="fa fa-linkedin fa-2x"></i></a>
          </li>

          <li class="link">
            <a class="link-icon" href="<?php the_field('portfolio_link_13') ?>" target="_blank">Portfolio</a>
          </li>
          
          <li class="link">
            <a class="link-icon" href="<?php the_field('github_link_13') ?>" target="_blank"><i class="fab fa-github fa-2x"></i></a>
          </li>
          
        
          
        </ul> <!-- end of links ul sec -->
        
        <img class="profile-logo" src="<?php the_field('member_logo_13') ?>" alt="">
        
        <ul class="profile-projects">
           
           <li class="project">
              <figure>
                <img src="<?php the_field('member_project-a_img_13') ?>" alt="">
                <figcaption>
                    <button class="view">
                        <a class="viewbtn" href="<?php the_field('member_project-a_link_13') ?>" target="_blank">View Site</a>
                    </button>
                </figcaption>
            </figure>
           </li>
             
           <li class="project">
              <figure>
                <img src="<?php the_field('member_project-b_img_13') ?>" alt="">
                <figcaption>
                    <button class="view">
                        <a class="viewbtn" href="<?php the_field('member_project-b_link_13') ?>" target="_blank">View Site</a>
                    </button>
                </figcaption>
            </figure>
           </li>
      </div> <!-- end of content sec -->
    </div>
  </div> <!-- end of main content sec -->
</div> <!-- end of card -->
<div class="card">
  <div class="content">
    
    <label class="modal-open modal-label" for="modal-open-logo">
      <img  class="member14" src="<?php the_field('member_circle_photo_14') ?>" alt="">
     </label>
    <h1 class="member"><?php the_field('circle_name_14') ?></h1>
    <input type="radio" name="modal" value="open" id="modal-open-logo" class="modal-radio" />
    <div class="modal">
      <label class="modal-label overlay">
                <input type="radio" name="modal" value="close" class="modal-radio"/>
            </label>
      <div class="content">
        <div class="top-logo">
          <div class="profile-pic-logo">
            <div class="picture-border">
            <img class="picture-logo" src="<?php the_field('open_modal_photo_14') ?>" alt="">
            </div>
          </div>
          <h2 class="modal-name-logo"><?php the_field('open_modal_full_name_14') ?></h2>
          <label class="modal-label close-btn">
                    <input type="radio" name="modal" value="close" class="modal-radio"/>
                </label>
        </div> <!-- end of top sec -->
        <p class="member-about-logo"><?php the_field('logo_about') ?></p>
        <ul class="logo-explained">
          <li class="map">
            <img class="map-ref"src="<?php the_field('logo_modal_photo_1') ?>" alt="">
            <h4 class="logo-about">
              <?php the_field('logo_modal_paragraph_1') ?>
            </h4>
          </li>
          
          <li class="triangle">
            <img class="triangle-ref"src="<?php the_field('logo_modal_photo_2') ?>" alt="">
            <h4 class="logo-about">
              <?php the_field('logo_modal_paragraph_2') ?>
            </h4>
          </li>
          
          <li class="zone">
            <img class="zone-ref"src="<?php the_field('logo_modal_photo_3') ?>" alt="">
            <h4 class="logo-about">
              <?php the_field('logo_modal_paragraph_3') ?>
            </h4>           
          </li>
        </ul>
        
        <h3 class="logo-creds"><?php the_field('logo_design_creds') ?></h3>
      </div> <!-- end of content sec -->
    </div>
  </div> <!-- end of main content sec -->
 </div> <!-- end of card -->
</div> <!-- end of parent -->