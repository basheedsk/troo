<?php 

/**
* Extra Theme Options
* Extra Theme Tabs Options
* Preloader
*/

/* Add Theme Options Panel Tabs Code Here
-------------------------------------------------------------- */

function troo_epanel_tabs(){

  troo_epanel_fields();

  ?>

<li><a href="#wrap-troo"><?php echo 'TRooThemes Options'; ?></a></li>
<?php

}

/* End Theme Options Panel Tabs Code Here */

/* Add Theme Options Panel Tabs Options Code here*/

function troo_epanel_fields(){



  global $epanelMainTabs, $themename, $shortname, $options ;



		$options[] = array(



			"name" => "wrap-troo",



			"type" => "contenttab-wrapstart",);



			$options[] = array(

				"type" => "subnavtab-start",);

				$options[] = array(

					"name" => "troo-1",

					"type" => "subnav-tab",

					"desc" => esc_html__("Style Settings", $themename)

				);

				

				$options[] = array(

					"name" => "troo-2",

					"type" => "subnav-tab",

					"desc" => esc_html__("Preloader", $themename)

				);




			$options[] = array(

					"type" => "subnavtab-end",);	



			$options[] = array(

					"name" => "troo-1",

					"type" => "subcontent-start",);



				$options[] = array( 

					"name" =>esc_html__( 'Theme Color Options', $themename ),

					"id" => $shortname . "_troo_show_color_option",

					"type" => "checkbox2",

					"std" => "off",

					"desc" =>esc_html__( "Define the default color palette for color pickers in the Divi Builder.", $themename ),

				);

				$options[] = array( "name"         => esc_html__( "Custom Base Color", $themename ),

					"id"           => $shortname . "_troo_color_palette_01",

					"type"         => "et_color_palette",

					"items_amount" => 1,

					"std"          => '#EE4540',

					"desc"         => esc_html__( "Define the custom base color palette for color pickers in the Divi Builder.", $themename ),

					);
					
				$options[] = array( "name"         => esc_html__( "Custom Secondary Color", $themename ),

					"id"           => $shortname . "_troo_color_palette_02",

					"type"         => "et_color_palette",

					"items_amount" => 1,

					"std"          => '#2D142C',

					"desc"         => esc_html__( "Define the custom secondary color palette for color pickers in the Divi Builder.", $themename ),

					);
					
			

					$options[] = array(

						"name" => "troo-1",

						"type" => "subcontent-end",);

				

				//**************************Pre-Loader Options Start Here******************************************//	



			$options[] = array(
				"name" => "troo-2",
				"type" => "subcontent-start",);

			$options[] = array(
				         'name' => esc_html__('Enable Preloader', $themename),
						'id' => $shortname . "_troo_preloader_option",
						'desc' => esc_html__('Prealoder ENABLE/DISABLE',$themename),
						'std' => 'on',
						"type" => "checkbox"
					 );
			$options[] = array("name" => "troo-2",
			"type" => "subcontent-end",);	

	

				$options[] = array( 
					"name" => "wrap-troo",
					"type" => "contenttab-wrapend",);

}

/* End Theme Options Panel Tabs Options Code Here

-------------------------------------------------------------- */



function et_troo_cta_desc_option(){

  echo "<p>Add below Class on Menu Link</strong></p><br/>";

  echo "<p><strong>Class</strong> : 'menu-btn'</p>";

}


function et_troo_particles_desc_option(){
  echo "<p>Add below ID on Section module</strong></p><br/>";
  echo "<p><strong>ID</strong> : 'troo-particles-js'</p>";
}


function troo_custom_color_option_css(){ 

	if( et_get_option('divi_troo_show_color_option') != '' ){
		$divi_troo_show_color_option = et_get_option('divi_troo_show_color_option');
	}else{
		$divi_troo_show_color_option = 'off';
	}
	if( $divi_troo_show_color_option == 'on' ){
		?>
		<style type="text/css">
			:root {
				--color1: <?php echo esc_html(et_get_option( 'divi_troo_color_palette_01' )); ?>;
                --color2: <?php echo esc_html(et_get_option( 'divi_troo_color_palette_02' )); ?> !important;
			}
		</style>

		<?php
	}
	// if ( 'on' === et_get_option( 'divi_troo_show_color_option', 'on' ) ){
	// 	include get_stylesheet_directory() . '/extra-options/color.php';   
	// }
}




/* Adding Preloader Options Code Here

-------------------------------------------------------------- */

