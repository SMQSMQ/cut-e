
		          //元素置中
			function center(obj)
			{
				var windowHight= $(window).height();//屏幕的高度
				var windowWidth= $(window).width();//屏幕的高度
				var dHight = obj.height();//div的高度
				//alert(dHight)
				var dWidth = obj.width();//div的宽度
				//div顶部的距离
				var dTop = (windowHight - dHight)/2;
				//div左边的距离
				var dLeft = (windowWidth - dWidth)/2;
				//div剧中
				obj.css({'left':dLeft ,'top':dTop});
			}
			//插入提示框
			function tip(str, time)
			{
				if($('.tip-box').length > 0) {
					$('.tip-box').remove();
				}
				if(!time) time = 2000;
				$('body').append('<div class="tip-box"><p>'+str+'</p></div>');

				setTimeout(function(){
					$('.tip-box').show();//显示弹出框
					center($('.tip-box'))//局中弹出
				}, 100);
				setTimeout(function(){
					$('.tip-box').remove();
				}, time);//2秒后隐移除
			}


            //短信倒计时60秒

            var countdown=60;
			function settime(obj) {
			    if (countdown == 0) {
			        obj.removeAttribute("disabled");
			        obj.value="免费获取验证码";
			        countdown = 60;
			        return;
			    } else {
			        obj.setAttribute("disabled", true);
			        obj.value="重新发送(" + countdown + ")";
			        countdown--;
			    }
			setTimeout(function() {
			    settime(obj) }
			    ,1000)
			}

			//只能输入数字和英文

			 $.fn.onlyNumAlpha = function () {
				    $(this).keypress(function (event) {
				        var eventObj = event || e;
				        var keyCode = eventObj.keyCode || eventObj.which;
				        if ((keyCode >= 48 && keyCode <= 57) || (keyCode >= 65 && keyCode <= 90) || (keyCode >= 97 && keyCode <= 122))
				            return true;
				        else
				            return false;
				    }).focus(function () {
				        this.style.imeMode = 'disabled';
				    }).bind("paste", function () {
				        var clipboard = window.clipboardData.getData("Text");
				        if (/^(\d|[a-zA-Z])+$/.test(clipboard))
				            return true;
				        else
				            return false;
				    });
			};


			$(function (){
				lazyload();

			});

			//懒加载

			function lazyload() {
				setTimeout(function (){

					$('img.lazyload').each(function (){
						 var t = $(this);
						 var url = t.data('src');
						 if(!url) {
						 	return;
						 }
						 var img = new Image();
						 img.onload = function (){
						 	t.attr('src', this.src);
						 	t.removeAttr('data-src');
						 };
						 img.src = url;
					});
				}, 2000);
			};



			var lock = 0;
			function rollload(api, key, is_first, cb)
			{
				ls_key = key;

				$(window).unbind('scroll');
				setTimeout(function (){
					$(window).scroll(function (){
						var scrollTop = window.pageYOffset|| document.documentElement.scrollTop || document.body.scrollTop;
						if(lock) return;
						var scrollHeight = Math.max(document.body.scrollHeight,document.documentElement.scrollHeight);
						var windowHeight = $(this).height();
						if(scrollTop + windowHeight >= scrollHeight - 600){
							load();
						}
						cache.setItem('mall_top', scrollTop);
					});
				}, lazytime);

				function load(is_first){
					lock = 1;
					var count = $('ul.post li').length;
					if(count == 0 && is_first) {
						var p = 1;
					}else{
						var page = $('#ls>.item, ul.post li').last().data('page') * 1;
						var p = page + 1;
					}
					$('.loading-sm').show();
					if(api.indexOf('?') == -1) {
						var url = api + '?page=' + p;
					}else{
						var url = api + '&page=' + p;
					}

					var roll = sessionStorage.getItem(ls_key + '_scrollTop');
					if(is_first == 1  && roll) {
						url += '&first=1&ver=' + new Date().getTime();
					}
					$.get(url, function (html){

						if(html.length < 100) {

							$('.loading-sm').html('<div style="color:#fff">123554</div>');
						}else{
							setTimeout(function (){
								lock = 0;
							}, 100);
							$('#ls, ul.post').append(html);
							$('div.post-empty').remove();
							$('.loading-sm').hide();
							lazyload();

							if(is_first && roll) {
								setTimeout(function (){
									document.body.scrollTop = roll;
									sessionStorage.removeItem(ls_key + '_scrollTop');
								}, 10);
							}

							if(cb) {
								cb.call();
							}
						}
					});
				};


				if(is_first == 1) {
					load(1);
				}
			}




	// 下拉加载
			function dropLoads(url,index){
				var page = 0;
				var url = url;


				// dropload
				$('.tabs-atc').eq(index).dropload({
					// $('.tabs-atc').eq(index).find('.wrap').empty()
					scrollArea : window,
					loadDownFn : function(me){
						page++;
						console.log(url+page,index)
						$.get(url+page,function(data){
							var data = JSON.parse(data);
							 console.log(data)
							 if(data==null){
								 $('.dropload-down').css('display','none')
							 }
							 $.each(data,function(i,v){
								 console.log(i,v)
								 $('.tabs-atc').eq(index).find('.wrap').append('<div class="hm-cn-list"><div><img src="'+v.cover+'" class="hm-cn-listi"></div><div class="hm-cn-listx"><p>'+v.title+'</p><p>点击数'+v.pv+'次</p></div></div>')
							 })
							  me.resetload();
						})
						me.noData()
					}
				});
			}