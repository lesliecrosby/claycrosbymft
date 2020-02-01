<?php /* Template Name: Areas Of Focus Page */ ?>

<?php get_header(); ?>
<?php $breakpoint = "xlarge"; ?>

	<div id="content">

		<div id="inner-content" class="expanded row">

		  <main id="main" class="expanded row areas-of-focus" role="main">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

          <?php get_template_part( 'parts/loop', 'page' ); ?>

        <?php endwhile; endif; ?>

        <div id="life-transitions" class="expanded row">
          <div class="focus-row row">
            <div class="small-offset-1 small-10 columns">
              <!-- <h2>Life Transitions</h2> -->
							<h2><?php echo esc_html( get_post_meta( get_the_ID(), '_clayjoints_areasoffocus_section1-title', true ) ); ?></h2>
              <hr class="focus">
              <!-- <p>
                People often come to see me around the time of a major change in their life. This can include career change, marriage, becoming a parent, divorce or relationship breakup, loss of a job, loss of a loved one, acknowledging sexual orientation (“coming out”), a move to a new city or country, illness or disability, etc.
              </p>
              <p>
                Change can be extremely stressful, especially when we find that our support system is insufficient (or no longer in place) or that our usual coping skills are no longer effective. My first goal in these situations is to provide consistent, on-going support and a safe place to process difficult and overwhelming feelings such as grief, loss, shame, guilt, fear, anger, envy, jealousy and anxiety. After working through the painful feelings it is much easier to adjust and adapt to new circumstances, establish new coping strategies, and regain a sense of possibility for the future.
              </p>
              <p>
                I work in partnership with my clients as they explore the meaning of the changes they are experiencing and sort through their choices for moving forward.
              </p> -->
							<?php echo wpautop( get_post_meta( get_the_ID(), '_clayjoints_areasoffocus_section1-text', true ) ); ?>
            </div>
          </div>
        </div>

        <div id="couples-therapy" class="expanded row">
          <div class="focus-row row">
            <div class="small-offset-1 small-10 columns">
              <!-- <h2>Couples Therapy</h2> -->
							<h2><?php echo esc_html( get_post_meta( get_the_ID(), '_clayjoints_areasoffocus_section2-title', true ) ); ?></h2>
              <hr class="focus">
              <!-- <p>
                I enjoy working with couples who feel stuck and are struggling to work through relationship conflicts. Intimate relationships often trigger unresolved childhood issues that can become obstacles to effective, loving communication. Most of us hope that our partner will be able to read our mind and know what we are thinking and feeling but it rarely works out that way.
              </p>
              <p>
                I find it exciting to help a person get to know more about how their partner thinks, feels and reacts. In my work with couples I help them step out of painful cycles that they get stuck in and create relationships that feel safe, secure and supportive. When needed, I also teach communication skills, explore family histories that may influence relating styles and work to create a safe environment for clients to say things that are hard to say. I have had the pleasure of watching couples move to new levels of intimacy, trust and compassion. I am currently participating in advanced training in Emotionally Focused Couple Therapy (EFT), a cutting edge therapy technique that has been validated by extensive research.
              </p>
              <p>
                I welcome all types of couples and have experience working with married, unmarried, same-sex, biracial and bicultural couples as well as couples dealing with infidelity. I offer premarital counseling and am certified to administer the PREPARE inventory, a valuable tool which helps couples identify and discuss their strengths and potential challenge areas. I am also interested in supporting couples with children in their effort to be the best parents they can be.
              </p> -->
							<?php echo wpautop( get_post_meta( get_the_ID(), '_clayjoints_areasoffocus_section2-text', true ) ); ?>
            </div>
          </div>
        </div>

        <div id="creative-issues" class="expanded row">
          <div class="focus-row row">
            <div class="small-offset-1 small-10 columns">
              <!-- <h2>Creative Issues</h2> -->
							<h2><?php echo esc_html( get_post_meta( get_the_ID(), '_clayjoints_areasoffocus_section3-title', true ) ); ?></h2>
              <hr class="focus">
              <!-- <p>
                A creative career presents its own set of challenges. I enjoy working with actors, writers, directors, musicians, and visual artists. I believe that artists are vital to the health of our society and I recognize that our culture doesn’t always value people who are pursuing creative careers.
              </p>
              <p>
                In my work with creative clients we examine the impact of societal ideas about artists and we also explore ways in which clients’ personal histories and emotional and relational patterns may get in the way of achieving their goals. When creative clients feel discouraged or defeated in their careers one of my intentions is to help them develop a broader view of how they can use their talents in the world. We look for ways to be continually productive and creatively engaged regardless of external validation from the entertainment industry or the art world. I also work with artists who have achieved external success but feel unfulfilled and are searching for for an increased sense of meaning and purpose in their life and career.
              </p>
              <p>
                My mission in working with creative clients is to offer a supportive and encouraging experience that allows them to:
              </p> -->
							<?php echo wpautop( get_post_meta( get_the_ID(), '_clayjoints_areasoffocus_section3-text', true ) ); ?>
              <!-- <ul>
                <li>Reconnect with their passion</li>
               	<li>Make peace with their past</li>
               	<li>Get out of their own way</li>
               	<li>Work through creative blocks</li>
                <li>Live a full life while pursuing their dreams</li>
 	              <li>Create with energy, confidence, joy, &amp; dignity</li>
              </ul> -->
							<?php
								cmb2_output_unordered_list( '_clayjoints_areasoffocus_repeat_group_1' );
							?>
            </div>
          </div>
        </div>

        <div id="EMDR" class="expanded row">
          <div class="focus-row row">
            <div class="small-offset-1 small-10 columns">
              <!-- <h2>E M D R</h2> -->
							<h2><?php echo esc_html( get_post_meta( get_the_ID(), '_clayjoints_areasoffocus_section4-title', true ) ); ?></h2>
              <hr class="focus">
              <!-- <p>
                <strong>EMDR (Eye Movement Desensitization and Reprocessing)</strong> is an integrative psychotherapy approach that has been extensively researched and proven effective for the treatment of trauma and PTSD (Post Traumatic Stress Disorder).  Clinicians have also found EMDR effective in the treatment of a variety of conditions including panic attacks, phobias, complicated grief, performance anxiety, addictions, eating disorders, body dysmorphia and pain disorders.  I have trained with Laurel Parnell, Ph.D., the director of the Parnell Institute and developer of Attachment-focused EMDR.  I incorporate EMDR into my treatment plans when I feel that a client will benefit from it and have had excellent results.  For more information on EMDR, visit the <a href="http://www.emdria.org" targe="_blank">EMDR International Association website.</a>
              </p> -->
							<?php echo wpautop( get_post_meta( get_the_ID(), '_clayjoints_areasoffocus_section4-wysiwyg', true ) ); ?>
            </div>
          </div>
        </div>


			</main> <!-- end #main -->

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>
