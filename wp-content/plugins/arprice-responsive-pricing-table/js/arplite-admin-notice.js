jQuery(document).on("click",".arplite_maybe_later_link,.arplite_rate_link",function(){jQuery.ajax({url:ajaxurl,type:"POST",data:{action:"arplite_dismiss_rate_notice"},success:function(){jQuery(".arplite-rate-notice").find(".notice-dismiss").trigger("click")}})}),jQuery(document).on("click",".arplite_already_rated_link",function(){jQuery.ajax({url:ajaxurl,type:"POST",data:{action:"arplite_dismiss_rate_notice_no_display"},success:function(){jQuery(".arplite-rate-notice").find(".notice-dismiss").trigger("click")}})}),jQuery(document).on("click",".arplite-news-notice .notice-dismiss",function(){var i=jQuery(this).parents(".arplite-news-notice").attr("id");jQuery.ajax({url:ajaxurl,type:"POST",data:{action:"arplite_dismiss_news",notice_id:i},success:function(){}})});