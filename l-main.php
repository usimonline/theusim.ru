<!--allrecords-->

<div id="allrecords" class="t-records t-records_animated t-records_visible" data-hook="blocks-collection-content-node" data-tilda-project-id="538753" data-tilda-page-id="3190780" data-tilda-page-alias="main" data-tilda-formskey="3f508fc2ea7d23fde77f4bd2720b21b7" style="overflow-x: hidden;">

	<?php
	require_once ('header.php');
	?>


	<div id="rec64320842" class="r t-rec t-rec_pt_15 t-rec_pb_30" style="padding-top:15px;padding-bottom:30px;background-color:#ffffff; " data-animationappear="off" data-record-type="686" data-bg-color="#ffffff"><!-- t686 -->
		<div class="t686" data-tile-ratio="1.5384615384615">




			<div class="t686__container t-container">


				<?php for($count = 0 ; $count <$total; $count++): ?>


				<?php if($count % 4 == 0) echo '<div class="t686__row"><!-- Первые четыре страницы-->'; ?>



					<div class="t686__col t-col t-col_3 t-align_left ">
						<a class="t686__link" href="<?php echo $main_name; ?><?php echo $news_latest[$count]['url']; ?>" >
							<div class="t686__table" style="height: 400px; min-height: auto;">
								<div class="t686__cell t-align_left t-valign_middle">
									<div class="t686__bg t686__animation_slow t686__bg_animated t-bgimg loaded" data-original="<?php echo $main_name.'/picture'.$news_latest[$count]['url'].'img_1'; ?>"
										 style="background-image: url(&quot;<?php echo $main_name.'/picture'.$news_latest[$count]['url'].'img_1'; ?>&quot;);" >

									</div>
									<div class="t686__overlay t686__animation_slow" style="background-image: -moz-linear-gradient(top, rgba(0,0,0,0.40), rgba(0,0,0,0.40)); background-image: -webkit-linear-gradient(top, rgba(0,0,0,0.40), rgba(0,0,0,0.40)); background-image: -o-linear-gradient(top, rgba(0,0,0,0.40), rgba(0,0,0,0.40)); background-image: -ms-linear-gradient(top, rgba(0,0,0,0.40), rgba(0,0,0,0.40));">

									</div>
									<div class="t686__textwrapper t686__animation_slow ">
										<div class="t686__textwrapper__content">
											<div class="t686__inner-wrapper t686__inner-wrapper_animated-btn">
												<div class="t686__title t-name t-name_md"  style=""><?php echo $news_latest[$count]['teme']; ?>
												</div>
												<div class="t686__text t-descr t-descr_xxs"  style=""><?php echo $news_latest[$count]['description']; ?>
												</div>
											</div>
											<div class="t686__button-container t686__button_show-hover">
												<div class="t686__button-wrapper">
													<div class="t686__submit t-btn t-btn_sm" style="color:#ffffff;border:1px solid #ffffff;">Узнать Больше →
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</a>


						<?php if ($admin): ?>
							<form method="POST" enctype="multipart/form-data" action="<?php echo $main_name; ?>/admin/<?php echo $keys_value; ?>/<?php echo ($nomer_url - $nomer_url%50); ?>/">
                <textarea style="visibility: hidden;" name="datetime_re"
						  type="text" ><?php echo $news_latest[$count]['datetime']; ?></textarea>
								<input style="width:200px; height:50px; border: 1px solid #cccccc;" type="submit" value="Изменить"/>
							</form>
							<form method="POST" enctype="multipart/form-data" action="<?php echo $main_name; ?>/admin/<?php echo $keys_value; ?>/<?php echo ($nomer_url - $nomer_url%50 ); ?>/">
                <textarea style="visibility: hidden;" name="datetime_del"
						  type="text" ><?php echo $news_latest[$count]['datetime']; ?></textarea>
								<input style="width:200px; height:50px; border: 1px solid #cccccc;" type="submit" value="Удалить"/>
							</form>
						<?php endif; ?>

					</div>


				<?php if($count % 4 == 3) echo '</div>'; ?>


				<?php   endfor ?>

				<?php if($count % 4 != 3) echo '</div>'; ?>


			</div> <!-- Конец тега списка картинок-->
		</div>

		<script > $(document).ready(function() { t686_init('64320842'); }); $('.t686').bind('displayChanged',function(){	t686_setHeight('64320842'); });</script>
	</div>




	<div id="rec62435932" class="r t-rec t-rec_pt_30 t-rec_pb_30" style="padding-top:30px;padding-bottom:30px;background-color:#ffffff; " data-record-type="363" data-bg-color="#ffffff" data-animationappear="off">
		<!-- T029 -->
		<div class="t029">
			<div class="t029__container t-container">
				<div class="t029__col t-col t-col_12">
					<div class="t029__linewrapper">
						<div class="t029__opacity t029__opacity_left" style="background-image: -moz-linear-gradient(right, #000000, rgba(0,0,0,0)); background-image: -webkit-linear-gradient(right, #000000, rgba(0,0,0,0)); background-image: -o-linear-gradient(right, #000000, rgba(0,0,0,0)); background-image: -ms-linear-gradient(right, #000000, rgba(0,0,0,0));">

						</div>
						<div class="t029__line" style="background: #000000;">

						</div>
						<div class="t029__opacity t029__opacity_right" style="background-image: -moz-linear-gradient(left, #000000, rgba(0,0,0,0)); background-image: -webkit-linear-gradient(left, #000000, rgba(0,0,0,0)); background-image: -o-linear-gradient(left, #000000, rgba(0,0,0,0)); background-image: -ms-linear-gradient(left, #000000, rgba(0,0,0,0));">

						</div>
					</div>
				</div>
			</div>

		</div>
	</div>



	<div id="rec60127043" class="r t-rec t-rec_pt_0 t-screenmax-980px" style="padding-top:0px; " data-animationappear="off" data-record-type="734" data-screen-max="980px"><!-- t734 --><div class="t734"> <div class="t-slds t734__leftaligned t734__witharrows" style=""> <div class="t-container_100 t-slds__main"> <div class="t-slds__container"> <div class="t-slds__items-wrapper t-slds_animated-none" data-slider-transition="300" data-slider-with-cycle="true" data-slider-correct-height="true" data-auto-correct-mobile-width="false" data-slider-initialized="true" data-slider-totalslides="2" data-slider-pos="1" data-slider-cycle="" data-slider-animated="" style="width: 0px; transform: translate3d(0px, 0px, 0px); touch-action: pan-y; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); height: 0px;"> <div class="t-slds__item t-slds__item-loaded" data-slide-index="0" style="width: 0px;"> <div class="t734__slds-wrapper t-slds__wrapper" style=""> <div class="t-cover__carrier" data-content-cover-bg="<?php echo $main_name; ?>/index/sridka_01.jpg" style="background-image: url(&#39;<?php echo $main_name; ?>/index/sridka_02.jpg&#39;); height:10vh;"></div> <div class="t-cover__filter" style="height:10vh; background-color:#000;filter: alpha(opacity:0); KHTMLOpacity: 0.0; MozOpacity: 0.0; opacity: 0.0; "></div> <div class="t734__table" style="height:10vh;"> <div class="t-cell t-valign_middle"> <div class="t-container"> <div class="t734__wrapper t-width t-width_8 t-margin_left"> <div class="t734__textwrapper t-align_left"> </div> </div> </div> </div> </div> </div> </div><div class="t-slds__item t-slds__item-loaded t-slds__item_active" data-slide-index="1" style="width: 0px;"> <div class="t734__slds-wrapper t-slds__wrapper" style=""> <div class="t-cover__carrier" data-content-cover-bg="<?php echo $main_name; ?>/index/sridka_03.jpg" style="background-image: url(&#39;<?php echo $main_name; ?>/index/sridka_04.jpg&#39;); height:10vh;"></div> <div class="t-cover__filter" style="height:10vh; background-color:#000;filter: alpha(opacity:0); KHTMLOpacity: 0.0; MozOpacity: 0.0; opacity: 0.0; "></div> <div class="t734__table" style="height:10vh;"> <div class="t-cell t-valign_middle"> <div class="t-container"> <div class="t734__wrapper t-width t-width_8 t-margin_left"> <div class="t734__textwrapper t-align_left"> </div> </div> </div> </div> </div> </div> </div> <div class="t-slds__item  t-slds__item-loaded" data-slide-index="2" style="width: 0px;"> <div class="t734__slds-wrapper t-slds__wrapper" style=""> <div class="t-cover__carrier" data-content-cover-bg="<?php echo $main_name; ?>/index/sridka_01.jpg" style="background-image: url(&#39;<?php echo $main_name; ?>/index/sridka_02.jpg&#39;); height:10vh;"></div> <div class="t-cover__filter" style="height:10vh; background-color:#000;filter: alpha(opacity:0); KHTMLOpacity: 0.0; MozOpacity: 0.0; opacity: 0.0; "></div> <div class="t734__table" style="height:10vh;"> <div class="t-cell t-valign_middle"> <div class="t-container"> <div class="t734__wrapper t-width t-width_8 t-margin_left"> <div class="t734__textwrapper t-align_left"> </div> </div> </div> </div> </div> </div> </div><div class="t-slds__item" data-slide-index="3" style="width: 0px;"> <div class="t734__slds-wrapper t-slds__wrapper" style=""> <div class="t-cover__carrier" data-content-cover-bg="<?php echo $main_name; ?>/index/sridka_03.jpg" style="background-image: url(&#39;<?php echo $main_name; ?>/index/sridka_04.jpg&#39;); height:10vh;"></div> <div class="t-cover__filter" style="height:10vh; background-color:#000;filter: alpha(opacity:0); KHTMLOpacity: 0.0; MozOpacity: 0.0; opacity: 0.0; "></div> <div class="t734__table" style="height:10vh;"> <div class="t-cell t-valign_middle"> <div class="t-container"> <div class="t734__wrapper t-width t-width_8 t-margin_left"> <div class="t734__textwrapper t-align_left"> </div> </div> </div> </div> </div> </div> </div> </div> </div> <div class="t-slds__arrow_container "> <style > #rec60127043 .t-slds__arrow_wrapper:hover .t-slds__arrow-withbg { background-color: rgba() !important; }</style><div class="t-slds__arrow_wrapper t-slds__arrow_wrapper-left" data-slide-direction="left" style="height: 0px;"> <div class="t-slds__arrow t-slds__arrow-left "> <div class="t-slds__arrow_body t-slds__arrow_body-left" style="width: 12px;"> <svg style="display: block" viewBox="0 0 12 24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <desc>Left</desc> <polyline fill="none" stroke="#222" stroke-linejoin="butt" stroke-linecap="butt" stroke-width="0" points="0,0 12,12 0,24"></polyline> </svg> </div> </div></div><div class="t-slds__arrow_wrapper t-slds__arrow_wrapper-right" data-slide-direction="right" style="height: 0px;"> <div class="t-slds__arrow t-slds__arrow-right "> <div class="t-slds__arrow_body t-slds__arrow_body-right" style="width: 12px;"> <svg style="display: block" viewBox="0 0 12 24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <desc>Right</desc> <polyline fill="none" stroke="#222" stroke-linejoin="butt" stroke-linecap="butt" stroke-width="0" points="0,0 12,12 0,24"></polyline> </svg> </div> </div></div> </div> </div> </div></div>
		<script > $(document).ready(function() { t_sldsInit('60127043'); }); $('.t734').bind('displayChanged',function(){ t_slds_updateSlider('60127043'); }); </script><style > #rec60127043 .t-slds__bullet_active .t-slds__bullet_body { background-color: #222 !important; } #rec60127043 .t-slds__bullet:hover .t-slds__bullet_body { background-color: #222 !important; }</style><style>#rec60127043 .t-btn:not(.t-animate_no-hover):hover{ box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1) !important;	}	#rec60127043 .t-btn:not(.t-animate_no-hover){ -webkit-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, border-color 0.2s ease-in-out, box-shadow 0.2s ease-in-out; transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, border-color 0.2s ease-in-out, box-shadow 0.2s ease-in-out;	}</style>
	</div>

	<div id="rec60127044" class="r t-rec t-rec_pt_30 t-rec_pb_0 t-screenmin-980px" style="padding-top:30px;padding-bottom:0px; " data-animationappear="off" data-record-type="734" data-screen-min="980px"><!-- t734 --><div class="t734"> <div class="t-slds t734__witharrows" style=""> <div class="t-container_100 t-slds__main"> <div class="t-slds__container"> <div class="t-slds__items-wrapper t-slds_animated-slow" data-slider-transition="500" data-slider-with-cycle="true" data-slider-correct-height="true" data-auto-correct-mobile-width="false" data-slider-timeout="2000" data-slider-initialized="true" data-slider-totalslides="2" data-slider-pos="1" data-slider-cycle="" data-slider-animated="" style="width: 5396px; transform: translate3d(-1349px, 0px, 0px); touch-action: pan-y; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); height: 202px;"> <div class="t-slds__item t-slds__item-loaded" data-slide-index="0" style="width: 1349px;"> <div class="t734__slds-wrapper t-slds__wrapper" style=""> <div class="t-cover__carrier loaded" data-content-cover-bg="<?php echo $main_name; ?>/index/sridka_01.jpg" style="background-image: url(&quot;<?php echo $main_name; ?>/index/sridka_02.jpg&quot;); height: 35vh;" ></div> <div class="t-cover__filter" style="height:35vh; background-color:#000;filter: alpha(opacity:0); KHTMLOpacity: 0.0; MozOpacity: 0.0; opacity: 0.0; "></div> <div class="t734__table" style="height:35vh;"> <div class="t-cell t-valign_bottom"> <div class="t-container"> <div class="t734__wrapper t-width t-width_8 t-margin_right"> <div class="t734__textwrapper t-align_right">
														<div class="t734__title t-title t-title_sm"  style="text-transform:uppercase;"><br></div> </div> </div> </div> </div> </div> </div> </div><div class="t-slds__item t-slds__item-loaded t-slds__item_active" data-slide-index="1" style="width: 1349px;"> <div class="t734__slds-wrapper t-slds__wrapper" style=""> <div class="t-cover__carrier loaded" data-content-cover-bg="<?php echo $main_name; ?>/index/sridka_03.jpg" style="background-image: url(&quot;<?php echo $main_name; ?>/index/sridka_04.jpg&quot;); height: 35vh;" ></div> <div class="t-cover__filter" style="height:35vh; background-color:#000;filter: alpha(opacity:0); KHTMLOpacity: 0.0; MozOpacity: 0.0; opacity: 0.0; "></div> <div class="t734__table" style="height:35vh;"> <div class="t-cell t-valign_bottom"> <div class="t-container"> <div class="t734__wrapper t-width t-width_8 t-margin_right"> <div class="t734__textwrapper t-align_right">
														<div class="t734__title t-title t-title_sm"  style="text-transform:uppercase;"><br></div> </div> </div> </div> </div> </div> </div> </div> <div class="t-slds__item  t-slds__item-loaded" data-slide-index="2" style="width: 1349px;"> <div class="t734__slds-wrapper t-slds__wrapper" style=""> <div class="t-cover__carrier loaded" data-content-cover-bg="<?php echo $main_name; ?>/index/sridka_01.jpg" style="background-image: url(&quot;<?php echo $main_name; ?>/index/sridka_01.jpg&quot;); height: 35vh;" ></div> <div class="t-cover__filter" style="height:35vh; background-color:#000;filter: alpha(opacity:0); KHTMLOpacity: 0.0; MozOpacity: 0.0; opacity: 0.0; "></div> <div class="t734__table" style="height:35vh;"> <div class="t-cell t-valign_bottom"> <div class="t-container"> <div class="t734__wrapper t-width t-width_8 t-margin_right"> <div class="t734__textwrapper t-align_right">
														<div class="t734__title t-title t-title_sm"  style="text-transform:uppercase;"><br></div> </div> </div> </div> </div> </div> </div> </div><div class="t-slds__item" data-slide-index="3" style="width: 1349px;"> <div class="t734__slds-wrapper t-slds__wrapper" style=""> <div class="t-cover__carrier" data-content-cover-bg="<?php echo $main_name; ?>/index/sridka_03.jpg" style="background-image: url(&#39;<?php echo $main_name; ?>/index/sridka_04.jpg&#39;); height:35vh;"></div> <div class="t-cover__filter" style="height:35vh; background-color:#000;filter: alpha(opacity:0); KHTMLOpacity: 0.0; MozOpacity: 0.0; opacity: 0.0; "></div> <div class="t734__table" style="height:35vh;"> <div class="t-cell t-valign_bottom"> <div class="t-container"> <div class="t734__wrapper t-width t-width_8 t-margin_right"> <div class="t734__textwrapper t-align_right">
														<div class="t734__title t-title t-title_sm"  style="text-transform:uppercase;"><br></div> </div> </div> </div> </div> </div> </div> </div> </div> </div> <div class="t-slds__arrow_container "> <style > #rec60127044 .t-slds__arrow_wrapper:hover .t-slds__arrow-withbg { background-color: rgba() !important; }</style><div class="t-slds__arrow_wrapper t-slds__arrow_wrapper-left" data-slide-direction="left" style="height: 202px;"> <div class="t-slds__arrow t-slds__arrow-left "> <div class="t-slds__arrow_body t-slds__arrow_body-left" style="width: 14px;"> <svg style="display: block" viewBox="0 0 14.6 26" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <desc>Left</desc> <polyline fill="none" stroke="#222" stroke-linejoin="butt" stroke-linecap="butt" stroke-width="2" points="1,1 13,13 1,25"></polyline> </svg> </div> </div></div><div class="t-slds__arrow_wrapper t-slds__arrow_wrapper-right" data-slide-direction="right" style="height: 202px;"> <div class="t-slds__arrow t-slds__arrow-right "> <div class="t-slds__arrow_body t-slds__arrow_body-right" style="width: 14px;"> <svg style="display: block" viewBox="0 0 14.6 26" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <desc>Right</desc> <polyline fill="none" stroke="#222" stroke-linejoin="butt" stroke-linecap="butt" stroke-width="2" points="1,1 13,13 1,25"></polyline> </svg> </div> </div></div> </div> </div> </div></div><script > $(document).ready(function() { t_sldsInit('60127044'); }); $('.t734').bind('displayChanged',function(){ t_slds_updateSlider('60127044'); }); </script><style > #rec60127044 .t-slds__bullet_active .t-slds__bullet_body { background-color: #222 !important; } #rec60127044 .t-slds__bullet:hover .t-slds__bullet_body { background-color: #222 !important; }</style><style>#rec60127044 .t-btn:not(.t-animate_no-hover):hover{ box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1) !important;	}	#rec60127044 .t-btn:not(.t-animate_no-hover){ -webkit-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, border-color 0.2s ease-in-out, box-shadow 0.2s ease-in-out; transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, border-color 0.2s ease-in-out, box-shadow 0.2s ease-in-out;	}</style>
	</div>



	<div id="rec62435942" class="r t-rec t-rec_pt_30 t-rec_pb_30" style="padding-top:30px;padding-bottom:30px;background-color:#ffffff; " data-record-type="363" data-bg-color="#ffffff" data-animationappear="off">
		<!-- T029 -->
		<div class="t029"> <div class="t029__container t-container"> <div class="t029__col t-col t-col_12"> <div class="t029__linewrapper"> <div class="t029__opacity t029__opacity_left" style="background-image: -moz-linear-gradient(right, #000000, rgba(0,0,0,0)); background-image: -webkit-linear-gradient(right, #000000, rgba(0,0,0,0)); background-image: -o-linear-gradient(right, #000000, rgba(0,0,0,0)); background-image: -ms-linear-gradient(right, #000000, rgba(0,0,0,0));"></div> <div class="t029__line" style="background: #000000;"></div> <div class="t029__opacity t029__opacity_right" style="background-image: -moz-linear-gradient(left, #000000, rgba(0,0,0,0)); background-image: -webkit-linear-gradient(left, #000000, rgba(0,0,0,0)); background-image: -o-linear-gradient(left, #000000, rgba(0,0,0,0)); background-image: -ms-linear-gradient(left, #000000, rgba(0,0,0,0));"></div> </div> </div> </div></div>
	</div>
	<div id="rec62123540" class="r t-rec t-rec_pt_45 t-rec_pb_30 t-screenmin-980px" style="padding-top:45px;padding-bottom:30px;background-color:#000000; " data-record-type="60" data-screen-min="980px" data-bg-color="#000000" data-animationappear="off"><!-- T050 --><div class="t050"> <div class="t-container t-align_center"> <div class="t-col t-col_10 t-prefix_1">
					<div class="t050__title t-title t-title_xxl"  style="">
						<div style="font-size:32px;color:#ffffff;" data-customstyle="yes"><h1><?php echo $topnews[0]['description']; ?></h1></div></div>
					<div class="t050__descr t-descr t-descr_xxl"  style="">
						<div style="font-size:22px;color:#ffffff;" data-customstyle="yes"><?php echo $topnews[0]['text']; ?></div></div> </div> </div></div></div>

	<div id="rec62560045" class="r t-rec t-rec_pt_45 t-rec_pb_30 t-screenmax-980px" style="padding-top:45px;padding-bottom:30px;background-color:#000000; " data-record-type="60" data-screen-max="980px" data-bg-color="#000000" data-animationappear="off"><!-- T050 --><div class="t050"> <div class="t-container t-align_center"> <div class="t-col t-col_10 t-prefix_1">
					<div class="t050__title t-title t-title_xxl"  style=""><div style="font-size:28px;color:#ffffff;" data-customstyle="yes"><?php echo $topnews[0]['description']; ?></div></div>
					<div class="t050__descr t-descr t-descr_xxl"  style="">
						<div style="font-size:16px;color:#ffffff;" data-customstyle="yes"><?php echo $topnews[0]['text']; ?></div></div> </div> </div></div>
	</div>

	<div id="rec62123703" class="r t-rec t-rec_pt_0 t-rec_pb_75" style="padding-top:0px;padding-bottom:75px;background-color:#000000; " data-animationappear="off" data-record-type="670" data-bg-color="#000000"><div class="t670"> <div class="t-slds" style=""> <div class="t-container t-slds__main"> <div class="t-slds__container t-width t-width_9 t-margin_auto"> <div class="t-slds__items-wrapper t-slds_animated-fast t-slds__witharrows" data-slider-transition="300" data-slider-with-cycle="true" data-slider-correct-height="true" data-auto-correct-mobile-width="false" data-slider-arrows-nearpic="yes" data-slider-initialized="true" data-slider-totalslides="10" data-slider-pos="1" data-slider-cycle="" data-slider-animated="" style="width: 10320px; transform: translate3d(-860px, 0px, 0px); touch-action: pan-y; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); height: 573px;"> <div class="t-slds__item t-slds__item-loaded" data-slide-index="0" style="width: 860px;"> <div class="t-width t-width_9 t-margin_auto" itemscope="" itemtype="http://schema.org/ImageObject"> <div class="t-slds__wrapper t-align_center"> <img alt="" class="t-slds__img t-img loaded" src="<?php echo $main_name; ?><?php echo '/picture'.$topnews[0]['url'].'img_1'; ?>" data-original="<?php echo $main_name; ?><?php echo '/picture'.$topnews[0]['url'].'img_1'; ?>"> </div> </div> </div><div class="t-slds__item t-slds__item-loaded t-slds__item_active" data-slide-index="1" style="width: 860px;"> <div class="t-width t-width_9 t-margin_auto" itemscope="" itemtype="http://schema.org/ImageObject"> <div class="t-slds__wrapper t-align_center"> <img alt="" class="t-slds__img t-img loaded" src="<?php echo $main_name; ?><?php echo '/picture'.$topnews[0]['url'].'img_1'; ?>" data-original="<?php echo $main_name; ?><?php echo '/picture'.$topnews[0]['url'].'img_1'; ?>"> </div> </div> </div> <div class="t-slds__item t-slds__item-loaded" data-slide-index="2" style="width: 860px;"> <div class="t-width t-width_9 t-margin_auto" itemscope="" itemtype="http://schema.org/ImageObject"> <div class="t-slds__wrapper t-align_center"> <img alt="" class="t-slds__img t-img loaded" src="<?php echo $main_name; ?><?php echo '/picture'.$topnews[0]['url'].'img_5'; ?>" data-original="<?php echo $main_name; ?><?php echo '/picture'.$topnews[0]['url'].'img_5'; ?>"> </div> </div> </div> <div class="t-slds__item" data-slide-index="3" style="width: 860px;"> <div class="t-width t-width_9 t-margin_auto" itemscope="" itemtype="http://schema.org/ImageObject"> <div class="t-slds__wrapper t-align_center"> <img alt="" class="t-slds__img t-img loaded" src="<?php echo $main_name; ?><?php echo '/picture'.$topnews[0]['url'].'img_6'; ?>" data-original="<?php echo $main_name; ?><?php echo '/picture'.$topnews[0]['url'].'img_6'; ?>"> </div> </div> </div> <div class="t-slds__item" data-slide-index="4" style="width: 860px;"> <div class="t-width t-width_9 t-margin_auto" itemscope="" itemtype="http://schema.org/ImageObject"> <div class="t-slds__wrapper t-align_center"> <img alt="" class="t-slds__img t-img" src="<?php echo $main_name; ?><?php echo '/picture'.$topnews[0]['url'].'img_2'; ?>" data-original="<?php echo $main_name; ?><?php echo '/picture'.$topnews[0]['url'].'img_2'; ?>"> </div> </div> </div> <div class="t-slds__item" data-slide-index="5" style="width: 860px;"> <div class="t-width t-width_9 t-margin_auto" itemscope="" itemtype="http://schema.org/ImageObject"> <div class="t-slds__wrapper t-align_center"> <img alt="" class="t-slds__img t-img" src="<?php echo $main_name; ?><?php echo '/picture'.$topnews[0]['url'].'img_7'; ?>" data-original="<?php echo $main_name; ?><?php echo '/picture'.$topnews[0]['url'].'img_7'; ?>"> </div> </div> </div> <div class="t-slds__item" data-slide-index="6" style="width: 860px;"> <div class="t-width t-width_9 t-margin_auto" itemscope="" itemtype="http://schema.org/ImageObject"> <div class="t-slds__wrapper t-align_center"> <img alt="" class="t-slds__img t-img" src="<?php echo $main_name; ?><?php echo '/picture'.$topnews[0]['url'].'img_8'; ?>" data-original="<?php echo $main_name; ?><?php echo '/picture'.$topnews[0]['url'].'img_8'; ?>"> </div> </div> </div> <div class="t-slds__item" data-slide-index="7" style="width: 860px;"> <div class="t-width t-width_9 t-margin_auto" itemscope="" itemtype="http://schema.org/ImageObject"> <div class="t-slds__wrapper t-align_center"> <img alt="" class="t-slds__img t-img" src="<?php echo $main_name; ?><?php echo '/picture'.$topnews[0]['url'].'img_3'; ?>" data-original="<?php echo $main_name; ?><?php echo '/picture'.$topnews[0]['url'].'img_3'; ?>"> </div> </div> </div> <div class="t-slds__item" data-slide-index="8" style="width: 860px;"> <div class="t-width t-width_9 t-margin_auto" itemscope="" itemtype="http://schema.org/ImageObject"> <div class="t-slds__wrapper t-align_center"> <img alt="" class="t-slds__img t-img" src="<?php echo $main_name; ?><?php echo '/picture'.$topnews[0]['url'].'img_9'; ?>" data-original="<?php echo $main_name; ?><?php echo '/picture'.$topnews[0]['url'].'img_9'; ?>"> </div> </div> </div> <div class="t-slds__item" data-slide-index="9" style="width: 860px;"> <div class="t-width t-width_9 t-margin_auto" itemscope="" itemtype="http://schema.org/ImageObject"> <div class="t-slds__wrapper t-align_center"> <img alt="" class="t-slds__img t-img" src="<?php echo $main_name; ?><?php echo '/picture'.$topnews[0]['url'].'img_4'; ?>" data-original="<?php echo $main_name; ?><?php echo '/picture'.$topnews[0]['url'].'img_4'; ?>"> </div> </div> </div> <div class="t-slds__item  t-slds__item-loaded" data-slide-index="10" style="width: 860px;"> <div class="t-width t-width_9 t-margin_auto" itemscope="" itemtype="http://schema.org/ImageObject"> <div class="t-slds__wrapper t-align_center"> <img alt="" class="t-slds__img t-img" src="<?php echo $main_name; ?><?php echo '/picture'.$topnews[0]['url'].'img_1'; ?>" data-original="<?php echo $main_name; ?><?php echo '/picture'.$topnews[0]['url'].'img_1'; ?>"> </div> </div> </div><div class="t-slds__item" data-slide-index="11" style="width: 860px;"> <div class="t-width t-width_9 t-margin_auto" itemscope="" itemtype="http://schema.org/ImageObject"> <div class="t-slds__wrapper t-align_center"> <img alt="" class="t-slds__img t-img" src="<?php echo $main_name; ?><?php echo '/picture'.$topnews[0]['url'].'img_1'; ?>" data-original="<?php echo $main_name; ?><?php echo '/picture'.$topnews[0]['url'].'img_1'; ?>"> </div> </div> </div> </div> <div class="t-slds__bullet_wrapper"> <div class="t-slds__bullet t-slds__bullet_active" data-slide-bullet-for="1"> <div class="t-slds__bullet_body" style=""></div> </div> <div class="t-slds__bullet" data-slide-bullet-for="2"> <div class="t-slds__bullet_body" style=""></div> </div> <div class="t-slds__bullet" data-slide-bullet-for="3"> <div class="t-slds__bullet_body" style=""></div> </div> <div class="t-slds__bullet" data-slide-bullet-for="4"> <div class="t-slds__bullet_body" style=""></div> </div> <div class="t-slds__bullet" data-slide-bullet-for="5"> <div class="t-slds__bullet_body" style=""></div> </div> <div class="t-slds__bullet" data-slide-bullet-for="6"> <div class="t-slds__bullet_body" style=""></div> </div> <div class="t-slds__bullet" data-slide-bullet-for="7"> <div class="t-slds__bullet_body" style=""></div> </div> <div class="t-slds__bullet" data-slide-bullet-for="8"> <div class="t-slds__bullet_body" style=""></div> </div> <div class="t-slds__bullet" data-slide-bullet-for="9"> <div class="t-slds__bullet_body" style=""></div> </div> <div class="t-slds__bullet" data-slide-bullet-for="10"> <div class="t-slds__bullet_body" style=""></div> </div> </div> </div> <div class="t-slds__arrow_container t-slds__arrow_container-outside" style="max-width: 1058px;"> <style > #rec62123703 .t-slds__arrow_wrapper:hover .t-slds__arrow-withbg { border-color: #ffe100 !important; background-color: rgba() !important; }</style><div class="t-slds__arrow_wrapper t-slds__arrow_wrapper-left" data-slide-direction="left" style="height: 573px;"> <div class="t-slds__arrow t-slds__arrow-left "> <div class="t-slds__arrow_body t-slds__arrow_body-left" style="width: 39px;"> <svg style="display: block" viewBox="0 0 43.5 63" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <style > #rec62123703 .t-slds__arrow_wrapper polyline { -webkit-transition: stroke ease-in-out .2s; -moz-transition: stroke ease-in-out .2s; -o-transition: stroke ease-in-out .2s; transition: stroke ease-in-out .2s; } #rec62123703 .t-slds__arrow_wrapper:hover polyline { stroke: #ffe100 !important; } </style> <desc>Left</desc> <polyline fill="none" stroke="#fcf9f9" stroke-linejoin="butt" stroke-linecap="butt" stroke-width="15" points="7.5,7.5 31.5,31.5 7.5,55.5"></polyline> </svg> </div> </div></div><div class="t-slds__arrow_wrapper t-slds__arrow_wrapper-right" data-slide-direction="right" style="height: 573px;"> <div class="t-slds__arrow t-slds__arrow-right "> <div class="t-slds__arrow_body t-slds__arrow_body-right" style="width: 39px;"> <svg style="display: block" viewBox="0 0 43.5 63" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <desc>Right</desc> <polyline fill="none" stroke="#fcf9f9" stroke-linejoin="butt" stroke-linecap="butt" stroke-width="15" points="7.5,7.5 31.5,31.5 7.5,55.5"></polyline> </svg> </div> </div></div> </div> <div class="t-slds__caption__container"> </div> </div> </div></div><script > $(document).ready(function() { t670_init('62123703'); t_sldsInit('62123703'); }); $('.t670').bind('displayChanged',function(){ t_slds_updateSlider('62123703'); t_slds_positionArrows('62123703'); }); </script><style > #rec62123703 .t-slds__bullet_active .t-slds__bullet_body { background-color: #222 !important; } #rec62123703 .t-slds__bullet:hover .t-slds__bullet_body { background-color: #222 !important; }</style></div>


	<div id="rec62123711" class="r t-rec t-rec_pt_45 t-rec_pb_45 r_anim r_showed" style="padding-top:45px;padding-bottom:45px; " data-record-type="526">
		<!-- t526 -->
		<div class="t526">
			<div class="t-section__container t-container">
				<div class="t-col t-col_12">
					<div class="t-section__topwrapper t-align_center">
						<div class="t-section__title t-title t-title_xs" ><?php echo $toplist[0]['description'];?>
						</div>
					</div>
				</div>
			</div>
			<div class="t526__container t-container">
				<?php $rabotniki_temp = unserialize($toplist[0]['url_ext']);
				?>

				<div class="t526__col t-col t-col_4 t-align_center t526__col-mobstyle"><div class="t526__itemwrapper t526__itemwrapper_3"><div class="t526__imgwrapper t-margin_auto">
							<div class="t526__bgimg t526__img_circle t-margin_auto t-bgimg loaded"
								 data-original="<?php echo $main_name; ?>/picture<?php echo $toplist[0]['url'];?>img_1" style="background-image: url(&quot;<?php echo $main_name; ?>/picture<?php echo $toplist[0]['url'];?>img_1&quot;);" >
							</div>
						</div>
						<div class="t526__wrappercenter">

							<div class="t526__persname t-name t-name_lg t526__bottommargin_sm" style="" ><?php echo $rabotniki_temp[0][0];?></div>

							<div class="t526__persdescr t-descr t-descr_xxs t526__bottommargin_lg" style="" ><?php echo $rabotniki_temp[0][1];?>
							</div> <div class="t526__perstext t-text t-text_xs" style="" ><?php echo $rabotniki_temp[3][0];?></div> </div></div> </div>
				<div class="t526__col t-col t-col_4 t-align_center t526__col-mobstyle"><div class="t526__itemwrapper t526__itemwrapper_3">
						<div class="t526__imgwrapper t-margin_auto">

							<div class="t526__bgimg t526__img_circle t-margin_auto t-bgimg loaded"
																		  data-original="<?php echo $main_name; ?>/picture<?php echo $toplist[0]['url'];?>img_2" style="background-image: url(&quot;<?php echo $main_name; ?>/picture<?php echo $toplist[0]['url'];?>img_2&quot;);" ></div></div> <div class="t526__wrappercenter">
							<div class="t526__persname t-name t-name_lg t526__bottommargin_sm" style="" ><?php echo $rabotniki_temp[1][0];?></div>
							<div class="t526__persdescr t-descr t-descr_xxs t526__bottommargin_lg" style="" ><?php echo $rabotniki_temp[1][1];?></div>
							<div class="t526__perstext t-text t-text_xs" style="" ><?php echo $rabotniki_temp[4][0];?></div> </div></div> </div> <div class="t526__col t-col t-col_4 t-align_center t526__col-mobstyle"><div class="t526__itemwrapper t526__itemwrapper_3"><div class="t526__imgwrapper t-margin_auto">


							<div class="t526__bgimg t526__img_circle t-margin_auto t-bgimg loaded"
								 data-original="<?php echo $main_name; ?>/picture<?php echo $toplist[0]['url'];?>img_3" style="background-image: url(&quot;<?php echo $main_name; ?>/picture<?php echo $toplist[0]['url'];?>img_3&quot;);" ></div></div>
						<div class="t526__wrappercenter">
							<div class="t526__persname t-name t-name_lg t526__bottommargin_sm" style="" ><?php echo $rabotniki_temp[2][0];?></div>
							<div class="t526__persdescr t-descr t-descr_xxs t526__bottommargin_lg" style="" ><?php echo $rabotniki_temp[2][1	];?></div>
							<div class="t526__perstext t-text t-text_xs" style="" ><?php echo $rabotniki_temp[5][0];?></div> </div></div> </div></div><div class="t-section__container t-container"><div class="t-col t-col_12"><div class="t-section__bottomwrapper t-clear t-align_center "><a href="http://<?php echo $site_name; ?>/obuchenie/kursi-stilista/"  class="t-btn" style="color:#ffffff;background-color:#000000;"><table style="width:100%; height:100%;"><tbody><tr><td>Курсы стилиста</td></tr></tbody></table></a></div></div></div> </div></div>


	<div class="t029"> <div class="t029__container t-container"> <div class="t029__col t-col t-col_12"> <div class="t029__linewrapper"> <div class="t029__opacity t029__opacity_left" style="background-image: -moz-linear-gradient(right, #000000, rgba(0,0,0,0)); background-image: -webkit-linear-gradient(right, #000000, rgba(0,0,0,0)); background-image: -o-linear-gradient(right, #000000, rgba(0,0,0,0)); background-image: -ms-linear-gradient(right, #000000, rgba(0,0,0,0));"></div> <div class="t029__line" style="background: #000000;"></div> <div class="t029__opacity t029__opacity_right" style="background-image: -moz-linear-gradient(left, #000000, rgba(0,0,0,0)); background-image: -webkit-linear-gradient(left, #000000, rgba(0,0,0,0)); background-image: -o-linear-gradient(left, #000000, rgba(0,0,0,0)); background-image: -ms-linear-gradient(left, #000000, rgba(0,0,0,0));"></div> </div> </div> </div>

	</div>

