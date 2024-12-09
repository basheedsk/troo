jQuery(function ($) {
$(document).ready(function() {
	/* ------ Home ------ */
	$(".webhome_section10_blog .et_pb_post").each(function () {
		var post = $(this);
		$(this).find(".published").insertBefore(post.find('.entry-title'));
		$(this).find(".author").insertAfter(post.find('.post-content'));
		$(this).find(".published, .entry-title, .post-meta, .post-content, .author").wrapAll('<div class="webhome_section10_blog_content"></div>');
	});
	
	$('.webhome_section10_blog .post-meta').each(function() {
    	$(this).html($(this).html().replace(/\|/g, " "));
    	$(this).html($(this).html().replace('by', " "));
    	$(this).html(jQuery(this).html().replace(/,/g, ""));
    });
    //Do the same for ajax with pagination enabled
    $(document).bind('ready ajaxComplete', function() {
    	$('.webhome_section10_blog .post-meta').each(function() {
    		$(this).html($(this).html().replace(/\|/g, " "));
    		$(this).html($(this).html().replace('by', " "));
   			$(this).html(jQuery(this).html().replace(/,/g, ""));
    	});
    });
	
	$(".webhome_section10_blog .pagination a").click(function() {
        window.location.href = $(this).attr('href');
        return false;
    });
	
	$(".webhome_portfolio .project ").each(function () {
		var post = $(this);
		$(this).find(".et_pb_module_header, .post-meta").wrapAll('<div class="webhome_portfolio_content"></div>');
	});
	
	$(".webhome_portfolio .pagination a").click(function() {
        window.location.href = $(this).attr('href');
        return false;
    });
	
	/*------ Blog List ------*/
	$(".webbloglist_section2_blog .et_pb_post ").each(function () {
		var post = $(this);
		$(this).find(".entry-title, .post-meta,.post-content").wrapAll('<div class="webbloglist_section2_blog_content"></div>');
	});
	
	$(".webbloglist_section2_blog .pagination a").click(function() {
		window.location.href = $(this).attr('href');
		return false;
	});
	
	/* ------ Project Tag ------ */
	$(".webproject_portfoliotag .et_pb_post").each(function () {
		var post = $(this);
		$(this).find(".entry-title, .post-meta").wrapAll('<div class="webproject_portfoliotag_content"></div>');
	});
	
	$(".webproject_portfoliotag .pagination a").click(function() {
        window.location.href = $(this).attr('href');
        return false;
    });
	
	/* ------ FAQs ------ */
 	$('.tab-title').each(function () { 
 		var section_id = $(this).find("a").attr("href");
		$(this).find("a").removeAttr("href");
 		$(this).click(function() {
 			$(this).siblings().removeClass("active-tab");
 			$(this).addClass("active-tab");
 			$('.tab-content').hide();
 			$(section_id).show();
 		});
	});
	
	/* ------ Slide In Section ------ */
	var dl_ButtonToggle = $('.dl-btn-toggle');
  	var dl_SlideSidebar = $('.dl-slide-sidebar');
  	
	dl_ButtonToggle.click(function(e) {
      e.preventDefault();
      dl_ButtonToggle.toggleClass('is-opened');
      dl_SlideSidebar.toggleClass('is-opened');
      dl_SlideSidebar.addClass('has-transition');
      dl_SidebarCheck();
    })
	
  	$('.dl-close').click(function() {
      $('.is-opened').removeClass('is-opened');
      dl_SidebarCheck();
    })
	
	/* ------ Mobile Menu In Header ------ */
    $("body ul.et_mobile_menu li.menu-item-has-children, body ul.et_mobile_menu li.page_item_has_children").append('<a href="#" class="mobile-toggle"></a>');
    	$('ul.et_mobile_menu li.menu-item-has-children .mobile-toggle, ul.et_mobile_menu li.page_item_has_children .mobile-toggle').click(function(event) {
    		event.preventDefault();
    		$(this).parent('li').toggleClass('dt-open');
    		$(this).parent('li').find('ul.children').first().toggleClass('visible');
    		$(this).parent('li').find('ul.sub-menu').first().toggleClass('visible');
    	});
    	iconFINAL = 'P';
    	$('body ul.et_mobile_menu li.menu-item-has-children, body ul.et_mobile_menu li.page_item_has_children').attr('data-icon', iconFINAL);
    		$('.mobile-toggle').on('mouseover', function() {
    			$(this).parent().addClass('is-hover');
    		}).on('mouseout', function() {
    	$(this).parent().removeClass('is-hover');
    })
});
});