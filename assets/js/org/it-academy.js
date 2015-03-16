// account.js

var org = {
	
	// added on authentication
  user: {}

	// called on script load
,	init: function() {

		_self = this;
		
		this.config = ORG.config;

		this.setUser();

		// init ui
		//this.initITAcademy();

	} // init()

, setUser: function(user) {
    if ( !ORG.user ) {
			ORG.setUser(user);
		}
		this.user = ORG.user;

    // Reparse links on login
    this.initITAcademy();
}

, initITAcademy: function() {
    var netSrc = $('#spl-network-source').data('source');
    //netSrc = 'external';
    //netSrc = 'es';

    var location;
    if ( 'external' == netSrc && this.user  ) {
      location = this.user.locationID;
    } else {
      location = netSrc;
    }

    // sign in no longer required. 
    // fallback to dt.
    if ( 'external' == location ) {
      location = 'dt';
    }

    if ( 'external' != location ) {
      $.ajax( { 
          url: _self.config.api.msit
          ,crossDomain: true
          ,data: { params: {
                            location: location
                    }
                  }
        } )
        .done(function(data) {
          _self.parseITAcademyLinks('auth', data);
        })
        .fail(function() {
          //parseNovelistData(null);
        })
        .always(function() {  
        });
    } else {
      this.parseITAcademyLinks('login');
    }


  } // initITAcademy()

, parseITAcademyLinks: function(mode, codes) {
    console.log(codes);
    var msit = { codes:codes };
    msit.login = false;

    if ( 'login' == mode ) {
      msit.login = true;
    }

    $tmpl = $('#spl-it-academy-links');
    tmpl = Handlebars.compile( $('#spl-it-academy-link-tmpl').html() );
    $tmpl.html( tmpl({msit:msit}) );
  }

};