</div>




<div id="rec60127043" class="r t-rec t-rec_pt_0 t-screenmax-980px" style="padding-top:0px; " data-animationappear="off" data-record-type="734" data-screen-max="980px"><!-- t734 --><div class="t734"> <div class="t-slds t734__leftaligned t734__witharrows" style=""> <div class="t-container_100 t-slds__main"> <div class="t-slds__container"> <div class="t-slds__items-wrapper t-slds_animated-none" data-slider-transition="300" data-slider-with-cycle="true" data-slider-correct-height="true" data-auto-correct-mobile-width="false" data-slider-initialized="true" data-slider-totalslides="2" data-slider-pos="1" data-slider-cycle="" data-slider-animated="" style="width: 0px; transform: translate3d(0px, 0px, 0px); touch-action: pan-y; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); height: 0px;"> <div class="t-slds__item t-slds__item-loaded" data-slide-index="0" style="width: 0px;"> <div class="t734__slds-wrapper t-slds__wrapper" style=""> <div class="t-cover__carrier" data-content-cover-bg="<?php echo $main_name; ?>/index/sridka_01.jpg" style="background-image: url(&#39;<?php echo $main_name; ?>/index/sridka_02.jpg&#39;); height:10vh;"></div> <div class="t-cover__filter" style="height:10vh; background-color:#000;filter: alpha(opacity:0); KHTMLOpacity: 0.0; MozOpacity: 0.0; opacity: 0.0; "></div> <div class="t734__table" style="height:10vh;"> <div class="t-cell t-valign_middle"> <div class="t-container"> <div class="t734__wrapper t-width t-width_8 t-margin_left"> <div class="t734__textwrapper t-align_left"> </div> </div> </div> </div> </div> </div> </div><div class="t-slds__item t-slds__item-loaded t-slds__item_active" data-slide-index="1" style="width: 0px;"> <div class="t734__slds-wrapper t-slds__wrapper" style=""> <div class="t-cover__carrier" data-content-cover-bg="<?php echo $main_name; ?>/index/sridka_03.jpg" style="background-image: url(&#39;<?php echo $main_name; ?>/index/sridka_04.jpg&#39;); height:10vh;"></div> <div class="t-cover__filter" style="height:10vh; background-color:#000;filter: alpha(opacity:0); KHTMLOpacity: 0.0; MozOpacity: 0.0; opacity: 0.0; "></div> <div class="t734__table" style="height:10vh;"> <div class="t-cell t-valign_middle"> <div class="t-container"> <div class="t734__wrapper t-width t-width_8 t-margin_left"> <div class="t734__textwrapper t-align_left"> </div> </div> </div> </div> </div> </div> </div> <div class="t-slds__item  t-slds__item-loaded" data-slide-index="2" style="width: 0px;"> <div class="t734__slds-wrapper t-slds__wrapper" style=""> <div class="t-cover__carrier" data-content-cover-bg="<?php echo $main_name; ?>/index/sridka_01.jpg" style="background-image: url(&#39;<?php echo $main_name; ?>/index/sridka_02.jpg&#39;); height:10vh;"></div> <div class="t-cover__filter" style="height:10vh; background-color:#000;filter: alpha(opacity:0); KHTMLOpacity: 0.0; MozOpacity: 0.0; opacity: 0.0; "></div> <div class="t734__table" style="height:10vh;"> <div class="t-cell t-valign_middle"> <div class="t-container"> <div class="t734__wrapper t-width t-width_8 t-margin_left"> <div class="t734__textwrapper t-align_left"> </div> </div> </div> </div> </div> </div> </div><div class="t-slds__item" data-slide-index="3" style="width: 0px;"> <div class="t734__slds-wrapper t-slds__wrapper" style=""> <div class="t-cover__carrier" data-content-cover-bg="<?php echo $main_name; ?>/index/sridka_03.jpg" style="background-image: url(&#39;<?php echo $main_name; ?>/index/sridka_04.jpg&#39;); height:10vh;"></div> <div class="t-cover__filter" style="height:10vh; background-color:#000;filter: alpha(opacity:0); KHTMLOpacity: 0.0; MozOpacity: 0.0; opacity: 0.0; "></div> <div class="t734__table" style="height:10vh;"> <div class="t-cell t-valign_middle"> <div class="t-container"> <div class="t734__wrapper t-width t-width_8 t-margin_left"> <div class="t734__textwrapper t-align_left"> </div> </div> </div> </div> </div> </div> </div> </div> </div> <div class="t-slds__arrow_container "> <style > #rec60127043 .t-slds__arrow_wrapper:hover .t-slds__arrow-withbg { background-color: rgba() !important; }</style><div class="t-slds__arrow_wrapper t-slds__arrow_wrapper-left" data-slide-direction="left" style="height: 0px;"> <div class="t-slds__arrow t-slds__arrow-left "> <div class="t-slds__arrow_body t-slds__arrow_body-left" style="width: 12px;"> <svg style="display: block" viewBox="0 0 12 24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <desc>Left</desc> <polyline fill="none" stroke="#222" stroke-linejoin="butt" stroke-linecap="butt" stroke-width="0" points="0,0 12,12 0,24"></polyline> </svg> </div> </div></div><div class="t-slds__arrow_wrapper t-slds__arrow_wrapper-right" data-slide-direction="right" style="height: 0px;"> <div class="t-slds__arrow t-slds__arrow-right "> <div class="t-slds__arrow_body t-slds__arrow_body-right" style="width: 12px;"> <svg style="display: block" viewBox="0 0 12 24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <desc>Right</desc> <polyline fill="none" stroke="#222" stroke-linejoin="butt" stroke-linecap="butt" stroke-width="0" points="0,0 12,12 0,24"></polyline> </svg> </div> </div></div> </div> </div> </div></div><script > $(document).ready(function() { t_sldsInit('60127043'); }); $('.t734').bind('displayChanged',function(){ t_slds_updateSlider('60127043'); }); </script><style > #rec60127043 .t-slds__bullet_active .t-slds__bullet_body { background-color: #222 !important; } #rec60127043 .t-slds__bullet:hover .t-slds__bullet_body { background-color: #222 !important; }</style><style>#rec60127043 .t-btn:not(.t-animate_no-hover):hover{ box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1) !important;	}	#rec60127043 .t-btn:not(.t-animate_no-hover){ -webkit-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, border-color 0.2s ease-in-out, box-shadow 0.2s ease-in-out; transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, border-color 0.2s ease-in-out, box-shadow 0.2s ease-in-out;	}</style>

