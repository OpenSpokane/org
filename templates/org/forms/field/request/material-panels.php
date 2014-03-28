<div class="panel-group" id="spl-form-request-panels" style="margin:0; padding:0">
  <div class="panel" style="border:none; box-shadow:none; margin:0; padding:0;">

    <div class="panel-collapse collapse spl-form-request spl-form-request-generic"
          id="spl-form-panel-request-book">
      <p>
        <button type="button" 
                class="btn btn-lg btn-block btn-primary"
                data-toggle="collapse"
                data-target="#spl-form-request-panel-choose">
                <i class="glyphicon glyphicon-book"></i> 
                Book
                </button>
      </p>
    </div><!-- /.collapse -->

    <div class="panel-collapse collapse spl-form-request"
          id="spl-form-panel-request-cd-audio-book">
      <p>
        <button type="button" 
                class="btn btn-lg btn-block btn-primary"
                data-toggle="collapse"
                data-target="#spl-form-request-panel-choose">
                <i class="glyphicon glyphicon-volume-up"></i>
                Book on CD
                </button>
      </p>
    </div><!-- /.collapse -->

    <div class="panel-collapse collapse spl-form-request"
          id="spl-form-panel-request-ebook">
      <p>
        <button type="button" 
                class="btn btn-lg btn-block btn-primary"
                data-toggle="collapse"
                data-target="#spl-form-request-panel-choose">
                <i class="glyphicon glyphicon-phone"></i>
                ebook
                </button>
      </p>
    </div><!-- /.collapse -->

    <div class="panel-collapse collapse spl-form-request"
          id="spl-form-panel-request-dl-audio-book">
      <p>
        <button type="button" 
                class="btn btn-lg btn-block btn-primary"
                data-toggle="collapse"
                data-target="#spl-form-request-panel-choose">
                <i class="glyphicon glyphicon-headphones"></i>
                Audio Book <small>(download)</small>
                </button>
      </p>
    </div><!-- /.collapse -->

    <div class="panel-collapse collapse spl-form-request"
          id="spl-form-panel-request-cd">
      <p>
        <button type="button" 
                class="btn btn-lg btn-block btn-primary"
                data-toggle="collapse"
                data-target="#spl-form-request-panel-choose">
                <i class="glyphicon glyphicon-music"></i> 
                Music CD
                </button>
      </p>
    </div><!-- /.collapse -->

    <div class="panel-collapse collapse spl-form-request"
          id="spl-form-panel-request-dvd">
      <p>
        <button type="button" 
                class="btn btn-lg btn-block btn-primary"
                data-toggle="collapse"
                data-target="#spl-form-request-panel-choose">
                <i class="glyphicon glyphicon-film"></i> 
                DVD
                </button>
      </p>
    </div><!-- /.collapse -->

    <div class="panel-collapse collapse spl-form-request"
          id="spl-form-panel-request-other">
      <p>
        <button type="button" 
                class="btn btn-lg btn-block btn-primary"
                data-toggle="collapse"
                data-target="#spl-form-request-panel-choose">
                <i class="glyphicon glyphicon-pencil"></i> 
                Other <small>(specify below)</small>
                </button>
      </p>
    </div><!-- /.collapse -->

    <div class="panel-collapse collapse spl-form-request"
          id="spl-form-panel-request-genealogy">
      <p>
        <button type="button" 
                class="btn btn-lg btn-block btn-default"
                data-toggle="collapse"
                data-target="#spl-form-request-panel-choose">
                Genealogy <small>(research copies)</small>
                </button>
      </p>
    </div><!-- /.collapse -->

    <div class="panel-collapse collapse spl-form-request"
          id="spl-form-panel-request-page-copy">
      <p>
        <button type="button" 
                class="btn btn-lg btn-block btn-default"
                data-toggle="collapse"
                data-target="#spl-form-request-panel-choose">
                Newspaper <small>(microfilm)</small>
                </button>
      </p>
    </div><!-- /.collapse -->

    <div class="panel-collapse collapse spl-form-request"
          id="spl-form-panel-request-periodical">
      <p>
        <button type="button" 
                class="btn btn-lg btn-block btn-default"
                data-toggle="collapse"
                data-target="#spl-form-request-panel-choose">
                Magazine <small>or</small> Journal
                </button>
      </p>
    </div><!-- /.collapse -->

  </div><!-- /.panel - required here for bs3 -->
</div><!-- /.panel-group -->

<!-- tmpl target: request -->
<div id="spl-form-panel-request"></div>

<div class="modal fade" id="spl-ill-policy" tabindex="-1" role="dialog" aria-labelledby="spl-ill-policy-title" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h3 class="modal-title" id="spl-ill-policy-title">Interlibary Loan Policy</h3>
      </div>
      <div class="modal-body">
        <?php include 'material-request-ill-policy.php'; ?>
      </div>
      <div class="modal-footer">
        <button type="button" id="spl-ill-policy-reject" class="btn btn-default pull-left" data-dismiss="modal">
          No, I don't agree
        </button>
        <button type="button" id="spl-ill-policy-accept" class="btn btn-primary" data-dismiss="modal">
          Yes, I agree
        </button>
      </div>
    </div>
  </div>