function troo_custom_preloader_option_css(){ 
	if( et_get_option('divi_troo_preloader_option') != '' ){
		$divi_troo_preloader_option = et_get_option('divi_troo_preloader_option');
	}else{
		$divi_troo_preloader_option = 'on';
	}
	if( $divi_troo_preloader_option == 'on' ){
	
		 ?>
<style type="text/css">
/* Preloader */
.preloader{position:fixed;top:0;left:0;right:0;bottom:0; z-index:100000;height:100%;width:100%;overflow:hidden !important;z-index:9999999999999999;background-color:var(--color2);}
.preloader .status{position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);}

.loader{
    padding: 20px 0;
    margin: 20px 0;
    text-align: center;
}
.loader .loader-inner{
    display: inline-block;
    border: 3px solid var(--color1);
    margin: 5px;
    position: relative;
    transform-style: preserve-3d;
    transform: rotateY(90deg);
}
.loader .box-1{ animation: loading-1 3s ease-in-out infinite; }
.loader .box-2{ animation: loading-2 3s ease-in-out infinite; }
.loader .box-3{
    width: 100px;
    height: 100px;
    animation: loading-3 3s ease-in-out infinite;
}
@keyframes loading-1{
    0%{
        -webkit-transform: rotateY(90deg);
        transform: rotateY(90deg);
    }
    50%{
        -webkit-transform: rotateX(200deg);
        transform: rotateX(200deg);
    }
    100%{
        -webkit-transform: rotateY(0deg);
        transform: rotateY(0deg);
    }
}
@keyframes loading-2{
    0%{
        -webkit-transform: rotateY(120deg);
        transform: rotateY(120deg);
    }
    50%{
        -webkit-transform: rotateX(250deg);
        transform: rotateX(250deg);
    }
    100%{
        -webkit-transform: rotateY(0deg);
        transform: rotateY(0deg);
    }
}
@keyframes loading-3{
    0%{
        -webkit-transform: rotateY(30deg);
        transform: rotateY(30deg);
    }
    50%{
        -webkit-transform: rotateX(390deg);
        transform: rotateX(390deg);
    }
    100%{
        -webkit-transform: rotateY(0deg);
        transform: rotateY(0deg);
    }
}
		</style>
<?php

	}

}



/* Adding Preloader Options Section

-------------------------------------------------------------- */

function troo_preloader_option_section(){ 

	if( et_get_option('divi_troo_preloader_option') != '' ){

		$divi_troo_preloader_option = et_get_option('divi_troo_preloader_option');

	}else{

		$divi_troo_preloader_option = 'on';

	}

	$is_et_fb_enabled = function_exists( 'et_core_is_fb_enabled' ) && et_core_is_fb_enabled();
	if( $divi_troo_preloader_option == 'on' && !$is_et_fb_enabled){	  

			?>
		
		<!-- Preloader -->
		<div class="preloader">
		  <div class="status">
				<div class="loader">
        			<div class="loader-inner box-1">
            			<div class="loader-inner box-2">
                		<div class="loader-inner box-3"></div>
            			</div>
					
        			</div>
    			</div>
		  </div>
		</div>
		
		<?php 

	}

}


/* Adding Preloader Active jQuery

-------------------------------------------------------------- */

function troo_preloader_js(){ 

	if( et_get_option('divi_troo_preloader_option') != '' ){

		$divi_troo_preloader_option = et_get_option('divi_troo_preloader_option');

	}else{

		$divi_troo_preloader_option = 'on';

	}

	if( $divi_troo_preloader_option == 'on' ){	

		

?>
<script type="text/javascript">

 
 jQuery(window).load(function() { // makes sure the whole site is loaded 
	jQuery('.status').fadeOut('fast'); // will first fade out the loading animation 
	jQuery('.preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website. 
	jQuery('body').delay(550).css({'overflow':'visible'});
})

        </script>
<?php



	}

}


/* Save Preloader Theme Options
-------------------------------------------------------------- */


function et_troo_library_layouts() {
	$libs = array();
	$args = array('post_type' => 'et_pb_layout', 'posts_per_page' => -1);
    $alllibrarys = get_posts($args);
    $all_ids = wp_list_pluck( $alllibrarys , 'post_title','post_title' );
	if(!empty($all_ids)){
	$libs += [null => 'None'];	
	foreach($all_ids as $key=>$val){
		$libs += [$key => esc_html__( $val, 'et_builder' )];
	}
	}else{
		$libs += [null => 'Sorry, Divi Library is empty. Create some layouts...'];
	}
	return $libs;    	
}
/* Custom page footer on Woo pages */


/* Add Hook For Add Extra Theme Options

-------------------------------------------------------------- */

add_action("epanel_render_maintabs", 'troo_epanel_tabs');

/* Add Hook For  Add Extra Theme Tabs Options

-------------------------------------------------------------- */

add_action("et_epanel_changing_options", 'troo_epanel_fields');

/* Add Preloader Theme Options

-------------------------------------------------------------- */

add_action('wp_head' , 'troo_custom_preloader_option_css');

/* Add Preloader Options Section

-------------------------------------------------------------- */

add_action('wp_body_open' , 'troo_preloader_option_section');

/* Add Preloader Footer Js

-------------------------------------------------------------- */

add_action('wp_footer' , 'troo_preloader_js');

/* Save Preloader Theme Options

-------------------------------------------------------------- */


add_action('wp_footer' , 'troo_custom_color_option_css');
