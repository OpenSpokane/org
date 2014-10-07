<?php


function spl_get_subscriptions() {
	$cat = array(
			 'aaa'=>'<i class="glyphicon glyphicon-star"></i> Featured'
			,'bus'=>'<i class="glyphicon glyphicon-paperclip"></i> Business &amp; Career'
			,'dir'=>'<i class="glyphicon glyphicon-filter"></i> Directories'
			,'gen'=>'<i class="glyphicon glyphicon-user"></i> Genealogy'
			,'ref'=>'<i class="glyphicon glyphicon-globe"></i> General Reference'
			,'fun'=>'<i class="glyphicon glyphicon-usd"></i> Grants &amp; Fundraising'
			,'hom'=>'<i class="glyphicon glyphicon-question-sign"></i> Homework Help'
			,'law'=>'<i class="glyphicon glyphicon-briefcase"></i> Law'
			,'mag'=>'<i class="glyphicon glyphicon-book"></i> Magazines &amp; Newspapers'
			,'rep'=>'<i class="glyphicon glyphicon-wrench"></i> Repair'
			);

	$sub = new stdClass();
	//default
	$sub->id->name = '';
	$sub->id->img = '';
	$sub->id->url = '';
	$sub->id->category = array('');
	$sub->id->description = '

	';
	$sub->id->limit = null;

	//
	$sub->aps->name = 'American Physical Society Journals';
	$sub->aps->img = 'apslogo.gif';
	$sub->aps->url = 'http://publish.aps.org/';
	$sub->aps->category = array('mag');
	$sub->aps->description = '
	Free access to APS journals, including <em>Physics and Reviews of Modern Physics</em> 
	';
	$sub->aps->limit = 'Only accessible through library computers';
	
	//
	$sub->arrc->name = 'Auto Repair Reference Center ';
	$sub->arrc->img = 'arrc_button_150x75.gif';
	$sub->arrc->url = 'http://search.ebscohost.com/login.aspx?authtype=ip,cpid&custid=s8427805&profile=autorefctr';
	$sub->arrc->category = array('rep');
	$sub->arrc->description = '
	Do-it-yourself repair and maintenance information on most major manufacturers of domestic and imported vehicles
	';
	$sub->arrc->limit = null;

	// 
	$sub->bsc->name = 'Business Source Complete (Magazines)';
	$sub->bsc->img = 'bscomplete_button_150x75';
	$sub->bsc->url = 'http://search.ebscohost.com/login.aspx?authtype=ip,cpid&custid=s8427805&profile=ehost&defaultdb=bth';
	$sub->bsc->category = array('aaa','bus','mag');
	$sub->bsc->description = '
	Full-text journals for business, including marketing, management, accounting, and economics, as well as detailed information on public and private companies
	';
	$sub->bsc->limit = null;

	//
	$sub->cg->name = 'CultureGrams Country Fact Sheets';
	$sub->cg->img = 'cgrams.gif';
	$sub->cg->url = 'http://www2.spokanelibrary.org/rpa/webauth.exe?rs=culture';
	$sub->cg->category = array('gen','hom');
	$sub->cg->description = '
	Cultural and geographic fact sheets on countries, U.S. states, and Canadian provinces
	';
	$sub->cg->limit = null;

	//
	$sub->cr->name = 'Cypress Resume';
	$sub->cr->img = 'cr_banner.jpg';
	$sub->cr->url = 'http://www.cypressresume.com/index.php?c=spokanepubliclibrary';
	$sub->cr->category = array('aaa','bus');
	$sub->cr->description = '
	An easy, online way to create a resume, cover letter, or reference sheet
	';
	$sub->cr->limit = null;

	/*
		output
	*/
	$html .= '';

	$html .= "
	<script>
		$('body').on('click', '.spl-database-subjects-trigger', function(e) {
			e.preventDefault();

			$('.spl-database-subjects').hide();
			$('.spl-database-subjects-nav').removeClass('active');
			$(this).closest('.spl-database-subjects-nav').addClass('active');
			$($(this).data('spl-db')).show();
		});
	</script>
	".PHP_EOL;

	$html .= '<div class="panel panel-primary">'.PHP_EOL;
	$html .= '<div class="panel-body">'.PHP_EOL;
	$html .= '<ul class="nav nav-pills">'.PHP_EOL;
	$html .= '
	<li class="spl-database-subjects-nav">
		<a class="spl-database-subjects-trigger" data-spl-db=".spl-database-subjects" href="#"><i class="glyphicon glyphicon-plus-sign"></i> <b>Show All</b> <small>(alphabetical order)</small></a>
	</li>
	<li class="spl-database-subjects-nav active">
		<a class="spl-database-subjects-trigger" data-spl-db=".aaa" href="#"><i class="glyphicon glyphicon-star"></i> <b>Featured</b> <small>(staff picks)</small></a>
	</li>
	';
	foreach ( $cat as $k => $category ) {
		if ( 'aaa' != $k) {
			$html .= '
			<li class="spl-database-subjects-nav">
				<a class="spl-database-subjects-trigger" data-spl-db=".'.$k.'" href="#">'.$category.'</a>
			</li>
			';
		}
	}
	$html .= '</ul>'.PHP_EOL;
	$html .= '</div>'.PHP_EOL;
	$html .= '</div>'.PHP_EOL;

	
	$html .= '<div>'.PHP_EOL;
	foreach ( $sub as $k => $db ) {
		if ( 'id' != $k ) {
			$class = ' ';
			$subjects = null;
			foreach ( $db->category as $subject ) {
				$class .= $subject . ' spl-database-subjects ';
				$class .= ('aaa' == $subject) ? 'collapse in ' : 'collapse ';
				$label = ('aaa' == $subject) ? 'label-info' : 'label-warning';
				$subjects .='<p><span class="label '.$label.'">'.$cat[$subject].'</span></p>';
			}

			$html .= '
			<div class="'.$class.'">
				<a href="'.$db->url.'" class="">
					<h3>'.$db->name.' &rarr;</h3>
				</a>
				<div class="row">
	      	<div class="col-md-3">
	          <a href="'.$db->url.'" class="">
	      			<img src="/assets/img/db/'.$db->img.'" class="img-responsive img-rounded">
	    			</a>

	         </div><!-- /.col -->
	         <div class="col-md-6">
	          <p>
	          	'.$db->description.'
	          </p>
	          <p class="text-danger">
	          	'.$db->limit.'
	          </p>
					</div><!-- /.col -->
					<div class="col-md-3">
	          '.$subjects.'
					</div><!-- /.col -->
	      </div><!-- /.row -->

	      <p class="text-right">
	      	<a class="btn btn-sm btn-default" href="#top">Top &uarr;</a>
	      </p>
	     
	      <hr>
       </div><!-- /.collapse -->
      ';
		}
	}
	$html .= '</div>'.PHP_EOL;	
	echo $html;

	/*
	echo '<pre>';
	print_r($cat);	
	print_r($sub);
	echo '</pre>';
	*/
}

?>

<?php spl_get_subscriptions(); ?>