</div>

<!-- tmpl target: oclc modal -->
<div class="modal fade" id="spl-form-oclc-result" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
</div><!-- /.modal -->

<!-- tmpl: request -->
<script id="spl-form-panel-request-tmpl" type="text/x-handlebars-template">
{{#if genealogy}}
  <?php include 'material-panel-genealogy.php'; ?>
{{/if}}

{{#if newspaper}}
<?php include 'material-panel-newspaper.php'; ?>
{{/if}}

{{#if periodical}}
<?php include 'material-panel-periodical.php'; ?>
{{/if}}

<?php include 'material-panel-title.php'; ?>
<?php include 'material-panel-author.php'; ?>

{{#if content}}
  <?php include 'material-panel-url.php'; ?>
  <?php include 'material-panel-search.php'; ?>
  <?php include 'material-panel-message.php'; ?>
  <div class="row">
    <div class="col-sm-8 col-md-9 col-sm-offset-4 col-md-offset-3">
      <p>
        Any additional information you can provide will help us expedite your request:
      </p>
      <?php include 'material-panel-pub.php'; ?>
      <?php include 'material-panel-identify.php'; ?>
      <?php include 'material-panel-describe.php'; ?>
    </div><!-- /.col -->
  </div><!-- /.row -->
{{else}}
  <div class="row">
    <div class="col-sm-8 col-md-9 col-sm-offset-4 col-md-offset-3">
      <?php include 'material-panel-pub-ill.php'; ?>
      <?php include 'material-panel-identify-ill.php'; ?>
    </div><!-- /.col -->
  </div><!-- /.row -->
  <?php include 'material-panel-message-ill.php'; ?>
{{/if}}

<fieldset>
  <legend class="text-muted">
    <i class="glyphicon glyphicon-check"></i>
    Finalize this request:
  </legend>

  {{#unless download}}
    <!-- hold -->
    <div class="form-group">
      <label for="spl-form-hold-confirm" class="col-sm-4 col-md-3 control-label">Hold Request</label>
      <div class="col-sm-8 col-md-9">
        <div class="checkbox">
          <label>
            <input type="checkbox" class="" id="spl-form-hold-confirm" name="spl-form[hold]" checked>
            Please place a Hold Request for me 
          </label>
          <span class="help-block">
            If we purchase this title we will place a Hold Request on your account. 
          </span>
        </div><!-- /.checkbox -->
      </div>
    </div><!-- /.form-group -->

    <!-- ill -->
    {{#if user.ill}}
      {{#unless ill}}
      <!-- ill-request -->
      <div class="form-group">
        <label for="spl-form-ill-confirm" class="col-sm-4 col-md-3 control-label">ILL Request</label>
        <div class="col-sm-8 col-md-9">
          <div class="checkbox">
            <label>
              <input type="checkbox" class="" id="spl-form-ill-confirm" name="spl-form[ill]">
              Please check Interlibray Loan for me 
            </label>
            <span class="help-block">
              If we are do not purchase this title for some reason, we will make an Interlibrary Loan Request.
            </span>
          </div><!-- /.checkbox -->
        </div>
      </div><!-- /.form-group -->
      {{else}}
      <!-- ill-only -->
      <div class="form-group">
        <label for="spl-form-ill-confirm" class="col-sm-4 col-md-3 control-label">ILL Policy</label>
        <div class="col-sm-8 col-md-9">
          <div class="checkbox">
            <label>
              <input type="checkbox" class="" id="spl-form-ill-confirm" name="spl-form[ill]">
              I agree
            </label>
            <span class="help-block">
              The type of material you are requesting is only available through Interlibrary Loan.
              <br>
              We will place a hold on your account when this material becomes available. 
            </span>
          </div><!-- /.checkbox -->
        </div>
      </div><!-- /.form-group -->
      {{/unless}}
      <!-- ill-policy -->
      <div class="form-group">
        <div class="col-sm-8 col-md-9 col-sm-offset-4 col-md-offset-3">
          <div class="alert alert-warning">
            <p>
              <i class="glyphicon glyphicon-exclamation-sign"></i>
              By checking the box above you confirm that you have read and agree to our ILL Policy.
            </p>
            <p>
              <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#spl-ill-policy">
                <i class="glyphicon glyphicon-folder-open"></i>&nbsp;
                Interlibrary Loan Policy
              </button>
            </p>
          </div>
        </div>
      </div><!-- /.form-group -->
    {{/if}}
  {{/unless}}

  <!-- submit -->
  <div class="form-group">
    <div class="col-sm-8 col-md-9 col-sm-offset-4 col-md-offset-3">
      <button type="submit" class="btn btn-block btn-success">
        <small class="glyphicon glyphicon-check"></small>
        Request Now &rarr;
      </button>
    </div>
  </div>  

</fieldset>

</script>

<!-- tmpl: oclc search loading -->
<script id="oclc-search-tmpl" type="text/x-handlebars-template">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      <h4 class="modal-title">
        <i class="glyphicon glyphicon-search"></i>
        WorldCat Search
      </h4>
    </div>
    <div class="modal-body">
      <p class="lead">
        <img src="/assets/img/ajax-loader.gif">
        Please wait&hellip;
      </p>
      <p>
        Search Term: <em>{{term}}</em>
      </p>
    </div>
  </div>
</div>
</script>

<!-- tmpl: oclc search results -->
<script id="oclc-results-tmpl" type="text/x-handlebars-template">
<div class="modal-dialog">
  <div class="modal-content">
  {{#unless entry}}
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      <h3 class="modal-title text-danger">
        <i class="glyphicon glyphicon-exclamation-sign"></i>
        No results found
      </h3>
    </div>
    <div class="modal-body">
      <p class="lead">
        Maybe try another search?
      </p>  
      <p>
        If you are not having any luck using this search tool just fill out whatever you know about the title you are looking for.
        We apologize for the inconvenience.
      </p>
    </div>
    <div class="modal-footer">
      <p class="text-center">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </p>
    </div>
  {{else}}
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      <h3 class="modal-title">{{title}}: <small>{{totalResults}} <em>results for</em> {{subtitle}}</small></h3>
    </div>
    <div class="modal-body">
      <p>
        Press the <span class="text-success"><i class="glyphicon glyphicon-check"></i> <strong>Select</strong></span> button to choose a title.
      </p>
      <p>
        <a class="prevent-default" data-toggle="collapse" href="#" data-target="#oclc-explain">
          What if I am not sure or the title appears more than once? 
        </a>
      </p>        
      <div id="oclc-explain" class="collapse">
        <p>
          No problem! 
          If you don't see what you're looking for <a href="#" data-dismiss="modal"><strong>close</strong></a> this dialog window and you can fill in the details you know or search for something else.
        </p>
        <p>
          If you find a title with multiple entries just pick one.
          Tell us what you know.
          We can take it from there.
        </p>
      </div>

      {{#each entry}}
      <div class="panel panel-primary" style="border-left-width:5px;">
        <div class="panel-body">
          <p class="lead">{{title}} 
            {{#if subtitle}}<small class="text-muted">{{subtitle}}</small>{{/if}}
          </p>
          <div class='row'>
            <div class="col-sm-8">
              
              <p>
                <strong>{{author}}</strong>
              </p>

              <p>
                <button type="button" class="btn btn-success oclc-select" 
                    data-dismiss="modal" 
                    data-ocn="{{oclc}}"
                    data-canonical="{{canonical}}" 
                    data-title="{{title}}" 
                    data-author="{{author}}"
                    data-publisher="{{publisher}}"
                    data-pubdate="{{pubdate}}" 
                    >
                  <i class="glyphicon glyphicon-check"></i> 
                  Select
                </button>
              </p>

              <p>
                {{#if publisher}}
                  {{publisher}}
                  <br />
                {{/if}}

                {{#if format}}
                  <em>{{format}}</em>
                {{/if}}
              </p>

              {{#if language}}
                <p>    
                  <small>{{language}}</small>
                </p>
              {{/if}}

              {{#if summary}}
                <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#summary-{{oclc}}">
                  <span class="caret"></span>
                  Read Summary&hellip;  
                </button>
              {{/if}}

            </div>
            <div class="col-sm-4">
              {{#if canonical}}
              <img class="img-responsive img-rounded" style="max-height:120px; margin:auto;" alt="Cover Image" src="http://contentcafe2.btol.com/ContentCafe/jacket.aspx?UserID=ebsco-test&Password=ebsco-test&Return=T&Type=S&Value={{canonical}}">
              {{/if}}
            </div>
          </div>
          
          {{#if summary}}
            <div id="summary-{{oclc}}" class="collapse">
              <p>
              {{summary}}
              </p>
            </div>
          {{/if}}

        </div>
      </div>
      {{/each}}
    </div>
    <div class="modal-footer">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      <div class="text-center">
        <ul class="pagination" style="margin:0;">
          <li {{#compare startIndex 1}}class="disabled"{{/compare}}>
            <a class="paginate-index" data-start-index="{{subtract startIndex 1}}" href="#">&larr; Prev <span class="hidden-xs">{{itemsPerPage}}</span></a>
          </li>
          <li class="active">
            <a class="paginate-index" data-start-index="{{startIndex}}" href="#"><span class="hidden-xs">Page</span> {{startIndex}}</a>
          </li>
          <li>
            <a class="paginate-index" data-start-index="{{add startIndex 1}}" href="#">Next <span class="hidden-xs">{{itemsPerPage}}</span> &rarr;</a>
          </li>
        </ul>
      </div>
    </div>
  {{/unless}}
  </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</script>
