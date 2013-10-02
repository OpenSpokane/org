// Global configuration
var config = { 
      api: { endpoint: 'http://api.spokanelibrary.org/v2/'
            ,novelistApi: 'http://novselect.ebscohost.com/Data/ContentByQuery'
           }
}

// Modified http://paulirish.com/2009/markup-based-unobtrusive-comprehensive-dom-ready-execution/
// Only fires on body class (working off strictly WordPress body_class)

var ORG = {
  // All pages
  common: {
    init: function() {
      MBP.hideUrlBarOnLoad();


      // trigger tabs from alternate links
      $('body').on('click', '[data-toggle="tab"]', function(e) {
        $('a[href='+$(this).attr('href')+']').tab('show');
      });
      

      // Ajax defaults[
      $.ajaxSetup({
         type: 'POST'
        ,dataType: 'json'
        ,dataType: 'jsonp'
        ,jsonp: 'callback'
        /*
        ,complete: function(obj) {
          console.log( $.parseJSON(obj.responseText) );
        }
        */
      });

      


    },
    finalize: function() {
      $('body').tooltip({
        selector: 'a[rel=tooltip]'
      });
    }
  }
, home: {
    init: function() {
      //console.log(config);
    }
  }
, search : {

    init: function() {

      $('body').on('click', '.syndetics-summary-trigger', function(e) {
        e.preventDefault();
        //console.log( $(this).data('isbn') );
        loadSyndeticsData($(this).data('isbn'));
        $(this).hide();
        $('#syndetics-summary-'+$(this).data('isbn')).hide().html('Loading Summary&hellip;').fadeIn();
      });

      function loadSyndeticsData(isbn){
        
        if ( isbn ) {
          $.ajax({ 
            url: 'http://beta.spokanelibrary.org/checkin/api/syndetics.php'
            ,data: { isbn: isbn }
          })
          .done(function(data) {
            parseSyndeticsData(data, isbn);
          })
          .fail(function() { 
          })
          .always(function() {  
          });
        } 
        
      };

      function parseSyndeticsData(data, isbn) {
        console.log(data);
        //$('#syndetics-summary-'+isbn).html('We have a summary');
        $summary = $('#syndetics-summary-'+isbn);
        tmpl = Handlebars.compile( $("#syndetics-summary-tmpl").html() );
        $summary.html( tmpl({syndetics:data}) );

        /*
        $summary = $('#syndetics-summary');
        tmpl = Handlebars.compile( $("#summary-tmpl").html() );
        $summary.html( tmpl(data) );
        
        $review = $('#syndetics-review');
        tmpl = Handlebars.compile( $("#review-tmpl").html() );
        $review.html( tmpl(data) );  
        
        $author = $('#syndetics-author');
        tmpl = Handlebars.compile( $("#author-tmpl").html() );
        $author.html( tmpl(data) );  
        */
      };

      /*
      var isbn =  '0375857184';
      $.ajax( { 
          url: config.api.novelistApi
          ,crossDomain: true
          ,data: { profile: 's8427805.main.novsel'
                  ,password: 'dGJyMOPY8UivprQA'
                  ,version: '2.1'
                  ,ISBN: isbn
                  ,ClientIdentifier: isbn
                  }
        } )
        .done(function(novelist) {
          // store data locally
          //item.novelist = novelist;
          //parseNovelistData(item.novelist);
          //console.log(novelist);
        })
        .fail(function() {
          //parseNovelistData(null);
        })
        .always(function() {  
        });
      */

    }

}
, account: {
    init: function() {
      
      Modernizr.load([
        {
          load: ['../assets/js/org/account.js'
                ,'../assets/js/vendor/jquery.validate.js'
                ,'../assets/js/vendor/bootstrap-datepicker.js' ],
          complete: function () {
            if ( org ) { 
              org.init();
            } 
          }
        }
      ]);

    }
  }
};







var UTIL = {
  fire: function(func, funcname, args) {
    var namespace = ORG;
    funcname = (funcname === undefined) ? 'init' : funcname;
    if (func !== '' && namespace[func] && typeof namespace[func][funcname] === 'function') {
      namespace[func][funcname](args);
    }
  },
  loadEvents: function() {

    UTIL.fire('common');

    $.each(document.body.className.replace(/-/g, '_').split(/\s+/),function(i,classnm) {
      UTIL.fire(classnm);
    });

    UTIL.fire('common', 'finalize');
  }
};

// https://github.com/h5bp/html5-boilerplate/blob/master/js/plugins.js
// Avoid `console` errors in browsers that lack a console.
(function() {
    var method;
    var noop = function () {};
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop;
        }
    }
}());

$(document).ready(UTIL.loadEvents);
