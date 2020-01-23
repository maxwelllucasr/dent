<?php
/* ------------------------------------------------------------------------- *
 * 	Rugged 
 *  Accessibility		Version		 1.0.0
/* ------------------------------------------------------------------------- */	
?>
<div class="accessibility-options" id="accessibility__options" universal_="true">
	
	<icon svg="0" class="access-button open-button icon-access"  title="Open the accessibility options menu" tabindex="0" role="button" aria-pressed="true" aria-expanded="true" aria-controls="accessibility__options__menu">
		<svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" viewBox="0 0 200 200">
			<g id="Group_1" data-name="Group 1" transform="translate(-922 -426)">
				<circle id="Ellipse_1" data-name="Ellipse 1" cx="100" cy="100" r="100" transform="translate(922 426)" fill="#008ebd"/>
				<path id="Path_1" data-name="Path 1" d="M-312.923-127.112a10.536,10.536,0,0,1,10.536,10.536,10.536,10.536,0,0,1-10.536,10.536,10.536,10.536,0,0,1-10.536-10.536h0A10.574,10.574,0,0,1-312.923-127.112Zm45.731,34.083-31.383,3.937v31.421l15.21,50.631A5.9,5.9,0,0,1-287.606.144l-.058.015A5.837,5.837,0,0,1-294.775-3.7L-310.448-50.06h-4.774L-329.571-2.9A5.874,5.874,0,0,1-337.159.477l-.111-.044a6.137,6.137,0,0,1-3.7-7.736L-327.8-57.071V-89.092l-28.921-3.937a5.237,5.237,0,0,1-4.789-5.649q.006-.075.014-.15a5.474,5.474,0,0,1,5.912-4.937l35.12,3h15.41l37.42-3A5.41,5.41,0,0,1-262-98.578a5.41,5.41,0,0,1-5.187,5.624Z" transform="translate(1333.524 589.112)" fill="#fff"/>
			</g>
		</svg>
	</icon>
	<ul id="accessibility__options__menu" aria-hidden="false">
		<li>
			<button data-action="content" aria-label=" Skip to Content">
				<icon svg="1">
					<i class="fas fa-file-alt" aria-hidden="true"></i>
				</icon> Skip to Content
			</button>
		</li>
		<li>
			<button data-action="content-only" aria-label=" Content Only">
				<icon svg="1">
				<i class="fas fa-font" aria-hidden="true"></i>
				</icon> Content Only
			</button>
		</li>
		<li>
			<button data-action="contrast" aria-label=" High Contrast">
				<icon svg="1">
				<i class="fas fa-adjust" aria-hidden="true"></i>
				</icon> High Contrast
			</button>
		</li>
		<li>
			<button data-action="increase" aria-label=" Increase Text Size">
				<icon svg="1">
				<i class="fas fa-text-height" aria-hidden="true"></i>
				</icon> Increase Text Size
			</button>
		</li>
		<li>
			<button data-action="clear" aria-label=" Clear All">
				<icon svg="1">
				<i class="fas fa-redo-alt" aria-hidden="true"></i>
				</icon> Clear All
			</button>
		</li>
		<li class="access-close">
			<button data-action="close" aria-label=" Close">
				<icon svg="1">
				<i class="fas fa-times" aria-hidden="true"></i>
				</icon>
			</button>
		</li>
	</ul>
	<icon svg="57653" class="access-button close-button icon-access" title="Close the accessibility options menu" tabindex="0" role="button" aria-pressed="true" aria-expanded="true" aria-controls="AccessOptionsMenu">
		<i class="fas fa-times" aria-hidden="true"></i>
	</icon>
</div>