</div>

<div id="rec60128903" class="r t-rec t-screenmin-980px" style=" " data-animationappear="off" data-record-type="46" data-screen-min="980px">
	<!-- cover --><div class="t-cover" id="recorddiv60128903"  style="height:50vh; background-image:url(&#39;<?php echo $main_name; ?>/index/nechto_01.jpg&#39;);">
		<div class="t-cover__carrier loaded" id="coverCarry60128903" data-content-cover-id="60128903" data-content-cover-bg="<?php echo $main_name; ?>/index/kofe_01.jpg" data-content-cover-height="50vh" data-content-cover-parallax="fixed" style="height: 50vh; background-image: url(&quot;<?php echo $main_name; ?>/index/kofe_01.jpg&quot;);" >

		</div> <div class="t-cover__filter" style="height:50vh;background-image: -moz-linear-gradient(top, rgba(0,0,0,0.70), rgba(0,0,0,0.70));background-image: -webkit-linear-gradient(top, rgba(0,0,0,0.70), rgba(0,0,0,0.70));background-image: -o-linear-gradient(top, rgba(0,0,0,0.70), rgba(0,0,0,0.70));background-image: -ms-linear-gradient(top, rgba(0,0,0,0.70), rgba(0,0,0,0.70));background-image: linear-gradient(top, rgba(0,0,0,0.70), rgba(0,0,0,0.70));filter: progid:DXImageTransform.Microsoft.gradient(startColorStr=&#39;#4c000000&#39;, endColorstr=&#39;#4c000000&#39;);"></div> <div class="t-container"> <div class="t-cover__wrapper t-valign_middle" style="height:50vh;">
				<div class="t032"> <div class="t032__wrapper" data-hook-content="covercontent">
						<div class="t032__title t-title t-title_md" style="" >
							<div style="color:#ffffff;" data-customstyle="yes"><h2><a rel="nofollow" href="<?php echo $inst_name; ?>" style="color: rgb(255, 255, 255);"><?php echo $lsidebar[0]['description'];?></a></h2></div></div>
						<div class="t-row"> <div class="t-col t-col_2 t-prefix_5">
								<div class="t032__line" style="background-color:#cc9e05;">

								</div>
							</div> </div>
						<div class="t-row"> <div class="t-col t-col_10 t-prefix_1">
								<div class="t032__descr t-descr t-descr_lg" style="" ><?php echo $lsidebar[0]['text'];?></div> </div>
						</div> <span class="space"></span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


