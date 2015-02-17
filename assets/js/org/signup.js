// signup.js

var org = {
	
	// added on authentication
  user: {}

	// called on script load
,	init: function() {

		_self = this;
		
		this.config = ORG.config;

		//this.setUser();

		// init ui
		this.initSignup();

	} // init()

, setUser: function(user) {
    if ( !ORG.user ) {
			ORG.setUser(user);
		}
		this.user = ORG.user;

    //this.initSignup();
}

, initSignup: function() {
    var netSrc = $('#spl-network-source').data('source');
    //console.log(netSrc);

    this.initEventHandlers();

  } // initSignup()

, initEventHandlers: function() {
    $('button').attr('disabled', false);

    $('body').on('blur', '#spl-form-birthdate', function(e) {
      _self.normalizeBirthdate( $(this).attr('id'), $(this).val() );
    });

    $('body').on('blur', '.spl-signup-address', function(e) {
      _self.normalizeAddress('address');
    });

    $('body').on('blur', '.spl-signup-address-alt', function(e) {
      _self.normalizeAddress('alt');
    });

    /*
    $('body').on('click', '.spl-card-type-select', function(e) {
      $('#spl-signup-card-type').collapse('hide');
      $('#spl-signup-adult').collapse('show');
      history.pushState(null, null, '/signup/');
      e.preventDefault();
    });
    */
  }

, normalizeAddress: function(fieldset) {
    if ( fieldset ) {
      switch ( fieldset ) {
        case 'address':
          $street = $('#spl-form-street');
          $city = $('#spl-form-city');
          $state = $('#spl-form-state');
          $zip = $('#spl-form-zip');
          break;
        case 'alt':
          $street = $('#spl-form-street-alt');
          $city = $('#spl-form-city-alt');
          $state = $('#spl-form-state-alt');
          $zip = $('#spl-form-zip-alt');
          break;
      }

      var address = {};
      address.street = $street.val();
      address.city = $city.val();
      address.state = $state.val();
      address.zip = $zip.val();

      if ( address.street && address.city && address.state && address.zip ) {
        $.ajax( { 
          url: _self.config.api.v2 + '/address/verify'
          ,crossDomain: true
          ,data: { params: {
                            address: address
                    }
                  }
        } )
        .done(function(data) {
          console.log(data);
        })
        .fail(function() {
        })
        .always(function() {  
        });
      }
    } 
}

, normalizeBirthdate: function(id, birthdate) {
    //console.log();
    if ( id && birthdate ) {
      $.ajax( { 
        url: _self.config.api.v2 + '/birthdate/normalize'
        ,crossDomain: true
        ,data: { params: {
                          birthdate: birthdate
                  }
                }
      } )
      .done(function(data) {
        //console.log(data);
        $('#'+id).val(data);
      })
      .fail(function() {
      })
      .always(function() {  
      });
    }
    
}

};
