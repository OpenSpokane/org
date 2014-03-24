// account.js

var org = {

	// added on script load
	/*
	config: {
						api: { hzws: 'http://api.spokanelibrary.org/v2/request/'
									,oclc: 'http://api.spokanelibrary.org/oclc/'
								 }
					 }
	*/
	// added on authentication
	//user: {}

	// called on script load
	init: function() {
		_self = this;
		
		this.config = ORG.config;

		this.setUser();

		// init ui
		this.initRequestItem();

	} // init()

, setUser: function(user) {
		if ( !ORG.user ) {
			ORG.setUser(user);
		}
		this.user = ORG.user;
}

, initRequestItem: function() {

		//console.log(this.user);

		this.initRequestItemPanels();
		this.initOCLC();

  } // initRequestItem()

, initOCLC: function() {

		// search
		$('body').on('click', '#spl-form-oclc-search', function(e) {
      e.preventDefault();
      _self.oclcSearchKeyword();
    });
    $('body').on('keypress', '#spl-form-search', function(e) {
      // 13 == enter
      if (e.keyCode == 13) {
        e.preventDefault();
        _self.oclcSearchKeyword();
      }
    });

    // pagination
    $('body').on('click', '.paginate-index', function(e) {
      e.preventDefault();
      var start = $(this).data('start-index');
      if ( !$(this).parent('li').hasClass('active') && !$(this).parent('li').hasClass('disabled') ) {
        _self.oclcSearchKeyword(start);
      }
    });

    // select search result
    $('body').on('click', '.oclc-select', function(e) {
      e.preventDefault();

      var bib = {ocn: $(this).data('ocn')
                ,canonical: $(this).data('canonical')
                ,title: $(this).data('title')
                ,author: $(this).data('author')
                ,publisher: $(this).data('publisher')
                ,pubdate: $(this).data('pubdate')
                };
      //console.log(bib);
      _self.oclcSelectBib(bib);
    });


} // initOCLC()

, oclcSelectBib: function() {
		$('#spl-form-title').val(bib.title);
    $('#spl-form-author').val(bib.author);
    $('#spl-form-publisher').val(bib.publisher);
    $('#spl-form-pubdate').val(bib.pubdate);
    $('#spl-form-oclc').val(bib.ocn);
    $('#spl-form-isbn').val(bib.canonical);

}

, oclcSearchKeyword: function(start) {
		
		var tmpl;
		var query = $('#spl-form-search').val();
		var $modal = $('#spl-form-oclc-result');

		if ( !start ) {
      start = 1;
    }

    if ( query ) {
    	tmpl = Handlebars.compile( $('#oclc-search-tmpl').html() );
      $modal.html(tmpl({ term: query })).modal('show');

    	$.ajax({ 
        url: this.config.api.oclc
        ,data: { sru: query // q: $('#spl-form-title').val()
                //,mt: $('#spl-form-material').val()
                ,mt: $('input:radio[name="spl-form[material]"]').val()
                ,index: $('#spl-form-search-index').val()
                ,sort: $('#spl-form-search-sort').val()
                ,start: start
                ,count: 20
                }
      })
      .done(function(results) {
        //console.log(results);
        tmpl = Handlebars.compile( $('#oclc-results-tmpl').html() );
	      $modal.html(tmpl(results));
	    })
      .fail(function() {
      })
      .always(function() {
      });

    }

}

, initRequestItemPanels: function() {
		/*
		$('body').on('change', 'input:radio[name = "spl-form[material]"]', function() {
			var materialTypeDescription = $(this).parent().text();
			console.log(materialTypeDescription);
		});
		*/

		// hide material type selectors and generic request form on select
		$('body').on('show.bs.collapse', '#spl-form-request-panels', function() {
			$('#spl-form-request-panel-choose').collapse('hide');		
		});

		
		// show generic request form when requested
		$('body').on('show.bs.collapse', '.spl-form-request-generic', function() {
			
			if ( $(this).hasClass('spl-form-request-download') ) {
				$('#spl-form-request-submit-item').hide();
				$('#spl-form-request-submit-download').show();
			} else {
				$('#spl-form-request-submit-item').show();
				$('#spl-form-request-submit-download').hide();
			}

			$('#spl-form-panel-request').collapse('show');

		});
		
		// hide generic request form when not requested
		$('body').on('shown.bs.collapse', '.spl-form-request-specific', function() {
			$('#spl-form-panel-request').collapse('hide');
		});

} // initRequestItemPanels

};
