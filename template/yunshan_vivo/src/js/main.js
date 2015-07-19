define(function(require, exports, module) {

	require('jquery');
	jQuery.noConflict();

	(function($) {
		/*
		var announcement = function() {
			var obj = this;
			this.index = this.length = 0;
			// this.timestep = parseInt(slidebox.attr('timestep'));
			// this.timestep = !this.timestep ? 3000 : this.timestep;
			this.timestep = 3000;
			this.ancitems = $(".anc .module dl").find("dd");
			this.length = this.ancitems.length;

			if (this.ancitems.length < 2)
				return false;

			this.ancitems.each(function(i) {
				$(this).css('display', "none").bind('mouseover', function() {
					obj.stop();
				}).bind('mouseout', function() {
					obj.goon();
				});
			});

			this.active = function(index) {
				var curobj = this;
				$(this.ancitems[this.index]).fadeOut("slow", function() {
					$(curobj.ancitems[index]).fadeIn("slow");
					curobj.index = index;
				});
			};
			this.goon = function() {
				this.stop();
				var curobj = this;
				this.timer = setTimeout(function() {
					curobj.run();
				}, this.timestep);
			};
			this.stop = function() {
				clearTimeout(this.timer);
			};
			this.run = function() {
				var index = this.index + 1 < this.length ? this.index + 1 : 0;
				this.active(index);
				var ss = this;
				this.timer = setTimeout(function() {
					ss.run();
				}, this.timestep);
			};
			if (this.ancitems.length > 1) {
				this.run();
			}
		};
		*/

		var weixin_event = function(){
			var snsBox=$("#vivo-sns-list"),
			weixin=snsBox.find("a.weixin"),
			weixinoverbox=snsBox.find(".vivo-weixin-overbox");

			weixin.on({
				mouseenter : function(){
					weixinoverbox.css({display:"block",opacity:0}).stop().animate({opacity:1},300);
				},
				mouseleave : function(){
					weixinoverbox.stop().animate({opacity:0},300,function(){
						$(this).css({display:"none",opacity:0});
					});
				},
				click : function(){
					return false;
				}
			});

			$('#service_wechat').on({
				mouseenter : function(){
					$('#service').find(".vivo-weixin-overbox").css({display:"block",opacity:0}).stop().animate({opacity:1},300);
				},
				mouseleave : function(){
					$('#service').find(".vivo-weixin-overbox").stop().animate({opacity:0},300,function(){
						$(this).css({display:"none",opacity:0});
					});
				},
				click : function(){
					return false;
				}
			});
		};

		var ajaxpage = function() {
			$('.pg_viewthread').find('.pg>a').unbind().bind("click", function(){
				var pageURL = $(this).attr('href');
				$.get(pageURL, function(data){
					_hmt.push(['_trackPageview', pageURL]);
					$('#comment_list').html($(data).find('#comment_list').html());
					$('.pg_viewthread').find('.pg').html($(data).find('#pgt').find('.pg').html());
					setTimeout(function(){
						$('#comment_top')[0].scrollIntoView(true);
						ajaxpage();
					}, 500);
				});
				return false;
			});
		};

		$(document).ready(function() {
			//announcement();
			weixin_event();
			if($(".banner_box").length) {
				require.async('superslide', function(){
					$(".banner_box").slide({ mainCell:".bd ul",effect:"fade",easing:"linear",autoPlay:true,delayTime:400,interTime:3000});
				});
			}

			/*
			if($(".vfangeek.module .vpg_item").length) {
				require('hoverdir');
				$('.vfangeek.module .vpg_item').hoverdir();
			}
			*/

			/*$('.fl .fl_g').each(function(i){
				var fl_icn = $(this).find('.fl_icn_g');
				if(fl_icn.attr('data-fid')) {
					$(this).hover(
						function () {
							var icon = $(this).find('a>img');
							var icon_img = './template/yunshan_vivo/src/forumicon/' + fl_icn.attr('data-fid') + '.gif';
							icon.attr('data-origin', icon.attr('src')).attr('src',icon_img);
						},
						function () {
							var icon = $(this).find('a>img');
							icon.attr('src',icon.attr('data-origin'));
						}
					);
				}
			});

			$('.hotforum dl').each(function(i){
				var data_fid = $(this).find('dt>a').attr('data-fid');
				$(this).hover(
					function () {
						var icon = $(this).find('dt>a>img');
						var icon_img = './template/yunshan_vivo/src/forumicon/' + data_fid + '.gif';
						icon.attr('data-origin', icon.attr('src')).attr('src',icon_img);
					},
					function () {
						var icon = $(this).find('dt>a>img');
						icon.attr('src',icon.attr('data-origin'));
					}
				);
			});*/

			$('.vhot dl').mouseover(function(){
				$('.vhot dl').each(function(i){
					$(this).find('dd').hide();
				});
				$('.vhot dl').eq($(this).index()).find('dd').show();
			});

			var navs = $("#nv");
			if (navs.find("li").hasClass("a")) {
				var corner = navs.find("em");
				var current = navs.find("li.a");
				navs.find("li").on({
					mouseenter: function() {
						corner.stop().animate({left: $(this).position().left + ($(this).width() - corner.width()) / 2}, 500);
					},
					mouseleave: function() {
						corner.stop().animate({left: current.position().left + (current.width() - corner.width()) / 2}, 500);
					}
				});

				corner.css({left: current.position().left + (current.width() - corner.width()) / 2}).show();
			}

			if($('.pg_viewthread').find('.pg>a').length){
				ajaxpage();
			}

			$('#modmenu_btn').bind('click mouseover', function(){$('#modmenu').fadeIn("slow");});
			$('#modmenu').bind('mouseleave ', function(){$('#modmenu').fadeOut("slow");});
		});
	})(jQuery);

});

