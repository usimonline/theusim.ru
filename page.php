
<!--allrecords-->

<div id="allrecords" class="t-records t-records_animated t-records_visible" data-hook="blocks-collection-content-node" data-tilda-project-id="538753" data-tilda-page-id="3190780" data-tilda-page-alias="main" data-tilda-formskey="3f508fc2ea7d23fde77f4bd2720b21b7" style="overflow-x: hidden;">


	<?php
	require_once ('header.php');
	?>





	<div id="rec62126363" class="r t-rec t-rec_pt_30 t-rec_pb_45 r_showed r_anim" style="padding-top:30px;padding-bottom:45px; " data-record-type="65">
		<!-- T056 -->
		<div class="t056">
			<div class="t-container t-align_center"> <div class="t-col t-col_10 t-prefix_1">
					<div class="t056__title t-name t-name_xl"  style=""><h1><?php echo $page['teme']; ?></h1>
					</div>
					<div class="t056__descr t-text t-text_sm" style=""><h2><?php echo $page['description']; ?></h2></div>
				</div>
			</div>
		</div>
	</div>

	<div id="rec60130109" class="r t-rec t-rec_pt_0 t-rec_pb_0" style="padding-top:0px;padding-bottom:0px; " data-record-type="545">


		<div class="t545">
			<div class="t-container" data-height="70">
				

				<?php echo transform_img($page['text'],$page['url'],$site_url,$page['url_frame']); ?>

			</div>
		</div>
	<script > $(window).resize(function() {	var t545_doResize = $('#rec60130109').data('resize-timeout'); if (t545_doResize) {clearTimeout(t545_doResize)}; t545_doResize = setTimeout(function() { t545_setHeight('60130109'); }, 500); $('#rec60130109').data('resize-timeout', t545_doResize);	}); $(document).ready(function() { setTimeout(function(){ t545_setHeight('60130109'); }, 50); }); $('.t545').bind('displayChanged',function(){ t545_setHeight('60130109'); });
	</script>
	</div>

	<?php
	$url_ext = unserialize($page['url_ext']);
	if($url_ext[0][0] != '') :
	?>

		<div id="rec64327751" class="r t-rec t-rec_pt_30 t-rec_pb_30 r_showed r_anim" style="padding-top:30px;padding-bottom:30px; " data-record-type="375">
		<!-- звезды-->

			<div class="t375">

				<div class="t-container">

					<div class="t-col t-col_12 t-align_center">

					<div class="t375__img"> <svg width="50px" height="11.93px" viewBox="0 0 88 21"> <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g fill="#414042"> <g> <g> <path d="M77.2,20.9 C77.2,20.9 76.3,16.6 73.7,14 C71.1,11.4 66.8,10.5 66.8,10.5 C66.8,10.5 71.1,9.6 73.7,7 C76.3,4.3 77.2,0 77.2,0 C77.2,0 78.1,4.3 80.7,7 C83.3,9.6 87.7,10.5 87.7,10.5 C87.7,10.5 83.4,11.4 80.8,14 C78.1,16.6 77.2,20.9 77.2,20.9 L77.2,20.9 Z" id="Shape"></path> <path d="M44.3,20.9 C44.3,20.9 43.4,16.6 40.8,14 C38.2,11.4 33.9,10.5 33.9,10.5 C33.9,10.5 38.2,9.6 40.8,7 C43.4,4.3 44.3,0 44.3,0 C44.3,0 45.2,4.3 47.8,7 C50.4,9.6 54.8,10.5 54.8,10.5 C54.8,10.5 50.5,11.4 47.9,14 C45.2,16.6 44.3,20.9 44.3,20.9 L44.3,20.9 Z" id="Shape"></path> <path d="M11.1,20.9 C11.1,20.9 10.2,16.6 7.6,14 C5,11.4 0.7,10.5 0.7,10.5 C0.7,10.5 5,9.6 7.6,7 C10.1,4.3 11.1,0 11.1,0 C11.1,0 12,4.3 14.6,7 C17.2,9.6 21.6,10.5 21.6,10.5 C21.6,10.5 17.3,11.4 14.7,14 C12,16.6 11.1,20.9 11.1,20.9 L11.1,20.9 Z" id="Shape"></path> </g> </g> </g> </g> </svg>

					</div>

					</div>

				</div>

			</div>

		</div>





		<!-- две вертикальны колонки-->

		<div id="rec64327773" class="r t-rec t-rec_pt_15 t-rec_pb_0 r_showed r_anim" style="padding-top:15px;padding-bottom:0px; " data-record-type="812">
		<!-- t812 -->

			<div class="t812">


				<div class="t-container">



					<div class="t812__col t-col t-col_6 ">


						<?php foreach($url_ext as $key => $value) :

							if ($key%2 == 0 and $value[0] != '') : ?>


								<div class="t812__pricelist-item ">

									<div class="t812__pricelist-item__row_1 t-row">

										<div class="t812__pricelist-item__title t-name t-name_sm"  style="text-transform:uppercase;"><?php echo $value[0]; ?></div>

										<div class="t812__pricelist-item__price t-name t-name_sm"  style=""><?php echo $value[1]; ?></div>

									</div>

									<div class="t812__pricelist-item__line" style="opacity:0.9;">


									</div>

								</div>


							<?php endif;

						endforeach; ?>





					</div>


					<?php if ($url_ext[1][0] != '' ) : ?>
					<div class="t812__col t-col t-col_6 ">

						<?php foreach($url_ext as $key => $value) :

							if ($key%2 == 1 and $value[0] != '' ) : ?>


								<div class="t812__pricelist-item ">

									<div class="t812__pricelist-item__row_1 t-row">

										<div class="t812__pricelist-item__title t-name t-name_sm"  style="text-transform:uppercase;"><?php echo $value[0]; ?></div>

										<div class="t812__pricelist-item__price t-name t-name_sm"  style=""><?php echo $value[1]; ?></div>

									</div>

									<div class="t812__pricelist-item__line" style="opacity:0.9;">


									</div>

								</div>


							<?php endif;

						endforeach; ?>

					</div>
					<?php endif; ?>

				</div>
			</div>
		</div>



		<style>#rec64327773 .t812__col:first-child {	;
			}
			@media screen and (max-width: 960px){ #rec64327773 .t812__col:first-child {	margin-bottom: 30px;; }
			}
		</style>

	</div>
	<?php endif; ?>
	

	



