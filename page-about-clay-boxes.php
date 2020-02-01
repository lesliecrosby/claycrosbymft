<?php /* Template Name: About Clay Page */ ?>

<?php get_header(); ?>
<?php $breakpoint = "xlarge"; ?>

	<div id="content">

		<div id="inner-content" class="expanded row">

		  <main id="main" class="expanded row" role="main">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

          <?php get_template_part( 'parts/loop', 'page' ); ?>

        <?php endwhile; endif; ?>

				<div id="bio-1" class="expanded row">
          <div class="row contact-1">

            <div class="small-offset-1 small-10 large-offset-0 large-4 columns">
              <div id="profile-img" class="">
              </div>
            </div>

            <div class="small-offset-1 small-10 large-offset-0 large-8 columns float-left">
              <div class="contact">
                <h4>Contact</h4>
                <div class="row expanded">
                  <div class="large-6 columns">
                    <div class="inner-stuff">
                      <a href="#">
                        <i class="fa fa-phone"></i>
                      </a>
                      <br>
                      <strong>Phone</strong>
                      <br>
                      <a href="tel:310-704-8747" target="_blank"> <h6>310.704.8747</h6></a>
                    </div>
                  </div>
                  <div class="large-6 columns">
                    <div class="inner-stuff">
                      <a href="#">
                        <i class="fa fa-envelope"></i>
                      </a>
                      <br>
                      <strong>Email</strong>
                      <br>
                      <a href="mailto:clay@claycrosbymfd.com" target="_blank"> <h6>clay@claycrosbymft.com</h6></a>
                    </div>
                  </div>
                  <div class="large-12 columns">
                    <div class="inner-stuff">
                      <a href="#">
                        <i class="fa fa-facebook"></i>
                      </a>
                      <br>
                      <strong>Facebook</strong>
                      <br>
                      <a href="https://www.facebook.com/ClayCrosbyLMFT/" target="_blank" rel="noopener noreferrer"> <h6>Follow Clay on Facebook</h6></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div> <!-- end contact-1 Row -->

          <div class="row contact-2 ">
            <div class="small-offset-1 small-10 large-offset-0 large-12 columns">
              <div class="contact">
                <div class="row expanded">
                  <div class="large-12 columns">
                    <div class="inner-stuff">
                      <a href=" https://www.google.com/maps/place/554+S+San+Vicente+Blvd,+Los+Angeles,+CA+90048/@34.0673291,-118.3757737,17z/data=!3m1!4b1!4m5!3m4!1s0x80c2b948937f687d:0x904ffb819ebed284!8m2!3d34.0673291!4d-118.373585" target="_blank" rel="noopener noreferrer">
                        <i class="fa fa-map-marker"></i>
                      </a>
                      <br>
                      <strong>Office Location</strong>
                      <br>
                      <a href=" https://www.google.com/maps/place/554+S+San+Vicente+Blvd,+Los+Angeles,+CA+90048/@34.0673291,-118.3757737,17z/data=!3m1!4b1!4m5!3m4!1s0x80c2b948937f687d:0x904ffb819ebed284!8m2!3d34.0673291!4d-118.373585" target="_blank" rel="noopener noreferrer"> <h6>554 South San Vicente Blvd, Suite 110, Los Angeles, CA 90048</h6></a>
                      <br>
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3305.085067293548!2d-118.37577904868063!3d34.06733352428569!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2b948937f687d%3A0x1e4aa7038a8e4a13!2s554+S+San+Vicente+Blvd+%23110%2C+Los+Angeles%2C+CA+90048!5e0!3m2!1sen!2sus!4v1496693417514" frameborder="0" style="border:0" allowfullscreen class="office-location"></iframe>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>

          <div class="row contact-3">
            <div class="small-offset-1 small-10 large-offset-0 large-12 columns">
              <div class="">
                <div class="row expanded">
                  <div class="large-4 columns">
                    <div class="education">
                      <h4>Education</h4>
                      <ul>
                        <li>
                          <strong>Antioch University Los Angeles</strong>
                          <br class="hide-for-medium">Master of Arts, Clinical Psychology
                        </li>
                        <li>
                          <strong>University of Pennsylvania</strong>
                          <br class="hide-for-medium">Bachelor of Arts, English (Psychology minor)
                        </li>
                      </ul>
                    </div>
                    <div class="buttons show-for-large">
                      <div class="psychology-today">
                        <div class="inner-stuff">
                          <!--Professional verification provided by Psychology Today -->
                          <a title="verified by Psychology Today" href="https://therapists.psychologytoday.com/rms/prof_detail.php?profid=35335&amp;p=10&amp;tr=Ext_Verify">
                          <img src="https://therapists.psychologytoday.com/rms/external_verification.php?profid=35335" alt="verified by Psychology Today" width="146" height="69" border="0" />
                          </a>
                          <!-- End Verification -->
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="large-8 columns">
                    <div id="" class="affiliations">
                      <h4>Professional Affiliations</h4>
                      <ul>
                        <li><a href="http://www.camft.org/" target="_blank" rel="noopener noreferrer">Clinical Member, California Association of Marriage and Family Therapists</a></li>
                        <li><a href="https://www.aamft.org/iMIS15/AAMFT/" target="_blank" rel="noopener noreferrer">Clinical Member, American Association of Marriage and Family Therapists</a></li>
                        <li><a href="http://parnellemdr.com/" target="_blank" rel="noopener noreferrer">Charter Member, Parnell Institute</a></li>
                        <li><a href="http://www.iceeft.com/index.php" target="_blank" rel="noopener noreferrer">Member, ICEEFT (International Centre for Excellence in Emotionally Focused Therapy)</a></li>
                        <li><a href="http://laceft.org/" target="_blank" rel="noopener noreferrer">Member, LACEFT (Los Angeles Center for Emotionally Focused Therapy)</a></li>
                        <li><a href="https://sccc-la.org/members/ccrosby/" target="_blank" rel="noopener noreferrer">Alumnus, Southern California Counseling Center</a></li>
                      </ul>
                    </div>
                    <div class="buttons hide-for-large float-center">
                      <div class="psychology-today">
                        <div class="inner-stuff">
                          <!--Professional verification provided by Psychology Today -->
                          <a title="verified by Psychology Today" href="https://therapists.psychologytoday.com/rms/prof_detail.php?profid=35335&amp;p=10&amp;tr=Ext_Verify">
                          <img src="https://therapists.psychologytoday.com/rms/external_verification.php?profid=35335" alt="verified by Psychology Today" width="146" height="69" border="0" />
                          </a>
                          <!-- End Verification -->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>

        </div>

        <div id="bio-2" class="expanded row">
          <div class="row">

            <div class="small-offset-1 small-10 large-offset-0 large-12 columns">
              <h4>Selected Certificates / Advanced Trainings</h4>
              <ul>
               	<li>AAMFT Approved Supervisor Status</li>
               	<li>Southern California Counseling Center Advanced Supervision Training (10 week AAMFT approved supervision course)</li>
               	<li>EMDR Basic Training Parts 1,2 and 3 with Laurel Parnell, PhD</li>
                <li>Attachment-Focused EMDR Advanced Training with Laurel Parnell, PhD</li>
                <li>Community Resiliency Model Training, Trauma Resiliency Institute</li>
                <li>Trauma Resiliency Model Part 1 Training, Trauma Resiliency Institute</li>
                <li>Emotionally Focused Couples Therapy 4-Day Externship with Dr. Sue Johnson (two times – first in Ottawa, Canada and then at Cal Tech, Los Angeles)</li>
       	        <li>Emotionally Focused Couples Therapy 2-Day Advanced Externship, Alliant University Los Angeles</li>
                <li>Emotionally Focused Couples Therapy Core Skills 8-Day Advanced Training offered by the San Diego Center for Emotionally Focused Therapy</li>
                <li>Mindful Awareness Practices (MAPS 1) – 14-hour training through UCLA’s Mindful Awareness Research Center</li>
              </ul>
            </div>

          </div>
        </div>

        <div id="bio-3" class="expanded row">
          <div class="row">
            <div class="small-offset-1 small-10 large-offset-0 large-12 columns">
              <p>
                I received my BA from the University of Pennsylvania where I majored in English Literature and Film Studies and minored in Psychology. After working extensively in the entertainment industry I went through a life transition and decided to pursue my lifelong interest in Psychology. I returned to graduate school and earned an MA in Clinical Psychology from Antioch University Los Angeles. While in school I created a therapeutic drama program and led psycho-educational groups for at-risk adolescents at Southern California Drug and Alcohol Programs, Inc. As a volunteer with the SAG BookPals program, I read to elementary students and helped them to discuss their reactions to the stories we shared.
              </p>
              <p>
                I subsequently trained at the Southern California Counseling Center for five years. During that time, in addition to seeing clients, I completed the Center’s two-year family therapy training program, gang awareness training and group facilitation training. I finished my internship hours in a private practice setting under the supervision of Dr. David Eidenberg. After earning my Marriage and Family Therapy license I worked as a clinician and supervisor for two and a half years at Vista School, a division of Vista Del Mar Child and Family Services in Culver City. My clients there were severely emotionally disturbed children and adolescents and their families. I volunteered as a supervisor at the Southern California Counseling Center for three years and in June of 2008 I joined the staff as the Assistant Clinical Director. I was subsequently promoted to Associate Clinical Director. My duties at SCCC include program development, clinical supervision, coordinating training programs, teaching, training parenting facilitators, crisis management, and interfacing with the Center’s legal counsel. I now balance my professional time between my private therapy practice and my work at SCCC.
              </p>
              <p>
                I am strongly committed to continuing my education and growth as a clinician. I have earned the Approved Supervisor designation from the American Association of Marriage and Family Therapy. I am also pursuing advanced training opportunities in Emotionally Focused Couples Therapy (EFT) and Mindful Awareness techniques. Both of these methodologies have been validated by extensive research in recent years and represent exciting and important advancements in the field of therapy. In the fall of 2007 I spent a week in Ottawa, Canada training with Sue Johnson, one of the originators of Emotionally Focused Couples Therapy. In the fall of 2008 I followed up with an Advanced Externship in EFT at Alliant International University, Los Angeles and have since continued to do advanced EFT trainings. In 2015 I completed basic training in Attachment Focused EMDR and in The Trauma Resiliency Model and I am currently working towards EMDR certification.
              </p>


            </div>
          </div>

        </div>

			</main> <!-- end #main -->

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>
