<?php
$output .= '
			
			<style type="text/css">
			/* EXTERNAL CSS FILE */
			.rd-col-xs-1, .rd-col-sm-1, .rd-col-md-1, .rd-col-lg-1, .rd-col-xs-2, .rd-col-sm-2, .rd-col-md-2, .rd-col-lg-2, .rd-col-xs-3, .rd-col-sm-3, .rd-col-md-3, .rd-col-lg-3, .rd-col-xs-4, .rd-col-sm-4, .rd-col-md-4, .rd-col-lg-4, .rd-col-xs-5, .rd-col-sm-5, .rd-col-md-5, .rd-col-lg-5, .rd-col-xs-6, .rd-col-sm-6, .rd-col-md-6, .rd-col-lg-6, .rd-col-xs-7, .rd-col-sm-7, .rd-col-md-7, .rd-col-lg-7, .rd-col-xs-8, .rd-col-sm-8, .rd-col-md-8, .rd-col-lg-8, .rd-col-xs-9, .rd-col-sm-9, .rd-col-md-9, .rd-col-lg-9, .rd-col-xs-10, .rd-col-sm-10, .rd-col-md-10, .rd-col-lg-10, .rd-col-xs-11, .rd-col-sm-11, .rd-col-md-11, .rd-col-lg-11, .rd-col-xs-12, .rd-col-sm-12, .rd-col-md-12, .rd-col-lg-12 
			{
				margin-right: ' . $space_between_items . 'px;
				margin-bottom: 30px;
			}
			
			
			@media screen and (max-width: 1600px) and (min-width: 960px) {
			/* SQUARE EFFECTS CSS */
				.rd-col-lg-4 {
				  height: ' . $img_height_width . 'px;
				  width: ' . $img_height_width . 'px;
				}
				
			/* CIRCLE EFFECTS CSS */
				.item-hover.circle {
				  height: ' . $img_height_width . 'px;
				  width: ' . $img_height_width . 'px;
				}
				.item-hover.circle.effect1 .spinner {
					  height: ' . $img_height_width . 'px;
					  width: ' . $img_height_width . 'px;
					}
					.item-hover.circle .img {
						  height: ' . $img_height_width . 'px;
						  width: ' . $img_height_width . 'px;
						}
				.item-hover img {
				  height: ' . $img_height_width . 'px;
				  width: ' . $img_height_width . 'px;
				}
																
			}
			@media screen and (max-width: 959px) and (min-width: 768px) {
				
				/* SQUARE EFFECTS CSS */
				.rd-col-lg-4 {
				  height: ' . $img768_height_width . 'px;
				  width: ' . $img768_height_width . 'px;
				}
				
				/* CIRCLE EFFECTS CSS */
				.item-hover.circle {
				  height: ' . $img768_height_width . 'px;
				  width: ' . $img768_height_width . 'px;
				}
				.item-hover.circle.effect1 .spinner {
					  height: ' . $img768_height_width . 'px;
					  width: ' . $img768_height_width . 'px;
					}
					
				.item-hover.circle .img {
						  height: ' . $img768_height_width . 'px;
						  width: ' . $img768_height_width . 'px;
						}
				.item-hover img {
				  height: ' . $img768_height_width . 'px;
				  width: ' . $img768_height_width . 'px;
				}
						
				}
			@media screen and (max-width: 768px) and (min-width: 100px) {
				
				/* SQUARE EFFECTS CSS */
				.rd-col-xs-12 {
				  padding: 0;
				}
				#style1 ul, #style2 ul, #style3 ul, #style4 ul, #style5 ul, #style6 ul, #style7 ul, #style8 ul, #style9 ul, #style10 ul, #style11 ul, #style12 ul, #style13 ul, #style14 ul, #style15 ul, #style16 ul, #style17 ul, #style18 ul, #style19 ul, #style20 ul, #style21 ul, #style22 ul, #style23 ul, #style24 ul, #style25 ul, #style26 ul, #style27 ul, #style28 ul, #style29 ul, #style30 ul, #style31 ul, #style32 ul, #style33 ul, #style34 ul, #style35 ul {
					  text-align: center;
					}
						
				}	
			</style>	
			';